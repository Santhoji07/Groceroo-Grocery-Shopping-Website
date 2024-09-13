<?php
session_start();
if (isset($_GET['login_success']) && $_GET['login_success'] == 1) {
	echo "<script>alert('Logged in!')</script>";
	echo "<script>window.location.assign('index.php')</script>";
}
if (isset($_GET['logout_success']) && $_GET['logout_success'] == 1) {
	echo "<script>alert('Logged out!')</script>";
	echo "<script>window.location.assign('index.php')</script>";
}

if (!empty($_SESSION["error"])) {
	echo "<script>alert('Username or Password does not exist!')</script>";
	unset($_SESSION["error"]);
}

if (!empty($_SESSION['cart'])) {
	$printCount = count($_SESSION['cart']);
} else {
	$printCount = 0;
}
if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
	$printUsername = $_SESSION['user_users_username'];
} else {
	$printUsername = "None";
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>

	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //custom-theme -->
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/userpage.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
</head>

<body class="agileits_w3layouts">
	<div class="dashboard-header">
		<nav class="navbar navbar-expand-lg bg-white fixed-top">
			<div class="logo">
				<img src="upload/logo1.png" width="100px" style="cursor: pointer;" alt="">
			</div>
			<a class="navbar-brand" href="index.php">Groceroo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span><i class="fas fa-bars mx-3"></i></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto navbar-right-top">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Category</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
							<?php
							require_once ('config.php');
							$select = "SELECT * FROM groceroo_category";
							$query = mysqli_query($conn, $select);
							while ($res = mysqli_fetch_assoc($query)) {
								?>
								<a class="dropdown-item" href="shop.php?category=<?php echo $res['category_id']; ?>">
									<?php echo $res['category_name']; ?>
								</a>
								<?php
							}
							?>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span
								class="badge badge-pill badge-secondary"><?php echo $printCount; ?></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item dropdown nav-user">
						<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><img src="upload/default-image.jpg" alt=""
								class="user-avatar-md rounded-circle"></a>
						<div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
							<div class="nav-user-info">
								<h5 class="mb-0 text-white nav-user-name"><?php echo $printUsername; ?></h5>
								<span class="status"></span><span class="ml-2">Available</span>
							</div>
							<a class="dropdown-item" href="account_users.php"><i class="fas fa-user mr-2"></i>Account</a>
							<a class="dropdown-item" href="login_users.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
							<a class="dropdown-item" href="logout_users.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<h1 class="agile_head text-center">Feedback Form</h1>
	<div class="w3layouts_main wrap">
		<h3>Please help us to serve you better by taking a couple of minutes. </h3>
		<form action="feedback_submit.php" method="post" class="agile_form">
			<h2>How satisfied were you with our Service?</h2>
			<ul class="agile_info_select">
				<li><input type="radio" name="view" value="excellent" id="excellent" required>
					<label for="excellent">excellent</label>
					<div class="check w3"></div>
				</li>
				<li><input type="radio" name="view" value="good" id="good">
					<label for="good"> good</label>
					<div class="check w3ls"></div>
				</li>
				<li><input type="radio" name="view" value="neutral" id="neutral">
					<label for="neutral">neutral</label>
					<div class="check wthree"></div>
				</li>
				<li><input type="radio" name="view" value="poor" id="poor">
					<label for="poor">poor</label>
					<div class="check w3_agileits"></div>
				</li>
			</ul>
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name" name="name" required="" />
			<input type="email" placeholder="Your Email" name="email" required="" />
			<input type="text" placeholder="Your Number" name="num" reuired="" /><br>
			<center><input type="submit" value="submit Feedback" class="agileinfo" /></center>
		</form>
	</div>
	<div class="agileits_copyright text-center">
		<p>© 2024 Groceroo. All rights reserved.</p>
	</div>
</body>

</html>