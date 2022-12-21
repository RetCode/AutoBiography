<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "root", "carinfo");

    $result = $mysqli->query("SELECT * FROM namecar");
    $nameCar = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT model FROM modelcar");
    $modelCar = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM engonetype");
    $engineType = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM bodyname");
    $bodyCar = $result->fetch_all(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($nameCar);
    // echo "</pre>";

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
    <!-- <input type="text" width="200px" value= {{$model_id}} /> -->
    <div class="content_page">
        <div class="container maincont">
            <div class="main">
                <p class="filter_text">Найти интересующий вас автомобиль по заданным фильтрам</p>
                <div class="filter">                    
                    <select class="filter_select">
                        <option selected>Марка</option>
                        <?php 
                        
                            foreach($nameCar as $car)
                            {
                                echo '<option>'.$car["name"].'</option>';
                            }

                        ?>
                    </select>
                    <select class="filter_select">
                        <option selected value>Модель</option>
                        <?php 
                        
                            foreach($modelCar as $model)
                            {
                                echo '<option>'.$model["model"].'</option>';
                            }

                        ?>
                    </select>
                    <select class="filter_select">
                        <option selected value>Тип двигателя</option>
                        <?php 
                        
                            foreach($engineType as $engine)
                            {
                                echo '<option>'.$engine["engine"].'</option>';
                            }

                        ?>
                    </select>
                    <select class="filter_select">
                        <option selected value>Тип кузова</option>                        
                        <?php 
                        
                            foreach($bodyCar as $body)
                            {
                                echo '<option>'.$body["body"].'</option>';
                            }

                        ?>
                    </select>
                    <a href="SearchPage.php"><button class="search">Поиск (5)</button></a>           
                </div>                
                <div class="show_early">
                    <p class="show_early-text">Ваши последние 9 просмотренных автомобилей</p>
                    <div class="car-box">
                        <a class="show_early-car" href="#"><img src="./public/img/car-1.png" class="carblock"/><br>Acura NSX</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-2.png" class="carblock"/><br>BMW X6 E70</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-3.png" class="carblock"/><br>Volvo S60</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-4.png" class="carblock"/><br>Dodge Charger SRT-8</a>
                        <a class="show_early-car" href="CarPage.php"><img src="./public/img/car-7.png" class="carblock"/><br>BMW 530i E60</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-8.png" class="carblock"/><br>BMW M3 E92</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-5.png" class="carblock"/><br>Bentley Continental GT</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-6.png" class="carblock"/><br>Chevrolet Corvette C6</a>
                        <a class="show_early-car" href="#"><img src="./public/img/car-9.png" class="carblock"/><br>Ford Mustang GT 2011</a>
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
                        <li class="mb-2"><a class="footer_link" href="#">Политика конфедициальности</a></li>                          
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3 mt-2 footercol">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="footer_link" href="#">О нас</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<?php
// var_dump($db);
 ?>
</html>
