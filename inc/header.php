<?php include 'libs/connection.inc.php';
if (!isset($_SESSION['id'])) {
    header('Location:login.php');
}

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

</html>

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