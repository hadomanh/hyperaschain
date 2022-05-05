<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>KING DEX</title>
	<meta id="PagKeywords" name="keywords" content="KING DEX" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="img/favicon.png" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />	

	<!-- Facebook Tag -->
	<meta property="og:url" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="KING DEX"/>
	<meta property="og:description" content="KING DEX"/>	
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content="KING DEX" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

	<body>

		<!-- Backdrop -->

		<x-nav-bar />

		@yield('content')

		<!-- Footer -->
		<footer>
			<div class="container">
				FOOTER
			</div>
		</footer>
		
		<!-- Js File -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap5-dropdown-ml-hack.js') }}"></script>		
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

		<script>
			$(document).ready(function () {
				$(".navbarToggler, .backdrop, .menuOpen header .nav-link, .closeMenu").click(function(){
					$("body").toggleClass("menuOpen");
				});
			});
		</script>
		@stack('script')
	</body>
</html>
