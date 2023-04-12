<?php include 'inc/header.php'; 
$sql = $conn->query("SELECT * FROM ads ORDER BY created DESC");
?>



        <div class="app-canvas">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Mobiles</a></li>
                        <li><a href="#">Smart Phones</a></li>
                        <li>
                            <span>Apple Iphone <a href="#"><i class="fa fa-close"></i></a></span>
                            <span>Iphone 6 <a href="#"><i class="fa fa-close"></i></a></span>
                            <span>Clear All <a href="#"><i class="fa fa-close"></i></a></span>
                        </li>
                    </ul>
                </div>
                <header class="heading text-bold">
                    <h2>Used Iphone 6 Plus 16GB In Melbourne</h2>
                    <h4>482 Ads found in Melbourne</h4>
                </header>
                <div class="listing-actions text-right clearfix"  data-target="#items-listing-area">
                    <div class="inner">
                        <div class="button-action">
                            <span>Ads With Photos</span>
                            <a href="#" class="active"><i class="fa"></i></a>
                        </div>
                        <div class="layout-action">
                            <a href="#" class="active">
                                <i class="fa fa-bars"></i>
                                <span class="tooltip">List layout</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span class="tooltip">Grid layout</span>
                            </a>
                        </div>
                        <div class="search-action">
                            <a href="#"><i class="fa fa-star-o"></i>
                                <span class="tooltip">Save search</span>
                            </a>
                        </div>
                        <div class="sort-action">
                            <i class="fa"></i>
                            <span>Recently Published</span>
                            <ul>
                                <li><a href="#">Price Low to High</a></li>
                                <li><a href="#">Price High to Low</a></li>
                                <li><a href="#">Price High to Low</a></li>
                                <li><a href="#">Recently Published</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="listing-area clearfix">
                    <div class="listing-filters">
                        <div class="listing-filter-block">
                            <header>
                                <h6>Brand Name</h6>
                                <a class="trigger-filter-block" href="#"><i class="fa fa-navicon"></i></a>
                            </header>
                            <div class="inner">
                                <div class="search-widget">
                                    <input type="text" placeholder="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="filter-options-widget">
                                    <ul>
                                        <li class="active"><a href="#">
                                            <i></i>
                                            <span>All Brands</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Samsung</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Iphone</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Nokia</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Tecno</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Infinix</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>HTC</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Itel</span>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="listing-filter-block">
                            <header>
                                <h6>Model</h6>
                                <a class="trigger-filter-block" href="#"><i class="fa fa-navicon"></i></a>
                            </header>
                            <div class="inner">
                                <div class="search-widget">
                                    <input type="text" placeholder="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="filter-options-widget">
                                    <ul>
                                        <li class="active"><a href="#">
                                            <i></i>
                                            <span>All Models</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Samsung</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Apple</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Nokia</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Blackberry</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Sony Ericsson</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>HTC</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i></i>
                                            <span>Motorola</span>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="listing-filter-block">
                            <header>
                                <h6>Price Range</h6>
                                <a class="trigger-filter-block" href="#"><i class="fa fa-navicon"></i></a>
                            </header>
                            <div class="inner">
                                <div class="range-widget">
                                    <div class="range-inputs">
                                        <input type="text" placeholder="From">
                                        <input type="text" placeholder="To">
                                    </div>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="items-listing-area" class="items-list">
                        <?php foreach($sql as $list): $img = explode(', ', $list['image'])?>
                            <article class="item-spot featured">
                                <a href="single.php?id=<?= $list['id']?>" class="imgAsBg">
                                    <img src="ads/<?= $img[0]?>" style="height: 300px" alt="dummy data">
                                </a>
                                <div class="item-content">
                                    <header>
                                        <h4><a href="single.html"><?= $list['title']?></a></h4>
                                        <div class="breadcrumb">
                                            <ul>
                                                <li><a href="#">Mobile Phones</a></li>
                                                <li><a href="#"><?= $list['category']?></a></li>
                                            </ul>
                                        </div>
                                        <ul class="item-info">
                                            <li><i class="fa fa-map-marker"></i><a href="#"><?= $list['city']?></a></li>
                                            <li><i class="fa fa-clock-o"></i><?= $list['created']?></li>
                                        </ul>
                                    </header>
                                    <div class="item-actions text-center">
                                        <ul class="contact-options">
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
                                        <div class="price-tag">$<?= $list['price']?></div>
                                    </div>
                                    <div class="inner">
                                        <p>
                                        <?= $list['description']?>
                                        </p>
                                        <a class="view-item" href="single.php?id=<?= $list['id']?>">view ad</a>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
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


    <!--========================================
    Javascript
    ===========================================-->
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>
