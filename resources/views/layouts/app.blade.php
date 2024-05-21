<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
@include('components.head')
	<body id="app">

		<!-- Start Header/Navigation -->
		@include('components.navbar')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			@include('components.hero')
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		@yield('body')
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		@include('components.why-choose-us')
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		@include('components.help')
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('assets/images/product-1.png')}}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('assets/images/product-2.png')}}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('assets/images/product-3.png')}}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		@include('components.testimonial')
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		@include('components.blog')
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		@include('components.footer')
		<!-- End Footer Section -->	


		@include('components.scripts')
	</body>

</html>
