<div class="slide">
    <div class="blank"></div>
    <div class="slideSastanak">

    <?php 
        $query = "SELECT * FROM slide";
        $query_slide = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_slide)){
            $slide_title = $row['slide_title'];
            $slide_content = $row['slide_content'];


    ?>

    <h1><?php echo $slide_title; ?></h1>
    <p><?php echo $slide_content; ?> </p>

    <?php } ?>


    <button type="submit" class="open_button" onclick="openForm()">ZAKAŽI SASTANAK</button>
        <div class="popup-forma" id="zakazi_sastanak">
            <form class="meeting" action="" method="post">
            <div class="meeting_content">
            <a href="index.php"><img src="Pop up - zakazi sastanak/x ikonica.svg" alt="close" id="close"></a>
            <img src="Logo GolinPG.svg" alt="GolinPG">
            <p>Zakažite sastanak sa nekim od naših poslodavaca</p>

            <input type="text" placeholder="Ime i prezime" name="name" required>
            <input type="text" placeholder="Firma" name="firma" required>
            <input type="email" placeholder="e-Mail" name="email" required>
            <input type="number" placeholder="Broj telefona" name="telefon" required>
                <div class="time">
                    <input type="date" placeholder="mm/dd/yy" name="date" required>
                    <input type="time" placeholder="10:00h" name="time" required>
                </div>
            <button type="submit" name="submit" class="close_button" onclick="closeForm()">ZAKAŽI SASTANAK</button>
            </div>
            </form>
        </div> 
           <?php 

                if(isset($_POST['submit'])){
                global $connection;
                $meeting_name = $_POST['name'];
                $meeting_firma = $_POST['firma'];
                $meeting_email = $_POST['email'];
                $meeting_telefon = $_POST['telefon'];
                $meeting_date = $_POST['date'];
                $meeting_time = $_POST['time'];

                $query = "INSERT INTO meetings(meeting_name,meeting_firma,meeting_email,meeting_telefon,meeting_date,meeting_time,meeting_status) ";
                $query .= "VALUES ('{$meeting_name}', '{$meeting_firma}', '{$meeting_email}', '{$meeting_telefon}', '{$meeting_date}', '{$meeting_time}', 'for approval')";
                $result = mysqli_query($connection, $query);

                    if(!$result){
                        die("Fail!") . mysqli_error($connection);
                    }

                $to = "ickaim@gmail.com";
                $subject = "New meeting";
                $txt = "Hello world!";
                $headers = "From: ickaim@gmail.com";

                mail($to,$subject,$txt,$headers);
                }


            ?>
           <script>
                function openForm() {
                    document.getElementById("zakazi_sastanak").style.display = "block";

                }

                function closeForm() {
                    document.getElementById("zakazi_sastanak").style.display = "none";
                }
                var modal = document.getElementById("zakazi_sastanak");
                window.onclick = function(event) {
                if (event.target == modal) {
                modal.style.display = "none";
                }
                }

            </script>


    </div>
    <div class="blank"></div>
    <div class="blank"></div>
</div>
