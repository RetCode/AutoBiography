<?php

    require_once "db.php";

    $query = "";
    $isOneParams = false;

    if($_GET["namecar"] > 0)
    {
        $query = $query . " car.namecar_id = " . $_GET["namecar"];
        $isOneParams = true;
    }

    if($_GET["model"] > 0)
    {
        $query = $query . " and car.model_id = " . $_GET["model"];
    }

    if($_GET["enginetype"] > 0)
    {
        if($isOneParams)
            $query = $query . " and car.enginetype_id = " . $_GET["enginetype"];
        else
            $query = $query . " car.enginetype_id = " . $_GET["enginetype"];
        $isOneParams = true;
    }

    if($_GET["body"] > 0)
    {
        if($isOneParams)
            $query = $query . " and car.body_id = " . $_GET["body"];
        else
            $query = $query . " car.body_id = " . $_GET["body"];
        $isOneParams = true;
    }

    if($isOneParams)
        $result = $mysqli->query("SELECT car.id, namecar.name, modelcar.model, bodyname.body, engonetype.engine, car.image FROM `car` JOIN namecar ON namecar.id = car.namecar_id JOIN modelcar ON modelcar.id = car.model_id JOIN bodyname ON bodyname.id = car.body_id JOIN engonetype ON engonetype.id = car.enginetype_id WHERE ".$query);
    else
        $result = $mysqli->query("SELECT car.id, namecar.name, modelcar.model, bodyname.body, engonetype.engine, car.image FROM `car` JOIN namecar ON namecar.id = car.namecar_id JOIN modelcar ON modelcar.id = car.model_id JOIN bodyname ON bodyname.id = car.body_id JOIN engonetype ON engonetype.id = car.enginetype_id ORDER BY image");
    $temp = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/SearchPage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>AutoBiography</title>
</head>
<body>
    <div class="content-block">
        <div class="container maincont">
            <div class="button-block">
                    <a href="index.php"><button class="button_back">Назад</button></a>                
            </div>
            <div class="technical_specifications-block">
                <p class="technical_specifications-text">Результаты поиска</p>                               
            </div>
            <div class="search-block">
                <?php 
                    foreach($temp as $car)
                    {
                        echo '<a href="#">
                                <button class="search-result">
                                    <div class="row result-done">
                                        <div class="col-3">
                                            <img src="'.$car["image"].'" class="image-car">
                                        </div>
                                        <div class="col-3">
                                            <p class="text-car">'.$car["name"].' '.$car["model"].'</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="text-car">'.$car["body"].'</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="text-car">'.$car["engine"].'</p>
                                        </div>
                                    </div>
                                </button>
                            </a>';
                    }
                ?>
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
            </div>
        </div>
    </footer>
</body>
</html>