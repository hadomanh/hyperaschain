@extends('layouts.app')

@section('content')
<div id="aboutPage">
    <!-- <section class="banner text-center">
        <h1 class="mb-0">ABOUT US</h1>
    </section> -->
    <section class="banner-about-us">
        <div class="container-lg">
            <h1 class="title-banner">ABOUT US</h1>
        </div>
    </section> 
    <div class="overview">
        <span class="circleBlur-1"></span>
        <span class="circleBlur-2"></span>
        <section>
            <div class="container">
                <div class="row item">
                    <div class="col-md-6 order-2 order-md-1">
                        <img src="{{ asset('img/hyperas-about-2.jpg') }}" class="rounded-10">
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <h3 class="text-gradient mb-3">Our Mission</h3>
                        <p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
                        <p>Our mission is to build a reliable blockchain platform that will form the backbone of the large-scale tokenization of decentralized assets in the future economy. </p>
                        <p>With the rise of technology the world has become smaller and more connected than at any point in human history. </p>
                        <p> We firmly believe that the continuation of this process will lead to the emergence of a new understanding of shared goals, creating demand for a new model of transparent decentralized ownership. </p>
                    </div>
                </div>
                <div class="row mt-5 py-5 item position-relative">
                    <span class="squareBlur"></span>
                    <div class="col-md-6">
                        <h3 class="text-gradient mb-3">Our Vision</h3>
                        <p>We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
                        <p><strong>HYPERAS chain</strong> is the first decentralized interoperable and self-optimised blockchain infrastructure. We aim to push the current boundaries by solving one of the most prominent challenges facing blockchain technology - fragmentation of the blockchain ecosystems.</p>
                        <p>Our goal is to create a unified platform that combines all participants collective strengths to lay the foundation for global blockchain mass adoption. </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/hyperas-about-1.jpg') }}" class="rounded-10">
                    </div>                    
                </div>
            </div>
        </section>
        <section class="teamElement text-center">
            <div class="container">
                <h2 class="sectionHeading">Core Team</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('img/francesco.png') }}" alt="">
                        <h6 class="name">FRANCESCO</h6>
                        <div class="position">CTO</div>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('img/guiko-k.png') }}" alt="">
                        <h6 class="name">GUIKO K</h6>
                        <div class="position ">Technology Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
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
        <section class="teamElement text-center">        
            <div class="container">
                <h2 class="sectionHeading">Advisors</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('img/francesco.png') }}" alt="">
                        <h6 class="name">FRANCESCO</h6>
                        <div class="position ">CTO</div>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('img/guiko-k.png') }}" alt="">
                        <h6 class="name">GUIKO K</h6>
                        <div class="position ">Technology Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('img/frank.png') }}" alt="">
                        <h6 class="name">FRANK N.HAWKINS</h6>
                        <div class="position ">Finance Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('img/francesco.png') }}" alt="">
                        <h6 class="name">FRANCESCO</h6>
                        <div class="position ">CTO</div>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 d-flex flex-column align-items-center">
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
    </div>

    <!-- Investor & Partners -->
    <section class="partnersElement text-center">
        <div class="container">
            <h1 class="sectionHeading">Investor & Partners</h1>
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
</div>
@endsection