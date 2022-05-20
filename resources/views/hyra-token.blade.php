@extends('layouts.app')

@section('content')

<div id="tokenPage">   
    <span class="circleBlur-1"></span>
    <div class="container">
        <section class="banner text-center">
            <h1 class="mb-0">HYRA TOKEN</h1>
        </section>
        <section class="hyraToken">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('img/coinHyra.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="sectionHeading">What Is HYRA Token?</h2>
                    <p>HYRA is the primary token on the Hyperas network. Hyra is used for securing the network through staking, for governance, for payments, and for fees.</p>
                </div>
            </div>
        </section>
        <section class="text-center">
            <h2 class="sectionHeading mb-5">What is HYRA Token used for?</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="roundPink"><img src="{{ asset('img/token-1.png') }}"></div>
                    <div class="mt-4 font-regular">Establishing a Proof-of-Authority Network</div>
                </div>
                <div class="col-md-3">
                    <div class="roundPink"><img src="{{ asset('img/token-2.png') }}"></div>
                    <div class="mt-4 font-regular">Crypto Payments</div>
                </div>
                <div class="col-md-3">
                    <div class="roundPink"><img src="{{ asset('img/token-3.png') }}"></div>
                    <div class="mt-4 font-regular">On-Chain Governance</div>
                </div>
                <div class="col-md-3">
                    <div class="roundPink"><img src="{{ asset('img/token-4.png') }}"></div>
                    <div class="mt-4 font-regular">Network Fees</div>
                </div>
            </div>
        </section>
        <section class="text-center howToBuy">
            <h2 class="sectionHeading">How can i buy HYRA ?</h2>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <a href="#">
                        <p><img src="{{ asset('img/pancake.png') }}" alt=""></p>
                        <span>Swap on<br><span class="font-regular">PancakeSwap</span></span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="comingSoon">
                        <p><img src="{{ asset('img/comingsoon-1.png') }}" alt=""></p>
                        <span>Coming Soon</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="comingSoon">
                        <p><img src="{{ asset('img/comingsoon-2.png') }}" alt=""></p>
                        <span>Coming Soon</span>
                    </a>                    
                </div>
                <div class="col-md-2">
                    <a href="#" class="comingSoon">
                        <p><img src="{{ asset('img/comingsoon-3.png') }}" alt=""></p>
                        <span>Coming Soon</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection