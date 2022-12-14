<?php 

class Order{
    static public function getAll(){
        $stmt = DB::connect()-> prepare('SELECT * FROM orders ORDER BY created_at DESC');
        $stmt-> execute();
        return $stmt->fetchAll();

    }

    static public function createOrder($data) {
            $stmt = DB::connect()->prepare("INSERT INTO orders (fullname,product,quantity,price,total)
            VALUES(:fullname,:product,:quantity,:price,:total)");
            $stmt->bindParam(':fullname',$data['fullname']);
            $stmt->bindParam(':product',$data['product']);
            $stmt->bindParam(':quantity',$data['quantity']);
            $stmt->bindParam(':price',$data['price']);
            $stmt->bindParam(':total',$data['total']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }

    }
    static public function deleteOrder($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()-> prepare('DELETE FROM orders WHERE id = :id');
            $stmt-> execute(array(":id" => $id));
            $order = $stmt->fetch(PDO::FETCH_OBJ); // fetch one order 
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