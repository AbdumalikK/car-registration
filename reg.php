<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ro`yxatdan o`tkazish</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid bg-primary">
		<h1 class="text-center p-3 text-white">Ro`yxatdan o`tkazish</h1>
	</div>

	<div class="container mt-5">	
		<div class="col-4 d-inline offset-1"><h4 class="text-center mb-4">Haydovchi haqida malumot</h4>
		<form action="valid.php" method="POST">
			<div class="form-group">
				<input type="name" class="form-control" name="ism" id="ism" placeholder="Ismini kiriting">
			</div>
			<div class="form-group">
				<input type="surname" class="form-control" name="familiya" id="familiya" placeholder="Familiyani kiriting">
			</div>
			<div class="form-group mb-5">
				<input type="tel" class="form-control" name="tel" id="tel" placeholder="Telefon raqami">
			</div>
		<!-- </form> -->
		</div>
		<div class="col-4 d-inline offset-2"><h4 class="text-center mb-4">Moshina haqida malumot</h4>
		<!-- <form action="valid.php" method="POST"> -->
			<div class="form-group">
				<input type="text" class="form-control" name="mturi" id="mturi" placeholder="Moshina turi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="yili" id="yili" placeholder="Ishlab chiqarilgan yili">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="mraqami" id="mraqami" placeholder="Moshina raqami">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="mkimninomida" id="mkimninomida" placeholder="Moshina kimni nomida">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="mutgansanasi" id="mutgansanasi" placeholder="Moshina o`tgan sanasi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tex" id="tex" placeholder="Tex passporti">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="sugurta" id="sugurta" placeholder="Sug`urtasi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="sugurtamuddati" id="sugurtamuddati" placeholder="Sug`urta tugash sanasi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="akt" id="akt" placeholder="Gaz AKT">
			</div>
		<button type="submit" name="submit" class="btn btn-success">Ro`yxatdan o`tkazish</button>
		</form>
		</div>
	</div>
</body>
</html>