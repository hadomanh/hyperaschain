<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>HYPERAS CHAIN</title>
	<meta id="PagKeywords" name="keywords" content="HYPERAS CHAIN" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="HYPERAS CHAIN" />
	<meta property="og:description" content="HYPERAS CHAIN" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="HYPERAS CHAIN" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

	<!-- Backdrop -->

	<x-nav-bar />

	@yield('content')

	<!-- Footer -->
	<footer>
		<div class="top">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<div class="logoFooter">
						<img src="{{ asset('img/logoFooter.png') }}" alt="">
					</div>
					<ul class="list-unstyled d-flex footerSocial mb-0">
						<li><a href="https://www.facebook.com/hyperaschain" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC76gQwZQzZS4cPKYUOvnABQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
						<li><a href="https://twitter.com/hyperaschain" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a></li>
						<li><a href="https://www.linkedin.com/company/hyperaschainofficial" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-telegram-plane"target="_blank"></i></a></li>
						<li><a href="#"><i class="fab fa-github" target="_blank"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h5>HYPERAS CHAIN LTD </h5>
						<ul class="list-unstyled mb-5">
							<li><span class="font-regular">Address</span>: 10 Anson Road # 11-20 International Plaza Singapore (079903)</li>
						</ul>
						<h5>Company</h5>
						<ul class="list-unstyled">
							<li><a href="{{ route('about-us')}}">About us</a></li>
							<li><a href="{{ route('hyra-faq')}}">FAQs</a></li>
							<li><a href="{{ route('hyra-contact')}}">Contact us</a></li>
						</ul>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-3">
								<h5>Technology</h5>
								<ul class="list-unstyled">
									<li><a href="{{ route('overview')}}">Overview</a></li>
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
									<li><a href="{{ route('brand-kit')}}">Brand Kit</a></li>
									<li><a href="{{ route('news-blog')}}">Blog</a></li>
									<li><a href="{{ route('guide-line')}}">Guildeline</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center copyright">
				<p class="mb-1">Copyright © 2021 - 2022 Hyperaschain.com. All rights reserved.</p>
				<a href="#">Privacy Notice</a> | <a href="#">Legal</a> | <a href="#">Status</a> | <a href="#">Cookie Preferences</a>
			</div>
		</div>
	</footer>

	<!-- Js File -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap5-dropdown-ml-hack.js') }}"></script>
	<script>
		$(document).ready(function() {
			$("#stakingPage .poolTable .moreInfo a").click(function(){
				$(this).closest(".item").toggleClass("active");
			});
			$("#stakingPage .displayType i").click(function(){
				$(this).siblings().removeClass("active");				
				$(this).addClass("active");
				$("#stakingPage .itemDisplay").addClass("d-none");
			});
			$("#stakingPage .displayType .typeGrid").click(function(){
				$("#stakingPage .itemDisplay.displayGrid").removeClass("d-none");
			});
			$("#stakingPage .displayType .typeList").click(function(){
				$("#stakingPage .itemDisplay.displayList").removeClass("d-none");
			});
		});
	</script>
	@stack('script')
</body>

</html>