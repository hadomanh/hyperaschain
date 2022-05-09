@extends('layouts.app')

@section('content')
<div id="aboutPage">
    <section class="banner-about">
        <div class="container-lg">
            <h1 class="title-about">ABOUT US</h1>
        </div>
    </section>
    <section class="page-about">
        <div class="container-lg">
            <div class="row our-vision">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="{{ asset('img/hyperas-about-2.png') }}" alt="">
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <h1 class="titleSection">Our Mission</h1>
                    <p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
                    <p>Our mission is to build a reliable blockchain platform that will form the backbone of the large-scale tokenization of decentralized assets in the future economy. </p>
                    <p>With the rise of technology the world has become smaller and more connected than at any point in human history. </p>
                    <p> We firmly believe that the continuation of this process will lead to the emergence of a new understanding of shared goals, creating demand for a new model of transparent decentralized ownership. </p>
                </div>
            </div>
            <div class="row pt-5 our-vision">
                <div class="col-md-6">
                    <h1 class="titleSection">Our Vision</h1>
                    <p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
                    <p><strong>HYPERAS chain</strong> is the first decentralized interoperable and self-optimised blockchain infrastructure. We aim to push the current boundaries by solving one of the most prominent challenges facing blockchain technology - fragmentation of the blockchain ecosystems.</p>
                    <p>Our goal is to create a unified platform that combines all participants collective strengths to lay the foundation for global blockchain mass adoption. </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/hyperas-about-1.png') }}" alt="">
                </div>

            </div>
        </div>
        <span class="blur-1"></span>
        <span class="bg-our-vison"></span>
    </section>
    <section class="core-team">
        <div class="text-center">
            <h1 class="titleSection">Core Team</h1>
            <p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
        </div>
        <div class="container-lg">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/francesco.png') }}" alt="">
                    <h6 class="name">FRANCESCO</h6>
                    <div class="position ">CTO</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/guiko-k.png') }}" alt="">
                    <h6 class="name">GUIKO K</h6>
                    <div class="position ">Technology Advisor</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/frank.png') }}" alt="">
                    <h6 class="name">FRANK N.HAWKINS</h6>
                    <div class="position ">Finance Advisor</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <span class="blur-2"></span>
    </section>
    <section class="advisors">
        <div class="text-center">
            <h1 class="titleSection">Advisors</h1>
            <p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
        </div>
        <div class="container-lg">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/francesco.png') }}" alt="">
                    <h6 class="name">FRANCESCO</h6>
                    <div class="position ">CTO</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/guiko-k.png') }}" alt="">
                    <h6 class="name">GUIKO K</h6>
                    <div class="position ">Technology Advisor</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/frank.png') }}" alt="">
                    <h6 class="name">FRANK N.HAWKINS</h6>
                    <div class="position ">Finance Advisor</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/francesco.png') }}" alt="">
                    <h6 class="name">FRANCESCO</h6>
                    <div class="position ">CTO</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center m-2">
                    <img src="{{ asset('img/guiko-k.png') }}" alt="">
                    <h6 class="name">GUIKO K</h6>
                    <div class="position ">Technology Advisor</div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Investor & Partners -->
    <section class="partners">
        <div class="container pb-5">
            <div class="text-center">
                <h1 class="titleSection">Investor & Partners</h1>
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
        </div>
    </section>
</div>
@endsection