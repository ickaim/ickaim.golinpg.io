<!--  povezivanje sa bazom  -->  
<?php include "includes/db.php";?>

<!--  link za header-->
<?php include "includes/header.php";?>
  
<!--link za navigaciju-->  
<?php include "includes/navigation.php";?>  
   

<!--link za slide za zakazivanje sastanka-->
<?php include "includes/create_meeting.php";?>    

            
                        
<!--unos zakazivanja sastanka u bazu-->                   
<?php include "includes/functions.php";?>     
<?php createMeeting(); ?>
 
  

<?php include "includes/pr_and_communications.php";?> 


<!--Clients-->

<?php include "includes/clients.php ";?> 


<?php include "includes/about_us.php";?> 
    
    
<?php include "includes/offices.php";?>  
     
    
<?php include "includes/contact.php";?>   

   
<?php include "includes/footer.php";?>