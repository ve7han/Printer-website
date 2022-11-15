<?php 

class User{
    static public function login($data){
        $username = $data["username"];
        try{
            $query = "SELECT * FROM users WHERE username = :username";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username"=>$username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch (PDOException $ex){
            echo "error : ".$ex->getMessage();
        }
    }

    static public function createUser($data){
        $stmt = DB::connect()->prepare("INSERT INTO users(fullname,
        username,email,password)
        VALUES(:fullname,:username,:email,:password)");
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }


    static public function getAll(){
        $stmt = DB::connect()-> prepare('SELECT * FROM users ORDER BY created_at DESC');
        $stmt-> execute();
        return $stmt->fetchAll();
    }

     //fetch one product by its id 
     static public function getUserById($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()-> prepare('SELECT * FROM users WHERE user_id = :id');
            $stmt-> execute(array(":id" => $id));
            $product = $stmt->fetch(PDO::FETCH_OBJ); // fetch one product 
            return $product;         
        }catch(PDOException $ex){
            echo "error" .$ex->getMessage(); // display the error
        }
    }

   
    static public function editUser($data){
        $stmt = DB::connect()->prepare('UPDATE users SET 
                fullname =:fullname,
                username =:username,
                email =:email,
                admin =:admin
                WHERE user_id = :user_id 
        ');
        $stmt->bindParam(':user_id',$data['user_id']);
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':admin',$data['admin']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
         }
    }

    static public function deleteUser($data){
        $id = $data['id'];
        try{
            $stmt = DB::connect()-> prepare('DELETE FROM users WHERE user_id = :id');
            $stmt-> execute(array(":id" => $id));
            $user = $stmt->fetch(PDO::FETCH_OBJ); // fetch one user 
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
