 <div id="prand_communications">
      <div class="blank"></div>
      <div class="communications">
       <div class="pr_and_com">
       
       <?php 
           $query = "SELECT * FROM pr_and_communication WHERE category_id = 1 ";
           $select_pr = mysqli_query($connection,$query);
           
           while($row = mysqli_fetch_assoc($select_pr)){
               $pr_title = $row['pr_title'];
               $pr_content1 = $row['pr_content1'];
               $pr_content2 = $row['pr_content2'];
               $pr_content3 = $row['pr_content3'];
               $pr_image = $row['pr_image'];
           
           
        ?>
        <h1><?php echo $pr_title; ?></h1>
        <p><?php echo $pr_content1; ?></p>
        <p><?php echo $pr_content2; ?></p>
        <p><?php echo $pr_content3; ?></p>
        </div>
        <div class="pr_image1">
        <img src="Fotke/<?php echo $pr_image; ?>" alt="fotka2" class="fotka2">
        </div>
        <?php } ?>
        <?php 
           $query = "SELECT * FROM pr_and_communication WHERE category_id = 2 ";
           $select_pr = mysqli_query($connection,$query);
           
           while($row = mysqli_fetch_assoc($select_pr)){
               $pr_title = $row['pr_title'];
               $pr_content1 = $row['pr_content1'];
               $pr_content2 = $row['pr_content2'];
               $pr_content3 = $row['pr_content3'];
               $pr_image = $row['pr_image'];
           
           
        ?>
        <div class="pr_image2">
        <img src="Fotke/<?php echo $pr_image; ?>" alt="fotka3" class="fotka3">
        </div>
        <div class="ev_man">
        <h1><?php echo $pr_title; ?></h1>
        <p><?php echo $pr_content1; ?></p>
        <p><?php echo $pr_content2; ?></p>
        <p><?php echo $pr_content3; ?></p>
        </div>
        <?php } ?>
      </div>
      

      <div class="blank"> </div>
    </div> 