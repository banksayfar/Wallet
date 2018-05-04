<?php

require_once 'dbconfig.php';

//Start the session
session_start();
  if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
  }
  else{
    header("Location: login.php");
  }

$sql2 ="SELECT sum(money) as money FROM `income` WHERE user_id ='$id'";
$sql3 ="SELECT sum(money) as money FROM `outcome` WHERE user_id ='$id'";

$query3 = mysqli_query($conn,$sql2);
$query2 = mysqli_query($conn,$sql3);

$rows= mysqli_fetch_assoc($query3);
$row= mysqli_fetch_assoc($query2);


$sql ="SELECT * FROM `income` WHERE user_id ='$id'";
$query = mysqli_query($conn,$sql);
$sql1 ="SELECT * FROM `outcome`  WHERE user_id ='$id'";
$query1 = mysqli_query($conn,$sql1);
$sss="SELECT COUNT(id) FROM users";
$querys = mysqli_query($conn,$sss);
$row3= mysqli_fetch_assoc($querys);

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wallet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Wallet</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.html"></a></li>
							<li>
								<a href="#" class="fh5co-sub-ddown"></a>

							<li><a href="#"></a></li>
							<li><a class="action TEAM"></a></li>
							<li><a href="logout.php" >LOGOUT</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

	</div>
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/one.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Income Outcome</span></p>
		   						<h2>For You</h2>

		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/two.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>รายรับ รายจ่าย</span></p>
		   						<h2>เพื่อคุณ</h2>

		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>


		  	</ul>
	  	</div>
	</aside>

	<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					<form  action="phplib/addIncome.php" method="POST">

						<div class="a-col">
							<input type="hidden" name="id" value = <?= $id?>>
							<section >
								<select class="cs-select cs-skin-border" id="type" name="type">


									<option value="1" >รายรับทั่วไป</option>
                      				<option value="2">เงินเดือน</option>
                      				<option value="3">รายได้รายวัน</option>
								</select>
							</section>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-start">Check In</label>
								<input type="text" class="form-control" id="date-start"  name="date"/>
							</div>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label >Price</label>
								<input type="text" name="money" placeholder="Price" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
							</div>
						</div>



						<div class="a-col action" style="margin-top: 5px;">
						<button type="submit" class="btn btn-success">
								<span>Check</span>

							</button>
						</div>
					</form>
					  <form action="phplib/addOutcome.php" method="POST">
						<div class="a-col">
							 <input type="hidden" name="id" value = <?= $id?>>
							<section>
								<select class="cs-select cs-skin-border"  id="type" name="type">

									 <option value="1">รายจ่ายทั่วไป</option>
                          			 <option value="2">ค่าอาหารเครื่องดื่ม</option>
                         			 <option value="3">สินค้าจิปาถะ</option>
								</select>
							</section>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-start">Check In</label>
								<input type="text" class="form-control" id="date-start"  name="date"/>
							</div>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label >Price</label>
							<input type="text" name="money" placeholder="Price" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
							</div>
						</div>



						<div class="a-col action">
						<button type="submit" class="btn btn-success">
								Check
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">

				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $rows['money']?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">INCOME</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to=" <?php echo $row['money']?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">OUTCOME</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo ($rows['money']-$row['money']);?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Balance</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $row3['COUNT(id)'];?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">All USer</span>
				</div>
			</div>
		</div>
	</div>



		<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<font color = "red"><h3> ALLCOME</h3></font>
					</div>
				</div>
			</div>

			<div id="tabs">
				<table class="table table-striped" id="myTable">
                                <thead>
                                   <tr role="row">
                                    <div class="col-sm-3">
                                        <th class="sorting" >ID</th>
                                    </div>
                                     <div class="col-sm-3">
                                        <th class="sorting" >Type</th>
                                    </div>
                                     <div class="col-sm-5">
                                        <th class="sorting"  >Money</th>
                                    </div>

                                     <div class="col-sm-3">
                                        <th class="sorting" >Date</th>
                                    </div>
                                         <div class="col-sm-3">
                                        <th class="sorting">Tool</th>
                                         </div>


                    </thead>
                        <?php
    			$i=1;
                         while ($row= mysqli_fetch_assoc($query)){

                       ?>

                            </div>
                                 <div class="row">
                                     <td><?php echo $i?></td>
                            </div>
                              <div class="row">
                                    <td><?php if ($row['type'] == '1') {
                                      echo "รายรับทั่วไป";
                                    }else if ($row['type'] == '2') {
                                      echo "ค่าอาหาร-เครื่องดื่ม";
                                    }else if ($row['type'] == '3') {
                                      echo "สิ้นค้าจิปาถะ";
                                    } ?></td>
                            </div>
                                 <div class="row">
                                <td id="eio"><?php echo $row['money']?></td>
                            </div>

                            <div class="row">
                                <td id="eio"><?php echo $row['date']?></td>
                            </div>

                            <div class="row">
                            <td><a class="btn btn-danger btn-sm" href="do_delete.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure to delete this item?')">
                                    <i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                             </td>
                             </div>


                         </tr>

                  <?php
                  $i++;
                         }
                        ?>
                </table>
				</div>
			</div>
		</div>

		<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2> OUTCOME </h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<table class="table table-striped" id="myTable1">
                                <thead>
                                   <tr role="row">
                                    <div class="col-sm-3">
                                        <th class="sorting" >ID</th>
                                    </div>
                                    <div class="col-sm-3">
                                        <th class="sorting" >Type</th>
                                    </div>
                                     <div class="col-sm-5">
                                        <th class="sorting"  >Money</th>
                                    </div>

                                    <div class="col-sm-3">
                                        <th class="sorting" >Date</th>
                                    </div>
                                         <div class="col-sm-3">
                                        <th class="sorting">Tool</th>
                                         </div>


                    </thead>
                        <?php
    $i=1;
                         while ($row= mysqli_fetch_assoc($query1)){
                       ?>

                            </div>
                                 <div class="row">
                                     <td><?php echo $i ?></td>
                            </div>
                            <div class="row">
                                    <td><?php if ($row['type'] == '1') {
                                      echo "รายจ่ายทั่วไป";
                                    }else if ($row['type'] == '2') {
                                      echo "ค่าอาหาร-เครื่องดื่ม";
                                    }else if ($row['type'] == '3') {
                                      echo "สิ้นค้าจิปาถะ";
                                    } ?></td>
                            </div>
                                 <div class="row">
                                <td id="eio"><?php echo $row['money']?></td>
                            </div>

                            <div class="row">
                                <td id="eio"><?php echo $row['date']?></td>
                            </div>

                            <div class="row">
                            <td><a class="btn btn-danger btn-sm" href="do_deleteOut.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure to delete this item?')">
                                    <i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                             </td>
                             </div>


                         </tr>

                  <?php
                  $i++;
                         }
                        ?>
                </table>
				</div>
			</div>
		</div>







	<div id="fh5co-blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>team</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/A1.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Nuttaporn Toonrongchang</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/A2.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Phuthiphong Jirawuttinan</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/A3.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Nantawat Bunsriphum</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/A4.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Sayfar Bunyang</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style=" background-image: url(images/A8.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Sorawit Oratai</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
                $('#myTable1').DataTable();
            });
        </script>
</body>
</html>
