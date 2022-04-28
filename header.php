<?php
session_start();
$dt = date("Y-m-d");
$dttim = date("Y-m-d H:i:s");
error_reporting(0);
include("dbconnection.php");
if(isset($_SESSION["studentid"]))
{
	$sqlstudentprofile = "SELECT * FROM student where studentid='$_SESSION[studentid]' ";
	$qsqlstudentprofile = mysqli_query($con,$sqlstudentprofile);
	$rsstudentprofile = mysqli_fetch_array($qsqlstudentprofile);
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> CMS24x7 - </title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js -->
	
	
	<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
	<!-- for banner-->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<!-- //custom-theme files-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //custom-theme files-->
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //fonts -->

</head>

<body>
<?php
if(basename($_SERVER['PHP_SELF']) =="index.php" || basename($_SERVER['PHP_SELF']) =="aboutus.php" || basename($_SERVER['PHP_SELF']) =="contactus.php")
{
?>	
     <!--banner-->
	<div class="banner-w3l" id="home">
		<div class="header-main-agile">
			<div class="header-right-w3l">
				<div class="container">
					<ul>
						<li style='color:black;'>
							<span class="fa fa-home" aria-hidden="true"></span>SOURASHTRA COLLEGE(AUTONOMOUS),VILACHERY,MAINROAD,MADURAI-625-004.
						</li>
						<li style='color:black;'>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							sou.cs.aided@gmail.com
						</li>
						<li style='color:black;'>
							<span class="fa fa-phone" aria-hidden="true"></span> 0452-2370872,0452-2371112
							
						</li>
					</ul>
				</div>
			</div>
			<!-- navigation -->
			<div class="nav-links">
				<div class="container">
	<?php
	include("menu.php");
	?>
				</div>
			</div>
			<!-- /navigation -->
		</div>

		<div class="wrapper">
			<ul id="sb-slider" class="sb-slider">
				<li>
					<a href="#">
						<img src="images/AlvasCollage.jpg" alt="image1"  style="max-width: 1500px; height:600px;"/>
					</a>
					<div class="sb-description">
						<h3>CMS<span>24x7</span></h3>
					<p style="font-size: 15px;">College Management System</p>
						<i></i>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="images/Alvas6.jpg" alt="image2"  style="max-width: 1500px; height:600px;"/>
					</a>
					<div class="sb-description">
						<h4>CMS<span>24x7</span></h4>
						<p style="font-size: 15px;">College Management System</p>
						<i></i>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="images/alvas5.jpg" alt="image1"  style="max-width: 1500px; height:600px;" />
					</a>
					<div class="sb-description">
						<h4>CMS<span>24x7</span></h4>
						<p style="font-size: 15px;">College Management System</p>
						<i></i>
					</div>
				</li>
			</ul>
			<div id="nav-arrows" class="nav-arrows">
				<a href="#">Next</a>
				<a href="#">Previous</a>
			</div>

		</div>		
		<!-- /wrapper -->
	</div>
	<!-- //banner --> 
<?php
}
else
{
?>
	  			<div class="nav-links">
				<div class="container">
	<?php
	include("menu.php");
	?>
				</div>
			</div>
<?php
}
?>
