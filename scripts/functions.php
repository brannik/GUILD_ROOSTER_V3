<?php
    
    function validate_username($username){
        
        return true;
    }
    function validate_pass($password){
        
        return true;
    }
    function hash_password($password){
        return sha1($password,true);
    }
    function get_guild_info(){
        
    }
    function register(){
        
    }
    function login(){
        
    }
    function logout(){
        
    }
    function get_user_info(){
        
    }
    function get_characters(){
        
    }
    function get_guild_rooster(){
    
    }
    function register_from_file(){
        
    }
    function import_dkp_global(){
        
    }
    function import_rooster_global(){
        
    }
    function import_dkp_personal(){
        
    }
    function import_rooster_personal(){
        
    }
    function read_parsed_command($command_type,$command){
        return "Command type " . $command_type . "<br> Command value " . $command . "<br>";
    }
    function format_errors(){
        $error_handler ="No errors";
        echo "<h3>" . $error_handler . "</h3>";
    }
?>