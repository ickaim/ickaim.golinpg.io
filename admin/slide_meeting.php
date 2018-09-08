<?php include "includes/admin_header.php"; ?>
<div id="wrapper">  
       
        <!-- Navigation -->
        
<?php include "includes/admin_navigation.php"; ?>  
       
<?php 
 
$query = "SELECT * FROM slide";
$select_slide = mysqli_query($connection, $query);
    
while($row = mysqli_fetch_array($select_slide)){
 
    $slide_title = $row['slide_title'];
    $slide_content = $row['slide_content'];

}
    
    
?> 
    
<?php 

if(isset($_POST['update_slide'])) {
        
        $slide_title = $_POST['slide_title'];
        $slide_content = $_POST['slide_content'];
        
        $query = "UPDATE slide SET ";
        $query .= "slide_title = '{$slide_title}', ";
        $query .= "slide_content = '{$slide_content}' ";

    
    $edit_slide= mysqli_query($connection,$query);
    if(!$edit_slide){
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
                        Welcome to slide meeting
                    </h1>
        
                     <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="author">Title</label>
        <input type="text" value="<?php echo $slide_title; ?>" class="form-control" name="slide_title">
    </div>
    
    <div class="form-group">
        <label for="author">Content</label>
        <textarea name="slide_content" id="slide_content" cols="30" rows="10">
        <?php echo $slide_content; ?>    
        </textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_slide" value="Update slide">
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