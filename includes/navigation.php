<?php include "includes/login.php";?>
<div class="header1">
    <div class="blank"></div>
    <div class="socialNetwork">
        <ul>
            <li><a href="#"><img src="Ikonice drustvene mreze/instagram.svg" alt="Instagram"></a></li>
            <li><a href="#"><img src="Ikonice drustvene mreze/linkedin.svg" alt="Linkedin"></a></li>
            <li><a href="#"><img src="Ikonice drustvene mreze/twiter.svg" alt="Twiter"></a></li>
            <li><a href="#"><img src="Ikonice drustvene mreze/fb.svg" alt="Fb"></a></li>
        </ul>
    </div>
    <div class="blank"></div>
</div>
<div class="header2">
    <div class="blank"></div>
    <div class="navigation">
        <ul>

           <?php 
            if($_SESSION['user_role'] && $_SESSION['user_role'] == 'admin'){

            ?>
                <li><a href="admin/index.php">Admin</a></li> 


           <?php } else {  ?>

            <li><button type="submit" onclick="openLogin()">LOGIN</button></li>

            <?php } ?>

            <?php 
            $query = "SELECT * FROM category ORDER BY category_id DESC";
            $query_desc = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_desc)){
                $category_id = $row['category_id'];
                $category_title = $row['category_title'];
                $category_link_id = $row['category_link_id'];


            ?>

            <li><a href="#<?php echo $category_link_id;?>"><?php echo $category_title;?></a></li>    

            <?php }?>

            <li style="float:left;"><img src="Logo GolinPG.svg" alt="GolinPG"></li>
        </ul>
        
       <div id="login" class="login">
            <span onclick="close()" class="close" title="Close">&times;</span>
            <form class="login_form" action="includes/login.php" method="post">
               <div class="login_content">
                <a href="index.php"><img src="Pop up - zakazi sastanak/x ikonica.svg" alt="close" id="close"></a>
                <img src="Logo GolinPG.svg" alt="GolinPG">
                <input type="username" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="login" onclick="closeLogin()" class="btnLogin">LOGIN</button> 
                </div>      
            </form>    
        </div></div></div>

        <script>
            function openLogin(){
                document.getElementById("login").style.display = "block";

            }
            function closeLogin(){
                document.getElementById("login").style.display = "none";
            }
            function close(){
                document.getElementById("login").style.display = "none";
            }
            var modal = document.getElementById("login");

                window.onclick = function(event) {
                if (event.target == modal) {
                modal.style.display = "none";
                }
            }
        </script>


    </div>
    <div class="blank"></div>
</div>
    
 
              
