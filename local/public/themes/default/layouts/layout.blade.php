<?php 
/*
<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
    
        <title>@get('title')</title>

        @styles()
        
    </head>

    <body>
        @partial('header')

        @content()

        @partial('footer')

        @scripts()
    </body>

</html>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>E-Commerce Front End Theme</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{FRONT.'css/e-commerce/app.min.css'}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="fade show">
		<!-- BEGIN #top-nav -->
		<div id="top-nav" class="top-nav">
			<!-- BEGIN container -->
			<div class="container">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown dropdown-hover">
							<a href="#" data-toggle="dropdown"><img src="{{FRONT.'img/flag/flag-english.png'}}" class="flag-img" alt="" /> English <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#" class="dropdown-item"><img src="{{FRONT.'img/flag/flag-english.png'}}" class="flag-img" alt="" /> English</a></li>
								<li><a href="#" class="dropdown-item"><img src="{{FRONT.'img/flag/flag-german.png'}}" class="flag-img" alt="" /> German</a></li>
								<li><a href="#" class="dropdown-item"><img src="{{FRONT.'img/flag/flag-spanish.png'}}" class="flag-img" alt="" /> Spanish</a></li>
								<li><a href="#" class="dropdown-item"><img src="{{FRONT.'img/flag/flag-french.png'}}" class="flag-img" alt="" /> French</a></li>
								<li><a href="#" class="dropdown-item"><img src="{{FRONT.'img/flag/flag-chinese.png'}}" class="flag-img" alt="" /> Chinese</a></li>
							</ul>
						</li>
						<li><a href="#">Customer Care</a></li>
						<li><a href="#">Order Tracker</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Career</a></li>
						<li><a href="#">Our Forum</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#"><i class="fab fa-facebook-f f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-dribbble f-s-14"></i></a></li>
						<li><a href="#"><i class="fab fa-google f-s-14"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- END container -->
		</div>
		<!-- END #top-nav -->
		<!-- BEGIN #header -->
		<div id="header" class="header">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN header-container -->
				<div class="header-container">
					<!-- BEGIN navbar-toggle -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- END navbar-toggle -->
					<!-- BEGIN header-logo -->
					<div class="header-logo">
						<a href="index.html">
							<span class="brand-logo"></span>
							<span class="brand-text">
								<span class="text-primary">Bartanwale</span>Admin
								<small>e-commerce frontend theme</small>
							</span>
						</a>
					</div>
					<!-- END header-logo -->
					<!-- BEGIN header-nav -->
					<div class="header-nav">
						<div class=" collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li class="dropdown dropdown-full-width dropdown-hover">
									<a href="#" data-toggle="dropdown">
										Our Store 
										<b class="caret"></b>
										<span class="arrow top"></span>
									</a>
									<!-- BEGIN dropdown-menu -->
									<div class="dropdown-menu p-0">
										<!-- BEGIN dropdown-menu-container -->
										<div class="dropdown-menu-container">
											<!-- BEGIN dropdown-menu-sidebar -->
											<div class="dropdown-menu-sidebar">
												<h4 class="title">Shop By Categories</h4>
												<ul class="dropdown-menu-list">
													<li><a href="product.html">Mobile Phone</a></li>
													<li><a href="product.html">Tablet</a></li>
													<li><a href="product.html">Laptop</a></li>
													<li><a href="product.html">Desktop</a></li>
													<li><a href="product.html">TV</a></li>
													<li><a href="product.html">Speaker</a></li>
													<li><a href="product.html">Gadget</a></li>
												</ul>
											</div>
											<!-- END dropdown-menu-sidebar -->
											<!-- BEGIN dropdown-menu-content -->
											<div class="dropdown-menu-content">
												<h4 class="title">Shop By Popular Phone</h4>
												<div class="row">
													<div class="col-lg-3">
														<ul class="dropdown-menu-list">
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 7</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 6s</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 6</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 5s</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 5</a></li>
														</ul>
													</div>
													<div class="col-lg-3">
														<ul class="dropdown-menu-list">
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy S7</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy A9</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy J3</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy Note 5</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy S7</a></li>
														</ul>
													</div>
													<div class="col-lg-3">
														<ul class="dropdown-menu-list">
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 730</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 735</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 830</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 820</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia Icon</a></li>
														</ul>
													</div>
													<div class="col-lg-3">
														<ul class="dropdown-menu-list">
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia X</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia Z5</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia M5</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia C5</a></li>
															<li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia C4</a></li>
														</ul>
													</div>
												</div>
												<h4 class="title">Shop By Brand</h4>
												<ul class="dropdown-brand-list m-b-0">
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-apple.png'}}" alt="" /></a></li>
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-samsung.png'}}" alt="" /></a></li>
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-htc.png'}}" alt="" /></a></li>
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-microsoft.png'}}" alt="" /></a></li>
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-nokia.png'}}" alt="" /></a></li>
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-blackberry.png'}}" alt="" /></a></li>
													<li><a href="product.html"><img src="{{FRONT.'img/brand/brand-sony.png'}}" alt="" /></a></li>
												</ul>
											</div>
											<!-- END dropdown-menu-content -->
										</div>
										<!-- END dropdown-menu-container -->
									</div>
									<!-- END dropdown-menu -->
								</li>
								<li class="dropdown dropdown-hover">
									<a href="#" data-toggle="dropdown">
										Accessories 
										<b class="caret"></b>
										<span class="arrow top"></span>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="product.html">Mobile Phone</a>
										<a class="dropdown-item" href="product.html">Tablet</a>
										<a class="dropdown-item" href="product.html">TV</a>
										<a class="dropdown-item" href="product.html">Desktop</a>
										<a class="dropdown-item" href="product.html">Laptop</a>
										<a class="dropdown-item" href="product.html">Speaker</a>
										<a class="dropdown-item" href="product.html">Gadget</a>
									</div>
								</li>
								<li><a href="product.html">New Arrival</a></li>
								<li class="dropdown dropdown-hover">
									<a href="#" data-toggle="dropdown">
										Pages
										<b class="caret"></b>
										<span class="arrow top"></span>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="index.html">Home (Default)</a>
										<a class="dropdown-item" href="index_fixed_header.html">Home (Fixed Header)</a>
										<a class="dropdown-item" href="index_inverse_header.html">Home (Inverse Header)</a>
										<a class="dropdown-item" href="search_results.html">Search Results</a>
										<a class="dropdown-item" href="product.html">Product Page</a>
										<a class="dropdown-item" href="product_detail.html">Product Details Page</a>
										<a class="dropdown-item" href="checkout_cart.html">Checkout Cart</a>
										<a class="dropdown-item" href="checkout_info.html">Checkout Shipping</a>
										<a class="dropdown-item" href="checkout_payment.html">Checkout Payment</a>
										<a class="dropdown-item" href="checkout_complete.html">Checkout Complete</a>
										<a class="dropdown-item" href="my_account.html">My Account</a>
										<a class="dropdown-item" href="contact_us.html">Contact Us</a>
										<a class="dropdown-item" href="about_us.html">About Us</a>
										<a class="dropdown-item" href="faq.html">FAQ</a>
									</div>
								</li>
								<li class="dropdown dropdown-hover">
									<a href="#" data-toggle="dropdown">
										<i class="fa fa-search search-btn"></i>
										<span class="arrow top"></span>
									</a>
									<div class="dropdown-menu p-15">
										<form action="search_results.html" method="POST" name="search_form">
											<div class="input-group">
												<input type="text" placeholder="Search" class="form-control bg-silver-lighter" />
												<div class="input-group-append">
													<button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
												</div>
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- END header-nav -->
					<!-- BEGIN header-nav -->
					<div class="header-nav">
						<ul class="nav pull-right">
							<li class="dropdown dropdown-hover">
								<a href="#" class="header-cart" data-toggle="dropdown">
									<i class="fa fa-shopping-bag"></i>
									<span class="total">2</span>
									<span class="arrow top"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-cart p-0">
									<div class="cart-header">
										<h4 class="cart-title">Shopping Bag (1) </h4>
									</div>
									<div class="cart-body">
										<ul class="cart-item">
											<li>
												<div class="cart-item-image"><img src="{{FRONT.'img/product/product-ipad.jpg'}}" alt="" /></div>
												<div class="cart-item-info">
													<h4>iPad Pro Wi-Fi 128GB - Silver</h4>
													<p class="price">$699.00</p>
												</div>
												<div class="cart-item-close">
													<a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
												</div>
											</li>
											<li>
												<div class="cart-item-image"><img src="{{FRONT.'img/product/product-imac.jpg'}}" alt="" /></div>
												<div class="cart-item-info">
													<h4>21.5-inch iMac</h4>
													<p class="price">$1299.00</p>
												</div>
												<div class="cart-item-close">
													<a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
												</div>
											</li>
											<li>
												<div class="cart-item-image"><img src="{{FRONT.'img/product/product-iphone.png'}}" alt="" /></div>
												<div class="cart-item-info">
													<h4>iPhone 6s 16GB - Silver</h4>
													<p class="price">$649.00</p>
												</div>
												<div class="cart-item-close">
													<a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
												</div>
											</li>
										</ul>
									</div>
									<div class="cart-footer">
										<div class="row row-space-10">
											<div class="col-6">
												<a href="checkout_cart.html" class="btn btn-default btn-theme btn-block">View Cart</a>
											</div>
											<div class="col-6">
												<a href="checkout_cart.html" class="btn btn-inverse btn-theme btn-block">Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{route('login')}}">
									<img src="{{FRONT.'img/user/user-1.jpg'}}" class="user-img" alt="" /> 
									<span class="d-none d-xl-inline">Login</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- END header-nav -->
				</div>
				<!-- END header-container -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #slider -->
		<div id="slider" class="section-container p-0 bg-black-darker">
			<!-- BEGIN carousel -->
			<div id="main-carousel" class="carousel slide" data-ride="carousel">
				<!-- BEGIN carousel-inner -->
				<div class="carousel-inner">
					<!-- BEGIN item -->
					<div class="carousel-item active" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url('{{FRONT.'img/slider/slider-1-cover.jpg'}}') center 0 / cover no-repeat;">
						<div class="container">
							<img src="{{FRONT.'img/slider/slider-1-product.png'}}" class="product-img right bottom fadeInRight animated" alt="" />
						</div>
						<div class="carousel-caption carousel-caption-left">
							<div class="container">
								<h3 class="title m-b-5 fadeInLeftBig animated">iMac</h3>
								<p class="m-b-15 fadeInLeftBig animated">The vision is brighter than ever.</p>
								<div class="price m-b-30 fadeInLeftBig animated"><small>from</small> <span>$2299.00</span></div>
								<a href="product_detail.html" class="btn btn-outline btn-lg fadeInLeftBig animated">Buy Now</a>
							</div>
						</div>
					</div>
					<!-- END item -->
					<!-- BEGIN item -->
					<div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url('{{FRONT.'img/slider/slider-2-cover.jpg'}}') center 0 / cover no-repeat;">
						<div class="container">
							<img src="{{FRONT.'img/slider/slider-2-product.png'}}" class="product-img left bottom fadeInLeft animated" alt="" />
						</div>
						<div class="carousel-caption carousel-caption-right">
							<div class="container">
								<h3 class="title m-b-5 fadeInRightBig animated">iPhone X</h3>
								<p class="m-b-15 fadeInRightBig animated">Say hello to the future.</p>
								<div class="price m-b-30 fadeInRightBig animated"><small>from</small> <span>$1,149.00</span></div>
								<a href="product_detail.html" class="btn btn-outline btn-lg fadeInRightBig animated">Buy Now</a>
							</div>
						</div>
					</div>
					<!-- END item -->
					<!-- BEGIN item -->
					<div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="background: url('{{FRONT.'img/slider/slider-3-cover.jpg'}}') center 0 / cover no-repeat;">
						<div class="carousel-caption">
							<div class="container">
								<h3 class="title m-b-5 fadeInDownBig animated">Macbook Air</h3>
								<p class="m-b-15 fadeInDownBig animated">Thin.Light.Powerful.<br />And ready for anything</p>
								<div class="price fadeInDownBig animated"><small>from</small> <span>$999.00</span></div>
								<a href="product_detail.html" class="btn btn-outline btn-lg fadeInUpBig animated">Buy Now</a>
							</div>
						</div>
					</div>
					<!-- END item -->
				</div>
				<!-- END carousel-inner -->
				<a class="carousel-control-prev" href="#main-carousel" data-slide="prev"> 
				<i class="fa fa-angle-left"></i> 
				</a>
				<a class="carousel-control-next" href="#main-carousel" data-slide="next"> 
				<i class="fa fa-angle-right"></i> 
				</a>
			</div>
			<!-- END carousel -->
		</div>
		<!-- END #slider -->
		
		<!-- BEGIN #promotions -->
		<div id="promotions" class="section-container bg-white">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right">SHOW ALL</a>
					Exclusive promotions
					<small>from 25 September 2016 - 1 January 2017</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN row -->
				<div class="row row-space-10">
					<!-- BEGIN col-6 -->
					<div class="col-lg-6">
						<!-- BEGIN promotion -->
						<div class="promotion promotion-lg bg-black-darker">
							<div class="promotion-image text-right promotion-image-overflow-bottom">
								<img src="{{FRONT.'img/product/product-iphone-se.png'}}" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">iPhone SE</h4>
								<div class="promotion-price"><small>from</small> $299.00</div>
								<p class="promotion-desc">A big step for small.<br />A beloved design. Now with more to love.</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3 col-md-6">
						<!-- BEGIN promotion -->
						<div class="promotion bg-blue">
							<div class="promotion-image promotion-image-overflow-bottom promotion-image-overflow-top">
								<img src="{{FRONT.'img/product/product-apple-watch-sm.png'}}" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse text-right">
								<h4 class="promotion-title">Apple Watch</h4>
								<div class="promotion-price"><small>from</small> $299.00</div>
								<p class="promotion-desc">You. At a glance.</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
						<!-- BEGIN promotion -->
						<div class="promotion bg-silver-lighter">
							<div class="promotion-image text-center promotion-image-overflow-bottom">
								<img src="{{FRONT.'img/product/product-mac-mini.png'}}" alt="" />
							</div>
							<div class="promotion-caption text-center">
								<h4 class="promotion-title">Mac Mini</h4>
								<div class="promotion-price"><small>from</small> $199.00</div>
								<p class="promotion-desc">It’s mini in a massive way.</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3 col-md-6">
						<!-- BEGIN promotion -->
						<div class="promotion bg-silver-lighter">
							<div class="promotion-image promotion-image-overflow-right promotion-image-overflow-bottom text-right">
								<img src="{{FRONT.'img/product/product-mac-accessories.png'}}" alt="" />
							</div>
							<div class="promotion-caption text-center">
								<h4 class="promotion-title">Apple Accessories</h4>
								<div class="promotion-price"><small>from</small> $99.00</div>
								<p class="promotion-desc">Redesigned. Rechargeable. Remarkable.</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
						<!-- BEGIN promotion -->
						<div class="promotion bg-black">
							<div class="promotion-image text-right">
								<img src="{{FRONT.'img/product/product-mac-pro.png'}}" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">Mac Pro</h4>
								<div class="promotion-price"><small>from</small> $1,299.00</div>
								<p class="promotion-desc">Built for creativity on an epic scale.</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
					</div>
					<!-- END col-3 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #promotions -->
		
		<!-- BEGIN #trending-items -->
		<div id="trending-items" class="section-container">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right m-l-5"><i class="fa fa-angle-right f-s-18"></i></a>
					<a href="#" class="pull-right"><i class="fa fa-angle-left f-s-18"></i></a>
					Trending Items
					<small>Shop and get your favourite items at amazing prices!</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN row -->
				<div class="row row-space-10">
					<!-- BEGIN col-2 -->
					<div class="col-lg-2 col-md-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="{{FRONT.'img/product/product-iphone.png'}}" alt="" />
								<div class="discount">15% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product_detail.html">iPhone 6s Plus<br />16GB</a>
								</h4>
								<p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
								<div class="item-price">$649.00</div>
								<div class="item-discount-price">$739.00</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					<div class="col-lg-2 col-md-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="{{FRONT.'img/product/product-ipad-pro.png'}}" alt=""  />
								<div class="discount">32% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product.html">9.7-inch iPad Pro<br />32GB</a>
								</h4>
								<p class="item-desc">Super. Computer. Now in two sizes.</p>
								<div class="item-price">$599.00</div>
								<div class="item-discount-price">$799.00</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					<div class="col-lg-2 col-md-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="{{FRONT.'img/product/product-imac.png'}}" alt="" />
								<div class="discount">20% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product.html">21.5-inch iMac<br />with Retina Display</a>
								</h4>
								<p class="item-desc">Retina. Now in colossal and ginormous.</p>
								<div class="item-price">$1,099.00</div>
								<div class="item-discount-price">$1,299.00</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					<div class="col-lg-2 col-md-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="{{FRONT.'img/product/product-apple-watch.png'}}" alt="" />
								<div class="discount">13% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product.html">Apple Watch<br />Stainless steel cases</a>
								</h4>
								<p class="item-desc">You. At a glance.</p>
								<div class="item-price">$599.00</div>
								<div class="item-discount-price">$799.00</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					<div class="col-lg-2 col-md-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="{{FRONT.'img/product/product-macbook-pro.png'}}" alt="" />
								<div class="discount">30% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product.html">MacBook Pro<br />with Retina Display</a>
								</h4>
								<p class="item-desc">Stunning Retina Display</p>
								<div class="item-price">$1299.00</div>
								<div class="item-discount-price">$1499.00</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					<!-- END col-2 -->
					<!-- BEGIN col-2 -->
					<div class="col-lg-2 col-md-4">
						<!-- BEGIN item -->
						<div class="item item-thumbnail">
							<a href="product_detail.html" class="item-image">
								<img src="{{FRONT.'img/product/product-apple-tv.png'}}" alt="" />
								<div class="discount">40% OFF</div>
							</a>
							<div class="item-info">
								<h4 class="item-title">
									<a href="product.html">Apple Tv<br />32GB</a>
								</h4>
								<p class="item-desc">The future of television is here.</p>
								<div class="item-price">$149.00</div>
								<div class="item-discount-price">$249.00</div>
							</div>
						</div>
						<!-- END item -->
					</div>
					<!-- END col-2 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #trending-items -->
		
		<!-- BEGIN #mobile-list -->
		<div id="mobile-list" class="section-container p-t-0">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right">SHOW ALL</a>
					Mobile Phones
					<small>Shop and get your favourite phone at amazing prices!</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN category-container -->
				<div class="category-container">
					<!-- BEGIN category-sidebar -->
					<div class="category-sidebar">
						<ul class="category-list">
							<li class="list-header">Top Categories</li>
							<li><a href="#">Microsoft</a></li>
							<li><a href="#">Samsung</a></li>
							<li><a href="#">Apple</a></li>
							<li><a href="#">Micromax</a></li>
							<li><a href="#">Karbonn</a></li>
							<li><a href="#">Intex</a></li>
							<li><a href="#">Sony</a></li>
							<li><a href="#">HTC</a></li>
							<li><a href="#">Asus</a></li>
							<li><a href="#">Nokia</a></li>
							<li><a href="#">Blackberry</a></li>
							<li><a href="#">All Brands</a></li>
						</ul>
					</div>
					<!-- END category-sidebar -->
					<!-- BEGIN category-detail -->
					<div class="category-detail">
						<!-- BEGIN category-item -->
						<a href="#" class="category-item full">
							<div class="item">
								<div class="item-cover">
									<img src="{{FRONT.'img/product/product-samsung-s7-edge.jpg'}}" alt="" />
								</div>
								<div class="item-info bottom">
									<h4 class="item-title">Samsung Galaxy s7 Edge + Geat 360 + Gear VR</h4>
									<p class="item-desc">Redefine what a phone can do</p>
									<div class="item-price">$799.00</div>
								</div>
							</div>
						</a>
						<!-- END category-item -->
						<!-- BEGIN category-item -->
						<div class="category-item list">
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-iphone.png'}}" alt="" />
										<div class="discount">15% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">iPhone 6s Plus<br />16GB</a>
										</h4>
										<p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
										<div class="item-price">$649.00</div>
										<div class="item-discount-price">$739.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-samsung-note5.png'}}" alt="" />
										<div class="discount">32% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Samsung Galaxy Note 5<br />Black</a>
										</h4>
										<p class="item-desc">Super. Computer. Now in two sizes.</p>
										<div class="item-price">$599.00</div>
										<div class="item-discount-price">$799.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-iphone-se.png'}}" alt="" />
										<div class="discount">20% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">iPhone SE<br />32/64Gb</a>
										</h4>
										<p class="item-desc">A big step for small.</p>
										<div class="item-price">$499.00</div>
										<div class="item-discount-price">$599.00</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-zenfone2.png'}}" alt="" />
										<div class="discount">15% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">Assus ZenFone 2<br />‏(ZE550ML)</a>
										</h4>
										<p class="item-desc">See What Others Can’t See</p>
										<div class="item-price">$399.00</div>
										<div class="item-discount-price">$453.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-xperia-z.png'}}" alt="" />
										<div class="discount">32% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Sony Xperia Z<br />Black Color</a>
										</h4>
										<p class="item-desc">For unexpectedly beautiful moments</p>
										<div class="item-price">$599.00</div>
										<div class="item-discount-price">$799.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-lumia-532.png'}}" alt="" />
										<div class="discount">20% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Microsoft Lumia 531<br />Smartphone Orange</a>
										</h4>
										<p class="item-desc">1 Year Local Manufacturer Warranty</p>
										<div class="item-price">$99.00</div>
										<div class="item-discount-price">$199.00</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
						</div>
						<!-- END category-item -->
					</div>
					<!-- END category-detail -->
				</div>
				<!-- END category-container -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #mobile-list -->
		
		<!-- BEGIN #tablet-list -->
		<div id="tablet-list" class="section-container p-t-0">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right">SHOW ALL</a>
					Tablet
					<small>Shop and get your favourite tablet at amazing prices!</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN category-container -->
				<div class="category-container">
					<!-- BEGIN category-sidebar -->
					<div class="category-sidebar">
						<ul class="category-list">
							<li class="list-header">Top Categories</li>
							<li><a href="#">Apple</a></li>
							<li><a href="#">HP</a></li>
							<li><a href="#">Huawei</a></li>
							<li><a href="#">Samsung</a></li>
							<li><a href="#">Sony</a></li>
							<li><a href="#">All Brands</a></li>
						</ul>
					</div>
					<!-- END category-sidebar -->
					<!-- BEGIN category-detail -->
					<div class="category-detail">
						<!-- BEGIN category-item -->
						<a href="#" class="category-item full">
							<div class="item">
								<div class="item-cover">
									<img src="{{FRONT.'img/product/product-huawei-mediapad.jpg'}}" alt="" />
								</div>
								<div class="item-info bottom">
									<h4 class="item-title">Huawei MediaPad T1 7.0</h4>
									<p class="item-desc">Vibrant colors. Beautifully displayed</p>
									<div class="item-price">$299.00</div>
								</div>
							</div>
						</a>
						<!-- END category-item -->
						<!-- BEGIN category-item -->
						<div class="category-item list">
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-ipad-pro.png'}}" alt="" />
										<div class="discount">15% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">9.7-inch iPad Pro<br />32GB</a>
										</h4>
										<p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
										<div class="item-price">$649.00</div>
										<div class="item-discount-price">$739.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-galaxy-tab2.png'}}" alt="" />
										<div class="discount">32% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Samsung Galaxy Tab S2<br />Black</a>
										</h4>
										<p class="item-desc">A Brilliant Screen That Adjusts to You</p>
										<div class="item-price">$399.99</div>
										<div class="item-discount-price">$499.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-galaxy-taba.png'}}" alt="" />
										<div class="discount">20% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Samsung Galaxy Tab A<br />9.7" 16Gb(Wi-Fi)</a>
										</h4>
										<p class="item-desc">Keep All Your Samsung Devices In Sync</p>
										<div class="item-price">$349.99</div>
										<div class="item-discount-price">$399.99</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-hp-spectrex2.png'}}" alt="" />
										<div class="discount">15% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">HP Spectre x2<br />‏12-a011nr</a>
										</h4>
										<p class="item-desc">Our thinnest detachable separates from all others.</p>
										<div class="item-price">$799.99</div>
										<div class="item-discount-price">$850.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-xperia-z2.png'}}" alt="" />
										<div class="discount">32% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Sony Xperia Z2 Tablet<br />Black Color</a>
										</h4>
										<p class="item-desc">For unexpectedly beautiful moments</p>
										<div class="item-price">$199.00</div>
										<div class="item-discount-price">$259.00</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="{{FRONT.'img/product/product-ipad-air.png'}}" alt="" />
										<div class="discount">20% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">iPad Air 2<br />32/64Gb</a>
										</h4>
										<p class="item-desc">Light. Heavyweight.</p>
										<div class="item-price">$399.00</div>
										<div class="item-discount-price">$459.00</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
						</div>
						<!-- END category-item -->
					</div>
					<!-- END category-detail -->
				</div>
				<!-- END category-container -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #tablet-list -->
		
		<!-- BEGIN #policy -->
		<div id="policy" class="section-container bg-white">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-4 -->
					<div class="col-lg-4 col-md-4 mb-4 mb-md-0">
						<!-- BEGIN policy -->
						<div class="policy">
							<div class="policy-icon"><i class="fa fa-truck"></i></div>
							<div class="policy-info">
								<h4>Free Delivery Over $100</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<!-- END policy -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4 col-md-4 mb-4 mb-md-0">
						<!-- BEGIN policy -->
						<div class="policy">
							<div class="policy-icon"><i class="fa fa-umbrella"></i></div>
							<div class="policy-info">
								<h4>1 Year Warranty For Phones</h4>
								<p>Cras laoreet urna id dui malesuada gravida. <br />Duis a lobortis dui.</p>
							</div>
						</div>
						<!-- END policy -->
					</div>
					<!-- END col-4 -->
					<!-- BEGIN col-4 -->
					<div class="col-lg-4 col-md-4">
						<!-- BEGIN policy -->
						<div class="policy">
							<div class="policy-icon"><i class="fa fa-user-md"></i></div>
							<div class="policy-info">
								<h4>6 Month Warranty For Accessories</h4>
								<p>Fusce ut euismod orci. Morbi auctor, sapien non eleifend iaculis.</p>
							</div>
						</div>
						<!-- END policy -->
					</div>
					<!-- END col-4 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #policy -->
		
		<!-- BEGIN #subscribe -->
		<div id="subscribe" class="section-container">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-6 -->
					<div class="col-md-6 mb-4 mb-md-0">
						<!-- BEGIN subscription -->
						<div class="subscription">
							<div class="subscription-intro">
								<h4> LET'S STAY IN TOUCH</h4>
								<p>Get updates on sales specials and more</p>
							</div>
							<div class="subscription-form">
								<form name="subscription_form" action="index.html" method="POST">
									<div class="input-group">
										<input type="text" class="form-control" name="email" placeholder="Enter Email Address" />
										<div class="input-group-append">
											<button type="submit" class="btn btn-inverse"><i class="fa fa-angle-right"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- END subscription -->
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-md-6">
						<!-- BEGIN social -->
						<div class="social">
							<div class="social-intro">
								<h4>FOLLOW US</h4>
								<p>We want to hear from you!</p>
							</div>
							<div class="social-list">
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-dribbble"></i></a>
								<a href="#"><i class="fab fa-google-plus"></i></a>
							</div>
						</div>
						<!-- END social -->
					</div>
					<!-- END col-6 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #subscribe -->
		
		<!-- BEGIN #footer -->
		<div id="footer" class="footer">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<h4 class="footer-header">ABOUT US</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tristique dolor, ac efficitur velit. Nulla lobortis tempus convallis. Nulla aliquam lectus eu porta pulvinar. Mauris semper justo erat. 
						</p>
						<p class="mb-lg-4 mb-0">
							Vestibulum porttitor lorem et vestibulum pharetra. Phasellus sit amet mi congue, hendrerit mi ut, dignissim eros.
						</p>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<h4 class="footer-header">RELATED LINKS</h4>
						<ul class="fa-ul mb-lg-4 mb-0">
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Shopping Help</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Terms of Use</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Contact Us</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Careers</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Payment Method</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sales & Refund</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sitemap</a></li>
							<li><i class="fa fa-li fa-angle-right"></i> <a href="#">Privacy & Policy</a></li>
						</ul>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<h4 class="footer-header">LATEST PRODUCT</h4>
						<ul class="list-unstyled list-product mb-lg-4 mb-0">
							<li>
								<div class="image">
									<img src="{{FRONT.'img/product/product-iphone-6s.jpg'}}" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Iphone 6s</h4>
									<div class="price">$1200.00</div>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="{{FRONT.'img/product/product-galaxy-s6.jpg'}}" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Samsung Galaxy s7</h4>
									<div class="price">$850.00</div>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="{{FRONT.'img/product/product-ipad-pro.jpg'}}" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Ipad Pro</h4>
									<div class="price">$800.00</div>
								</div>
							</li>
							<li>
								<div class="image">
									<img src="{{FRONT.'img/product/product-galaxy-note5.jpg'}}" alt="" />
								</div>
								<div class="info">
									<h4 class="info-title">Samsung Galaxy Note 5</h4>
									<div class="price">$1200.00</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3">
						<h4 class="footer-header">OUR CONTACT</h4>
						<address class="mb-lg-4 mb-0">
							<strong>Twitter, Inc.</strong><br />
							1355 Market Street, Suite 900<br />
							San Francisco, CA 94103<br /><br />
							<abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
							<abbr title="Fax">Fax:</abbr> (123) 456-7891<br />
							<abbr title="Email">Email:</abbr> <a href="mailto:sales@myshop.com">sales@myshop.com</a><br />
							<abbr title="Skype">Skype:</abbr> <a href="skype:myshop">myshop</a>
						</address>
					</div>
					<!-- END col-3 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #footer -->
		
		<!-- BEGIN #footer-copyright -->
		<div id="footer-copyright" class="footer-copyright">
			<!-- BEGIN container -->
			<div class="container">
				<div class="payment-method">
					<img src="{{FRONT.'img/payment/payment-method.png'}}" alt="" />
				</div>
				<div class="copyright">
					Copyright &copy; 2019 SeanTheme. All rights reserved.
				</div>
			</div>
			<!-- END container -->
		</div>
		<!-- END #footer-copyright -->
	</div>
	<!-- END #page-container -->

	<!-- begin theme-panel -->
	<div class="theme-panel">
		<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
		<div class="theme-panel-content">
			<ul class="theme-list clearfix">
				<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/e-commerce/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/e-commerce/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/e-commerce/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/e-commerce/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/e-commerce/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/e-commerce/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green" data-original-title="" title="">&nbsp;</a></li>
				<li class="active"><a href="javascript:;" class="bg-teal" data-theme-file="" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/e-commerce/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/e-commerce/theme/blue.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/e-commerce/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/e-commerce/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo" data-original-title="" title="">&nbsp;</a></li>
				<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/e-commerce/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black" data-original-title="" title="">&nbsp;</a></li>
			</ul>
		</div>
	</div>
	<!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
    <script src="{{FRONT.'js/e-commerce/app.min.js'}}"></script>
    <script src="{{ FRONT.'js/ecom-front.js'}}"></script>

	<!-- ================== END BASE JS ================== -->
</body>
</html>
