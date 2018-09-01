<div id="offices"> 
        <div class="blank"></div>
       <div class="offices">
        <h1 class="offices_active">OFFICES</h1>
        <ul>
            <li><a href="" class="offices_active">EMEA</a></li>
            <li><a href="">AMERICAS</a></li>
            <li><a href="">ASIA</a></li>
        </ul>
        
        <div class="offices_galery">
           <?php 
            $query = "SELECT * FROM offices WHERE offices_continent = 'EMEA'";
            $query_offices = mysqli_query($connection, $query);
            
           while($row = mysqli_fetch_assoc($query_offices)){
               $offices_image = $row['offices_image'];
               $offices_image_name = $row['offices_image_name'];

            ?>
           <div class="offices_slides">
            <img src="Fotke offices/<?php echo $offices_image ;?>" alt="<?php echo $offices_image_name ;?>">
            <div class="offices_image_text"><?php echo $offices_image_name ;?></div>
            </div>
            
            <?php } ?>
        </div>
        </div>
        <div class="blank"></div>       
    </div>
