<?php

class HomeController {
 //display any page through index function 
    public function index($page){
        include('views/'.$page.'.php');
    }
}
?>