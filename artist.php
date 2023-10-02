<!DOCTYPE html>
<html>
<head>
	<title>Artist</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<h1 align="center" >Artist Info</h1>
<body style="background-color: bisque">
	<div>
		<form class="container">

			<div class="row">
				<div class="col-md-6">
					<label for="name">Last Name</label></br>
					<input type="texte" lastname="name" class="form-control" id="lastname"></br>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label for="name">First Name</label></br>
					<input type="texte" lastname="name" class="form-control" id="firstname"></br>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label for="nationality">Nationality</label></br>
					<input type="texte" nationality="nationality" class="form-control" id="nationality"></br>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label for="date of birth">Date of Birth</label></br>
					<input type="date" nationality="date of birth" class="form-control" id="date of bith"></br>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label for="date of decease">Date of Decease</label></br>
					<input type="date" nationality="date of decease" class="form-control" id="date of decease"></br>
				</div>
			</div>

			<div class="row">
		 		<div class="col-md-6">
		 			<button style="background-color: chocolate; border-color: chocolate" class="btn btn-success" type="submit"><a href="create.php" style="color: white">Create</a></button>
		 		</div>
		 		<div class="col-md-6">
		 			<button style="background-color: chocolate; border-color: chocolate; color: white" class="btn btn-warning" type="reset">Cancel</button>
		 		</div>
		 	</div>

		</form>
	</div>
</body>
</html>