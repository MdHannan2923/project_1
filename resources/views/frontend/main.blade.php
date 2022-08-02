@extends('frontend.index')
@section('content')
	
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="{{url('/')}}/assets/img/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="{{url('/')}}/assets/img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $77.90</div>
						<h2><span>2018</span> <br>winter collection</h2>
						<a href="" class="site-btn">Go, GRAB!</a>
					</div>
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-left"><img src="{{url('/')}}/assets/img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $1.00</div>
						<h2><span>2011</span> <br>dhaka collection</h2>
						<a href="" class="site-btn">Now</a>
					</div>
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-left"><img src="{{url('/')}}/assets/img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Intro section -->
	<section class="intro-section spad pb-0">
		<div class="section-title">
			<h2>premium products</h2>
			<p>We recommend</p>
		</div>
		<div class="intro-slider">
			<ul class="slidee">
				<li>
					<div class="intro-item">
						<figure>
							<a href="product.html">
								<img src="{{url('/')}}/assets/img/intro/1.jpg" alt="#">
							</a>
						</figure>
						<div class="product-info">
							<h5>Pink Sunglasses</h5>
							<p>$319.50</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<a href="product.html">
								<img src="{{url('/')}}/assets/img/intro/2.jpg" alt="#">
							</a>
						</figure>
						<div class="product-info">
							<h5>Black Nighty</h5>
							<p>$319.50</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<a href="product.html">
								<img src="{{url('/')}}/assets/img/intro/3.jpg" alt="#">
							</a>
							<div class="bache">NEW</div>
						</figure>
						<div class="product-info">
							<h5>Yellow Sholder bag</h5>
							<p>$319.50</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<a href="product.html">
								<img src="{{url('/')}}/assets/img/intro/4.jpg" alt="#">
							</a>
						</figure>
						<div class="product-info">
							<h5>Yellow Sunglasses</h5>
							<p>$319.50</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<a href="product.html">
								<img src="{{url('/')}}/assets/img/intro/5.jpg" alt="#">
							</a>
						</figure>
						<div class="product-info">
							<h5>Black Sholder bag</h5>
							<p>$319.50</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="scrollbar">
				<div class="handle">
					<div class="mousearea"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<div class="featured-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="featured-item">
						<img src="{{url('/')}}/assets/img/featured/featured-1.jpg" alt="">
						<a href="#" class="site-btn">see more</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="featured-item mb-0">
						<img src="{{url('/')}}/assets/img/featured/featured-2.jpg" alt="">
						<a href="#" class="site-btn">see more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured section end -->


	<!-- Product section -->
	<section class="product-section spad">
		<div class="container">
			<ul class="product-filter controls">
				<li class="control" data-filter=".new">New arrivals</li>
				<li class="control" data-filter="all">Recommended</li>
				<li class="control" data-filter=".best">Best sellers</li>
			</ul>
			<div class="row" id="product-filter">
                @foreach($product as $item)
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{url('/')}}/assets/img/products/1.jpg" alt="">
							<div class="pi-meta">
								<a href="product.html">
									<div class="pi-m-left">
										<img src="{{url('/')}}/assets/img/icons/eye.png" alt="">
										<p>view</p>
									</div>
								</a>
								<div class="pi-m-right">
									<img src="{{url('/')}}/assets/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>{{$item->Product_Name}}</h6>
							<p>{{$item->Product_Price}}</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
				</div>
                @endforeach
				

			</div>
		</div>
	</section>
	<!-- Product section end -->




@endsection