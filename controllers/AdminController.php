<?php

class AdminController{
 //display any page through index function 
    public function index($page){
        include('views/admin/'.$page.'.php');
    }
}
?>

