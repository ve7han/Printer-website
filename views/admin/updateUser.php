<?php 
    //test if user already logged in redirect him to home page if not to login form
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
            //recuperer user by its id to show it in the form
            $userToUpdate= new UsersController();
            $userToUpdate = $userToUpdate->getUser();
            if(isset($_POST["submit"])){
                $user = new UsersController();
                $user->updateUser();
            } 
    }else{
        Redirect::to("home");
    }    
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
            <div class="card-header">
                        <h3 class="card-title">
                            Modifier un utilisateur
                        </h3>
                    </div>
                <div class="card-body">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input type="hidden" 
                            class="form-control"
                            name="user_id" 
                            placeholder="userid" 
                            required
                            value="<?php echo $userToUpdate->user_id;?>">
                        </div>
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="fullname" 
                            placeholder="Fullname" 
                            required
                            value="<?php echo $userToUpdate->fullname;?>">
                        </div>
                        <div class="form-group">
                            <input type="text" 
                                class="form-control"
                                name="username" 
                                placeholder="UserName" 
                                required
                                value="<?php echo $userToUpdate->username;?>">
                        </div>
                        <div class="form-group">
                            <input type="email" 
                                class="form-control"
                                name="email" 
                                placeholder="Email" 
                                required
                                value="<?php echo $userToUpdate->email;?>">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="admin" id="">
                                    <option 
                                        <?php 
                                            // test : if admin == 1 ==> display selected admin ""
                                            echo $userToUpdate->admin == 1  ? "selected" : "";
                                        ?>
                                        value="1">
                                        admin
                                    </option>
                                    <option 
                                    <?php 
                                            // test : if admin == 0 ==> display selected user ""
                                            echo $userToUpdate->admin == 0 ? "selected" : "";
                                        ?>
                                        value="0">
                                        user
                                    </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button name ="submit" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
