<?php 
    if(isset($_POST['add_about_us'])){
        $about_us_image = $_FILES['image']['name'];
        $about_us_image_temp = $_FILES['image']['tmp_name'];
        $about_us_title = $_POST['about_us_title'];
        $about_us_content = $_POST['about_us_content'];
        
        move_uploaded_file($about_us_image_temp, "../Ikonice krugovi/$about_us_image");

    $query = "INSERT INTO about_us(about_us_image,about_us_title,about_us_content) ";
    $query .= "VALUES('{$about_us_image}','{$about_us_title}','{$about_us_content}')";
    $query_about_us = mysqli_query($connection, $query);

    if(!$query_about_us){
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
        <label for="about_us_title">Title</label>
        <input type="text" class="form-control" name="about_us_title">
    </div>
    
    <div class="form-group">
        <label for="about_us_content">Content</label>
        <input type="text" class="form-control" name="about_us_content">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_about_us" value="Add about us">
    </div>
    
</form>