<?php
    include("ui.php");
    $ui = new UI();
    // home page here functions and ui after
    $test ="this is test message";
    include($ui->BUILD_UI("home"));
?>