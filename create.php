<!doctype html>
<html lang="en">

<head>

    <title>Rent_a_lot</title>
    <!--========================================
    Meta
    ===========================================-->

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
                        <li><a class="modal-trigger" href="#signInModal">Login</a></li>
                        <li><a class="modal-trigger" href="#signUpModal">Register</a></li>
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
                                    <a href="cart.php" class="btn btn-transparent block-element">View Cart</a>
                                </div>
                            </div>
                        </li>
                        <li><a class="nav-trigger" href="#"><i class="fa fa-navicon"></i></a></li>
                    </ul>
                    <div class="clearfix">
                        <a href="create.html" class="btn btn-green pull-right quick-post">Post your ad</a>
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
                                                    <li><a href="">Clothes</a></li>
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Bags</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Hair</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="adicon-smile"></i>Fashion</a>
                                                <ul>
                                                    <li><a href="">Stollers</a></li>
                                                    <li><a href="">Feeding</a></li>
                                                    <li><a href="">baby bed</a></li>
                                                    <li><a href="">Car seats</a></li>
                                                    <li><a href="">Crib</a></li>
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
                <nav class="slide-nav-list">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="create.php">Create Ad</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="terms.php">Terms</a></li>
                        <li class="parent">
                            <a  href="javascript:return;">Shop</a>
                            <ul>
                                <li><a href="listing.php">Products</a></li>
                                <li><a href="shop-index.php">Top Deals</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
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
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </div>
        </div>

        <div class="app-canvas">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>
                            Post your ad
                        </li>
                    </ul>
                </div>

                <div class="page row">
                    <header class="heading style-bg big text-center">
                        <h1>World’s <strong>Biggest</strong> Classified Marketplace</h1>
                        <p class="text-uppercase">sell &amp; purchase anything</p>
                    </header>
                    <div class="form-wrapper">
                        <form action="http://gfxpartner.com/">
                            <div class="elements-block">
                                <div class="inner">
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create001">Ad Title</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input type="text" id="create001" placeholder="e.g. Apple iPhone SE 2016">
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="required label" >Category</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="mega-dropdown-wrap">
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
                                                                    <li><a href="#">Spare Parts &amp; Accessories</a></li>
                                                                    <li><a href="#">Other Vehicles</a></li>
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
                                                                    <li><a href="">Clothes</a></li>
                                                                    <li><a href="">Shoes</a></li>
                                                                    <li><a href="">Bags</a></li>
                                                                    <li><a href="">Accessories</a></li>
                                                                    <li><a href="">Hair</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#"><i class="adicon-smile"></i>Baby products</a>
                                                                <ul>
                                                                    <li><a href="">Stollers</a></li>
                                                                    <li><a href="">Feeding</a></li>
                                                                    <li><a href="">baby bed</a></li>
                                                                    <li><a href="">Car seats</a></li>
                                                                    <li><a href="">Crib</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="required label">Condition</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="custom-radio">
                                                <input type="radio" id="create4221" name="item-condition">
                                                <label for="create4221">Used</label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="create4222" name="item-condition">
                                                <label for="create4222">Brand New</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="required label" >Brand Name</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="radio-dropdown">
                                                <i class="fa fa-bars"></i>
                                                <button>Select Brand</button>
                                                <ul>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create002">
                                                        <label for="create002">Samsung</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create003">
                                                        <label for="create003">Apple</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create004">
                                                        <label for="create004">Blackberyy</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create005">
                                                        <label for="create005">Nokia</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create006">
                                                        <label for="create006">Hawaii</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create008">
                                                        <label for="create008">Q mobile</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create009">
                                                        <label for="create009">Motorola</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create010">
                                                        <label for="create010">Sony</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create011">Price</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="icon-field">
                                                <span>$</span>
                                                <input type="text" id="create011" placeholder="e.g. 999">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="required label" >City</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="radio-dropdown">
                                                <i class="fa fa-bars"></i>
                                                <button>Select your city</button>
                                                <ul>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create022">
                                                        <label for="create022">Bradford</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create023">
                                                        <label for="create023">Cambridge</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create024">
                                                        <label for="create024">Chester</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create025">
                                                        <label for="create025">Durham</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create026">
                                                        <label for="create026">Glasgow</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="label" >Town/Suburb</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="radio-dropdown">
                                                <i class="fa fa-bars"></i>
                                                <button>Select your city</button>
                                                <ul>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create0221">
                                                        <label for="create0221">Bradford</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create0231">
                                                        <label for="create0231">Cambridge</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create0241">
                                                        <label for="create0241">Chester</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create0251">
                                                        <label for="create0251">Durham</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="item-brand-name" type="radio" id="create0261">
                                                        <label for="create0261">Glasgow</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create201">Ad Description</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <textarea id="create201" placeholder="Include the brand, model, age and any included accessories."></textarea>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create401">Your Name</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input class="input-sm" type="text" id="create401" placeholder="e.g. Jhone Doe">
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create501">Your email</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input class="input-sm" type="email" id="create501" placeholder="e.g. jon@got.com">
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create451">Phone number</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="icon-field">
                                                <span>+44</span>
                                                <input class="input-sm" type="tel" id="create451" placeholder="e.g. 123456789">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="elements-block style-gray">
                                <div class="inner">
                                    <table class="table table-responsive">
                                       <thead>
                                            <tr>
                                                <td>
                                                    <h4>Make Your Ad Featured</h4>
                                                </td>
                                                <td class="text-right">
                                                    <a href="#" class="link">What is a Featured Ad?</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-checkbox">
                                                        <input checked="checked" class="showHideTarget" data-target="#featured-paymentOptions" type="checkbox" id="create42213" name="item-condition">
                                                        <label class="big-font" for="create42213"> Featured Ad</label>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <strong>$2.90 per ad</strong>
                                                </td>
                                            </tr>
                                       </thead>
                                        <tbody id="featured-paymentOptions">
                                            <tr>
                                                <td>
                                                    <h5>Please select the preferred payment method.</h5>
                                                    <div class="custom-radio block-element">
                                                        <input type="radio" id="create422131" name="payment-method-opt">
                                                        <label for="create422131"> Direct Bank Transfer</label>
                                                    </div>
                                                    <div class="custom-radio block-element">
                                                        <input type="radio" id="create422132" name="payment-method-opt">
                                                        <label for="create422132"> Cheque Payment</label>
                                                    </div>
                                                    <div class="custom-radio block-element">
                                                        <input type="radio" id="create422133" name="payment-method-opt">
                                                        <label for="create422133"> Paypal</label>
                                                    </div>
                                                    <div class="custom-radio block-element">
                                                        <input type="radio" id="create422134" name="payment-method-opt">
                                                        <label for="create422134"> Credit Card</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>&emsp;</td>
                                                <td class="text-right"><strong>Total : $2.90</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <br>
                                    <br>
                                    <div>
                                        <a class="btn btn-green btn-md" href="#">Create ad</a>&emsp;&emsp;
                                        <span class="termStatement">
                                            By clicking 'Create Ad' you agree to <a class="link" href="#">our  Terms & Condition</a> and
                                        <a class="link" href="#">Posting Rules</a>.
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

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

    <!--======================================
   Modals
   =======================================-->
    <div id="signInModal" class="modal-container">
        <a href="#" class="modal-overlay"> click to close modal</a>
        <div class="inner">
            <button class="close_modal"><i class="fa fa-remove"></i></button>
            <div class="social_login_opt">
                <div>
                    <div class="opt-navigator dropdown-wrap">
                        <button>open options</button>
                        <div class="basic-dropdown">
                            <ul class="social-drop-list">
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="social-opts">
                        <a href="#" class="opt-fb-login active">
                            <i class="fa fa-facebook"></i>
                            <span>Sign in with facebook</span>
                        </a>
                        <a href="#" class="opt-gp-login">
                            <i class="fa fa-google-plus"></i>
                            <span>Sign in with Google+</span>
                        </a>
                        <a href="#" class="opt-twitter-login">
                            <i class="fa fa-twitter"></i>
                            <span>Sign in with Twitter</span>
                        </a>
                        <a href="#" class="opt-instagram-login">
                            <i class="fa fa-instagram"></i>
                            <span>Sign in with Instagram</span>
                        </a>
                        <a href="#" class="opt-linkedin-login">
                            <i class="fa fa-linkedin"></i>
                            <span>Sign in with Linkedin</span>
                        </a>
                    </div>
                </div>
                <span class="split-opt">or</span>
            </div>
            <div class="modal-content">
                <header>
                    <h4>Welcome Back!</h4>
                    <p>Please enter your details below</p>
                </header>
                <form action="http://gfxpartner.com/">
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Username</label>
                            <input title="title here" type="text">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Password</label>
                            <input title="title here" type="password">
                        </div>
                    </div>
                    <div class="row login-actions field-block">
                        <div class="col-xs-12 col-sm-6">
                            <div class="custom-radio">
                                <input type="radio" name="item-condition" id="login001">
                                <label for="login001">Remember me</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 xs-text-left text-right">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>

                    <button class="btn btn-md btn-green block-element">Login Now</button>
                    <div class="login-cta text-center">
                        <p>Don't have an account?</p>
                        <a href="#">Register here FREE</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="signUpModal" class="modal-container">
        <a href="#" class="modal-overlay"> click to close modal</a>
        <div class="inner">
            <button class="close_modal"><i class="fa fa-remove"></i></button>
            <div class="social_login_opt">
                <div>
                    <div class="opt-navigator dropdown-wrap">
                        <button>open options</button>
                        <div class="basic-dropdown">
                            <ul class="social-drop-list">
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="social-opts">
                        <a href="#" class="opt-fb-login active">
                            <i class="fa fa-facebook"></i>
                            <span>Sign in with facebook</span>
                        </a>
                        <a href="#" class="opt-gp-login">
                            <i class="fa fa-google-plus"></i>
                            <span>Sign in with Google+</span>
                        </a>
                        <a href="#" class="opt-twitter-login">
                            <i class="fa fa-twitter"></i>
                            <span>Sign in with Twitter</span>
                        </a>
                        <a href="#" class="opt-instagram-login">
                            <i class="fa fa-instagram"></i>
                            <span>Sign in with Instagram</span>
                        </a>
                        <a href="#" class="opt-linkedin-login">
                            <i class="fa fa-linkedin"></i>
                            <span>Sign in with Linkedin</span>
                        </a>
                    </div>
                </div>
                <span class="split-opt">or</span>
            </div>
            <div class="modal-content">
                <header>
                    <h4>Welcome Back!</h4>
                    <p>Please enter your details below</p>
                </header>
                <form action="http://gfxpartner.com/">
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Username</label>
                            <input title="Enter your username" type="text">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Password</label>
                            <input title="Enter your password" type="password">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Email address</label>
                            <input title="Enter your email address" type="email">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="icon-field">
                            <span>+234</span>
                            <input type="text" placeholder="Your phone number">
                        </div>
                    </div>


                    <button class="btn btn-md btn-green block-element">Signup Now</button>
                    <div class="login-cta text-center"><br>
                        By clicking Signup Now, you agree to <br>
                        <a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--========================================
    Javascript
    ===========================================-->
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>


</html>
