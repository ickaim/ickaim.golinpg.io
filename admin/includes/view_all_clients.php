<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Image name</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

       <?php 

        $query = "SELECT * FROM clients";
        $select_clients= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_clients)){
        $clients_id = $row['clients_id'];
        $clients_image = $row['clients_image'];
        $clients_image_title = $row['clients_image_title'];

        echo "<tr>"; 
        echo "<td>$clients_id</td>";
        echo "<td><img width='100px' src='../Fotke clients/$clients_image' alt='image'></td>";
        echo "<td>$clients_image_title</td>";
       
        echo "<td><a href='clients.php?delete=$clients_id'>Delete</a></td>";  
        echo "</tr>";
        }
        ?>


    </tbody>
</table>
                    
                    
<?php 

if(isset($_GET['delete'])){
    $the_clients_id = $_GET['delete'];
    
    $query = "DELETE FROM clients WHERE clients_id = {$the_clients_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: clients.php");
}


?>
