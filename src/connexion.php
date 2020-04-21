<?php
        $db = "mysql:host=91.216.107.162;dbname=leole1207283_3pjmjf";
        $user = "leole1207283_3pjmjf";
        $password = "mfy8rauhvo";
        $dbh = new PDO($db,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
