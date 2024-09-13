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

if(!empty($_SESSION["error"])){
	echo "<script>alert('Username or Password does not exist!')</script>";
	unset($_SESSION["error"]);
}

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
    <title>Groceroo - Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
</head>

<body>
    <div class="dashboard-main-wrapper">
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <div class="logo">
                <img src="upload/logo1.png" width="100px" style="cursor: pointer;" alt="" >
            </div>
                <a class="navbar-brand" href="index.php">Groceroo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
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
                            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span class="badge badge-pill badge-secondary"><?php echo $printCount;?></span></a>
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
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="upload/carousel_1.jpg" alt="First slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h2 class="text-white">Fresh Picks: Farm to Table Delights</h2>
                                        <p>From the fields to your doorstep, experience freshness like never before!</p>
                                        <a href="about.php" class="btn btn-rounded btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="upload/carousel_2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h1 class="text-white">Gourmet Goodies: Indulge in Culinary Delights</h1>
                                        <p>Elevate your palate with our exquisite gourmet selection!</p>
                                        <a href="about.php" class="btn btn-rounded btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="upload/carousel_3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h2 class="text-white">Organic Oasis: Sustainably Sourced Selections</h2>
                                        <p>Nourish your body and the planet with our organic treasures!</p>
                                        <a href="about.php" class="btn btn-rounded btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="upload/carousel_4.jpg" alt="Fourth slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h2 class="text-white">Weekend Brunch Bonanza: Morning Essentials</h2>
                                        <p>Brunch just got better! Stock up on all your morning must-haves.</p>
                                        <a href="about.php" class="btn btn-rounded btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="upload/carousel_5.jpg" alt="Fifth slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h2 class="text-white">Global Flavors: Explore Cuisine from Around the World</h2>
                                        <p>Embark on a culinary journey with our diverse international offerings!</p>
                                        <a href="about.php" class="btn btn-rounded btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>   </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>  </a>
                        </div>
                    </div>
                </div>

                <div class="row m-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h1>Our Features</h1>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card text-center p-3">
                            <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-thumbs-up"></i></h1>
                                <h3 class="card-title">Quality</h3>
                                <p class="card-text">Our very first priority is the quality, we never compromised in the quality of our grocery products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card text-center p-3">
                            <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-birthday-cake"></i></h1>
                                <h3 class="card-title">Fresh & natural</h3>
                                <p class="card-text">We pride ourselves on offering only the freshest groceries made with natural ingredients. Shop with us and enjoy products free from artificial additives, ensuring you get the best quality every time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card text-center p-3">
                            <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h3 class="card-title">Free delivery</h3>
                                <p class="card-text">We provide free delivery to our customers. We deliver in 1 hour from the time customer order the product.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mx-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h1>Our Trending</h1>
                    </div>
                        <div class="row owl-carousel owl-theme trend-foods">
                            <?php
                                require_once('config.php');
                                $tspecial_query = "SELECT * FROM groceroo_products WHERE product_trend=1";
                                $tspecial_query_run = mysqli_query($conn, $tspecial_query);

                                if($tspecial_query_run)
                                {
                                    if(mysqli_num_rows($tspecial_query_run) > 0)
                                    {
                                        foreach($tspecial_query_run as $item)
                                        {
                                            ?>
                                                <div class="item">
                                                    <div class="box-card-one">
                                                        <div class="box-card-body">
                                                            <div class="product-img img-box">
                                                                <?php
                                                                $file_array = explode(', ', $item['product_image']);
                                                                ?>
                                                                <img src="upload/<?php echo $file_array[0]; ?>" class="img-fluid" alt="item image">
                                                            </div>
                                                            <div class="box-card-content">
                                                            <h3 class="box-card-title"></h3>
                                                            <h3 class="box-card-title"></h3>
                                                                <h3 class="box-card-title"><?= $item['product_name']; ?></h3>
                                                                <h4 class="box-card-price">
                                                                    Rs: <?= $item['product_price']; ?>
                                                                   
                                                                </h4>
                                                                <div class="divider"></div>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-6">
                                                                        <div class="product_btn">
                                                                            <?php if($item['product_status'] == '0') : ?>
                                                                            <button onclick="add_cart(<?php echo $item['product_id'];?>)" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                            <?php else : ?>
                                                                            <button class="btn btn-primary bg-danger disabled">Unavailable</button>
                                                                            <?php endif; ?>
                                                                            
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6 col-6">
                                                                        <div>
                                                                        <a href="single_product.php?product_id=<?php echo $item['product_id'];?>" class="btn btn-outline-light">Details</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    }
                                }
                            ?>   
                        </div>
                    </div>
                </div>

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

                <div class="row m-5 hero-image2 rounded">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3 hero-text">
                        <h1 class="text-dark">Who We Are</h1>
                        <p class="text-dark px-5">Groceroo is an online grocery store founded by a team of passionate individuals dedicated to providing the freshest and highest quality groceries. Our mission is to make daily grocery shopping a hassle-free and enjoyable experience. We offer a wide range of fresh fruits and vegetable. Known for our commitment to quality, consistency, and excellent customer service, we serve well-known restaurants, cafes, supermarkets, hotels, and households. Our competitive prices and convenient delivery options make us a trusted choice for many. Experience the ease and reliability of shopping with Groceroo today.</p>
                        <a href="about.php" class="btn btn-rounded btn-success">Read More</a>
                    </div>
                </div>

                <div class="row mx-5 hero-image rounded">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3 hero-text">
                        <h1 class="text-white">Always happy to hear from you.</h1>
                        <a href="contact.php" class="btn btn-rounded btn-brand">Contact Us</a>
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
                                <a href="/groceroo/admin/">Admin Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        <!-- </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
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

        function add_cart(product_id) {
            $.ajax({
                url: 'fetch_cart.php',
                data: { id: product_id },
                method: 'get',
                dataType: 'json',
                success: function(cart) {
                    if (cart.error) {
                        alert(cart.error);
                    } else {
                        console.log(cart);
                        $('.badge').html(cart.length);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ', status, error);
                    alert('There was an error adding the product to the cart.');
                }
            });
        }
    </script>
</body>
</html>