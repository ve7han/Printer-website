<h3  style="text-align : center; margin-bottom : 35px"> Nous vous souhaitons  M. <?php  echo $_SESSION["fullname"];?> la bienvenue <br> dans votre espace administrateur</h3>
<i class="fas fa-cogs" style="font-size : 27vh ; margin-left : 41%"></i>

<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
            <div class="card p-2 bg-danger">
                <div class="card-body">
                    <div class="card-text">
                        <h4 class="card-text text-center">
                            <i class="fab fa-product-hunt"  style="font-size : 25px ; margin-right : 9px;"></i>
                            <a href="<?php echo BASE_URL?>products"  style="text-decoration:none;color:white;fo-t-weight:bold ; font-size : 20px;">Products</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2 bg-primary">
                <div class="card-body">
                    <div class="card-text">
                        <h4 class="card-text text-center">
                        <i class="fas fa-shopping-basket"  style="font-size : 25px ; margin-right : 9px;"></i>
                            <a href="<?php echo BASE_URL?>orders" style="text-decoration:none;color:white;font-weight:bold ;font-size : 20px;">Orders</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2 bg-success">
                <div class="card-body">
                    <div class="card-text">
                        <h4 class="card-text text-center">
                            <i class="far fa-user" style="font-size : 25px ; margin-right : 9px;"></i>
                            <a href="<?php echo BASE_URL?>users" style="text-decoration:none;color:white;font-weight:bold ; font-size : 20px;">Users</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2 bg-secondary">
                <div class="card-body">
                    <div class="card-text">
                        <h4 class="card-text text-center">
                            <i class="fas fa-poll"  style="font-size : 25px ; margin-right : 9px;"></i>
                            <a href="<?php echo BASE_URL?>analyse" style="text-decoration:none;color:white;font-weight:bold ; font-size : 20px;">Statistics</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.container .row .col-md-4 .card
{
    width : 250px;

}
.container .row .col-md-4
{
padding : 20px;
display : flex;
align-items : center;
justify-content : center;
}
.row-my-5{
    display : flex;
    align-items : center;
}

</style>