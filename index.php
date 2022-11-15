<?php 
require_once './autoload.php';
require_once ("./views/includes/header.php");


$home = new HomeController();

$pages = [
            'home','productusers','about','cart','contact','dashboard','updateProduct','deleteProduct',
            'addProduct','emptyCart','show','cancelCart','register',
            'login','checkout','logout','products','orders','addOrder','analyse','users', 'addUser','deleteUser','updateUser',
            'deleteOrder' , 'addProduct','deleteProduct','updateProduct'
         ];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page=$_GET['page'];
        if($page === "dashboard" || $page === "deleteProduct" || $page === "addProduct" || $page === "updateProduct" || $page === "products" || $page === "orders" || $page === "analyse" || $page === "users" || $page === "deleteUser" || $page === "updateUser" || $page === "addUser" || $page === "deleteOrder" ){
                if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                    $admin = new AdminController();
                    $admin->index($page);
                }else{
                    include('views/includes/404.php'); // test if there is no admin -> 404
                }
        }else{ // if not admin who did connected then display normal pages for user
          $home->index($page);  
        }
    }else{
        include('views/includes/404.php'); // if the page doens't exist in the array
    }
}else{ // if we don't have variable page then -> send user to home
    $home->index("home");  
  }


  require_once ("./views/includes/footer.php");
