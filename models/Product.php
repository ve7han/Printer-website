<?php 

class Product{
    static public function getAll(){
        $stmt = DB::connect()-> prepare('SELECT * FROM products ORDER BY created_at DESC');
        $stmt-> execute();
        return $stmt->fetchAll();
    }
    static public function getProductByCat($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()-> prepare('SELECT * FROM products WHERE product_category_id = :id');
            $stmt-> execute(array(":id" => $id));
            return $stmt->fetchAll();            
        }catch(PDOException $ex){
            echo "error" .$ex->getMessage(); // display the error
        }
    }

    //fetch one product by its id 
    static public function getProductById($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()-> prepare('SELECT * FROM products WHERE product_id = :id');
            $stmt-> execute(array(":id" => $id));
            $product = $stmt->fetch(PDO::FETCH_OBJ); // fetch one product 
            return $product;         
        }catch(PDOException $ex){
            echo "error" .$ex->getMessage(); // display the error
        }
    }
    
    static public function addProduct($data){
        $stmt = DB::connect()->prepare("INSERT INTO products (product_title,
        product_description,product_quantity,product_image,product_price,
        old_price,short_desc,product_category_id)
        VALUES(:product_title,:product_description,:product_quantity,:product_image
        ,:product_price,:old_price,:short_desc,:product_category_id)");
        $stmt->bindParam(':product_title',$data['product_title']);
        $stmt->bindParam(':product_description',$data['product_description']);
        $stmt->bindParam(':product_quantity',$data['product_quantity']);
        $stmt->bindParam(':product_image',$data['product_image']);
        $stmt->bindParam(':product_price',$data['product_price']);
        $stmt->bindParam(':old_price',$data['old_price']);
        $stmt->bindParam(':short_desc',$data['short_desc']);
        $stmt->bindParam(':product_category_id',$data['product_category_id']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
         }
    }
    
    static public function editProduct($data){
        $stmt = DB::connect()->prepare('UPDATE products SET 
                product_title =:product_title,
                product_description =:product_description,
                product_quantity =:product_quantity,
                product_image =:product_image,
                product_price =:product_price,
                old_price =:old_price,
                short_desc =:short_desc,
                product_category_id =:product_category_id
                WHERE product_id = :product_id 
        ');
        $stmt->bindParam(':product_id',$data['product_id']);
        $stmt->bindParam(':product_title',$data['product_title']);
        $stmt->bindParam(':product_description',$data['product_description']);
        $stmt->bindParam(':product_quantity',$data['product_quantity']);
        $stmt->bindParam(':product_image',$data['product_image']);
        $stmt->bindParam(':product_price',$data['product_price']);
        $stmt->bindParam(':old_price',$data['old_price']);
        $stmt->bindParam(':short_desc',$data['short_desc']);
        $stmt->bindParam(':product_category_id',$data['product_category_id']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
         }
    }
    static public function deleteProduct($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()-> prepare('DELETE FROM products WHERE product_id = :id');
            $stmt-> execute(array(":id" => $id));
            $product = $stmt->fetch(PDO::FETCH_OBJ); // fetch one product 
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
             }         
        }catch(PDOException $ex){
            echo "error" .$ex->getMessage(); // display the error
        }
    }
}
