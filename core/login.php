<?php
    include("ui.php");
    include("../scripts/functions.php");
    $ui = new UI();
    // home page here functions and ui after
    $test ="this is login page";
    if(isset($_GET["ct"])){
        //print $_GET["ct"] . " " . $_GET["c"];
        print read_parsed_command($_GET["ct"],$_GET["c"]);
    }
    echo '<link rel="stylesheet" href="../style/login.css" type="text/css"/>';
    include($ui->BUILD_UI("login"));
?>