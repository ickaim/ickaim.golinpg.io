<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Ime i prezime</th>
            <th>Firma</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Datum</th>
            <th>Vrijeme</th>
            <th>Status</th>
            <th>Approve</th>
            <th>Unapprove</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

       <?php 

        $query = "SELECT * FROM meetings";
        $select_meetings = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_meetings)){
        $meeting_id = $row['meeting_id'];
        $meeting_name = $row['meeting_name'];
        $meeting_firma = $row['meeting_firma'];
        $meeting_email = $row['meeting_email'];
        $meeting_telefon = $row['meeting_telefon'];
        $meeting_date = $row['meeting_date'];
        $meeting_time = $row['meeting_time'];
        $meeting_status = $row['meeting_status'];

        echo "<tr>"; 
        echo "<td>$meeting_id</td>";
        echo "<td>$meeting_name</td>"; 
        echo "<td>$meeting_firma</td>";    
        echo "<td>$meeting_email</td>";
        echo "<td>$meeting_telefon</td>";
        echo "<td>$meeting_date</td>"; 
        echo "<td>$meeting_time</td>"; 
        echo "<td>$meeting_status</td>";
            
        echo "<td><a href='meeting.php?approve=$meeting_id'>Approve</a></td>";
        echo "<td><a href='meeting.php?unapprove=$meeting_id'>Unapprove</a></td>";
        echo "<td><a href='meeting.php?delete=$meeting_id'>Delete</a></td>";  
        echo "</tr>";
        }
        ?>


    </tbody>
</table>
                    
                    
<?php 

if(isset($_GET['approve'])){
    $the_meeting_id = $_GET['approve'];
    
    $query = "UPDATE meetings SET meeting_status = 'Approve' WHERE meeting_id = $the_meeting_id";
    $approve_meeting_query = mysqli_query($connection, $query);
    header("Location: meeting.php");
}

if(isset($_GET['unapprove'])){
    $the_meeting_id = $_GET['unapprove'];
    
    $query = "UPDATE meetings SET meeting_status = 'Unapprove' WHERE meeting_id = $the_meeting_id";
    $unapprove_meeting_query = mysqli_query($connection, $query);
    header("Location: meeting.php");
}

if(isset($_GET['delete'])){
    $the_meeting_id = $_GET['delete'];
    
    $query = "DELETE FROM meetings WHERE meeting_id = $the_meeting_id";
    $delete_meeting_query = mysqli_query($connection, $query);
    header("Location: meeting.php");
}


?>
