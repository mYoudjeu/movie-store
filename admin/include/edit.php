<?php

if (isset($_GET['p_id'])){

$post_id = $_GET['p_id'];



}

 $query = "SELECT * FROM movie WHERE id=$post_id ";
    $select_post_by_id = pg_query($db_connection,$query);
                    

     while($row = pg_fetch_assoc( $select_post_by_id))
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

}

if (isset($_POST['update_post'])) {
	
	$movie_name = $_POST['title'];
	$movie_director = $_POST['director'];
	$movie_description = $_POST['description'];
	$movie_actor = $_POST['actor'];
	$movie_date = $_POST['postdate'];
	$movie_image = $_FILES['image']['name'];
	$movie_image_temp = $_FILES['image']['tmp_name'];
	$movie_category = $_POST['category'];

	move_uploaded_file($movie_image_temp, "../images/project/$movie_image");

	if (empty($movie_image)) {
		$query = "SELECT * FROM movie WHERE id = $post_id";
		$select_image = pg_query($db_connection,$query);

		while ($row = pg_fetch_array($select_image)) {
			$movie_image = $row['mpicture'];
		}
	}


$query = "UPDATE public.movie
	SET title='$movie_name', directorname='$movie_director', description='movie_description', majoractor='$movie_actor', category='$movie_category', postdate=now(), mpicture='$movie_image' WHERE id='$post_id' ";



	$update_post = pg_query($db_connection,$query);

	if ($update_post) {
		echo "waouh waouh";
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Movie Name</label>
		<input value="<?php echo $movie_name ?>" type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="director">Movie Director</label>
		<input value="<?php echo $movie_director ?>" type="text" class="form-control" name="director">
	</div>

	<div class="form-group">
		<label for="description">Movie Description</label>
		<textarea class="form-control" name="description" id="" cols="30" rows="10"> <?php echo $movie_description ?> </textarea>
	</div>

	<div class="form-group">
		<label for="actor">Movie Major Actor</label>
		<input value="<?php echo $movie_actor ?>" type="text" class="form-control" name="actor">
	</div>

	<div class="form-group">
		<label for="date">Released Date</label>
		<input value="<?php echo $movie_date ?>" type="date" class="form-control" name="postdate">
	</div>

	<div class="form-group">
		<label for="image">Movie Image</label>
		<img width="100" height="130px" src="../images/project/<?php echo $movie_picture;  ?>" alt = "">
		<input type="file" name="image">
	</div>

	<div class="form-group">
		<label for="image">Movie Category</label>
		<select name="category" id="">
			

			<?php

$query = "SELECT * FROM categories ";
$select_categories_id = pg_query($db_connection,$query);


while($row = pg_fetch_assoc( $select_categories_id))
{

$cat_id = $row['catid'];
$cat_title = $row['cattype'];

echo "<option value='$cat_id'>{$cat_title}</option>";

}
			 ?>




		</select>

	</div>

	
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="update_post" value="Publish post">
		
	</div>
	

</form>