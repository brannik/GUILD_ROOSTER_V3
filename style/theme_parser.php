<?php
    // get page locations and define variables
    // get from json file 
    // replace in casses (if client has different from default get it from his acc else load default values)
    function load_page($page,String $param_type = null,String $param = null){
        switch($page){
            case "home":
                header("Location: ../core/home.php");
                break;
            case "login":
                header("Location: ../core/login.php?ct=" . $param_type . "&c=" . $param);
                break;
            default:
                header("Location: ../core/home.php");
                break;
        }
    }
?>