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
                            Welcome to Admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">

                            <?php
                            if(isset($_POST['submit']))
                            {
                            $cat_title = $_POST['cat_title'];

                            if($cat_title == "" || empty($cat_title))
                            {
                                echo "This field should not be empty";
                            }
                            else
                            {
                             $query = "INSERT INTO public.categories(cattype) VALUES('$cat_title')";
                           

                             $result = pg_query($db_connection,$query);
                             if ($result) {
                                 echo "NICE!!";
                             }
                             

                            }

                            }

                            ?>


                        <form action="" method="post">
                        <div class="form-group">
                          <label for="cat_title">
                              
                            Add New Category
                          </label>  
                           <input type="text" class="form-control" name="cat_title"> </div>   
                           <div class="form-group">
                           <input class="btn btn-primary" type="submit" name="submit" value="Add Category"> </div>   

                        </form>

                        <?php
                        if (isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];

                            include "include/update_categories.php";
                        }
                        ?>



                    </div>

                    <div class="col-xs-6">
 

                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr>
                                 <th>Id</th>
                                 <th>Category Title</th>
                             </tr>
                         </thead>
                         <tbody>
    <?php

         $query = "SELECT * FROM categories";
    $select_all_categories = pg_query($db_connection,$query);
                    

     while($row = pg_fetch_assoc( $select_all_categories))
{

$cat_id = $row['catid'];
$cat_title = $row['cattype'];
echo "<tr>";
echo "<td>{$cat_id}</td>";
echo "<td>{$cat_title}</td>";
echo "<td><a href='categories.php?delete={$cat_id}'>Delete</td>";
echo "<td><a href='categories.php?edit={$cat_id}'>Edit</td>";
echo "</tr>";
}

?>

<?php
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE catid = {$the_cat_id} ";
        $delete_query = pg_query($db_connection,$query);

    }
?>
                            
                         </tbody>

                     </table>     

                    </div>



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