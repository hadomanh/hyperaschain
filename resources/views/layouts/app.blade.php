<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>HYPERAS CHAIN</title>
	<meta id="PagKeywords" name="keywords" content="KING DEX" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="img/favicon.png" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="KING DEX" />
	<meta property="og:description" content="KING DEX" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="KING DEX" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

	<!-- Backdrop -->

	<x-nav-bar />

	@yield('content')

	<!-- Footer -->
	<footer>
		<div class="footerM">
			<div class="container">
				<div class="d-flex justify-content-between footerM">
					<div>
						<img src="{{ asset('img/logoFooter.png') }}" alt="">
					</div>
					<div>
						<ul class="d-flex list-unstyled">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-youtube"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
							<li><a href=""><i class="fab fa-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footerL">
			<div class="container">
				<div class="row">
					<div class="col-md-4 mb-5">
						<div class="mt-5 mb-5">
							<h5>HYPERAS CHAIN LTD </h5>
							<p><strong>Address</strong>: 10 Anson Road # 11-20 International Plaza Singapore (079903)</p>
						</div>
						<h5>Company</h5>
						<ul class="list-unstyled">
							<li><a href="">About us</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Contact us</a></li>
						</ul>

					</div>
					<div class="col-md-8 mb-5">
						<div class="row mt-5">
							<div class="col-md-3">
								<h5>Technology</h5>
								<ul class="list-unstyled">
									<li><a href="">Overview</a></li>
									<li><a href="">Stake</a></li>
									<li><a href="">Roadmap</a></li>
									<li><a href="">Whitepaper</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<h5>Ecosystem</h5>
								<ul class="list-unstyled">
									<li><a href="">Testnet</a></li>
									<li><a href="">Mainnet</a></li>
									<li><a href="">Hyra Wallet</a></li>
									<li><a href="">Hyra Dex</a></li>
									<li><a href="">Hyra Invest</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<h5>External Environment</h5>
								<ul class="list-unstyled">
									<li><a href="">Pindias</a></li>
									<li><a href="">Divega</a></li>
									<li><a href="">Rapital Bank</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<h5>Resource</h5>
								<ul class="list-unstyled">
									<li><a href="">Brand Kit</a></li>
									<li><a href="">Blog</a></li>
									<li><a href="">Guildeline</a></li>
								</ul>
							</div>
						</div>
					</div>
					<hr>
					<div class="text-center footerE pb-3">
						<div>Copyright © 2021 - 2022 Hyperaschain.com. All rights reserved.</div>
						<div>Privacy Notice | Legal | Status | Cookie Preferences</div>
					</div>
				</div>

			</div>
		</div>


	</footer>

	<!-- Js File -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap5-dropdown-ml-hack.js') }}"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

	<script>
		$(document).ready(function() {
			$(".navbarToggler, .backdrop, .menuOpen header .nav-link, .closeMenu").click(function() {
				$("body").toggleClass("menuOpen");
			});
		});
	</script>
	@stack('script')
</body>

</html>