<?php include 'inc/header.php'; 
$id = $_SESSION['id'];
$sql = $conn->query("SELECT * FROM register WHERE id='$id'");
$result = $sql->fetch_assoc();
?>



        <div class="app-canvas">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Post your ad</li>
                    </ul>
                </div>

                <div class="page row">
                    <header class="heading style-bg big text-center">
                        <h1>World’s <strong>Biggest</strong> Classified Marketplace</h1>
                        <p class="text-uppercase">sell &amp; purchase anything</p>
                    </header>
                    <div class="form-wrapper">
                        <form method="POST" enctype="multipart/form-data">
                            <?= $created ?? null;?>
                            <div class="elements-block">
                                <div class="inner">
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create001">Ad Title</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input type="text" id="create001" placeholder="e.g. Apple iPhone SE 2016" name="title" required>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="required label" >Category</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="mega-dropdown-wrap">
                                                <div class="mega-dropdown">
                                                    <input class="categories" style="border:none; height:100%;padding-left:12px;" name="categories" required><button class="cat">Select Category</button></input>
                                                    <i class="fa fa-navicon"></i>
                                                    <div class="mega-content">
                                                        <ul class="category-list">
                                                            <li><a><i class="adicon-grid"></i>All Categories</a></li>
                                                            <li><a><i class="adicon-car"></i>Vehicles</a>
                                                                <ul>
                                                                    <li><a class="category">Cars</a></li>
                                                                    <li><a class="category">Motorcycles</a></li>
                                                                    <li><a class="category">Scooters</a></li>
                                                                    <li><a class="category">Bicycles</a></li>
                                                                    <li><a class="category">Spare Parts and Accessories</a></li>
                                                                    <li><a href="#">Other Vehicles</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a><i class="adicon-tablet"></i>Mobiles</a>
                                                                <ul>
                                                                    <li><a class="category">Iphone</a></li>
                                                                    <li><a class="category">Samsung</a></li>
                                                                    <li><a class="category">Tecno</a></li>
                                                                    <li><a class="category">Infinix</a></li>
                                                                    <li><a class="category">Itel</a></li>
                                                                    <li><a class="category">Nokia</a></li>
                                                                    <li><a class="category">HTC</a></li>
                                                                    <li><a class="category">Other Mobiles</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a><i class="adicon-tv"></i>Electronics</a>
                                                                <ul>
                                                                    <li><a class="category">Washing Machine</a></li>
                                                                    <li><a class="category">Television</a></li>
                                                                    <li><a class="category">Air conditioner</a></li>
                                                                    <li><a class="category">Computers and Laptops</a></li>
                                                                    <li><a class="category">Other Electronics</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a><i class="adicon-sofa"></i>Furniture</a>
                                                                <ul>
                                                                    <li><a class="category">Chairs</a></li>
                                                                    <li><a class="category">Tables</a></li>
                                                                    <li><a class="category">Bed</a></li>
                                                                    <li><a class="category">Desk</a></li>
                                                                    <li><a class="category">Cupboard</a></li>
                                                                    <li><a class="category">Other Furnitures</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a><i class="adicon-heal"></i>Fashion</a>
                                                                <ul>
                                                                    <li><a class="category">Clothes</a></li>
                                                                    <li><a class="category">Shoes</a></li>
                                                                    <li><a class="category">Bags</a></li>
                                                                    <li><a class="category">Accessories</a></li>
                                                                    <li><a class="category">Hair</a></li>
                                                                    <li><a class="category">Other Fashions</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a><i class="adicon-smile"></i>Baby products</a>
                                                                <ul>
                                                                    <li><a class="category">Stollers</a></li>
                                                                    <li><a class="category">Feeding</a></li>
                                                                    <li><a class="category">baby bed</a></li>
                                                                    <li><a class="category">Car seats</a></li>
                                                                    <li><a class="category">Crib</a></li>
                                                                    <li><a class="category">Other Baby Products</a></li>
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
                                            <label class="required" for="create001">Image</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input type="file" name="image[]" required multiple>
                                        </div>
                                        <div style="color:red"><?= $imageErr ?? null;?></div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <span class="required label">Condition</span>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="custom-radio">
                                                <input type="radio" id="create4221" name="item-condition" value="Used">
                                                <label for="create4221">Used</label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="create4222" name="item-condition" value="Brand New">
                                                <label for="create4222">Brand New</label>
                                            </div>
                                            <div style="color:red"><?= $conditionErr ?? null;?></div>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create011">Price</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="icon-field">
                                                <span>$</span>
                                                <input type="text" id="create011" placeholder="e.g. 999" name="price">
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
                                                        <input name="city" type="radio" id="create022" value="South gate">
                                                        <label for="create022">South gate</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create023" value="North gate">
                                                        <label for="create023">North gate</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create024" value="Ilesha-garage">
                                                        <label for="create024">Ilesha-garage</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create025" value="Alagbaka">
                                                        <label for="create025">Alagbaka</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Oja">
                                                        <label for="create026">Oja</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="West gate">
                                                        <label for="create026">West gate</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Orita-Obele">
                                                        <label for="create026">Orita-Obele</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Cathedral">
                                                        <label for="create026">Cathedral</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Isinkan">
                                                        <label for="create026">Isinkan</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Custom">
                                                        <label for="create026">Custom</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Ijapo">
                                                        <label for="create026">Ijapo</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Ita-Oniyan">
                                                        <label for="create026">Ita-Oniyan</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Fanibi">
                                                        <label for="create026">Fanibi</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Awule">
                                                        <label for="create026">Awule</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Leo">
                                                        <label for="create026">Leo</label>
                                                    </li>
                                                    <li class="custom-radio">
                                                        <input name="city" type="radio" id="create026" value="Road Block">
                                                        <label for="create026">Road Block</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="color:red"><?= $cityErr ?? null;?></div>
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create201">Ad Description</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <textarea id="create201" placeholder="Include the brand, model, age and any included accessories." name="description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create401">Your Name</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input class="input-sm" type="text" id="create401" placeholder="e.g. Jhone Doe" value="<?= $result['firstname'].' '.$result['lastname']?>" name="name" readonly>
                                        </div>
                                    </div>
                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create501">Your email</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <input class="input-sm" type="email" id="create501" placeholder="e.g. jon@got.com" value="<?= $result['email']?>" name="email" readonly>
                                        </div>
                                    </div>

                                    <div class="row field-block">
                                        <div class="col-xs-12 col-md-3">
                                            <label class="required" for="create451">Phone number</label>
                                        </div>
                                        <div class="col-xs-12 col-md-9">
                                            <div class="icon-field">
                                                <span>+234</span>
                                                <input class="input-sm" type="tel" id="create451" placeholder="e.g. 123456789" value="<?= $result['phonenumber']?>" name="phonenumber" readonly>
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
                                                        <input checked="checked" class="showHideTarget" data-target="#featured-paymentOptions" type="checkbox" value="1" id="create42213" name="featuredAd">
                                                        <label class="big-font" for="create42213"> Featured Ad</label>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <strong>$2.90 per ad</strong>
                                                </td>
                                            </tr>
                                       </thead>
                                        <tfoot id="featured-paymentOptions">
                                            <tr>
                                                <td>&emsp;</td>
                                                <td class="text-right"><strong>Total : $2.90</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <br>
                                    <br>
                                    <div>
                                        <button class="btn btn-green btn-md" name="createAd">Create ad</button>&emsp;&emsp;
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


    <!--========================================
    Javascript
    ===========================================-->
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="create.js"></script>

</body>


</html>
