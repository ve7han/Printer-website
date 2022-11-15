<?php 
   if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new OrdersController();
    $orders = $data->getAllOrders();
   }else{
       Redirect::to("home");
   }
?>

<div class="container">
   <div class="row my-5">
    <div class="col-md-10 mx-auto">

        <!-- form delete order  -->
        <form id="delete_form_order" action="<?php echo BASE_URL?>deleteOrder" method="post">
         <input type="hidden" name="delete_order_id" id="delete_order_id">
        </form>
        <div class="card bg-light p-3">
            <table class="table table-hover table-inverse">
                    <h3 class="font-weight-bold">Commandes</h3>
                <thead>
                    <tr>
                        <th>Nom & Prénom</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th>Effectué le</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $order) :?>
                    <tr>
                        <td><?php echo $order["fullname"]?></td>
                        <td><?php echo $order["product"]?></td>
                        <td><?php echo $order["quantity"]?></td>
                        <td><?php echo $order["price"]?></td>
                        <td><?php echo $order["total"]?></td>
                        <td><?php echo $order["created_at"]?></td>
                        <td class="d-flex flex-row justify-content-center align-items-center">
                            <a onclick="deleteFormOrder(<?php echo $order['id'];?>)" class="btn btn-sm btn-outline-danger mr-1"">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
   </div>
</div>