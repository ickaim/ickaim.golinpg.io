<?php 
    if(isset($_GET['pr_id'])){
        $the_pr_id = $_GET['pr_id'];
    }

    $query = "SELECT * FROM pr_and_communication WHERE pr_id = $the_pr_id";
    $select_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_query)){
        $pr_id = $row['pr_id'];
        $category_id = $row['category_id'];
        $pr_title = $row['pr_title'];
        $pr_content1 = $row['pr_content1'];
        $pr_content2 = $row['pr_content2'];
        $pr_content3 = $row['pr_content3'];
        $pr_image = $row['pr_image'];
    }



   if(isset($_POST['update_pr_and_event'])){
        $category_id = $_POST['category_id'];
        $pr_title = $_POST['pr_title'];
        $pr_content1 = $_POST['pr_content1'];
        $pr_content2 = $_POST['pr_content2'];
        $pr_content3 = $_POST['pr_content3'];
        $pr_image = $_FILES['image']['name'];
        $pr_image_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($pr_image_temp, "../Fotke/$pr_image");

        $query = "UPDATE pr_and_communication SET ";
        $query .= "category_id = '{$category_id}', ";
        $query .= "pr_title = '{$pr_title}', ";
        $query .= "pr_content1 = '{$pr_content1}', ";
        $query .= "pr_content2 = '{$pr_content2}', ";
        $query .= "pr_content3 = '{$pr_content3}', ";
        $query .= "pr_image = '{$pr_image}' ";
        $query .= "WHERE pr_id = {$the_pr_id}";
       
        if(empty($pr_image)){
        $query = "SELECT * FROM pr_and_communication WHERE pr_id = $the_pr_id";
        $select_image = mysqli_query($connection,$query);
        while($row = mysqli_fetch_array($select_image)) {
           $pr_image = $row['pr_image'];
        }
        }
       
        $update_query = mysqli_query($connection, $query);    

        if(!$update_query){
            die("Failed" . mysqli_error($connection));
        }  
       
     }
?>




<form action="" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
        <select name="category_id" id="category" value="<?php echo $category_id; ?>">
            <option value="1">PR AND COMMUNICATION</option>
            <option value="2">EVENT MANAGEMENT</option>
        </select> 
    </div>
    
    <div class="form-group">
        <label for="pr_title">Title</label>
        <input type="text" class="form-control" name="pr_title" value="<?php echo $pr_title; ?>">
    </div>
    
    <div class="form-group">
        <label for="pr_content1">Content first</label>
        <input type="text" class="form-control" name="pr_content1" value="<?php echo $pr_content1; ?>">
    </div>
    
    <div class="form-group">
        <label for="pr_content2">Content second</label>
        <input type="text" class="form-control" name="pr_content2" value="<?php echo $pr_content2; ?>">
    </div>
    
    <div class="form-group">
        <label for="pr_content3">Content third</label>
        <input type="text" class="form-control" name="pr_content3" value="<?php echo $pr_content3; ?>">
    </div>
    
    <div class="form-group">
        <img src="../Fotke/<?php echo $pr_image;?>" width="200px" alt="image">
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_pr_and_event" value="Update">
    </div>
    
</form>