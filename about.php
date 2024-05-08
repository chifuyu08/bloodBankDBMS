<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- <?php include('includes/header.php');?> -->
	<!-- about -->
	<section class="about">
		<div class=" container py-xl-2 py-lg-2">
		<div class=" main-box w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">Who We Are?</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="py-3 plain-text">Our mission is to create a centralized platform that connects blood donors with those in need, making the process of blood donation more efficient and accessible. Through our website, we aim to promote awareness and educate the public on the importance of regular blood donation. By leveraging technology to streamline the process and connect donors with recipients in real-time, we hope to make a positive impact on the lives of those in need of life-saving blood transfusions.</p>
			</div>		
		</div>
		<div class="team-members">OUR AMAZING TEAM</div>

	  <div class="about-team">	
		<div class="card-container">
			<span class="pro">MEMBER</span>
			 <img class="round  image-member" src="images\WhatsApp Image 2024-02-14 at 21.39.53_58d377ca.jpg" alt="user" />
			<h3>Sujal Payal </h3>
			<h6>Delhi</h6>
			<p class="para">The NIE- CSE branch</p>
			<div class="buttons">
				<br>
				<a href="https://www.linkedin.com/in/sujal-payal-887656258/">
				<button class="primary">
					Message
				</button>
				</a>
			</div>
		</div>
		<div class="card-container">
			 <span class="pro">MEMBER</span>
			<img class="round image-member" src="images\sathvik.jpg" alt="user" /> 
			<h3>Sathvik</h3>
			<h6>Bengaluru</h6>
			<p class="para">The NIE- CSE branch</p>
			<div class="buttons">
			<br>
				<button class="primary">
					Message
				</button>
			</div>
		</div>
	  </div>
	</section>
	
	
	



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>