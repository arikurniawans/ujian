<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ujian Online</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="js/time.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	include 'template/nav.php';
	include 'template/box-soal.php';

	// include popup modal
	include 'template/popup-akhiri-ujian.php';
	include 'template/popup-ubah-password.php';
	include 'template/popup-logout.php';
	// include popup modal
	?>
</body>
</html>