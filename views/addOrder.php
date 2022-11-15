<!-- get data form session and send it to DataBase -->
<?php 

$order = new OrdersController();
 foreach($_SESSION as $name => $product){
    if(substr($name,0,9) == "products_"){
         $data = array(
            "fullname" => $_SESSION["fullname"],
            "product" => $product["title"],
            "quantity" => $product["qte"],
            "price" => $product["price"],
            "total" => $product["total"]
         );
         $order->addOrder($data);
    }
}
?>