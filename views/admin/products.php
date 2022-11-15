<?php 
   if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $data = new ProductsController();
    $products = $data->getAllProducts();
   }else{
       Redirect::to("home");
   }
?>


<div class="container">
   <div class="row my-5">
    <div class="col-md-13 mx-auto">
        <div class="form-group">
            <a href="<?php echo BASE_URL?>addProduct" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Ajouter
            </a>
        </div>
        <!-- form update product -->
        <form id="form" action="<?php echo BASE_URL?>updateProduct" method="post">
            <input type="hidden" name="product_id" id="product_id">
        </form>
        <!-- form delete product  -->
        <form id="delete_form" action="<?php echo BASE_URL?>deleteProduct" method="post">
            <input type="hidden" name="delete_product_id" id="delete_product_id">
        </form>
        <div class="card bg-light p-3">
            <table class="table table-hover table-inverse">
                    <h3 class="font-weight-bold">Produits</h3>
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product) :?>
                    <tr>
                        <td><?php echo $product["product_title"]?></td>
                        <td><?php echo $product["product_price"]?></td>
                        <td><?php echo $product["product_quantity"]?></td>
                        <td><?php echo substr($product["product_description"],0,100)?></td>
                        <td>
                            <img width="50" height="50" 
                                src="./public/uploads/<?php echo $product["product_image"];?>">
                        </td>
                        <td><?php echo $product["created_at"]?></td>
                        <td><?php echo $product["updated_at"]?></td>
                        <td class="d-flex flex-row justify-content-center align-items-center">
                            <a onclick="submitForm(<?php echo $product['product_id'];?>)" class="btn btn-sm btn-outline-dark  mr-1">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a onclick="deleteForm(<?php echo $product['product_id'];?>)" class="btn btn-sm btn-outline-danger mr-1"">
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