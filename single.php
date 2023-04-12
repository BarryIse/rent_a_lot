<?php
include 'libs/connection.inc.php';
$id = $_GET['id'];
$sql = $conn->query("SELECT * FROM ads WHERE id='$id'");
$result = $sql->fetch_assoc();
$img = explode(', ', $result['image'])
?>

<!doctype html>
<html lang="en">

<head>

    <title>Rent_a_lot</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->

    <!-- Add to home screen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="xDocs">
    <link rel="icon" sizes="192x192" href="assets/img/basic/chrome-touch-icon-192x192.png">

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="assets/img/basic/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/img/basic/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#55acee">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#55acee">

    <!--========================================
    CSS
    ===========================================-->
    <!--3rd party plugins-->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/lib/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css">
    <!--custom icons for classified website-->
    <link href="assets/css/adspoticons.css" rel="stylesheet" type="text/css">
    <!--main styles for template-->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!--put your custom css on the file below-->
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="web-app">

<div class="doc-header">
    <div class="container">
        <div class="inner">
            <div class="app-logo">
                <button class="mobile-control mob-menu-trigger"><i class="adicon-hamburger"></i></button>
                <a href="index.php"><img src="assets/img/basic/logo.png" alt="adspot"></a>
            </div>
            <ul class="quick-actions">
                <li><a href="logout.php">Logout</a></li>
                <li class="dropdown-wrap wide">
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    <div class="basic-dropdown wide">
                        <div class="short-cart">
                            <ul>
                                <li>
                                    <figure><img src="assets/img/items/list-item-1.png" alt="dummy"></figure>
                                    <a href="#" class="item-title">Iphone 6 Plus 16GB</a>
                                    <span>$229.00</span>
                                    <a href="#" class="remove-item"><i class="fa fa-close"></i></a>
                                </li>
                                <li>
                                    <figure><img src="assets/img/items/list-item-2.png" alt="dummy"></figure>
                                    <a href="#" class="item-title">Iphone 6 Plus 16GB</a>
                                    <span>$229.00</span>
                                    <a href="#" class="remove-item"><i class="fa fa-close"></i></a>
                                </li>
                                <li>
                                    <figure><img src="assets/img/items/list-item-3.png" alt="dummy"></figure>
                                    <a href="#" class="item-title">Iphone 6 Plus 16GB</a>
                                    <span>$229.00</span>
                                    <a href="#" class="remove-item"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <table>
                                <tr>
                                    <td>Total Price</td>
                                    <td><strong>885.00 USD</strong></td>
                                </tr>
                            </table>
                            <a href="cart.html" class="btn btn-transparent block-element">View Cart</a>
                        </div>
                    </div>
                </li>
                <li><a class="nav-trigger" href="#"><i class="fa fa-navicon"></i></a></li>
            </ul>
            <div class="clearfix">
                <a href="create.php" class="btn btn-green pull-right quick-post">Post your ad</a>
                <div class="pull-right search-filters">
                    <div class="mega-dropdown pull-left">
                        <button>Select City</button>
                        <i class="fa fa-navicon"></i>
                        <div class="mega-content">
                            <div class="inner">
                                <div class="search-widget">
                                    <input type="text" placeholder="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>

                                <div class="mega-list">
                                    <header>
                                        <i class="adicon-buildings"></i> Popular Cities
                                    </header>
                                    <ul class="clearfix">
                                        <li><a href="#">South gate</a></li>
                                        <li><a href="#">North gate</a></li>
                                        <li><a href="#">Ilesha- garage</a></li>
                                        <li><a href="#">Alagbaka</a></li>
                                        <li><a href="#">Oja</a></li>
                                        <li><a href="#">West gate</a></li>
                                        <li><a href="#">Orita-Obele</a></li>
                                        <li><a href="#">Cathedral</a></li>
                                        <li><a href="#">Isinkan</a></li>
                                        <li><a href="#">Custom</a></li>
                                        <li><a href="#">Ijapo</a></li>
                                        <li><a href="#">Ita-Oniyan</a></li>
                                        <li><a href="#">Fanibi</a></li>
                                        <li><a href="#">Awule</a></li>
                                        <li><a href="#">Leo</a></li>
                                        <li><a href="#">Road block</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mega-filtered-search">
                        <div class="mega-dropdown">
                            <button>Select Category</button>
                            <i class="fa fa-navicon"></i>
                            <div class="mega-content">
                                <ul class="category-list">
                                    <li><a href="#"><i class="adicon-grid"></i>All Categories</a></li>
                                    <li><a href="#"><i class="adicon-car"></i>Vehicles</a>
                                        <ul>
                                            <li><a href="#">Cars</a></li>
                                            <li><a href="#">Motorcycles</a></li>
                                            <li><a href="#">Scooters</a></li>
                                            <li><a href="#">Bicycles</a></li>
                                            <li><a href="#">Spare Parts & Accessories</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="adicon-tablet"></i>Mobiles</a>
                                        <ul>
                                            <li><a href="#">Iphone</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Tecno</a></li>
                                            <li><a href="#">Infinix</a></li>
                                            <li><a href="#">Itel</a></li>
                                            <li><a href="#">Nokia</a></li>
                                            <li><a href="#">HTC</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="adicon-tv"></i>Electronics</a>
                                        <ul>
                                            <li><a href="#">Washing Machine</a></li>
                                            <li><a href="#">Television</a></li>
                                            <li><a href="#">Air conditioner</a></li>
                                            <li><a href="#">Computers and Laptops</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="adicon-sofa"></i>Furniture</a>
                                        <ul>
                                            <li><a href="#">Chairs</a></li>
                                            <li><a href="#">Tables</a></li>
                                            <li><a href="#">Bed</a></li>
                                            <li><a href="#">Desk</a></li>
                                            <li><a href="#">Cupboard</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#"><i class="adicon-heal"></i>Fashion</a>
                                        <ul>
                                            <li><a href="#">Clothes</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Hair</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="adicon-smile"></i>Baby Products</a>
                                        <ul>
                                            <li><a href="#">Strollers</a></li>
                                            <li><a href="#">Feeding bottles</a></li>
                                            <li><a href="#">baby bed</a></li>
                                            <li><a href="#">Car seats</a></li>
                                            <li><a href="#">Crib</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-widget">
                            <input type="text" placeholder="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="sliding-nav">
    <a class="close-sliding-nav" href="#">Close nav</a>
    <nav class="slide-nav-list">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="create.php">Create Ad</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="terms.php">Terms</a></li>

            <li class="parent">
                <a href="javascript:return;">Shop</a>
                <ul>
                    <li><a href="listing.php">Products</a></li>
                    <li><a href="shop-index.php">Top Deals</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<div class="mobile-menu-wrap">
    <a href="#" class="closeMobilMenu">close the mobile menu</a>
    <div class="mobile-menu">
        <div class="search-widget">
            <input type="text" placeholder="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
        <ul class="menu-list">
            <li><a href="create.php">Create an Ad</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="listing.php">Products</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="shop-index.php">Top Deals</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="checkout.php">Checkout Page</a></li>
        </ul>
    </div>
