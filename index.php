<!DOCTYPE html>
<html>
<head>
	<title>Dr. Piro | Home</title>
	<!-- include Bootstrap CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<!-- include custom CSS -->
	<link rel="stylesheet" href="public/css/custom.css">
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/banner.css">
	<link rel="stylesheet" href="public/css/sponsors.css">
	<link rel="stylesheet" href="public/css/agenda.css">

	<link rel="stylesheet" href="public/css/footer.css">

</head>
<!-- Body -->
<body>

	<?php include 'views/partials/header.php'; ?>


	<?php include('views/partials/banner.php'); ?>
	<?php include('views/partials/sponsors.php'); ?>
	<?php include('views/partials/agenda.php'); ?>

	<?php include 'views/partials/footer.php'; ?>


	
	<!-- include jQuery, Popper.js, and Bootstrap JavaScript -->
	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/popper.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="public/js/custom.js"></script>
<script>
const slides = document.querySelectorAll('.banner-slider .slide');
let current = 0;

setInterval(() => {
    slides[current].classList.remove('active');

    current = (current + 1) % slides.length;

    slides[current].classList.add('active');
}, 5000); // Change every 5 seconds
</script>
</body>
</html>
