<?php 
    //test if user already logged in redirect him to home page if not to login form
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
            $categories = new CategoriesController();
            $categories = $categories->getAllCategories();
            if(isset($_POST["submit"])){
                $product = new ProductsController();
                $product->newProduct();
            } 
    }    
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
            <div class="card-header">
                        <h3 class="card-title">
                            Ajouter un produit
                        </h3>
                    </div>
                <div class="card-body">
                    <form method="post" class="mr-1" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="product_title" placeholder="Titre" required>
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20"
                            class="form-control"
                            name="product_description" placeholder="Description" >
                            </textarea>
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20"
                            class="form-control"
                            name="short_desc" placeholder="Courte Description">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="product_category_id" id="">
                                <?php foreach($categories as $category) :?>
                                    <option value="<?php echo $category["category_id"]?>">
                                        <?php echo $category["category_title"]?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" 
                            class="form-control"
                            name="product_price" placeholder="Prix" required>
                        </div>
                        <div class="form-group">
                            <input type="number" 
                            class="form-control"
                            name="old_price" placeholder="Ancien Prix" required>
                        </div>
                        <div class="form-group">
                            <input type="number" 
                            class="form-control"
                            name="product_quantity" placeholder="Quantity" required>
                        </div>
                        <div class="form-group">
                            <input type="file" 
                            class="form-control"
                            name="product_image" required>
                        </div>
                        <div class="form-group">
                            <button name ="submit" class="btn btn-primary">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>