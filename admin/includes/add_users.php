<?php 
    
    if(isset($_POST['add_user'])) {
        
        $username = $_POST['username'];
        $user_password = $_POST['password'];
        $user_firstname = $_POST['firstname'];
        $user_lastname = $_POST['lastname'];
        $user_email = $_POST['email'];
        $user_image = $_FILES['image']['name'];
        $user_image_temp = $_FILES['image']['tmp_name'];
        $user_role= $_POST['user_role'];
        
        move_uploaded_file($user_image_temp, "../images/$user_image");
        
        $query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_image, user_role)";
        $query .= "VALUES('{$username}', '{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_image}','{$user_role}')";
        
        $add_user_query = mysqli_query($connection, $query);
        
        if(!$add_user_query){
            die("Failed" . mysqli_error($connection));
        }
        
    }

?>
   
 
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="author">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    
    <div class="form-group">
        <label for="author">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
          
    <div class="form-group">
        <select name="user_role" id="">
         <option value="subscriber">Select Options</option>
          <option value="admin">Admin</option>
          <option value="subscriber">Subscriber</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="post_status">Firstname</label>
        <input type="text" class="form-control" name="firstname">
    </div>
    
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    
    <div class="form-group">
        <label for="post_status">Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    
    <div class="form-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_user" value="Add user">
    </div>
    
</form>