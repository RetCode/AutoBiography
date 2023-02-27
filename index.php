<?php

    require_once "db.php";

    $result = $mysqli->query("SELECT * FROM namecar ORDER BY name");
    $nameCar = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT model FROM modelcar ORDER BY model");
    $modelCar = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM engonetype");
    $engineType = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM bodyname");
    $bodyCar = $result->fetch_all(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoBiography</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/MainPage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="public/js/MainPage.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>    
    <div class="content_page">
        <div class="container maincont">
            <div class="main">
                <p class="filter_text">Найти интересующий вас автомобиль по заданным фильтрам</p>
                <div class="filter">                    
                    <select id="mark" class="filter_select">
                        <option selected value="0">Марка</option>
                        <?php 
                        
                            foreach($nameCar as $car)
                            {
                                echo '<option value="'.$car["id"].'">'.$car["name"].'</option>';
                            }

                        ?>
                    </select>
                    <select id="model" class="filter_select">
                        <option selected value="0">Модель</option>

                    </select>
                    <select id="enginetype" class="filter_select">
                        <option selected value="0">Тип двигателя</option>
                        <?php 
                        
                            foreach($engineType as $engine)
                            {
                                echo '<option value="'.$engine["id"].'">'.$engine["engine"].'</option>';
                            }

                        ?>
                    </select>
                    <select id="bodytype" class="filter_select">
                        <option selected value="0">Тип кузова</option>                        
                        <?php 
                        
                            foreach($bodyCar as $body)
                            {
                                echo '<option value="'.$body["id"].'">'.$body["body"].'</option>';
                            }

                        ?>
                    </select>
                    <a id="query" href="SearchPage.php"><button class="search" id="searchid">Поиск</button></a>           
                </div>                
                <div class="show_early">
                    <p class="show_early-text">Ваши последние 9 просмотренных автомобилей</p>
                    <div class="car-box">
                        <a class="show_early-car" href="#"><img src="./public/img/car-10.png" class="carblock"/><br>Audi A6 C6 2.0TDI</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-11.png" class="carblock"/><br>BMW X5 E70 3.0i</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-12.png" class="carblock"/><br>BMW X5M G05</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-15.png" class="carblock"/><br>Dodge Challenger SRT HellCat</a>
                        <a class="show_early-car" href="CarPage.php"><img src="./public/img/car-7.png" class="carblock"/><br>BMW 530i E60</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-13.png" class="carblock"/><br>BMW 520d E39</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-14.png" class="carblock"/><br>Audi A4 B6 1.9TDI</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-17.png" class="carblock"/><br>Tesla Model S</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-16.png" class="carblock"/><br>Dodge RAM 1500</a>
                    </div>                    
                </div>
            </div>            
        </div>
    </div>
    <footer class="footer">        
        <div class="container footercont">
            <div class="row footerrow">
                <div class="col-lg-3 mb-3 mt-1 footercol">
                    <div class="logo">AutoBiography</div>
                </div>
                <div class="col-6 col-lg-2 mb-3 mt-2 footercol">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="footer_link" href="index.php">Главная</a></li>                         
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mb-3 mt-2 footercol">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="footer_link" href="PrivacyPolicy.html">Политика конфедициальности</a></li>                          
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
 <script src="public/js/jquery.js"></script>
 <script>



    function countCar()
    {
        $.ajax({
            url: "searchengine.php",
            method: "POST",
            data: 
            {
                type: 'count',
                namecar : mark.value,
                model : model.value,
                enginetype : enginetype.value,
                body : bodytype.value,
            }, 
            success: function(data){
                document.getElementById("searchid").innerHTML = "Поиск ("+data+")";
            }

            
        });
        document.getElementById("query").href = "SearchPage.php?namecar="+mark.value+"&model="+model.value+"&enginetype="+enginetype.value+"&body="+bodytype.value;
    }

    $( "#bodytype" ).change(function() {
        countCar();
    });

    $( "#model" ).change(function() {
        countCar();
    });

    $( "#enginetype" ).change(function() {
        countCar();
    });

    $( "#mark" ).change(function() {

        $.ajax({
            url: "searchengine.php",
            method: "POST",
            data: 
            {
                type: 'mark',
                senderObject: mark.value
            }, 
            success: function(data){
                document.getElementById("model").innerHTML = data;
                countCar();
            }
        });
        
    });

    window.onload = function() {
            countCar();
        };
 </script>
</html>
