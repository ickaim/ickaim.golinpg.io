<?php 
    if(isset($_POST['add_client'])){
        $clients_image = $_FILES['image']['name'];
        $clients_image_temp = $_FILES['image']['tmp_name'];
        $clients_image_title = $_POST['image_name'];
        
        move_uploaded_file($clients_image_temp, "../Fotke clients/$clients_image");

    $query = "INSERT INTO clients(clients_image,clients_image_title) ";
    $query .= "VALUES('{$clients_image}','{$clients_image_title}')";
    $update_clients = mysqli_query($connection, $query);

    if(!$update_clients){
            die("Failed" . mysqli_error($connection));
        }    
     }
?>




<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <label for="image_name">Image name</label>
        <input type="text" class="form-control" name="image_name">
    </div>
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_client" value="Add client">
    </div>
    
</form>