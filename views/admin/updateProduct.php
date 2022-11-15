<?php 
    //test if user already logged in redirect him to home page if not to login form
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
            $categories = new CategoriesController();
            $categories = $categories->getAllCategories(); // recuperer categories
            //recuperer product by its id to show it in the form
            $productToUpdate= new ProductsController();
            $productToUpdate = $productToUpdate->getProduct();
            if(isset($_POST["submit"])){
                $product = new ProductsController();
                $product->updateProduct();
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
                            Modifier un produit
                        </h3>
                    </div>
                <div class="card-body">
                    <form method="post" class="mr-1" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                            name="product_title" 
                            placeholder="Titre" 
                            required
                            value="<?php echo $productToUpdate->product_title;?>">
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20"
                            class="form-control"
                            name="product_description" placeholder="Description" ><?php echo $productToUpdate->product_description;?></textarea>
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20"
                            class="form-control"
                            name="short_desc" placeholder="Courte Description"><?php echo $productToUpdate->short_desc;?></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="product_category_id" id="">
                                <?php foreach($categories as $category) :?>
                                    <option 
                                        
                                        <?php 
                                            // test : if product_category_id === category_id ==> display selected if not ""
                                            echo $productToUpdate->product_category_id === $category["category_id"]  ? "selected" : "";
                                        ?>
                                        value="<?php echo $category["category_id"];?>">
                                        <?php echo $category["category_title"];?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" 
                            class="form-control"
                            name="product_price" 
                            placeholder="Prix" 
                            value="<?php echo $productToUpdate->product_price;?>"
                            min="1">
                        </div>
                        <div class="form-group">
                            <input type="number" 
                            class="form-control"
                            name="old_price" placeholder="Ancien Prix"
                            min="1"
                            value="<?php echo $productToUpdate->old_price;?>"
                            >
                        </div>
                            <input type="hidden" 
                                name="product_id" 
                                value="<?php echo $productToUpdate->product_id;?>"
                            >
                            <input type="hidden" 
                                name="product_current_image" 
                                value="<?php echo $productToUpdate->product_image;?>"
                            >
                        <div class="form-group">
                            <input type="number" 
                            class="form-control"
                            name="product_quantity" placeholder="Quantity" 
                            value="<?php echo $productToUpdate->product_quantity;?>"
                            min="1">
                        </div>
                        <div class="form-group">
                            <img src="./public/uploads/<?php echo $productToUpdate->product_image;?>" width="400" height="400" alt="">
                        </div>
                        <div class="form-group">
                            <input type="file" 
                            class="form-control"
                            name="product_image">
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
