<?php 

class UsersController{
    public function auth(){
        if(isset($_POST["submit"])){
            $data["username"] = $_POST["username"];
            $result = User::login($data);
            if($result->username === $_POST["username"] && password_verify($_POST["password"],$result->password)){
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $result->username;
                $_SESSION["fullname"] = $result->fullname;
                $_SESSION["admin"] = $result->admin;
                Redirect::to("home");
            }else{
                Session::set("error","Pseudo ou mot de passe est incorrect");
                Redirect::to("login");
            }       
        }
    }
    public function register(){
        $options = [
            "cost" => 12
        ];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT,$options);
        $data = array(
            "fullname" => $_POST["fullname"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $password,
        );
        $result = User::createUser($data);
        if($result === "ok"){
            Session::set("success","Compte créer");
            Redirect::to("login");
        }else{
            echo $result;
        }
    }

    public function logout(){
        session_destroy();
    }

    // get all users
    public function getAllUsers(){
        $users = User::getAll(); // model User function getall 
        return $users;
    }

     //get one user 
     public function getUser(){
        if(isset($_POST["user_id"])){
            $data = array(
                'id' => $_POST["user_id"]
            );
            $user = User::getUserById($data);
            return $user;
        }
    }

   public function registerUser(){
        $options = [
            "cost" => 12
        ];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT,$options);
        $data = array(
            "fullname" => $_POST["fullname"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $password,
        );
        $result = User::createUser($data);
        if($result === "ok"){
            Session::set("success","Compte créer");
            Redirect::to("users");
        }else{
            echo $result;
        }
    }

    

    public function updateUser(){
        if(isset($_POST["submit"])){
            $data = array(
                "user_id" => $_POST["user_id"],
                "fullname" => $_POST["fullname"],
                "username" => $_POST["username"],
                "email" => $_POST["email"],
                "admin" => $_POST["admin"],
            );

            $result = User::editUser($data);
            if($result === "ok"){
                Session::set("success","User modifié");
                Redirect::to("users");
            }else{
                echo $result;
            }
            // print_r($data);
        }
    }

    public function removeUser(){
        if(isset($_POST["delete_user_id"])){
            $data = array(
                "id" => $_POST["delete_user_id"]
            );
            $result = User::deleteUser($data);
            if($result === "ok"){
                Session::set("success","User supprimé");
                Redirect::to("users");
            }else{
                echo $result;
            }
        }
    }
}