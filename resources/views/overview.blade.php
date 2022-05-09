@extends('layouts.app')

@section('content')
    <div id="overviewPage">
        <section class="banner">
            <h1>OVERVIEW</h1>
        </section>
        <section class="ecosystem">
            <h1>
                Ecosystem
            </h1>
        </section>
        <section class="content-top-overview">
            <div class="container-sm bottom-overview">
                <div class="row ">
                    <div class="col-6 position-relative">
                            <img  src="{{ asset('img/frame.png') }}" alt="">
                        <div class=" position-absolute box-content-hyra-1">
                            <div class="text-end">
                                <img class="col-5" src="{{ asset('img/Logo_HyraScan_512px 1.png')}}" alt="">
                            </div>
                            <div>
                                <p class="text-hyrainvest">
                                    The blockchain ledger of Hyperas Chain, where to keep track of transactions in and out of smart contracts, cryptocurrency transactions, cryptographic assets (NFT).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 position-relative">
                        <img  src="{{ asset('img/Vector.png ')}}" alt="">
                        <div class=" position-absolute box-content-hyra-2">
                            <div>
                                <img src="{{ asset('img/Logo_Hyradex_512px 1.png')}}" alt="">
                            </div>
                            <div>
                                <p class="text-hyrainvest">
                                    A decentralized exchange where cryptocurrencies and other digital assets (NFTs) are listed. Hyra Dex is considered a great step forward in the mission of currency liberalization, decentralized crypto-assets of the Hyperas Chain ecosystem...
                                </p>
                            </div>
                        </div>                
                    </div>
                </div>
                <div class="text-center">
                    <img src="{{ asset('img/Frame1.png')}}" alt="">
                </div>
                <div class="container-sm">
                    <div class="row">
                        <div class="col-6 position-relative"> 
                            <div>
                                <img  src="{{ asset('img/Vector1.png')}}" alt="">
                            </div>
                            <div class="content-text-hyra-4 position-absolute">
                            <div class="text-end">
                                <img class="col-7" src="{{ asset('img/Logo_HyraWallet_512px.png')}}" alt="">
                            </div>
                            <div>
                                <p class="text-hyrainvest">
                                    A digital asset storage wallet and gateway to blockchain applications, capable of communicating with various blockchain networks: Buy, store, send and swap digital assets, Explore blockchain applications, Own your data.
                                </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 position-relative">
                            <div>
                                <img  src="{{ asset('img/Vector4.png')}}" alt="">
                            </div>
                            <div class="content-text-hyra1 position-absolute">
                                <div>
                                    <img class="col-6" src="{{ asset('img/Asset 2@4x 5.png')}}" alt="">
                                </div>
                                <div>
                                    <p class="text-hyrainvest">
                                        Hyra Invest is a marketplace to offer Hyra Coin in ICO rounds and a place for investors to pay for transactions when investing in digital real estate on Pindias platform.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="content-bottom-overview roadmap1">
            <div class=" box-iframe-ytb text-center container-sm ">
                <iframe class="position-absolute button-youtube"  width="560" height="315" src="https://www.youtube.com/embed/Hi5P5wN2kqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class=" container-sm">
                <h2 class="text-center text-technology text-gradient">
                        Technology Advantages
                </h2>
            </div>
            <div class="container-sm ">
                <div class="row justify-content-between">
                    <div class="col-3 text-technology-content">
                        <img class="icon-technology" src="{{ asset('img/icon-4.png')}}" alt="">
                            <h5 class="text-white">
                                Fast
                            </h5>
                                <p>
                                    Block generation time 2s Testnet block time 3s Testnet validators: 3 Mainnet block time 2s Mainnet validators: 7
                                </p>
                    </div>
                <div class="col-3 text-technology-content">
                    <img class="icon-technology" src="{{ asset('img/icon-3.png')}}" alt="">
                    <h5 class="text-white">
                        High Capacity
                    </h5>
                        <p>
                        Large block size (up to 50 MB) can execute over 50,000 (TPS) transactions per second Salable up to 210,000 (TPS)
                        </p>
                </div>
                <div class="col-3 text-technology-content">
                    <img class="icon-technology" src="{{ asset('img/icon22.png')}}" alt="">
                    <h5 class="text-white">
                        Cost-Effective
                    </h5>
                        <p>
                            Low gas fee: 0.00001$
                        </p>
                </div>
                <div class="col-3 text-technology-content">
                    <img class="icon-technology" src="{{ asset('img/icon-1.png')}}" alt="">
                    <h5 class="text-white">
                        Superity
                    </h5>
                        <p>
                            Specialized for large and complex smart contracts
                        </p>
                </div>
                </div>
            </div>
            <div class="text-road-map content-header-roadmap">
                    <h2 class="text-center text-gradient ">
                            Road map
                    </h2>
                <p class="text-center text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                </p>
            </div>
            <div class="row content-roadmap-bottom">
                <div class="col-2 position-relative">
                    <div>
                        <h2 class="position-text-readmore position-relative text-view">
                            Q4. 2021
                        </h2>
                        <img class="image-roadmap" src="{{ asset('img/icon-roadmap-pink.png')}}" alt="">
                        <div class="progress progress-box">
                            <div class="progress-bar progress-color" role="progressbar" style="width: 65%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <ul class="font-size-imageroadmap">
                        <li>
                            Complete the legal records of Metaway Holdings member companies
                        </li>
                        <li>
                            Coduct mergers and acquisions (M&A) among member companies
                        </li>
                        <li>
                            Development of distinct Blockchain platform and products in the ecosystem
                        </li>
                    </ul>
                </div>
                <div class="col-2 position-relative position-image-roadmap">
                    <div>
                        <h2 class="position-text-readmore position-relative text-view">
                            Q1. 2022
                        </h2>
                        <img class="image-roadmap" src="{{ asset('img/icon-roadmap-pink.png')}}" alt="">
                        <div class="progress progress-box-1 justify-content-end">
                            <div class="progress-bar progress-color-1" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <ul class="font-size-imageroadmap">
                        <li>
                            R60 realated to Hyperas Chain (testnest)
                        </li>
                        <li>
                            Launch of Hyperas Scan (V1)
                        </li>
                        <li>
                            Audit Blockchain
                        </li>
                        <li>
                            Launch of testing version of Pindias Website (V1)
                        </li>
                    </ul>
                </div>
                <div class="col-2 position-relative">
                    <div>
                        <h2  class="position-text-readmore position-relative text-view">
                            Q2. 2022
                        </h2>
                        <img class="image-roadmap" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                        <div class="progress progress-box-2 justify-content-center">
                            <div class="progress-bar progress-color-2" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <ul class="font-size-imageroadmap">
                        <li>
                            Launch of Hyperas Chain (Mainet)
                        </li>
                        <li>
                            Launch of Hyperas Wallet
                        </li>
                        <li>
                            Launch of Hyperas NFT
                        </li>
                        <li>
                            Launch of official version Pindias (V2)
                        </li>
                    </ul>
                </div>
                <div class="col-2 position-relative position-image-roadmap">
                    <div>
                        <h2 class="position-text-readmore position-relative text-view">
                            Q3. 2022
                        </h2>
                        <img class="image-roadmap" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                        <div class="progress progress-box-3 progress-background-color-blue">
                            <div class="progress-bar progress-color-3" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                        <ul class="font-size-imageroadmap">
                            <li>
                                Launch of Divega reverse aution e-commerce platform (V2)
                            </li>
                            <li>
                                Launch of Pindias app for Android & IOS (V2)
                            </li>
                        </ul>
                </div>
                <div class="col-2 position-relative">
                    <div>
                        <h2 class="position-text-readmore position-relative text-view">
                            Q4. 2022
                        </h2>
                        <img class="image-roadmap" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                        <div class="progress progress-box-4 progress-background-color-blue justify-content-end">
                            <div class="progress-bar progress-color-4" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                        <ul class="font-size-imageroadmap">
                            <li>
                                Support of digitization of assets on Hyperas NFT
                            </li>
                            <li>
                                Support for trading and fundrasing via NFT Hyperas Dex Market
                        </ul>
                </div>
                <div class="col-2 position-relative position-image-roadmap">
                    <div>
                        <h2 class="position-text-readmore position-relative text-view">
                            Q1. 2023
                        </h2>
                        <img class="image-roadmap" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                        <div class="progress progress-box-3 progress-background-color-blue">
                            <div class="progress-bar progress-color-5" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <ul class="font-size-imageroadmap">
                        <li>
                            Support of digitization of assets on Hyperas NFT
                        </li>
                        <li>
                            Support for trading and fundrasing via NFT Hyperas Dex Market
                        </li>
                    </ul>
                    <div class="progress progress-box-end progress-background-color-blue">
                        <div class="progress-bar " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
