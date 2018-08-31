<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Continent</th>
            <th>Image</th>
            <th>Image name</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

       <?php 

        $query = "SELECT * FROM offices";
        $select_offices = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_offices)){
        $offices_id = $row['offices_id'];
        $offices_continent = $row['offices_continent'];
        $offices_image = $row['offices_image'];
        $offices_image_name = $row['offices_image_name'];

        echo "<tr>"; 
        echo "<td>$offices_id</td>";
        echo "<td>$offices_continent</td>";
        echo "<td><img width='100px' src='../Fotke offices/$offices_image' alt='image'></td>";
        echo "<td>$offices_image_name</td>";
       
        echo "<td><a href='offices.php?delete=$offices_id'>Delete</a></td>";  
        echo "</tr>";
        }
        ?>


    </tbody>
</table>
                    
                    
<?php 

if(isset($_GET['delete'])){
    $the_offices_id = $_GET['delete'];
    
    $query = "DELETE FROM offices WHERE offices_id = {$the_offices_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: offices.php");
}


?>
