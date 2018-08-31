<?php 
    if(isset($_POST['add_offices'])){
        $offices_continent = $_POST['continent'];
        $offices_image = $_FILES['image']['name'];
        $offices_image_temp = $_FILES['image']['tmp_name'];
        $offices_image_name = $_POST['image_name'];
        
        move_uploaded_file($offices_image_temp, "../Fotke offices/$offices_image");

    $query = "INSERT INTO offices(offices_continent,offices_image,offices_image_name) ";
    $query .= "VALUES('{$offices_continent}','{$offices_image}','{$offices_image_name}')";
    $update_offices = mysqli_query($connection, $query);

    if(!$update_offices){
            die("Failed" . mysqli_error($connection));
        }    
     }
?>




<form action="" method="post" enctype="multipart/form-data">
   
   <div class="form-group">
        <select name="continent" id="continent">
            <option value="EMEA">EMEA</option>
            <option value="AMERICAS">AMERICAS</option>
            <option value="ASIA">ASIA</option>
        </select>      
    </div>
    
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <label for="image_name">Image name</label>
        <input type="text" class="form-control" name="image_name">
    </div>
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_offices" value="Add offices">
    </div>
    
</form>