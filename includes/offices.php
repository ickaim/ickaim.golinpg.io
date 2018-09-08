<div id="offices"> 
        <div class="blank"></div>
       <div class="offices">
        <h1 class="offices_active">OFFICES</h1>
        <div id="filter_offices">
            <button onclick="openOffice('emea',this)" class="filter_office offices_active" id="defaultOpen">EMEA</button>
            <button onclick="openOffice('amer',this)" class="filter_office">AMERICAS</button>
            <button onclick="openOffice('asia',this)" class="filter_office">ASIA</button>
        </div>
        
         <div id="emea" class="offices_gallery">
         <div id="gallery_grid">
          <?php 
            $query = "SELECT * FROM offices WHERE offices_continent LIKE '%EMEA%'";
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
            
            <div id="amer" class="offices_gallery">
            <div class="gallery_grid">
         <?php 
            $query = "SELECT * FROM offices WHERE offices_continent LIKE '%AMERICAS%'";
            $query_offices_amer = mysqli_query($connection, $query);
            
           while($row = mysqli_fetch_assoc($query_offices_amer)){
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
            
          <div id="asia" class="offices_gallery">
          <div class="gallery_grid">
         <?php 
            $query = "SELECT * FROM offices WHERE offices_continent LIKE '%ASIA%'";
            $query_offices_asia = mysqli_query($connection, $query);
            
           while($row = mysqli_fetch_assoc($query_offices_asia)){
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
            
           
        </div>
        
      
        <div class="blank"></div>       
    </div>
    
<script>
function openOffice(pageName,elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("offices_gallery");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("filter_office");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("offices_active","");
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.className = "offices_active";
    
}
    document.getElementById("defaultOpen").click();
</script>
