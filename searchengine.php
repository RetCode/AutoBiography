<?php

    require_once "db.php";


    if(isset($_POST["type"]))
    {
        if($_POST["type"] == "mark")
        {
            $result = $mysqli->query("SELECT * FROM modelcar WHERE namecar_id = ".$_POST["senderObject"]." ORDER BY model");
            $temp = $result->fetch_all(MYSQLI_ASSOC);

            $temp_string = "";

            $temp_string = $temp_string."<option selected value='0'>Модель</option>";
            foreach($temp as $model)
            {
                $temp_string = $temp_string.'<option value="'.$model["id"].'">'.$model["model"].'</option>';
            }

            echo $temp_string;
        }

        if($_POST["type"] == "count")
        {
            $query = "";
            $isOneParams = false;

            if($_POST["namecar"] > 0)
            {
                $query = $query . " namecar_id = " . $_POST["namecar"];
                $isOneParams = true;
            }

            if($_POST["model"] > 0)
            {
                $query = $query . " and model_id = " . $_POST["model"];
            }

            if($_POST["enginetype"] > 0)
            {
                if($isOneParams)
                    $query = $query . " and enginetype_id = " . $_POST["enginetype"];
                else
                    $query = $query . " enginetype_id = " . $_POST["enginetype"];
                $isOneParams = true;
            }

            if($_POST["body"] > 0)
            {
                if($isOneParams)
                    $query = $query . " and body_id = " . $_POST["body"];
                else
                    $query = $query . " body_id = " . $_POST["body"];
                $isOneParams = true;
            }

            if($isOneParams)
                $result = $mysqli->query("SELECT count(*) as 'count' FROM car WHERE ".$query);
            else
                $result = $mysqli->query("SELECT count(*) as 'count' FROM car");
            $temp = $result->fetch_all(MYSQLI_ASSOC);
            
            echo $temp[0]["count"];
        }
    }

?>