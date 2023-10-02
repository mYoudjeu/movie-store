<?php  
include "include/admin_header.php"
?>
<?php include"../include/db.php" ?>
 

    <div id="wrapper">



        <!-- Navigation -->
<?php  
include "include/admin_Navigation.php"
?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All Posts
                            <small>Author</small>
                        </h1>

<?php

if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = '';
}

switch ($source) {
    case 'add_posts':
        include "include/add_posts.php";
        break;

        case 'edit.php':
            include "include/edit.php";
            break;
    
    default:
        include "include/view_all_posts.php";
        break;
}







?>




                        <!--<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>-->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php
    include "include/admin_footer.php";
    ?>