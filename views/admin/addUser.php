<?php 
    //test if user already logged in redirect him to home page if not to login form
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
            if(isset($_POST["submit"])){
                $createuser = new UsersController();
                $createuser->registerUser();
            } 
    }    
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
            <div class="card-header">
                        <h3 class="card-title">
                            Ajouter un utilisateur
                        </h3>
                    </div>
                    <div class="card-body">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="fullname" placeholder="Nom & Prénom" required>
                        </div>
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="username" placeholder="Pseudo" required>
                        </div>
                        <div class="form-group">
                            <input type="email" 
                            class="form-control"
                            name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password"
                            class="form-control" 
                            name="password" placeholder="Mot de passe" required>
                        </div>
                       <div class="form-group">
                            <select class="form-control" name="admin" id="">
                                    <option value="1">admin</option>
                                    <option value="0">user</option>
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