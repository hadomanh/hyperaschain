@extends('layouts.app')

@section('content')
<div id="homepage">
	<!-- Hyperas Chain -->
	<section class="hyperasChain text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-5 d-flex align-items-center">
					<div>
						<p class="hyperasText">Hyperas Chain</p>
						<p class="hyperasAsset">The chain of hyper assets</p>
						<div class="d-flex">
							<a href="#" class="btn boxshadownBlue">Smart Contract</a>
							<a href="#" class="btn boxshadownPink">Smart Contract</a>
						</div>
						<p class="text-decoration-underline mt-3 d-inline">Audited by</p>
						<div class="d-inline"><img src="{{ asset('img/certiklogo.png') }}" alt=""></div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="bannerRight"><img src="{{ asset('img/bannerRight.png') }}" alt=""></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Wallet -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="wallet">
						<img src="{{ asset ('img/logoHyraScan.png') }}" alt="">
					</div>

				</div>
				<div class="col-md-3">
					<div class="wallet">
						<img src="{{ asset ('img/logoHyraWallet.png') }}" alt="">
					</div>

				</div>
				<div class="col-md-3">
					<div class="wallet">
						<img src="{{ asset ('img/logoHyradex.png') }}" alt="">
					</div>

				</div>
				<div class="col-md-3">
					<div class="wallet">
						<img src="{{ asset ('img/logoHyraInvest.png') }}" alt="">
					</div>

				</div>
			</div>
		</div>

	</section>

	<!-- What is Hyperas Chain? -->
	<section class="bgGrilles text-white">
		<div class="container">
			<div class="pt-5 pb-5">
				<div class="text-center">
					<h2 class="titleSection">What is Hyperas Chain?</h2>
				</div>
				<p class="text-center">Hyperas chain is a blockchain infrastructure that helps connect other blockchains. With our non-invasive cross-chain technology Hyperas chain operates as a data conduit, allowing cross-chain communications between public and private protocols. Hyperas chain can transfer both assets and data without requiring any change on participating blockchains. Our unified infrastructure helps solutions run on multiple platforms by enabling interoperability among them and making the implementation as straightforward as possible from the developer's perspective.</p>
			</div>
			<div class="row pt-5 pb-5">
				<div class="col-md-3">
					<div>
						<div class="roundPink"><img src="{{ asset('img/compatibilty.png')}}" alt=""></div>
						<h5 class="pt-2 pb-2">Compatibilty</h5>
						<p>Built to meet a large ecosystem, Hyperas chain is highly compatible with many other Blockchains such as: ETH / BSC / MATIC / FANTOM / TRON / ETC / POA / XDAI</p>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<div class="roundPink"><img src="{{ asset('img/diversity.png')}}" alt=""></div>
						<h5 class="pt-2 pb-2">Diversity</h5>
						<p>Hyperas Chain supports the digitization of a wide range of assets such as equity, publicly traded bonds, real estate, artwork, and more. and many other asset classes in the future.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<div class="roundPink"><img src="{{ asset('img/consensus-algorithm.png')}}" alt=""></div>

						<h5 class="pt-2 pb-2">Consensus Algorithm</h5>
						<p>Hyperas chain Apply Proof of Authority (PoA) consensus algorithm, as well as ST20, SAP2022 protocol to its own Blockchain platform. This algorithm promises high scalability and performance.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<div class="roundPink"><img src="{{ asset('img/transparency.png')}}" alt=""></div>
						<h5 class="pt-2 pb-2">Transparency</h5>
						<p>To meet government and corporate customers, Hyperas focuses on Know Your Customer (KYC) to ensure security, transparency and trust for all participants. join the ecosystem.</p>
					</div>
				</div>
			</div>
			<div class="text-center pb-3"><a href="#" class="btn readmore">READ MORE <i class="fas fa-angle-right"></i></a></div>


			<!-- External Environment-->

			<div class="pt-5 pb-5">
				<div class="text-center">
					<h2 class="titleSection">External Environment</h2>
				</div>
				<ul class="list-unstyled d-flex justify-content-center hrBlue">
					<li class="external">All</li>
					<li class="external">Real Eastate</li>
					<li class="external">E-Com</li>
					<li class="external">Healthcare</li>
					<li class="external">Other</li>
				</ul>
				<hr size="4">
				<div class="row justify-content-center pt-3 pb-3">
					<div class="col-md-2">
						<div class="environment">
							<img src="{{ asset('img/divega.png')}}" alt="">
							<p>Reverse auction E-com Platform</p>
							<img src="{{ asset('img/arrowBlue.png')}}" alt="" class="pb-3">
						</div>
					</div>
					<div class="col-md-2">
						<div class="environment">
							<img src="{{ asset('img/rapitalbank.png')}}" alt="">
							<p>Digital Banking</p>
							<img src="{{ asset('img/arrowBlue.png')}}" alt="" class="pb-3">
						</div>
					</div>
					<div class="col-md-2">
						<div class="environment">
							<img src="{{ asset('img/pindias.png')}}" alt="">
							<p>Digital Real Estate Exchange</p>
							<img src="{{ asset('img/arrowBlue.png')}}" alt="" class="pb-3">
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- Investor & Partners -->
	<section class="investor">
		<div class="container">
			<div class="text-center">
				<h2 class="titleSection">Investor & Partners</h2>
				<p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/cello.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/avalon.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/burrow.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/aries.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/indy.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/explorer.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/sawtooth.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/iroha.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/caliper.png')}}" alt=""></div>
			</div>


			<!-- As seen on -->

			<div class="text-center">
				<h2 class="titleSection">As seen on</h2>
				<div class="row justify-content-center pb-5">
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Yahoo-Finance.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Viettimes.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/UNasdaq.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Market-Watch.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Market-Screener.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Global-PR-Newswire.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Doanh-Nhan-Sai-Gon.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Cafe-F.png')}}" alt=""></div>
				<div class="col-lg-auto col-sm-6 col-6 items"><img src="{{ asset('img/Bloomberg.png')}}" alt=""></div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection