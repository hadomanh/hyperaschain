@extends('layouts.app')

@section('content')
<div id="homepage">	
	<!-- Banner -->
	<section class="banner">
		<span class="circleBlur-1"></span>
		<div class="container-lg position-relative">
			<div class="row align-items-center">
				<div class="col-md-auto">
					<h1 class="sectionHeading mb-0">Hyperas Chain</p>
					<h3 class="subHeading">The chain of hyper assets</h3>
					<div class="row mt-4">
						<div class="col-md-6">
							<a href="#" class="d-block btn btnBlue boxShadowBlue mb-md-0 mb-2">Smart Contract</a>
						</div>
						<div class="col-md-6">
							<a href="#" class="d-block btn btnPink boxShadowBlue">White Paper</a>
						</div>
					</div>
					<div class="mt-3 small">
						<a href="#">
							<span class="me-2 text-decoration-underline fw-normal">Audited by</span> <img src="{{ asset('img/certiklogo.png') }}" width="80">
						</a>
					</div>
				</div>
				<div class="col-md text-center">
					<img src="{{ asset('img/bannerRight.png') }}" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- Wallet -->
	<section class="wallet bg-white">
		<div class="container-lg text-center">
			<div class="row">
				<div class="col-md-3 col-6">
					<a href="#">
						<img src="{{ asset ('img/logoHyraScan.png') }}" alt="">
					</a>
				</div>
				<div class="col-md-3 col-6">
					<a href="#">
						<img src="{{ asset ('img/logoHyraWallet.png') }}" alt="">
					</a>
				</div>
				<div class="col-md-3 col-6">
					<a href="#">
						<img src="{{ asset ('img/logoHyradex.png') }}" alt="">
					</a>
				</div>
				<div class="col-md-3 col-6">
					<a href="#">
						<img src="{{ asset ('img/logoHyraInvest.png') }}" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- What is Hyperas Chain? -->
	<div class="text-white bgGrid">
		<section class="whatIsHyperas">
			<div class="container-lg">
				<div class="text-center">
					<h2 class="sectionHeading">What is Hyperas Chain?</h2>
					<p>Hyperas chain is a blockchain infrastructure that helps connect other blockchains. With our non-invasive cross-chain technology Hyperas chain operates as a data conduit, allowing cross-chain communications between public and private protocols. Hyperas chain can transfer both assets and data without requiring any change on participating blockchains. Our unified infrastructure helps solutions run on multiple platforms by enabling interoperability among them and making the implementation as straightforward as possible from the developer's perspective.</p>
				</div>
				<div class="row mt-5 features">
					<div class="col-lg-3 col-md-6">
						<div class="roundPink"><img src="{{ asset('img/compatibilty.png')}}"></div>
						<h5 class="my-3">Compatibilty</h5>
						<p>Built to meet a large ecosystem, Hyperas chain is highly compatible with many other Blockchains such as: ETH / BSC / MATIC / FANTOM / TRON / ETC / POA / XDAI</p>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="roundPink"><img src="{{ asset('img/diversity.png')}}"></div>
						<h5 class="my-3">Diversity</h5>
						<p>Hyperas Chain supports the digitization of a wide range of assets such as equity, publicly traded bonds, real estate, artwork, and more. and many other asset classes in the future.</p>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="roundPink"><img src="{{ asset('img/consensus-algorithm.png')}}"></div>
						<h5 class="my-3">Consensus Algorithm</h5>
						<p>Hyperas chain Apply Proof of Authority (PoA) consensus algorithm, as well as ST20, SAP2022 protocol to its own Blockchain platform. This algorithm promises high scalability and performance.</p>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="roundPink"><img src="{{ asset('img/transparency.png')}}"></div>
						<h5 class="my-3">Transparency</h5>
						<p>To meet government and corporate customers, Hyperas focuses on Know Your Customer (KYC) to ensure security, transparency and trust for all participants. join the ecosystem.</p>
					</div>
				</div>
				<div class="text-center mt-lg-5 mt-3"><a href="#" class="btn readmore">READ MORE <i class="fas fa-angle-right"></i></a></div>
			</div>
		</section>

		<!-- External Environment-->
		<section class="environment text-center">
			<div class="container-lg">
				<h2 class="sectionHeading">External Environment</h2>
				<ul class="list-unstyled d-flex justify-content-center font-bold">
					<li>All</li>
					<li>Real Eastate</li>
					<li>E-Com</li>
					<li>Healthcare</li>
					<li>Other</li>
				</ul>
				<hr size="4">
				<div class="row justify-content-center mt-md-5 mt-2">
					<div class="col-xl-2 col-md-3">
						<div class="item">
							<img src="{{ asset('img/divega.png')}}" alt="">
							<p class="text d-flex align-items-center justify-content-center">Reverse auction E-com Platform</p>
							<a href="#" class="arrow"></a>
						</div>
					</div>
					<div class="col-xl-2 col-md-3">
						<div class="item">
							<img src="{{ asset('img/rapitalbank.png')}}" alt="">
							<p class="text d-flex align-items-center justify-content-center">Digital Banking</p>
							<a href="#" class="arrow"></a>
						</div>
					</div>
					<div class="col-xl-2 col-md-3">
						<div class="item">
							<img src="{{ asset('img/pindias.png')}}" alt="">
							<p class="text d-flex align-items-center justify-content-center">Digital Real Estate Exchange</p>
							<a href="#" class="arrow"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="text-center partnersElement">

		<!-- Investor & Partners -->
		<section class="pb-0">
			<div class="container-lg">
				<h2 class="sectionHeading">Investor & Partners</h2>
				<p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
				<div class="row g-0 justify-content-center">
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/cello.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/avalon.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/burrow.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/aries.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/indy.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/explorer.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/sawtooth.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/iroha.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/caliper.png')}}" alt=""></a></div>
				</div>
		</section>

		<!-- As seen on -->
		<section>
			<div class="container-lg">
				<h1 class="sectionHeading">As seen on</h1>
				<div class="row justify-content-center">
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Yahoo-Finance.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Viettimes.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/UNasdaq.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Market-Watch.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Market-Screener.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Global-PR-Newswire.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Doanh-Nhan-Sai-Gon.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Cafe-F.png')}}" alt=""></a></div>
					<div class="col-auto item"><a href="#"><img src="{{ asset('img/Bloomberg.png')}}" alt=""></a></div>
				</div>
			</div>
	</div>
	</section>
</div>
</div>

@endsection