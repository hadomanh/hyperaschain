@extends('layouts.app')

@section('content')
    <section>
            <div class="text-overview">
                <h1 class="position-absolute text-content-top-overview">
                     OVERVIEW
                </h1>
            </div>
    </section>
    <section class="content-header-overview">
        <div class="position-relative ">
            <div class="bg-dark">
                <img class="w-100" src="{{ asset('img/bg-overview.png')}}" alt="">
            </div>
            <div class="position-absolute border-image-header">
                 <img class="w-100" src="{{ asset('img/bg-ecosystem.png')}}" alt="">
                <div class="position-absolute text-ecosystem">
                    <h1>
                        <span>
                            Ecosystem
                        </span>
                    </h1>
               </div>
            </div>
        </div>
    </section>
    <section class="content-top-overview">
        <div class="container-sm bottom-overview">
            <div class="row ">
                <div class="col-6 position-relative">
                        <img  src="{{ asset('img/frame.png') }}" alt="">
                    <div class="content-text-hyra position-absolute box-content-hyra-1">
                        <div class="text-end">
                            <img class="col-5" src="{{ asset('img/Logo_HyraScan_512px 1.png')}}" alt="">
                        </div>
                        <div>
                            <p class="ps-4">
                                The blockchain ledger of Hyperas Chain,<br> where to keep track of transactions in and <br> out of smart contracts, cryptocurrency <br> transactions, cryptographic assets (NFT).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 position-relative">
                        <img  src="{{ asset('img/Vector.png ')}}" alt="">
                        <div class="content-text-hyra position-absolute box-content-hyra-2">
                            <div>
                                <img src="{{ asset('img/Logo_Hyradex_512px 1.png')}}" alt="">
                            </div>
                            <div>
                                <p>
                                A decentralized exchange where <br> cryptocurrencies and other digital assets <br> (NFTs) are listed. Hyra Dex is considered a <br> great step forward in the mission of <br> currency liberalization, decentralized <br> crypto-assets of the Hyperas Chain <br> ecosystem...
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
                                 <p>
                                     A digital asset storage wallet and gateway to <br> blockchain applications, capable of <br> communicating with various blockchain <br> networks: Buy, store, send and swap digital <br> assets, Explore blockchain applications, Own <br> your data.
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
                                <p>
                                  Hyra Invest is a marketplace to offer Hyra <br> Coin in ICO rounds and a place for investors <br> to pay for transactions when investing in <br> digital real estate on Pindias platform.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="content-bottom-overview roadmap1">
        <div class=" box-iframe-ytb text-center container-sm ">
            
        </div>
        <div class=" container-sm">
            <h2 class="text-center text-technology">
                <span>
                    Technology Advantages
                </span>
            </h2>
        </div>
        <div class="container-sm d-flex ">
            <div class="row col-12">
                <div class="col-3">
                        <div class="icon-technology">
                            <img src="{{ asset('img/icon-4.png')}}" alt="">
                        </div>
                        <nav>
                            <ul class="pt-3 list-style">
                                <b>
                                    Fast
                                </b>
                                <li class="pt-2">
                                    Block generation time 2s
                                </li>
                                <li>
                                    Testnet block time 3s
                                </li>
                                <li>
                                    Testnet validators: 3
                                </li>
                                <li>
                                    Mainnet block time 2s
                                </li>
                                <li>
                                    Mainnet validators: 7
                                </li>
                            </ul>
                        </nav>
                </div>
            <div class="col-3">
                <div class="icon-technology">
                    <img src="{{ asset('img/icon-3.png')}}" alt="">
                </div>
                <nav>
                    <ul class="pt-3 list-style">
                        <b>
                            High Capacity
                        </b>
                        <li class="pt-2">
                            Large block size (up to 50 MB) <br> can execute over 50,000 <br> (TPS) transactions per second <br> Salable up to 210,000 (TPS)
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-3">
                    <div class="icon-technology">
                        <img src="{{ asset('img/icon22.png')}}" alt="">
                    </div>
                <nav>
                    <ul class="pt-3 list-style">
                        <b>
                            Cost-Effective
                        </b>
                        <li class="pt-2">
                            Low gas fee: 0.00001$
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-3">
                <div class="icon-technology">
                    <img src="{{ asset('img/icon-1.png')}}" alt="">
                </div>
                <nav>
                    <ul class="pt-3 list-style">
                        <b>
                            Superity
                        </b>
                        <li class="pt-2">
                            Specialized for large and <br> complex smart contracts
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
        <div class="text-road-map">
            <div class="container-sm ">
                <h2 class="text-center">
                    <span>
                        Road map
                    </span>
                </h2>
            </div>
            <p class="text-center text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
            </p>
        </div>

        <div class="row px-5">
            <div class="col-2 position-relative">
                <div>
                    <img class="col-12" src="{{ asset('img/icon-roadmap-pink.png')}}" alt="">
                    <h2 class="position-absolute position-text-readmore">
                        Q4. 2021
                    </h2>
                </div>
                <div>
                    <ul>
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
            </div>
            <div class="col-2 position-relative aaa">
                <div>
                    <img class="col-12" src="{{ asset('img/icon-roadmap-pink.png')}}" alt="">
                    <h2 class="position-absolute position-text-readmore">
                        Q1. 2022
                    </h2>
                </div>
                <div>
                    <ul>
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
            </div>
            <div class="col-2 position-relative">
                <div>
                    <img class="col-12" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                    <h2 class="position-absolute position-text-readmore">
                        Q2. 2022
                    </h2>
                </div>
                <div>
                    <ul>
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
            </div>
            <div class="col-2 position-relative aaa">
                <div>
                    <img class="col-12" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                    <h2 class="position-absolute position-text-readmore">
                        Q3. 2022
                    </h2>
                </div>
                <div>
                    <ul>
                        <li>
                            Launch of Divega reverse aution e-commerce platform (V2)
                        </li>
                        <li>
                            Launch of Pindias app for Android & IOS (V2)
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2 position-relative">
                <div >
                    <img class="col-12" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                    <h2 class="position-absolute position-text-readmore">
                        Q4. 2022
                    </h2>
                </div>
                <div>
                    <ul>
                        <li>
                            Support of digitization of assets on Hyperas NFT
                        </li>
                        <li>
                            Support for trading and fundrasing via NFT Hyperas Dex Market
                    </ul>
                </div>
            </div>
            <div class="col-2 position-relative aaa">
                <div>
                    <img class="col-12" src="{{ asset('img/icon-roadmap-blue.png')}}" alt="">
                    <h2 class="position-absolute position-text-readmore">
                        Q1. 2023
                    </h2>
                </div>
                <div>
                    <ul>
                        <li>
                            Support of digitization of assets on Hyperas NFT
                        </li>
                        <li>
                            Support for trading and fundrasing via NFT Hyperas Dex Market
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
