<!doctype html>
<html class="no-js" lang="">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">

        <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png')}}">
        <!-- Place favicon.ico in the root directory -->
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css')}}">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.simpleLens.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
		<!-- nivo.slider css -->
        <link rel="stylesheet" href="{{ asset('assets/css/nivo-slider.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('assets/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
		<!-- modernizr js -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<header class="header-one header-two">
			<div class="header-top-two">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-12">
							<div class="middel-top">
								<div class="left floatleft">
									<p><i class="mdi mdi-clock"></i> Mon-Fri : 09:00-19:00</p>
								</div>
							</div>
							<div class="middel-top clearfix">
								<ul class="clearfix right floatright">
									<li>
										<a href="#"><i class="mdi mdi-account"></i></a>
										<ul>
											<li><a href="login.html">Login</a></li>
											<li><a href="login.html">Registar</a></li>
											<li><a href="my-account.html">My account</a></li>
										</ul>
									</li>
									<li>
										<a href="#"><i class="mdi mdi-settings"></i></a>
										<ul>
											<li><a href="my-account.html">My account</a></li>
											<li><a href="cart.html">My cart</a></li>
											<li><a href="wishlist.html">My wishlist</a></li>
											<li><a href="checkout.html">Check out</a></li>
										</ul>
									</li>
								</ul>
								<div class="right floatright">
									<form action="#" method="get">
										<button type="submit"><i class="mdi mdi-magnify"></i></button>
										<input type="text" placeholder="Search within these results..." />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index-2.html">Mazad el khier</a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="header-middel">
							<div class="mainmenu">
								<nav>
									<ul>
										<li><a href="index-2.html">Home</a>
										</li>
										<li><a href="shop.html">Shop</a>
											<ul class="magamenu">
												<li class="banner"><a href="shop.html"><img src="img/maga1.png" alt="" /></a></li>
												<li><h5>men’s wear</h5>
													<ul>
														<li><a href="#">Shirts & Top</a></li>
														<li><a href="#">Shoes</a></li>
														<li><a href="#">Dresses</a></li>
														<li><a href="#">Shemwear</a></li>
														<li><a href="#">Jeans</a></li>
														<li><a href="#">Sweaters</a></li>
														<li><a href="#">Jacket</a></li>
														<li><a href="#">Men Watch</a></li>
													</ul>
												</li>
												<li><h5>women’s wear</h5>
													<ul>
														<li><a href="#">Shirts & Tops</a></li>
														<li><a href="#">Shoes</a></li>
														<li><a href="#">Dresses</a></li>
														<li><a href="#">Shemwear</a></li>
														<li><a href="#">Jeans</a></li>
														<li><a href="#">Sweaters</a></li>
														<li><a href="#">Jacket</a></li>
														<li><a href="#">Women Watch</a></li>
													</ul>
												</li>
												<li class="banner"><a href="shop.html"><img src="img/maga2.png" alt="" /></a></li>
											</ul>
										</li>
										<li><a href="about.html">About</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>
							</div>
							<!-- mobile menu start -->
							<div class="mobile-menu-area">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul>
											<li><a href="index-2.html">Home</a>
											</li>
											<li><a href="shop.html">Shop</a>
												<ul>
													<li><h5>men’s wear</h5>
														<ul>
															<li><a href="#">Shirts & Top</a></li>
															<li><a href="#">Shoes</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shemwear</a></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Sweaters</a></li>
															<li><a href="#">Jacket</a></li>
															<li><a href="#">Men Watch</a></li>
														</ul>
													</li>
													<li><h5>women’s wear</h5>
														<ul>
															<li><a href="#">Shirts & Tops</a></li>
															<li><a href="#">Shoes</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shemwear</a></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Sweaters</a></li>
															<li><a href="#">Jacket</a></li>
															<li><a href="#">Women Watch</a></li>
														</ul>
													</li>
												</ul>
											</li>

											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cart-itmes">
							<a class="cart-itme-a" href="cart.html">
								<i class="mdi mdi-cart"></i>
								02 items :  <strong>$86.00</strong>
							</a>
							<div class="cartdrop">
								<div class="total">
									<span>total <strong>= $306.00</strong></span>
								</div>
								<a class="goto" href="cart.html">go to cart</a>
								<a class="out-menu" href="checkout.html">Check out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
        <!-- header section end -->
        <!-- slider-section-start -->
        <div class="main-slider-one main-slider-two slider-area">
			<div id="wrapper">
				<div class="slider-wrapper">
					<div id="mainSlider" class="nivoSlider">
						<img src="img/slider/home2/1.jpg" alt="main slider" title="#htmlcaption"/>
						<img src="img/slider/home2/2.jpg" alt="main slider" title="#htmlcaption2"/>
					</div>
					<div id="htmlcaption" class="nivo-html-caption slider-caption">
						<div class="container">
							<div class="slider-left slider-right">
								<div class="slide-text animated zoomInUp">
									<h3>new collection</h3>
									<h1>Men’s Fashion 2016</h1>
								</div>
								<div class="animated slider-btn fadeInUpBig">
									<a class="shop-btn" href="shop.html">Shop now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="htmlcaption2" class="nivo-html-caption slider-caption">
						<div class="container">
							<div class="slider-left two-caption-text slider-right">
								<div class="slide-text animated zoomInUp">
									<h3>new collection</h3>
									<h1>Men’s Fashion 2016</h1>
									<span>Starting at $65.00. Don’t miss out!</span>
								</div>
								<div class="one-p animated bounceInLeft">
									<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
								</div>
								<div class="animated slider-btn fadeInUpBig">
									<a class="shop-btn" href="shop.html">Shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider section end -->

        <!-- featured-products section start -->
		<section class="single-products  products-two section-padding extra-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2>Featured Products</h2>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<ul class="load-list load-list-one">
						<li>
							<div class="row text-center">
                @php($i=0)
                @php($y=0)
                @foreach($products as $product)
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="single-product">
										<div class="product-img">
											<div class="pro-type">
												<span>new</span>
											</div>
											<a href="#"><img src="img/products/16.jpg" alt="Product Title" /></a>
											<div class="actions-btn">
												<a href="#"><i class="mdi mdi-cart"></i></a>
												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
												<a href="#"><i class="mdi mdi-heart"></i></a>
											</div>
										</div>
										<div class="product-dsc">
											<p><a href="#">{{$product->title}}</a></p>
                      <p id="F{{$i}}" data-product="{{$product->id}}"></p>
                      <p id="I{{$y}}" data-checkwinner="{{$product->id}}"></p>
                      <span id="{{$i}}" data-product="{{$product->id}}" data-buy="{{$product->buyNow}}"  data-countdown="{{date('m,d,y H:i:s',strtotime($product->deadline))}}"></span>
                      @if(is_null($product->currentPrice) || $product->currentPrice == 0)
                          <span>${{$product->startPrice}}</span>
                      @else
                          <span id="P{{$y}}">${{$product->currentPrice}}</span>
                      @endif

										</div>
                    <div class="quantity">
                      <input data-price="{{$product->currentPrice}}" value="{{$product->currentPrice}}" class="input" min="1" type="number" id="{{$y}}" step=10>
                      <div  class="submit-text">
  											<a class="bid" id="BU{{$y}}" data-id="{{$y}}" data-product="{{$product->id}}"  data-price="{{$product->currentPrice}}">Bid</a>
  										</div>
                      @if(!is_null($product->buyNow)||!empty($product->buyNow))
                      <div  class="submit-text">
                        <a class="buyNow" data-product="{{$product->id}}">Buy Now</a>
                      </div>
                      @endif
                      @if($errors->any())
  								            @foreach($errors->all() as $error)
  									                   {{ $error }}<br>
  								                      @endforeach
  								                                     @endif
                      </div>
									</div>
								</div>
                @php($i++)
                @php($y++)
                @endforeach
								<!-- single product end -->
								<!-- single product end -->
								<!-- single product end -->
								<!-- single product end -->
							</div>
						</li>
					</ul>
					<button id="load-more-one">Load More</button>
				</div>
			</div>
		</section>
		<!-- featured-products section end -->
		<!-- coming product section start -->
		<section class="coming-product coming-product2">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-2">
						<div class="tab-menu nav nav-tabs padding">
							<ul>
								<li class="active"><a href="#dress1" data-toggle="tab" data-target="#dress1, #text1"><img src="img/coming/s1.jpg" alt="" /></a></li>
								<li><a href="#dress2" data-toggle="tab" data-target="#dress2,#text2"><img src="img/coming/s2.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-7 col-md-5">
						<div class="text-center large-img tab-content">
							<div class="tab-pane fade in active" id="dress1">
								<img src="img/coming/l1.jpg" alt="" />
								<div class="count-text clearfix">
									<ul id="countdown-1">
										<li>
											<p class="timeRefDays timedescription">days</p>
											<span class="days timenumbers">00</span>
										</li>
										<li>
											<p class="timeRefHours timedescription">hrs</p>
											<span class="hours timenumbers">00</span>
										</li>
										<li>
											<p class="timeRefMinutes timedescription">mins</p>
											<span class="minutes timenumbers">00</span>
										</li>
										<li>
											<p class="timeRefSeconds timedescription">secs</p>
											<span class="seconds timenumbers">00</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-pane fade" id="dress2">
								<img src="img/coming/l2.jpg" alt="" />
								<div class="count-text clearfix">
									<ul id="countdown-2">
										<li>
											<p class="timeRefDays timedescription">days</p>
											<span class="days timenumbers">00</span>
										</li>
										<li>
											<p class="timeRefHours timedescription">hrs</p>
											<span class="hours timenumbers">00</span>
										</li>
										<li>
											<p class="timeRefMinutes timedescription">mins</p>
											<span class="minutes timenumbers">00</span>
										</li>
										<li>
											<p class="timeRefSeconds timedescription">secs</p>
											<span class="seconds timenumbers">00</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5">
						<div class="padding">
							<div class="tab-content" >
								<div class="single-coming tab-pane fade in active" id="text1">
									<h4><a href="#">The Maker usc Dress</a></h4>
									<span><strong>$569.00</strong>   <del>$669.00</del></span>
									<p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoes tempor incididunt ut labore et dolore magna aliqua. consequat. Ut enim ad minim veniam.</p>
									<ul class="color-size">
										<li><span>Size</span><strong>:</strong> <a href="#">SL</a><a href="#">ML</a><a href="#">Xl</a></li>
										<li><span>color</span><strong>:</strong> <a href="#">Red</a><a href="#">Grean</a><a href="#">Blue</a></li>
										<li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
										<li><span>category</span><strong>:</strong>Fashion   Men’s</li>
									</ul>
								</div>
								<div class="single-coming tab-pane fade" id="text2">
									<h4><a href="#">The Maker usc Dress</a></h4>
									<span><strong>$569.00</strong>   <del>$669.00</del></span>
									<p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoes tempor incididunt ut labore et dolore magna aliqua. consequat. Ut enim ad minim veniam.</p>
									<ul class="color-size">
										<li><span>Size</span><strong>:</strong> <a href="#">SL</a><a href="#">ML</a><a href="#">Xl</a></li>
										<li><span>color</span><strong>:</strong> <a href="#">Red</a><a href="#">Grean</a><a href="#">Blue</a></li>
										<li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
										<li><span>category</span><strong>:</strong>Fashion   Men’s</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- coming product section end -->
        <!-- tab-products section start -->
		<div class="tab-products single-products products-two section-padding extra-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<div class="product-tab nav nav-tabs">
								<ul>
									<li class="active"><a data-toggle="tab" href="#arrival">New Arrival <span>//</span></a></li>
									<li><a data-toggle="tab" href="#popular">Popular Product <span>//</span></a></li>
									<li><a data-toggle="tab" href="#best">Best Seller</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center tab-content">
					<div class="tab-pane  fade in active" id="arrival">
						<div class="wrapper">
							<ul class="load-list load-list-two">
								<li>
									<div class="row text-center">
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
											<div class="single-product">
												<div class="product-img">
													<a href="#"><img src="img/products/19.jpg" alt="Product Title" /></a>
													<div class="actions-btn">
														<a href="#"><i class="mdi mdi-cart"></i></a>
														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
														<a href="#"><i class="mdi mdi-heart"></i></a>
													</div>
												</div>
												<div class="product-dsc">
													<p><a href="#">men’s Grey t-shirt</a></p>
													<span>$77.00</span>
												</div>
											</div>
										</div>
										<!-- single product end -->
									</div>
								</li>
								<li>
									<div class="row text-center">

										<!-- single product end -->

										<!-- single product end -->

										<!-- single product end -->
										<!-- single product end -->
									</div>
								</li>
							</ul>
							<button id="load-more-two">Load More</button>
						</div>
					</div>
					<!-- arrival product end -->
					<div class="tab-pane fade" id="popular">
						<div class="wrapper">
							<ul class="load-list load-list-three">
								<li>
									<div class="row text-center">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="single-product">
												<div class="product-img">
													<a href="#"><img src="img/products/16.jpg" alt="Product Title" /></a>
													<div class="actions-btn">
														<a href="#"><i class="mdi mdi-cart"></i></a>
														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
														<a href="#"><i class="mdi mdi-heart"></i></a>
													</div>
												</div>
												<div class="product-dsc">
													<p><a href="#">men’s Black t-shirt</a></p>
													<span>$57.00</span>
												</div>
											</div>
										</div>
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
									</div>
								</li>
								<li>
									<div class="row text-center">

										<!-- single product end -->
										<!-- single product end -->
										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
											<div class="single-product">
												<div class="product-img">
													<a href="#"><img src="img/products/22.jpg" alt="Product Title" /></a>
													<div class="actions-btn">
														<a href="#"><i class="mdi mdi-cart"></i></a>
														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
														<a href="#"><i class="mdi mdi-heart"></i></a>
													</div>
												</div>
												<div class="product-dsc">
													<p><a href="#">men’s Black t-shirt</a></p>
													<span>$56.00</span>
												</div>
											</div>
										</div>
										<!-- single product end -->
										<!-- single product end -->
									</div>
								</li>
								<li>
									<div class="row text-center">

										<!-- single product end -->
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="single-product">
												<div class="product-img">
													<a href="#"><img src="img/products/21.jpg" alt="Product Title" /></a>
													<div class="actions-btn">
														<a href="#"><i class="mdi mdi-cart"></i></a>
														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
														<a href="#"><i class="mdi mdi-heart"></i></a>
													</div>
												</div>
												<div class="product-dsc">
													<p><a href="#">men’s White t-shirt</a></p>
													<span>$57.00</span>
												</div>
											</div>
										</div>
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
									</div>
								</li>
							</ul>
							<button id="load-more-three">Load More</button>
						</div>
					</div>
					<!-- popular product end -->
					<div class="tab-pane fade" id="best">
						<div class="wrapper">
							<ul class="load-list load-list-four">
								<li>
									<div class="row text-center">
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->

										<!-- single product end -->
									</div>
								</li>
								<li>
									<div class="row text-center">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="single-product">
												<div class="product-img">
													<a href="#"><img src="img/products/17.jpg" alt="Product Title" /></a>
													<div class="actions-btn">
														<a href="#"><i class="mdi mdi-cart"></i></a>
														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
														<a href="#"><i class="mdi mdi-heart"></i></a>
													</div>
												</div>
												<div class="product-dsc">
													<p><a href="#">men’s Black t-shirt</a></p>
													<span>$65.20</span>
												</div>
											</div>
										</div>
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
									</div>
								</li>
								<li>
									<div class="row text-center">
										<div class="col-xs-12 col-sm-6 col-md-3">
										</div>
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
										<!-- single product end -->
									</div>
								</li>
							</ul>
							<button id="load-more-four">Load More</button>
						</div>
					</div>
					<!-- popular product end -->
				</div>
			</div>
		</div>
		<!-- tab-products section end -->

        <!-- quick view start -->
		<div class="product-details quick-view modal animated zoomInUp" id="quick-view">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="d-table">
							<div class="d-tablecell">
								<div class="modal-dialog">
									<div class="main-view modal-content">
										<div class="modal-footer" data-dismiss="modal">
											<span>x</span>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-5 col-md-4">
												<div class="quick-image">
													<div class="single-quick-image text-center">
														<div class="list-img">
															<div class="product-img tab-content">
																<div class="simpleLens-container tab-pane fade in" id="sin-1">
																	<div class="pro-type">
																		<span>new</span>
																	</div>
																	<a class="simpleLens-image" data-lens-image="img/products/z1.jpg" href="#"><img src="img/products/z1.jpg" alt="" class="simpleLens-big-image"></a>
																</div>
																<div class="simpleLens-container tab-pane active fade in" id="sin-2">
																	<div class="pro-type sell">
																		<span>sell</span>
																	</div>
																	<a class="simpleLens-image" data-lens-image="img/products/z2.jpg" href="#"><img src="img/products/z2.jpg" alt="" class="simpleLens-big-image"></a>
																</div>
																<div class="simpleLens-container tab-pane fade in" id="sin-3">
																	<div class="pro-type">
																		<span>-15%</span>
																	</div>
																	<a class="simpleLens-image" data-lens-image="img/products/z3.jpg" href="#"><img src="img/products/z3.jpg" alt="" class="simpleLens-big-image"></a>
																</div>
																<div class="simpleLens-container tab-pane fade in" id="sin-4">
																	<div class="pro-type">
																		<span>new</span>
																	</div>
																	<a class="simpleLens-image" data-lens-image="img/products/z4.jpg" href="#"><img src="img/products/z4.jpg" alt="" class="simpleLens-big-image"></a>
																</div>
															</div>
														</div>
													</div>
													<div class="quick-thumb">
														<ul class="product-slider">
															<li><a data-toggle="tab" href="#sin-1"> <img src="img/products/s1.jpg" alt="quick view" /> </a></li>
															<li class="active"><a data-toggle="tab" href="#sin-2"> <img src="img/products/s2.jpg" alt="small image" /> </a></li>
															<li><a data-toggle="tab" href="#sin-3"> <img src="img/products/s3.jpg" alt="small image" /> </a></li>
															<li><a data-toggle="tab" href="#sin-4"> <img src="img/products/s4.jpg" alt="small image" /> </a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-7 col-md-8">
												<div class="quick-right">
													<div class="list-text">
														<h3>men’s White t-shirt</h3>
														<span>Summer men’s fashion</span>
														<div class="ratting floatright">
															<p>( 27 Rating )</p>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star-half"></i>
															<i class="mdi mdi-star-outline"></i>
														</div>
														<h5><del>$79.30</del> $69.30</h5>
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anything embarrassing hidden in the middle of text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="all-choose">
															<div class="s-shoose">
																<h5>Color</h5>
																<div class="color-select clearfix">
																	<span></span>
																	<span class="outline"></span>
																	<span></span>
																	<span></span>
																</div>
															</div>
															<div class="s-shoose">
																<h5>size</h5>
																<div class="size-drop">
																	<div class="btn-group">
																		<button type="button" class="btn">XL</button>
																		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<span class=""><i class="mdi mdi-chevron-down"></i></span>
																		</button>
																		<ul class="dropdown-menu">
																			<li><a href="#">Xl</a></li>
																			<li><a href="#">SL</a></li>
																			<li><a href="#">S</a></li>
																			<li><a href="#">L</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="s-shoose">
																<h5>qty</h5>
																<form action="#" method="POST">
																	<div class="plus-minus">
																		<a class="dec qtybutton">-</a>
																		<input type="text" value="02" name="qtybutton" class="plus-minus-box">
																		<a class="inc qtybutton">+</a>
																	</div>
																</form>
															</div>
														</div>
														<div class="list-btn">
															<a href="#">add to cart</a>
															<a href="#">wishlist</a>
															<a href="#">zoom</a>
														</div>
														<div class="share-tag clearfix">
															<ul class="blog-share floatleft">
																<li><h5>share </h5></li>
																<li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
																<li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
																<li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
																<li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
																<li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
																<li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- quick view end -->
        <!-- footer section start -->
		<footer class="footer-two">

			<!-- social media section start -->
			<div class="social-media section-padding">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-offset-1 col-md-12">
							<div class="newsletter get-touch">
								<h3>get in touch</h3>
								<form action="mail.php" method="post">
									<input type="text" name="name" placeholder="Enter your Name..."/>
									<input type="text" name="email" placeholder="Enter your email..."/>
									<textarea name="message" rows="2" placeholder="Enter your message...."></textarea>
									<input type="submit" value="send your message"/>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- social media section end -->
			<!-- footer-top area start -->
			<div class="footer-top section-padding">
				<div class="footer-dsc">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3">
								<div class="single-text">
									<div class="footer-title">
										<h4>Contact us</h4>
									</div>
									<div class="footer-text">
										<ul>
											<li>
												<i class="mdi mdi-map-marker"></i>
												<p>Flat no 01, House no 02, Vincent,</p>
												<p>Dhaka-1207, Bangladesh</p>
											</li>
											<li>
												<i class="mdi mdi-phone"></i>
												<p>(+880) 19453 821758</p>
												<p>(+880) 19453 813758</p>
											</li>
											<li>
												<i class="mdi mdi-email"></i>
												<p>info@mydomain.com</p>
												<p>username@email.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-2 wide-mobile">
								<div class="single-text">
									<div class="footer-title">
										<h4>my account</h4>
									</div>
									<div class="footer-menu">
										<ul>
											<li><a href="login.html"><i class="mdi mdi-menu-right"></i>My Account</a></li>
											<li><a href="wishlist.html"><i class="mdi mdi-menu-right"></i>My Wishlist</a></li>
											<li><a href="cart.html"><i class="mdi mdi-menu-right"></i>My Cart</a></li>
											<li><a href="login.html"><i class="mdi mdi-menu-right"></i>Sign In</a></li>
											<li><a href="checkout.html"><i class="mdi mdi-menu-right"></i>Check out</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Track My Orde</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-2 wide-mobile">
								<div class="single-text">
									<div class="footer-title">
										<h4>shipping</h4>
									</div>
									<div class="footer-menu">
										<ul>
											<li><a href="contact.html"><i class="mdi mdi-menu-right"></i>New Products</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Top Sellers</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Manufactirers</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Suppliers</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Specials</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Availability</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-2 r-margin-top wide-mobile">
								<div class="single-text">
									<div class="footer-title">
										<h4>Information</h4>
									</div>
									<div class="footer-menu">
										<ul>
											<li><a href="contact.html"><i class="mdi mdi-menu-right"></i>Return Exchange</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Fast Delivery</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Online Shopping</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Shipping Guide</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Turm Of Use</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i>Home Delivery</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top wide-mobile">
								<div class="single-text">
									<div class="footer-title">
										<h4>instagram</h4>
									</div>
									<div class="clearfix instagram">
										<ul>
											<li><a href="#"><img src="img/footer/in1.png" alt="Instagram" /></a></li>
											<li><a href="#"><img src="img/footer/in2.png" alt="Instagram" /></a></li>
											<li><a href="#"><img src="img/footer/in3.png" alt="Instagram" /></a></li>
											<li><a href="#"><img src="img/footer/in4.png" alt="Instagram" /></a></li>
											<li><a href="#"><img src="img/footer/in5.png" alt="Instagram" /></a></li>
											<li><a href="#"><img src="img/footer/in6.png" alt="Instagram" /></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top area end -->
			<!-- footer-bottom area start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<p>&copy; Sellshop 2016. All Rights Reserved.</p>
						</div>
						<div class="col-xs-12 col-sm-6 text-right">
							<a href="#"><img src="{{ asset('assets/img/footer/payment.png')}}" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom area end -->
		</footer>
        <!-- footer section end -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.3.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
		<!-- countdown JS -->
        <script src="{{ asset('assets/js/countdown.js')}}"></script>
		<!-- nivo.slider JS -->
        <script src="{{ asset('assets/js/jquery.nivo.slider.pack.js')}}"></script>
		<!-- simpleLens JS -->
        <script src="{{ asset('assets/js/jquery.simpleLens.min.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
		<!-- load-more js -->
        <script src="{{ asset('assets/js/load-more.js')}}"></script>
		<!-- plugins js -->
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
var isExp=0;
var check = 0;
var i = 0;
$('[data-countdown]').each(function() {
  var type = 2;
  var buyNow = $(this).data('buy');
  var date =$(this).data('countdown');
  var id = $(this).attr('id');
  var product =$(this).data('product');
console.log(product);
// Set the date we're counting down to
var countDownDate = new Date(date).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById(id).innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  if (distance < 0 || check==1) {
    clearInterval(x);
    document.getElementById(id).innerHTML = "EXPIRED";
    $("#BU"+id).attr('disabled', 'disabled');
    $("#BN"+id).attr('disabled', 'disabled');
    document.getElementById("BU"+id).style.backgroundColor = "#ab9fbb";//#ab9fbb
    if(document.getElementById("BN"+id)!=null){
      document.getElementById("BN"+id).style.backgroundColor="#ab9fbb";
    }
    $.ajaxSetup({
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type:'POST',
      url:"{{ route('hide') }}",
      data:{ product:product ,"_token": "{{ csrf_token() }}"},
      success:function(data){
        document.getElementById("F"+id).innerHTML="Final winner is user name :"+data.finalWinner;
        if(check==1){
          document.getElementById("P"+id).innerHTML="$"+buyNow;
        }
        console.log(check+","+buyNow);

      }
    });


  }


  // If the count down is finished, write some text

}, 1000);
});
$(document).ready(function(){

  $('.input').on('change',function (){
    var productCurrent =$(this).data('price');
  var value=$(this).val();
  $(".input").attr({
     "min" : productCurrent,
     "step":parseInt(value*0.1)
  });
  var id = $(this).attr('id');
  console.log(value);
  });
  $('.bid').click(function (event) {
    var productCurrent =$(this).data('price');
    var productId = $(this).data('product');
    var id = $(this).data('id');
    var value = document.getElementById(id).value;

    event.preventDefault();
    if($("#BU"+id).is(":disabled")){

    }
    if(value < productCurrent){
      $(".bid").attr({
         message: 'value should be more than the current value'
      });
    }
      else{
        $.ajaxSetup({
          headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          type:'POST',
          url:"{{ route('submit') }}",
          data:{ productId:productId , value:value  ,"_token": "{{ csrf_token() }}"},
          success:function(data){
            if(data.success){
              document.getElementById('P'+id).innerHTML=data.currentValue;
            }else{
              alert("value should be higher");
            }
          }
        });
      }

    console.log(value);
  });

//CheckWinner
setInterval(function() {
  $('[data-checkwinner]').each(function() {
    var id = $(this).attr('id');
    var productId =$(this).data('checkwinner');
    $.ajaxSetup({
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type:'GET',
      url:"{{ route('checkWinner') }}",
      data:{ productId:productId},
      success:function(data){
        if(data.winning){
          document.getElementById(id).innerHTML="winning";
          document.getElementById(id).style.backgroundColor="#7FFFD4";
        }else{
          document.getElementById(id).innerHTML="lossing";
          document.getElementById(id).style.backgroundColor="#FF6347";
        }
      }
    });
  });
},500);
$('.buyNow').click(function (event) {
  var type=1;
  var productId =$(this).data('product');
  $.ajaxSetup({
    headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    async:'false',
    type:'Post',
    url:"{{ route('BuyNow') }}",
    data:{ productId:productId,"_token": "{{ csrf_token() }}",type:type},
    success:function(data){
      check=data.check;
      console.log(check);
    }
  });
});

});

</script>
