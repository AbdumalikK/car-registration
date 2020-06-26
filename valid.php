<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ro`yxatdan o`tdi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<?php 

include 'config.php';

if (isset($_POST['submit'])) {

	if (empty($_POST['ism'])) {
		echo "Ism bo`sh bo`lmasligi kerak";
		die();
	} else {
		$ism = $_POST['ism'];
		if (!preg_match("/^[a-zA-Z]*$/", $ism)) {
			echo "Ism faqatgina 'a-zA-Z' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['familiya'])) {
		echo "familiya bo`sh bo`lmasligi kerak";
		die();
	} else {
		$familiya = $_POST['familiya'];
		if (!preg_match("/^[a-zA-Z]*$/", $familiya)) {
			echo "familiya faqatgina 'a-zA-Z' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['tel'])) {
		echo "tel bo`sh bo`lmasligi kerak";
		die();
	} else {
		$tel = $_POST['tel'];
		if (!preg_match("/^[0-9\+]*$/", $tel)) {
			echo "tel faqatgina '0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['mturi'])) {
		echo "mturi bo`sh bo`lmasligi kerak";
		die();
	} else {
		$mturi = $_POST['mturi'];
		if (!preg_match("/^[a-zA-Z0-9-]*$/", $mturi)) {
			echo "mturi faqatgina 'a-zA-Z0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['yili'])) {
		echo "yili bo`sh bo`lmasligi kerak";
		die();
	} else {
		$yili = $_POST['yili'];
		if (!preg_match("/^[0-9]*$/", $yili)) {
			echo "yili faqatgina '0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['mraqami'])) {
		echo "mraqami bo`sh bo`lmasligi kerak";
		die();
	} else {
		$mraqami = $_POST['mraqami'];
		if (!preg_match("/^[a-zA-Z0-9\s]*$/", $mraqami)) {
			echo "mraqami faqatgina 'a-zA-Z0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['mkimninomida'])) {
		echo "mkimninomida bo`sh bo`lmasligi kerak";
		die();
	} else {
		$mkimninomida = $_POST['mkimninomida'];
		if (!preg_match("/^[a-zA-Z\s]*$/", $mkimninomida)) {
			echo "mkimninomida faqatgina 'a-zA-Z' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['mutgansanasi'])) {
		echo "mutgansanasi bo`sh bo`lmasligi kerak";
		die();
	} else {
		$mutgansanasi = $_POST['mutgansanasi'];
		if (!preg_match("/^[.0-9]*$/", $mutgansanasi)) {
			echo "mutgansanasi faqatgina '0-9 .' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['tex'])) {
		echo "tex bo`sh bo`lmasligi kerak";
		die();
	} else {
		$tex = $_POST['tex'];
		if (!preg_match("/^[a-zA-Z0-9\s]*$/", $tex)) {
			echo "tex faqatgina 'a-zA-Z0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['sugurta'])) {
		echo "sugurta polya bo`sh bo`lmasligi kerak";
		die();
	} else {
		$sugurta = $_POST['sugurta'];
		if (!preg_match("/^[a-zA-Z]*$/", $sugurta)) {
			echo "sugurta polyaga faqatgina 'a-zA-Z' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['sugurtamuddati'])) {
		echo "sugurtamuddati polya bo`sh bo`lmasligi kerak";
		die();
	} else {
		$sugurtamuddati = $_POST['sugurtamuddati'];
		if (!preg_match("/^[a-zA-Z0-9]*$/", $sugurtamuddati)) {
			echo "sugurtamuddati polyaga faqatgina 'a-zA-Z0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}

	if (empty($_POST['akt'])) {
		echo "akt bo`sh bo`lmasligi kerak";
		die();
	} else {
		$akt = $_POST['akt'];
		if (!preg_match("/^[.a-zA-Z0-9]*$/", $akt)) {
			echo "akt faqatgina 'a-zA-Z0-9' shu ishoralarni berishingiz mumkin";
			die();
		}
	}


	$sql = "INSERT INTO users (ism, familiya, tel, mturi, yili, mraqami, mkimninomida, mutgansanasi, tex, sugurta, sugurtamuddati, akt) VALUES ('$ism', '$familiya', '$tel', '$mturi', '$yili', '$mraqami', '$mkimninomida', '$mutgansanasi', '$tex', '$sugurta', '$sugurtamuddati', '$akt')";

	$result = mysqli_query($connect, $sql);
	if($result) {
		echo '<div class="container-fluid bg-primary">
			<h3 class="text-center p-3 text-white">Foydalanuvchi ro`yxatdan o`tkazildi</h3>
			<h3 class="text-center pb-3 text-white">Raxmat :-)</h3>
	          </div>';
	} else {
		echo "Malumot yuborilmadi";
	}
}

 ?>
 </body>
</html>