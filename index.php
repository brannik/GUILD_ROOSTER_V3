<?php
    include("index.html");  
    require("style/theme_parser.php");
    if(isset($_SESSION["account"])){
        // parse theme index in core.php
        // call theme loader with index page
        load_page("home",null,null);
    }else{
        // parse login page
        load_page("login","0","json string");
    }
    
?>