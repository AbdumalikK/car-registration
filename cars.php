<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Moshinalar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid bg-primary">
		<h1 class="text-center p-3 text-white">Moshinalar ro`yxati</h1>
	</div>

	<div class="container">	
       <div class="col-4 float-right mt-4 mb-5">
       	<form class="form-inline">
          <input class="form-control" type="text" placeholder="Kiriting..." aria-label="Search">
          <button class="btn btn-info" type="submit">Qidirish</button>
        </form>
       </div>


<?php 

include "config.php";

$sql = "SELECT * FROM users";

$result = mysqli_query($connect, $sql);



	echo "<div class='table-responsive-sm'>
    <table class='table table-bordered'>
      <thead>
        <tr>
        <th>ID</th>
        <th>Ism</th>
        <th>Familiya</th>
        <th>Tel</th>
        <th>Moshina</th>
        <th>Yili</th>
        <th>Raqami</th>
        <th>Egasi</th>
        <th>O`tgan sanasi</th>
        <th>Tex passport</th>
        <th>Sug`urta</th>
        <th>Sug`urta tugash</th>
        <th>Gaz AKT</th>
        </tr>
      </thead>";

      while ($a = mysqli_fetch_assoc($result)) {
        echo "<tbody> <tr>";

        echo "
          <td>".$a['id']."</td>
          <td>".$a['ism']."</td>
          <td>".$a['familiya']."</td>
          <td>".$a['tel']."</td>
          <td>".$a['mturi']."</td>
          <td>".$a['yili']."</td>
          <td>".$a['mraqami']."</td>
          <td>".$a['mkimninomida']."</td>
          <td>".$a['mutgansanasi']."</td>
          <td>".$a['tex']."</td>
          <td>".$a['sugurta']."</td>
          <td>".$a['sugurtamuddati']."</td>
          <td>".$a['akt']."</td>
        </tr>";
        }

        echo "      
      </tbody>
    </table>
  </div>";

?>


	</div>
</body>
</html>