<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css"  href="{{url('public/main/assets/css/responsive.css')}}" />
    <title>@if(!empty($pageTitle)){{$pageTitle}}@endif</title>
</head>
<body class="home">
<!-- TOP BANNER -->
{{--<div id="top-banner" class="top-banner">--}}
    {{--<div class="bg-overlay"></div>--}}
    {{--<div class="container">--}}
        {{--<h1>Special Offer!</h1>--}}
        {{--<h2>Additional 40% OFF For Men & Women Clothings</h2>--}}
        {{--<span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>--}}
        {{--<span class="btn-close"></span>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- HEADER -->

<div id="header" class="header">
    <!--/.top-header -->
@include('layouts.header')
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav" >
                                    <li class="active"><a href="#">صفحه ی اصلی</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive"  src="public/main/assets/data/men.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">MEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive"  src="public/main/assets/data/women.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">WOMEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive"  src="public/main/assets/data/kid.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Kids</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Shoes</a></li>
                                                    <li class="link_container"><a href="#">Clothing</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive"  src="public/main/assets/data/trending.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">TRENDING</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Men's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Women's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Sports</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Foods</a>
                                        <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Asian</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Vietnamese Pho</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Seafood</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sausages</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Meat Dishes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Desserts</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">European</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Greek Potatoes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Chicken</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Italian Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">French Cakes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">FAST</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img  src="public/main/assets/data/banner-topmenu.jpg" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Digital</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Mobile</a></li>
                                                    <li class="link_container"><a href="#">Tablets</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html">Furniture</a></li>
                                    <li><a href="category.html">Jewelry</a></li>
                                    <li><a href="category.html">Blog</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="btn-open-mobile pull-left home-page"><i class="fa fa-bars"></i></span>
                            <span class="title-menu pull-right">دسته بندی ها</span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                                <li><a href="#">Electronics<img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/1.png"></a></li>
                                <li>
                                    <a class="parent" href="#">Sports &amp; Outdoors<img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/2.png"></a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Tennis</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Tennis</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Swimming</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Shoes</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-custom-html col-sm-12">
                                                <a href="#"><img  src="public/main/assets/data/banner-megamenu.jpg" alt="Banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/3.png">Smartphone &amp; Tablets</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/4.png">Health &amp; Beauty Bags</a></li>
                                <li>
                                    <a class="parent" href="#">
                                        <img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/5.png">Shoes &amp; Accessories</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-12">
                                                <h4 class="mega-group-header"><span>Special products</span></h4>
                                                <div class="row mega-products">
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img  src="public/main/assets/data/p10.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img  src="public/main/assets/data/p11.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img  src="public/main/assets/data/p12.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img  src="public/main/assets/data/p13.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/6.png">Toys &amp; Hobbies</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/7.png">Computers &amp; Networking</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/8.png">Laptops &amp; Accessories</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/9.png">Jewelry &amp; Watches</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/10.png">Flashlights &amp; Lamps</a></li>
                                <li>
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/11.png">
                                        Cameras &amp; Photo
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/5.png">
                                        Television
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/7.png">Computers &amp; Networking
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/6.png">
                                        Toys &amp; Hobbies
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#"><img class="icon-menu" alt="Funky roots"  src="public/main/assets/data/9.png">Jewelry &amp; Watches</a></li>
                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
@yield('content')
<!-- Footer -->
<footer id="footer">
     <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="#"><img  src="public/main/assets/data/introduce-logo.png" alt="" /></a>
                        <div id="address-list">
                            <div class="tit-name">Address:</div>
                            <div class="tit-contain">Example Street 68, Mahattan, New York, USA.</div>
                            <div class="tit-name">Phone:</div>
                            <div class="tit-contain">+00 123 456 789</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">support@business.com</div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="introduce-title">Company</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">My Account</div>
                            <ul id = "introduce-Account" class="introduce-list">
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Personal In</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">Support</div>
                            <ul id = "introduce-support"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="contact-box">
                        <div class="introduce-title">Newsletter</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Your Email Address"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Let's Socialize</div>
                        <div class="social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /#introduce-box -->
        
            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Accepted Payment Methods</li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-ups.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-qiwi.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-wu.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-cn.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-visa.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-mc.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-ems.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-dhl.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-fe.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img  src="public/main/assets/data/trademark-wm.jpg"  alt="ups"/></a>
                        </li>
                    </ul> 
                </div>
            </div> <!-- /#trademark-box -->
            
            <!-- #trademark-text-box -->
            <div id="trademark-text-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-search-list" class="trademark-list">
                        <li class="trademark-text-tit">HOT SEARCHED KEYWORDS:</li>
                        <li><a href="#" >Xiaomio Mi3</a></li>
                        <li><a href="#" >Digiflipo Pro XT 712 Tablet</a></li>
                        <li><a href="#" >Mi 3 Phones</a></li>
                        <li><a href="#" >Iphoneo 6 Plus</a></li>
                        <li><a href="#" >Women's Messenger Bags</a></li>
                        <li><a href="#" >Wallets</a></li>
                        <li><a href="#" >Women's Clutches</a></li>
                        <li><a href="#" >Backpacks Totes</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-tv-list" class="trademark-list">
                        <li class="trademark-text-tit">TVS:</li>
                        <li><a href="#" >Sonyo TV</a></li>
                        <li><a href="#" >Samsing TV</a></li>
                        <li><a href="#" >LGG TV</a></li>
                        <li><a href="#" >Onidai TV</a></li>
                        <li><a href="#" >Toshibao TV</a></li>
                        <li><a href="#" >Philipsi TV</a></li>
                        <li><a href="#" >Micromaxo TV</a></li>
                        <li><a href="#" >LED TV</a></li>
                        <li><a href="#" >LCD TV</a></li>
                        <li><a href="#" >Plasma TV</a></li>
                        <li><a href="#" >3D TV</a></li>
                        <li><a href="#" >Smart TV</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-mobile-list" class="trademark-list">
                        <li class="trademark-text-tit">MOBILES:</li>  
                        <li><a href="#" >Moto E</a></li>
                        <li><a href="#" >Samsing Mobile</a></li>
                        <li><a href="#" >Micromaxi Mobile</a></li>
                        <li><a href="#" >Nokian Mobile</a></li>
                        <li><a href="#" >HTCi Mobile</a></li>
                        <li><a href="#" >Sonyo Mobile</a></li>
                        <li><a href="#" >Appleo Mobile</a></li>
                        <li><a href="#" >LGG Mobile</a></li>
                        <li><a href="#" >Karbonni Mobile</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-laptop-list" class="trademark-list">
                        <li class="trademark-text-tit">LAPTOPS::</li> 
                        <li><a href="#" >Appleo Laptop</a></li>
                        <li><a href="#" >Acer Laptop</a></li>
                        <li><a href="#" >Samsing Laptop</a></li>
                        <li><a href="#" >Lenov Laptop</a></li>
                        <li><a href="#" >Sonyo Laptop</a></li>
                        <li><a href="#" >Delli Laptop</a></li>
                        <li><a href="#" >Asuso Laptop</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >LGG Laptop</a></li>
                        <li><a href="#" >HPo Laptop</a></li>
                        <li><a href="#" >Notebook</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-watches-list" class="trademark-list">
                        <li class="trademark-text-tit">WATCHES:</li>  
                        <li><a href="#" >FCUKo Watches</a></li>
                        <li><a href="#" >Titan Watches</a></li>
                        <li><a href="#" >Casioo Watches</a></li>
                        <li><a href="#" >Fastrack Watches</a></li>
                        <li><a href="#" >Timexi Watches</a></li>
                        <li><a href="#" >Fossili Watches</a></li>
                        <li><a href="#" >Dieselo Watches</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >Luxury Watches</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-shoes-list" class="trademark-list">
                        <li class="trademark-text-tit">FOOTWEAR:</li>  
                        <li><a href="#" >Shoes</a></li>
                        <li><a href="#" >Casual Shoes</a></li>
                        <li><a href="#" >Sports Shoes</a></li>
                        <li><a href="#" >Adidasi Shoes</a></li>
                        <li><a href="#" >Gas Shoes</a></li>
                        <li><a href="#" >Pumai Shoes</a></li>
                        <li><a href="#" >Reeboki Shoes</a></li>
                        <li><a href="#" >Woodlandi Shoes</a></li>
                        <li><a href="#" >Red tape Shoes</a></li>
                        <li><a href="#" >Nikeo Shoes</a></li>
                    </ul>
                </div>
            </div><!-- /#trademark-text-box -->
            <div id="footer-menu-box">
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Company Info - Partnerships</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Online Shopping</a></li>
                        <li><a href="#" >Promotions</a></li>
                        <li><a href="#" >My Orders</a></li>
                        <li><a href="#" >Help</a></li>
                        <li><a href="#" >Site Map</a></li>
                        <li><a href="#" >Customer Service</a></li>
                        <li><a href="#" >Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Most Populars</a></li>
                        <li><a href="#" >Best Sellers</a></li>
                        <li><a href="#" >New Arrivals</a></li>
                        <li><a href="#" >Special Products</a></li>
                        <li><a href="#" >Manufacturers</a></li>
                        <li><a href="#" >Our Stores</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Warantee</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Checkout</a></li>
                        <li><a href="#" >Discount</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Terms & Conditions</a></li>
                        <li><a href="#" >Policy</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Returns</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Warrantee</a></li>
                        <li><a href="#" >FAQ</a></li>
                        <li><a href="#" >Contact</a></li>
                    </ul>
                </div>
                <p class="text-center">Copyrights &#169; 2015 KuteShop. All Rights Reserved. Designed by KuteThemes.com</p>
            </div><!-- /#footer-menu-box -->
        </div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript"   src="{{url('public/main/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript"   src="{{url('public/main/assets/js/theme-script.js')}}"></script>

</body>
</html>