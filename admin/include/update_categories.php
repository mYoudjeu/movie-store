  <form action="" method="post">
                        <div class="form-group">
                          <label for="cat_title">
                              
                            Edit Category
                          </label> 

 <?php

if (isset($_GET['edit'])) {

    $cat_id = $_GET['edit'];
     $query = "SELECT * FROM categories WHERE catid = $cat_id ";
$select_categories = pg_query($db_connection,$query);


while($row = pg_fetch_assoc( $select_categories))
{

$cat_id = $row['catid'];
$cat_title = $row['cattype'];

?>

<input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" type="text" class="form-control" name="cat_title">

<?php }} ?>

<?php


    if(isset($_POST['Update_category'])){
        $the_cat_title = $_POST['cat_title'];
        $query = "UPDATE categories SET cattype = '{$the_cat_title}' WHERE catid = {$cat_id} ";
        $update_query = pg_query($db_connection,$query);
        
        if(!$update_query)
            die("query failed");

    }

?>
  
                         

                            </div>   
                           <div class="form-group">
                           <input class="btn btn-primary" type="submit" name="Update_category" value="Update Category"> </div>   

                        </form>