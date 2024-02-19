
<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | Home Page</title>
	
	<!-- <script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<!--// Meta tag Keywords -->


<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Popper JS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>



	<script type="text/javascript" src='js/bootstrap.js'></script>
	<script src="Scripts/umd/popper.min.js"></script>

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- slider -->
	<link rel="stylesheet" href="css/slider.css" type="text/css" media="all" />

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
	<?php include('includes/header.php');?>

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>
									<span>Every drops counts</span>
									  donate blood and make a difference 
								</h3>
								
							</div>
						</div>
					</div>
				</li>
				<li>
					<!-- <div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Your donation may be a<span>drop in the bucket</span> , but to someone in need, it could mean the world
									
								</h3>
						
							</div>
						</div>
					</div> -->
				</li>
				<li>
					<!-- <div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<div class="container">
						
							</div>
						</div>
					</div> -->
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h3 class="text-white my-3">High professional doctors</h3>
				<p>all specialists have extensive practical experience and regularly training courses in educational centers of the
					world</p>
			</div>
			<div class="button">
				<a href="about.php" class="w3ls-button-agile" style="background-color:white">Read More
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->
	<!-- blog -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Some of the Donar</h3>
				<span>
					<i class="fas fa-user-md text-white"></i>
				</span>
			</div>
			<div class="row package-grids mt-5">
				<?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
				<div class="col-md-4 pricing" style="margin-top:2%;">
					
					<div class="price-top">
					
							<img src="images/125183604-avatar-white-flat-simple-icon-with-shadow.jpg" alt="" class="img-fluid" />
					
						<h3><?php echo htmlentities($result->FullName);?>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark1 mb-3">Gender: <?php echo htmlentities($result->Gender);?></h4>
						<p class="card-text text-dark1  fs-6 "><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
						
						<a class="btn btn-primary" style="color:#fff" href="contact-blood.php?cid=<?php echo $result->id;?>">Request</a>
					</div>
				</div><?php }} ?>
			
			
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- slider -->
	<div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="image/img1.jpg">
                <div class="content">
                    <div class="author">WHY TO DONATE?</div>
                    <div class="title">Saving Lives</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Blood donation directly contributes to saving lives. Donated blood is used in various medical procedures, surgeries, and treatments for patients suffering from illnesses, accidents, or undergoing major surgeries.
                    </div>
                    <div class="buttons">
                        <button>DONATE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="author">WHY TO DONATE?
					</div>
                    <div class="title">Heatlh Benefits</div>
                    <div class="des">
					Regular blood donation can have health benefits for donors. It stimulates the body to produce new blood cells, which can help in maintaining good health, reducing the risk of certain illnesses, and even lowering the risk of cardiovascular diseases.                    </div>
                    <div class="buttons">
					<button>DONATE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="author">WHY TO DONATE?
					</div>
                    <div class="title">Felling of Fullfillment</div>
                    <div class="des">
					Many donors report feeling a sense of fulfillment and satisfaction after donating blood, knowing that their contribution has the potential to save lives and positively impact someone else's life.                    </div>
                    <div class="buttons">
					<button>DONATE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="author">WHY TO DONATE?
					</div>
                    <div class="title">Recognition and Appreciation</div>
                    <div class="des">
					Blood donation centers and organizations often recognize and appreciate donors for their contributions. This acknowledgment can range from simple thank-you notes to certificates of appreciation, fostering a sense of value and recognition for donors' efforts.                    </div>
                    <div class="buttons">
					<button>DONATE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="image/img1.jpg">
                <div class="content">
                    <div class="title">
						Saving Lives
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="title">
					Heatlh Benefits
                    </div>
                    
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="title">
					Felling of Fullfillment
                    </div>
                    
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="title">
					 Appreciation
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>

	<!-- //slider -->

	<!-- footer -->
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
	<script src="js/slider-index.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>