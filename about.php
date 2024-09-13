<?php
    session_start();
    if (!empty($_SESSION['cart'])) {
        $printCount = count($_SESSION['cart']);
    }
    else {
        $printCount = 0;
    }
    if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
        $printUsername = $_SESSION['user_users_username'];
    }
    else {
        $printUsername = "None"; 
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Groceroo - About Us</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/userpage.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"> 
    </head>

    <body>
        <div class="dashboard-main-wrapper">
             <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Groceroo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <?php
                                    require_once('config.php');
                                    $select = "SELECT * FROM groceroo_category";
                                    $query = mysqli_query($conn, $select);
                                    while ($res = mysqli_fetch_assoc($query)) {
                                ?>
                                <a class="dropdown-item" href="shop.php?category=<?php echo $res['category_id'];?>">
                                    <?php echo $res['category_name'];?>
                                </a>
                                <?php
                                    }
                                ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"></i> <span class="badge badge-pill badge-secondary"><?php echo $printCount;?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/default-image.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $printUsername;?></h5>
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
            <div class="container-fluid dashboard-content">    
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">About us</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                
      <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(upload/vegetables1_4_3.jpg);" padding-top: 10px>
				</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Groceroo - Bringing the Market to your Doorstep!</h2>
	            </div>
	          </div>
	          <div class="text  font-bold m-3">
	          	<p>
                  At Groceroo, we are dedicated to providing you with a seamless and convenient online shopping experience, offering a wide range of high-quality groceries to cater to all your daily needs.
                                    </p>
                                    <h2>Our Story</h2>
                                    <p>                                    
                                    Groceroo was established by a dedicated team driven by a commitment to deliver the freshest and highest quality groceries. Through the years, we've transformed into a top-tier distributor and wholesaler, serving an extensive range of groceries to renowned restaurants, cafes, supermarkets, hotels, and households.
                                    </p>
                                    <h2>Our Online Grocery Store</h2>
                                    <p>
                                    Our online marketplace has emerged as a premier destination for groceries in Mangalore, providing an extensive array of products. Here's what awaits you::
                                    </p>
                                    <ul>
                                        <li>Diverse Selection: From fresh fruits and vegetables to an array of spices, our inventory covers all your daily shopping essentials.</li>
                                        <li>Competitive Prices: We offer competitive prices on all our products, ensuring you get the best deals.</li>
                                        <li>Quality Assurance: We focus on providing high-quality products, ensuring consistency and customer satisfaction.</li>
                                        <li>Convenient Delivery: Enjoy the convenience of having your groceries delivered right to your doorstep. We offer same-day delivery service seven days a week, including Sundays.</li>
                                        <li>Customer Service: We are committed to providing excellent after-sales service and on-time delivery.</li>
                                    </ul>
                                    <h2>What Makes Us Stand Out?</h2>
                                    <ul>
                                        <li>Fresh and Quality Products: We ensure that all our products are fresh and of the highest quality.</li>
                                        <li>Affordable Prices: Enjoy premium products at really affordable prices.</li>
                                        <li>Convenient Shopping: Shop from the comfort of your home and get your groceries delivered to your door.</li>
                                        <li>Reliability: Our dedicated team ensures that your shopping experience is smooth and satisfactory.</li>
                                    </ul>
                                    <h2>Shop Timings </h2>
                                    <p>Our shop is open from 10:00 AM to 9:00 PM, every day of the week.</p>
                                    <h2>Our Promise </h2>
                                    <p>We are focused on quality, consistency, and customer service. Having maintained these aspects for the past decade, we are transforming into a premium brand loved by our customers.</p>
                                    <br><br>
                                    <h1> - Team Groceroo </h1>
						</div>
					</div>
				</div>
			</div>
		</section>


                <div class="row m-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h1>Our Categories</h1>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="owl-carousel owl-theme">
                            <?php
                            require_once('config.php');
                            $select = "SELECT * FROM groceroo_category";
                            $query = mysqli_query($conn, $select);
                            while ($res = mysqli_fetch_assoc($query)) {
                            ?>
                            <div class="item">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $res['category_name'];?></h3>
                                        <a href="shop.php?category=<?php echo $res['category_id'];?>"><img class="card-img" src="upload/<?php echo $res['category_image'];?>"></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            © 2024 Groceroo. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="about.php">About</a>
                                <a href="feedback.php">Feedback</a>
                                <a href="contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/main-js.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true, margin: 10, dots: 0, autoplay: 4000, autoplayHoverPause: true, responsive:{
                    0:{items:1}, 600:{items:2}, 1000:{items:3}
                }
            })
        });
    </script>
</body>
 
</html>
