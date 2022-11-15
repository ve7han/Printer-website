<?php 
    //test if user already logged in redirect him to home page if not to login form
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    if(isset($_POST["submit"])){
        $createUser = new UsersController();
        $createUser->register();
    }
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
            <div class="card-header">
                        <h3 class="card-title">
                            Register
                        </h3>
                    </div>
                <div class="card-body">
                <i class="fas fa-users"></i>
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="fullname" placeholder="Firstname & Lastname" required>
                        </div>
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" 
                            class="form-control"
                            name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password"
                            class="form-control" 
                            name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button name ="submit" class="btn btn-primary"  style="width : 100% ; margin-top : 30px ; border : 1px #006bb3 solid ;  background-color :#006bb3 ; color : #F2F2F2 ">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                You already have an account ?
                    <a href="<?php echo BASE_URL;?>login" class="btn btn-link">
                        Connect
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!DOCTYPE html>
    <html>
    <head>
    <style>
    .container .row .col-md-6 .card{background :  #f2f2f2; width : 450px ; border : 1px black solid; border-radius : 30px ; box-shadow: 1px 4px 2px 2px black}
    .container .row .col-md-6 .card-header{background :  #f2f2f2 ; padding : 20px ; border : 1px #f2f2f2 solid ; border-top-left-radius : 30px ;  border-top-right-radius :30px }
    .container .row .col-md-6 .card-header .card-title{color : #111 ; text-align : center}
    .container .row .col-md-6 .card-body{margin : 4%; background : #f2f2f2}
    .container .row .col-md-6 .card-body i {color : #006bb3 ; font-size : 90px ; margin-bottom : 25px ; margin-top : -40px ; position : relative ; left : 36%}
    .container .row .col-md-6 .card-footer {background :  #f2f2f2; color : #111 ; border : 1px #f2f2f2 solid ; border-bottom-left-radius : 30px ;  border-bottom-right-radius :30px ; }
    </style>
    </head>

    </html>