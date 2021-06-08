<?php
    // navigation between pages
    // use after href clicks
    require("../style/theme_parser.php");
    if(isset($_POST["page"])){
        switch(){
            case "home":
                load_page("home",null,null);
                break;
            case "login":
                load_page("login",null,null);
                break;
            default:
                load_page("home",null,null);
                break;
        }
    }
?>