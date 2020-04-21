<?php
        require "secret.php";
        $dbh = new PDO($db,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
