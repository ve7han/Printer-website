<?php 

class OrdersController{

    public function getAllOrders(){
       $orders = Order::getAll(); 
       return $orders;
    }

    public function addOrder($data){
        $result = Order::createOrder($data);
        if($result === "ok"){
            foreach($_SESSION as $name => $product){
                if(substr($name,0,9) == "products"){
                    unset($_SESSION[$name]);
                    unset($_SESSION["count"]);
                    unset($_SESSION["totaux"]);
                }
            }
            Session::set("success","Commande effectuée avec success");
            Redirect::to("productusers");
        }
    }

    public function removeOrder(){
        if(isset($_POST["delete_order_id"])){
            $data = array(
                "id" => $_POST["delete_order_id"]
            );
            $result = Order::deleteOrder($data);
            if($result === "ok"){
                Session::set("success","Order supprimé");
                Redirect::to("orders");
            }else{
                echo $result;
            }
        }
    }
}
