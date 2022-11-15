
<header style="z-index: 50000; background-color : #111 ">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" style=" padding : 8px " href="<?php echo BASE_URL;?>"><strong style="font-size : 23px ; color : #F2F2F2 ">
        <em style="color : #006bb3 ">AWS</em>print</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color : #f2f2f2 !important;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item active">
                <a class="nav-link" style="color : white" href="<?php echo BASE_URL;?>home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" style="color : white" href="<?php echo BASE_URL;?>about">About us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" style="color:white" href="<?php echo BASE_URL;?>productusers">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" style="color : white ; margin-right : 390px" href="<?php echo BASE_URL;?>contact">Contact us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="margin-right : 10px ; color: #f2f2f2;" href="<?php echo BASE_URL;?>cart">
                <i class="fas fa-shopping-basket"></i> Cart
                    <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0 ) :?>
                        <?php echo $_SESSION["count"] ;?>
                    <?php else :?>
                        (0)
                    <?php endif;?>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true ) :?>
                    <a class="dropdown-item" href="#"><?php echo $_SESSION["fullname"];?></a>
                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true ) :?>
                        <a class="dropdown-item" href="<?php echo BASE_URL;?>dashboard">AdminPanel <span class="sr-only">(current)</span></a>
                    <?php endif;?>
                    <a class="dropdown-item" href="<?php echo BASE_URL;?>logout">LogOut</a>
                <?php else :?>
                <a class="dropdown-item" href="<?php echo BASE_URL;?>register">Register</a>
                    <a class="dropdown-item" href="<?php echo BASE_URL;?>login">Login</a>
                </div>
                <?php endif;?>
            </li>
            </ul>
        </div>
        </nav>
    </div>
</header>
<html>
    <style>
        html { overflow-x :hidden; }
    </style>
</html>