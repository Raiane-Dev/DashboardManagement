<?php
    include('MySql.php');
    include('config.php');
    include('Controllers/ControllerMailer.php');
    include('Controllers/ControllerIndex.php');
    include('Models/ModelIndex.php');

    $ControllerMailer = new ControllerMailer\ControllerMailer;
    $Controller = new ControllerIndexs\ControllerIndex;
    $Model = new ModelIndexs\ModelIndex;
    ControllerIndexs\ControllerIndex::autoloading();
    

    include('views/templates/header.php');
    $Controller->index();
    include('views/templates/footer.php');

?>