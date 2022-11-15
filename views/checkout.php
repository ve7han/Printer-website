<?php 
    if(isset($_POST["product_id"])){
        $id = $_POST["product_id"];
        $data = new ProductsController();
        $product = $data->getProduct();

        // the products added in cart will be added in session here
        
    if($_SESSION["products_".$id]["title"] === $_POST["product_title"]){
        Session::set("info","Vous avez déja ajouté ce produit au panier");
        Redirect::to("cart");      
    }else{
        if($product->product_quantity < $_POST["product_quantity"]){
            Session::set("info","La quantité disponible est : $product->product_quantity");
            Redirect::to("cart");
        }else{
            $_SESSION["products_".$product->product_id] = array(
                "id" => $product->product_id,
                "title" => $product->product_title,
                "price" => $product->product_price,
                "qte" => $_POST["product_quantity"],
                "total" => $product->product_price * $_POST["product_quantity"],
            );
            //display total price of all the products we have in card
            $_SESSION["totaux"] += $_SESSION["products_".$product->product_id]["total"];
            // display how much products we have in card
            $_SESSION["count"] +=1;
            Redirect::to("cart");
        }
    }
}
?>