<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category</th>
            <th>Title</th>
            <th>Content first</th>
            <th>Content second</th>
            <th>Content third</th>
            <th>Content image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

       <?php 

        $query = "SELECT * FROM pr_and_communication";
        $select_pr= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_pr)){
        $pr_id = $row['pr_id'];
        $category_id = $row['category_id'];
        $pr_title = $row['pr_title'];
        $pr_content1 = $row['pr_content1'];
        $pr_content2 = $row['pr_content2'];
        $pr_content3 = $row['pr_content3'];
        $pr_image = $row['pr_image'];

        echo "<tr>"; 
        echo "<td>$pr_id</td>";
        echo "<td>$category_id</td>";
        echo "<td>$pr_title</td>";
        echo "<td>$pr_content1</td>";
        echo "<td>$pr_content2</td>";
        echo "<td>$pr_content3</td>";
        echo "<td><img width='100px' src='../Fotke/$pr_image' alt='image'></td>";
            
        echo "<td><a href='pr_and_event.php?source=edit_pr_and_event&pr_id={$pr_id}'>Edit</a></td>";
        echo "<td><a href='pr_and_event.php?delete=$pr_id'>Delete</a></td>";  
        echo "</tr>";
        }
        ?>


    </tbody>
</table>
                    
                    
<?php 

if(isset($_GET['delete'])){
    $the_pr_id = $_GET['delete'];
    
    $query = "DELETE FROM pr_and_communication WHERE pr_id = {$the_pr_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: pr_and_event.php");
}


?>
