<div id="about_us">
        <div class="blank"></div>
        <div class="about_us">
            <img src="go-all-in.gif" alt="GO_ALL_IN">
            <h3>WE ARE THE RELEVANCE AGENCY.</h3>
            <p><strong>We’re relevance obsessed. More importantly, we’re relevance equipped.</strong></p>
            <p>We are an integrated agency with PR, Digital and Content at our core. Our ambition is to create change through brave, relevant work worthy of awe, action and awards. By embracing new technologies and pushing creative boundaries, we help our clients adapt and win in a constantly evolving world.</p>
            <p>We are committed to delivering the deepest insights, boldest ideas and broadest engagement to the world’s leading brands through seamless integrated communications.</p>
            <p>We’re the nice guys who kick ass.</p>
            
            <div class="about_us_slides">
               
               <?php 
                $query = "SELECT * FROM about_us";
                $query_about_us = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_about_us)){
                $about_us_image = $row['about_us_image'];
                $about_us_title = $row['about_us_title'];
                $about_us_content = $row['about_us_content'];   
                
                ?>
                  
                <div id="about_krugovi">
                <img src="Ikonice krugovi/<?php echo $about_us_image; ?>" alt="krug">
                <h1><?php echo $about_us_title; ?></h1>
                <p> <?php echo $about_us_content; ?> </p>
                </div>
                
                  <?php } ?>
                
            </div>
        </div>
        <div class="blank"></div>
    </div>

    
   

         
        

