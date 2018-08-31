<?php include "includes/admin_header.php"; ?>
<div id="wrapper">  
       
        <!-- Navigation -->
        
<?php include "includes/admin_navigation.php"; ?>      
        

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                   <h1 class="page-header">
                        Welcome to offices
                    </h1>

                    <?php 
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }
                    
                    switch($source){
                            
                            
                        case 'add_offices';
                        include "includes/add_offices.php";
                        break;
                        
                        default:
                           include "includes/view_all_offices.php";
                            break;
                    }
                    
                    
                    
                    ?> 

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>



    <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

<?php include "includes/admin_footer.php"; ?>