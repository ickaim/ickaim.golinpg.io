
 <div id="clients">
       <div class="blank"></div>
       <div class="clients">
      
        <h1>CLIENTS</h1>
        <div id="black_line"></div>
        <div class="clients_galery">
          
          
       <?php 
            $query = "SELECT * FROM clients";
            $query_clients = mysqli_query($connection, $query);
            
           while($row = mysqli_fetch_assoc($query_clients)){
               $clients_image = $row['clients_image'];
               $clients_image_title = $row['clients_image_title'];

            ?>
          
           <div class="galery_slides">
            <img src="Fotke clients/<?php echo $clients_image ;?>" alt="">
            <div class="image_text"><?php echo $clients_image_title;?></div>
            </div>
      
          <?php } ?>
          
      
        </div>
        <div style="text-align:center">
          <span class="dot active" onclick="currentSlide(1)" ></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        </div>
        <div class="blank"></div>   
    </div>

    
<!--
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex = n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("galery_slides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length-i; i=i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }
</script>
-->
