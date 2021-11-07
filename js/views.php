<?php
    include('../MySql.php');
    include('../config.php');

    $lat = $_POST['lat'];
    $long = $_POST['long'];

    $register = MySql::connect()->prepare("INSERT INTO `views` VALUES (null, ?, ?, ?, ?)");
    $register->execute(array($_SERVER['REMOTE_ADDR'],$lat,$long,date('Y-m-d')));

?>