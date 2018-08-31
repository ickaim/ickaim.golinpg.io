<?php include "includes/admin_header.php"; ?>
<div id="wrapper">  
       
        <!-- Navigation -->
        
<?php include "includes/admin_navigation.php"; ?>  
       
<?php 
    
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
    
$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_profile = mysqli_query($connection, $query);
    
while($row = mysqli_fetch_array($select_user_profile)){
 
    $user_id = $row['user_id'];
    $username = $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];

}
}
    
    
?> 
    
<?php 

if(isset($_POST['update_profile'])) {
        
        $username = $_POST['username'];
        $user_password = $_POST['password'];
        $user_firstname = $_POST['firstname'];
        $user_lastname = $_POST['lastname'];
        $user_email = $_POST['email'];
        $user_image = $_FILES['image']['name'];
        $user_image_temp = $_FILES['image']['tmp_name'];
        $user_role= $_POST['user_role'];
        
       // move_uploaded_file($user_image_temp, "../images/$user_image");
        
        $query = "UPDATE users SET ";
        $query .= "username = '{$username}', ";
        $query .= "user_password = '{$user_password}', ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_image = '{$user_image}', ";
        $query .= "user_role = '{$user_role}' ";
        $query .= "WHERE username = '{$username}' ";

//        if(empty($user_image)){
//            $query = "SELECT * FROM users WHERE user_id =     $the_user_id";
//            $select_user_image = mysqli_query($connection,$query);
//            while($row = mysqli_fetch_array($select_user_image)) {
//               $user_image = $row['user_image'];
//            }
//    }
    
    $edit_user_query = mysqli_query($connection,$query);
    if(!$edit_user_query){
        die("Failed" . mysqli_error($connection));
    }
}
        
    
    
    
    
?>             
                        
                                            

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                   <h1 class="page-header">
                        Welcome to your profile <?php echo $username; ?>
                    </h1>
        
                     <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="author">Username</label>
        <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
    </div>
    
    <div class="form-group">
        <label for="author">Password</label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="password">
    </div>
          
    <div class="form-group">
        <select name="user_role" id="">
         <option value="subscriber"><?php echo $user_role;?></option>
         <?php 
        
            if($user_role == 'admin'){
               echo "<option value='subscriber'>subscriber</option>";
             } else {
                echo " <option value='admin'>admin</option>";
            }
            
        ?>
         
        </select>
    </div>
    
    <div class="form-group">
        <label for="post_status">Firstname</label>
        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="firstname">
    </div>
    
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="lastname">
    </div>
    
    <div class="form-group">
        <label for="post_status">Email</label>
        <input type="text" value="<?php echo $user_email; ?>" class="form-control" name="email">
    </div>
    
    <div class="form-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_profile" value="Update profile">
    </div>
    
</form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>



    <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

<?php include "includes/admin_footer.php"; ?>