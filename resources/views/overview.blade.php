@extends('layouts.app')

@section('content')
    <div id="overviewPage">
        <section class="banner">
            <h1 class="mb-0">OVERVIEW</h1>
        </section>
        <section class="ecosystem">
            <div class="container-lg">
                <div class="text-center">
                    <h2 class="sectionHeading">Ecosystem</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="item item-1">
                            <div class="icon mb-3">
                                <img src="{{ asset('img/logoHyraScan.png') }}" alt="">
                            </div>
                            <div class="text">The blockchain ledger of Hyperas Chain, where to keep track of transactions in and out of smart contracts, cryptocurrency transactions, cryptographic assets (NFT).</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item item-2">
                            <div class="icon mb-3">
                                <img src="{{ asset('img/logoHyradex.png') }}" alt="">
                            </div>
                            <div class="text">A decentralized exchange where cryptocurrencies and other digital assets (NFTs) are listed. Hyra Dex is considered a great step forward in the mission of currency liberalization, decentralized crypto-assets of the Hyperas Chain ecosystem...</div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('img/icon-hyperas.png')}}" alt="" width="200" class="iconCenter d-md-block d-none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item item-3">
                            <div class="icon mb-3">
                                <img src="{{ asset('img/logoHyraWallet.png') }}" alt="">
                            </div>
                            <div class="text">A digital asset storage wallet and gateway to blockchain applications, capable of communicating with various blockchain networks: Buy, store, send and swap digital assets, Explore blockchain applications, Own your data.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item item-4">
                            <div class="icon mb-3">
                                <img src="{{ asset('img/logoHyraInvest.png') }}" alt="">
                            </div>
                            <div class="text">Hyra Invest is a marketplace to offer Hyra Coin in ICO rounds and a place for investors to pay for transactions when investing in digital real estate on Pindias platform.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bgGalaxy text-white">
            <div class="container-lg">
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-6 col-md-8 boxIframe">
                        <div class="videoWrapper">               
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Hi5P5wN2kqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="text-center">
                        <h2 class="sectionHeading">Technology Advantages</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-3 col-md-6">
                            <div class="roundPink"><img src="{{ asset('img/icon-4.png')}}"></div>
                            <h5 class="my-3">Fast</h5>
                            <p>Block generation time 2s Testnet block time 3s Testnet validators: 3 Mainnet block time 2s Mainnet validators: 7</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roundPink"><img src="{{ asset('img/icon-3.png')}}"></div>
                            <h5 class="my-3">High Capacity</h5>
                            <p>Large block size (up to 50 MB) can execute over 50,000 (TPS) transactions per second Salable up to 210,000 (TPS)</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roundPink"><img src="{{ asset('img/icon-2.png')}}"></div>
                            <h5 class="my-3">Cost-Effective</h5>
                            <p>Low gas fee: 0.00001$</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roundPink"><img src="{{ asset('img/icon-1.png')}}"></div>
                            <h5 class="my-3">Superity</h5>
                            <p>Specialized for large and complex smart contracts</p>
                        </div>
                    </div>
                </section>
            </div>

            <section class="roadmap"> 
                <div class="container-lg">
                    <div class="text-center">
                        <h2 class="sectionHeading">Road map</h2>
                    </div>
                    <div class="contentRoadmap">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <div class="item active">
                                    <h4 class="date">Q4. 2021</h4>
                                    <div class="imgWrap">
                                        <span class="line"></span>
                                        <img src="{{ asset('img/icon-roadmap-pink.png')}}" alt="">
                                    </div>
                                    <ul>
                                        <li>Complete the legal records of Metaway Holdings member companies</li>
                                        <li>Coduct mergers and acquisions (M&A) among member companies</li>
                                        <li>Development of distinct Blockchain platform and products in the ecosystem</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="item active">
                                    <h4 class="date">Q1. 2022</h4>
                                    <div class="imgWrap">
                                        <span class="line"></span>
                                        <img src="{{ asset('img/icon-roadmap-pink.png')}}" alt="">
                                    </div>
                                    <ul>
                                        <li>R60 realated to Hyperas Chain (testnest)</li>
                                        <li>Launch of Hyperas Scan (V1)</li>
                                        <li>Audit Blockchain</li>
                                        <li>Launch of testing version of Pindias Website (V1)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="item">
                                    <h4 class="date">Q2. 2022</h4>
                                    <div class="imgWrap">
                                        <span class="line"></span>
                                        <img src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                                    </div>
                                    <ul>
                                        <li>Launch of Hyperas Chain (Mainet)</li>
                                        <li>Launch of Hyperas Wallet</li>
                                        <li>Launch of Hyperas NFT</li>
                                        <li>Launch of official version Pindias (V2)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="item">
                                    <h4 class="date">Q3. 2022</h4>
                                    <div class="imgWrap">
                                        <span class="line"></span>
                                        <img src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                                    </div>
                                    <ul>
                                        <li>Launch of Divega reverse aution e-commerce platform (V2)</li>
                                        <li>Launch of Pindias app for Android & IOS (V2)</li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="col-md-2">
                                <div class="item">
                                    <h4 class="date">Q4. 2022</h4>
                                    <div class="imgWrap">
                                        <span class="line"></span>
                                        <img src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                                    </div>
                                    <ul>
                                        <li>Support of digitization of assets on Hyperas NFT</li>
                                        <li>Support for trading and fundrasing via NFT Hyperas Dex Market</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="item">
                                    <h4 class="date">Q1. 2023</h4>
                                    <div class="imgWrap">
                                        <span class="line"></span>
                                        <img src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                                    </div>
                                    <ul>
                                        <li>Support of digitization of assets on Hyperas NFT</li>
                                        <li>Support for trading and fundrasing via NFT Hyperas Dex Market</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
