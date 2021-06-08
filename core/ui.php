<?php
    // load html page
    class UI{
        private $index_page;
        private $login_page;
        private $register_page;
        private $banner;
        private $footer;
        private $main_menu;
        private $side_nav;
        private $rooster;
        private $events;
        private $account;
        private $mailbox;
        private $admin_panel;
        private $forum;
        private $reset_password;
        
        public function __construct(){
            $this->getPath();
        }
        private function getPath(){
            $string = file_get_contents("../style/theme_tree.json");
            $json_a = json_decode($string, true);
            // check settings from account database
            // get default theme for this user
            $curr_theme = "default";
            
            $this->index_page = $json_a[$curr_theme]["index"];
            $this->login_page = $json_a[$curr_theme]["login"];
            $this->register_page = "";
            $this->banner ="";
            
        }
        
        public function BUILD_UI($page){
            switch($page){
                case "home":
                    return $this->index_page;
                    break;
                case "login":
                    return $this->login_page;
                    break;
                default:
                    return $this->index_page;
                    break;
            }
        }
    }
?>