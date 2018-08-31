<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Title</th>
            <th>Content</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

       <?php 

        $query = "SELECT * FROM about_us";
        $select_about_us= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_about_us)){
        $about_us_id = $row['about_us_id'];
        $about_us_image = $row['about_us_image'];
        $about_us_title = $row['about_us_title'];
        $about_us_content = $row['about_us_content'];

        echo "<tr>"; 
        echo "<td>$about_us_id</td>";
        echo "<td><img width='100px' src='../Ikonice krugovi/$about_us_image' alt='image'></td>";
        echo "<td>$about_us_title</td>";
        echo "<td>$about_us_content</td>";
       
        echo "<td><a href='about_us.php?delete=$about_us_id'>Delete</a></td>";  
        echo "</tr>";
        }
        ?>


    </tbody>
</table>
                    
                    
<?php 

if(isset($_GET['delete'])){
    $the_about_us_id = $_GET['delete'];
    
    $query = "DELETE FROM about_us WHERE about_us_id = {$the_about_us_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: about_us.php");
}


?>
