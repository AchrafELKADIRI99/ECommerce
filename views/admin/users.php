<?php 


if(isset($_SESSION['admin'])&& $_SESSION['admin']==true){
    $data = new UsersController();
    $users = $data->getAllUsers();
}else{
    Redirect::to("home");
}
    
include('views/admin/dashboard.php');
  
?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-12 mx-auto">
        <h3 class="text-center font-weight-bold"> USERS</h3>
            <div class="card bg-light p-3">


            <form id="delete_us_form" action="<?php echo BASE_URL?>deleteUser" method="post">
            <input type="hidden" name="delete_user_id" id="delete_user_id">
        </form>
            <div class="table-responsive">

                <table class="table table-hover table-inverse">
                    <thead>
                        <tr>
                            <th>user_id</th>
                            <th> Fullname</th>
                            <th> email </th>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td> <?php echo $user["user_id"] ?></td>
                            <td> <?php echo $user["fullname"] ?></td>
                            <td> <?php echo $user["email"] ?></td>
                            <td  >
                                <div  class="d-flex flex-row justify-content-center align-items-center   ">

                            
                                <button type="button" onclick="deleteFormuser(<?php echo $user['user_id'];?>)" class=" btn-danger btn-sm ">
                                Delete
                                </button></div>
                        </td>
                           
                         

                        </tr>
                        
                    <?php endforeach ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</div>