</div>
        <div class="app-canvas">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">automobiles</a></li>
                        <li><a href="">Cars</a></li>
                        <li>
                            Mercedes Benz 4MATIC S-Class Sedan
                        </li>
                    </ul>
                </div>

                <div class="item-single row">

                    <div class="item-content col-xs-12 col-sm-7 col-md-8">

                        <article class="inner">
                            <header>
                                <ul class="info-icons">
                                    <li><a href="#" class="fa fa-envelope tooltip-parent">
                                        <span class="tooltip">Send Message</span>
                                    </a></li>
                                    <li><a href="#" class="fa fa-phone tooltip-parent">
                                        <span class="tooltip">Mobile Number</span>
                                    </a></li>
                                    <li><a href="#" class="fa fa-heart tooltip-parent">
                                        <span class="tooltip">save ad</span>
                                    </a></li>
                                </ul>
                                <h1><?= $result['title']?></h1>
                                <ul class="info-list">
                                    <li><i class="fa fa-map-marker"></i><a href="#"><?= $result['city']?></a></li>
                                    <li><i class="fa fa-clock-o"></i><?= $result['created']?></li>
                                    <li><i class="fa fa-bookmark"></i>ID: 13030978</li>
                                </ul>
                            </header>
                            <div class="item-gallery-slider">
                                <div class="item-lg-images">
                                    <a href="#" class="trigger-gallery"><i class="adicon-expand"></i></a>
                                    <div class="slick-carousel slick-lg-images" data-asnav=".slick-sm-images" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="true">
                                        <?php for($i=0; $i<count($img); $i++):?>
                                            <div class="item-lg-thumb imgAsBg">
                                                <img src="ads/<?= $img[$i]?>" alt="dummy">
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="item-sm-images">
                                    <div class="slick-carousel slick-sm-images" data-focus="true" data-asnav=".slick-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
                                        <?php for($i=0; $i<count($img); $i++):?>
                                            <div class="item-sm-thumb">
                                                <div class="imgAsBg">
                                                    <img src="ads/<?= $img[$i]?>" alt="dummy">
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="full-width-gallery">
                                <div class="inner">
                                    <div class="container">
                                        <div class="gallery-lg-area">
                                            <a href="#" class="close-lg-gallery"><i class="fa fa-close"></i></a>
                                            <div class="slick-carousel slick-gallery-lg-images" data-asnav=".slick-gallery-thumbs" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="false">
                                                <?php for($i=0; $i<count($img); $i++):?>
                                                    <div class="item-lg-thumb">
                                                        <img src="ads/<?= $img[$i]?>" alt="dummy">
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gallery-thumbs">
                                        <div class="container">
                                            <div class="gallery-thumbs-inner">
                                                <div class="slick-carousel slick-gallery-thumbs" data-focus="true" data-asnav=".slick-gallery-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
                                                    <?php for($i=0; $i<count($img); $i++):?>
                                                        <div class="item-sm-thumb">
                                                            <div class="imgAsBg">
                                                                <img src="ads/<?= $img[$i]?>" alt="dummy">
                                                            </div>
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="quick-info">
                                <ul class="clearfix">
                                    <li>
                                        <div class="inner clearfix">
                                            <span class="label">Brand Name</span>
                                            <span class="desc">Apple</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner clearfix">
                                            <span class="label">Product Model</span>
                                            <span class="desc"><?= $result['category']?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner clearfix">
                                            <span class="label">Condition</span>
                                            <span class="desc"><?= $result['adCondition']?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner clearfix">
                                            <span class="label">Located In</span>
                                            <span class="desc"><?= $result['city']?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-widget">
                                <header><h4>Product Description</h4></header>
                                <div class="inner">
                                    <p><?= $result['description']?></p>
                                </div>
                                </div>
                            <footer>
                                <div class="inner row">
                                    <div class="col-xs-12 col-md-4">
                                        <span class="item-views"> <i class="fa fa-eye"></i> Ad Views: 4698</span>
                                    </div>
                                    <div class="col-xs-12 col-md-8 text-right-md">
                                        Do you have something to rent? <a href="#">Post Your FREE Ad Today</a>
                                    </div>


                                </div>
                            </footer>
                        </article>
                    </div>
                    <aside class="sidebar col-xs-12 col-sm-5 col-md-4">
                        <div class="inner">
                            <div class="price-widget short-widget">
                                <i class="adicon-dollar"></i>
                                <strong>$<?= $result['price']?></strong>
                                <span>Negotiable Price</span>
                            </div>
                            <div class="number-widget short-widget">
                                <i class="adicon-phone"></i>
                                <strong>$<?= $result['price']?></strong>
                                <span>Negotiable Price</span>
                            </div>
                            <?php
                                $email = $result['email'];
                                $sql = $conn->query("SELECT * FROM register WHERE email='$email'");
                                $person = $sql->fetch_assoc();
                                $year = explode('-', $person['created']);
                            ?>
                            <div class="user-widget text-center">
                                <img src="uploads/<?= $person ['image']?>" style="border-radius: 50%; height:50px; width:100px" alt="asd">
                                <h4><?= $person['firstname'].' '.$person['lastname']?></h4>
                                <div>Member Since <?= $year[0]?></div>
                                <a href="#" class="link">More Ads</a>
                                <ul class="clearfix">
                                    <li><a class="btn btn-transparent" href="#">Send Message</a></li>
                                    <li><a class="btn btn-transparent" href="#">Report Ad</a></li>
                                </ul>
                            </div>
                            <div class="share-widget">
                                <span>Share This Ad</span>
                                <div class="social-links social-bg">
                                    <ul>
                                        <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="check-list-widget">
                                <h4>Safety Tips</h4>
                                <ul>
                                    <li>Morbi ut tellus ac leo molestie</li>
                                    <li>Luctus nec vehicula seded justo</li>
                                    <li>Varius onec tempor rhons</li>
                                    <li>Polutpat ras lorem</li>
                                </ul>
                            </div>
                            <div class="sponsor-widget">
                                <img src="assets/img/spon.jpg" alt="sponsor">
                            </div>
                        </div>
                    </aside>

                </div>

            </div>
            
        </div>
        <footer class="doc-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <ul>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Trust &amp; Safety</a></li>
                            <li><a href="#">Help &amp; Support</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                        <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                        <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
                        <li><a href="#" target="_blank" class="fa fa-youtube-play"></a></li>
                    </ul>
                </div>
                <div class="text-center">
                    &copy; Rent_a_lot - Classified
                </div>
            </div>
        </footer>
    </div>


    <!--========================================
    Javascript
    ===========================================-->
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/lib/slick-carousel/slick/slick.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>
