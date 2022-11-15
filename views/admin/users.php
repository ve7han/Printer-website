<?php 
   if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new UsersController();
    $users = $data->getAllUsers();
   }else{
       Redirect::to("home");
   }
?>

<div class="container">
   <div class="row my-5">
    <div class="col-md-13 mx-auto">
    <div class="form-group">
            <a href="<?php echo BASE_URL?>addUser" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Ajouter
            </a>
        </div>
    <!-- form update product -->
        <form id="form_user" action="<?php echo BASE_URL?>updateUser" method="post">
            <input type="hidden" name="user_id" id="user_id">
        </form>
    <!-- form delete user  -->
        <form id="delete_form_user" action="<?php echo BASE_URL?>deleteUser" method="post">
         <input type="hidden" name="delete_user_id" id="delete_user_id">
        </form>
        <div class="card bg-light p-3">
            <table class="table table-hover table-inverse">
                    <h3 class="font-weight-bold">Users</h3>
                <thead>
                    <tr>
                        <th>Nom & Prénom</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Rule</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) :?>
                    <tr>
                        <td><?php echo $user["fullname"]?></td>
                        <td><?php echo $user["username"]?></td>
                        <td><?php echo $user["email"]?></td>
                        
                        <td><?php if($user["admin"] == 1){
                                echo "admin";
                            }else{
                                echo "user";  
                            }
                        ?></td>
                        <td><?php echo $user["created_at"]?></td>
                        <td><?php echo $user["updated_at"]?></td>
                        <td class="d-flex flex-row justify-content-center align-items-center">
                            <a onclick="submitFormUser(<?php echo $user['user_id'];?>)" class="btn btn-sm btn-outline-dark  mr-1">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a onclick="deleteFormUser(<?php echo $user['user_id'];?>)" class="btn btn-sm btn-outline-danger mr-1"">
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