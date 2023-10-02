<?php
if (isset($_POST['create_post'])) {
	
$movie_title = $_POST['title'];

$movie_director = $_POST['director'];
$movie_description = $_POST['description'];
$movie_actor = $_POST['actor'];
$movie_date = date('d-m-y');
$movie_image = $_FILES['image']['name'];
$movie_image_temp = $_FILES['image']['tmp_name'];
$movie_category = $_POST['category'];
$movie_comment = 5;

move_uploaded_file($movie_image_temp, "../images/project/$movie_image");

$query = "INSERT INTO public.movie(
	title, directorname, description, majoractor, customerreview, category, postdate, mpicture)
	VALUES ('{$movie_title}', '{$movie_director}', '{$movie_description}', '{$movie_actor}', '{$movie_comment}', '{$movie_category}', now(), '{$movie_image}')";

 $result = pg_query($db_connection,$query);
                             if ($result) {
                                 echo "Publish succesfull!!!";
                             }


}



?>


<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Movie Name</label>
		<input type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="director">Movie Director</label>
		<input type="text" class="form-control" name="director">
	</div>

	<div class="form-group">
		<label for="description">Movie Description</label>
		<textarea class="form-control" name="description" id="" cols="30" rows="10"> </textarea>
	</div>

	<div class="form-group">
		<label for="actor">Movie Major Actor</label>
		<input type="text" class="form-control" name="actor">
	</div>

	<div class="form-group">
		<label for="date">Released Date</label>
		<input type="date" class="form-control" name="postdate">
	</div>

	<div class="form-group">
		<label for="image">Movie Image</label>
		<input type="file" class="form-control" name="image">
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
		<input class="btn btn-primary" type="submit" name="create_post" value="Publish post">
		
	</div>
	

</form>