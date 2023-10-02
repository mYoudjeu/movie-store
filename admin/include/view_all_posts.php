<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Movie Name</th>
                                    <th>Movie Director</th>
                                    <th>Movie Description</th>
                                    <th>Movie Major Actor</th>
                                    <th>Released Date</th>
                                    <th>Movie Image</th>
                                    <th>Movie Category</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                             <tbody>
       <?php
  $query = "SELECT * FROM movie";
    $select_post = pg_query($db_connection,$query);
                    

     while($row = pg_fetch_assoc( $select_post))
{

$movie_id = $row['id'];
$movie_name = $row['title'];
$movie_director = $row['directorname'];
$movie_actor = $row['majoractor'];
$movie_category = $row['category'];
$movie_date = $row['postdate'];
$movie_picture = $row['mpicture'];
$movie_description = $row['description'];
$movie_comments = $row['customerreview'];

echo "<tr>";
echo "<td>{$movie_id}</td>";
echo "<td>{$movie_name}</td>";
echo "<td>{$movie_director}</td>";
echo "<td>{$movie_description}</td>";
echo "<td>{$movie_actor}</td>";
echo "<td>{$movie_date}</td>";
echo "<td><img width='100' height=150px src='../images/project/${movie_picture}' alt='image'></td>";


$query = "SELECT * FROM categories WHERE catid = {$movie_category} ";
$select_categories = pg_query($db_connection,$query);


while($row = pg_fetch_assoc( $select_categories))
{

$cat_id = $row['catid'];
$cat_title = $row['cattype'];


echo "<td>{$cat_title}</td>";


}



echo "<td>{$movie_comments}</td>";
echo "<td><a href='post.php?source=edit.php&p_id={$movie_id}'>Edit</a></td>";
echo "<td><a href='post.php?delete={$movie_id}'>Delete</a></td>";
echo "</tr>";



}

       ?>
            
    </tbody>

    </table>

   <?php
   if (isset($_GET['delete'])) {
      $post_id = $_GET['delete'];

      $query = "DELETE FROM movie WHERE id = {$post_id}";
      $delet_query = pg_query($db_connection,$query);
   }


   ?> 