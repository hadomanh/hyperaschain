@extends('layouts.app')

@section('content')

<div id="hyraToken">
    <section class="banner text-center">
        <h1 class="mb-0 mt-5">HYRA TOKEN</h1>
    </section>

    <!-- What Is HYRA Token? -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <img src="{{ asset('img/coinHyra.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h1 class="sectionHeading">What Is HYRA Token?</h1>
                        <p>HYRA is the primary token on the Hyperas network. Hyra is used for securing the network through staking, for governance, for payments, and for fees.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- What is HYRA Token used for? -->

    <section class="text-center">
        <h1 class="sectionHeading">What is HYRA Token used for?</h1>
        <div class="container">
            <div class="row d-flex justify-content-around pt-5">
                <div class="col-md-2 text-center">
                    <div class="roundPink"><img src="{{ asset('img/token-1.png') }}"></div>
                    <strong class="d-block pt-4">Establishing a Proof-of-Authority Network</strong>
                </div>
                <div class="col-md-2 text-center">
                    <div class="roundPink"><img src="{{ asset('img/token-2.png') }}"></div>
                    <strong class="d-block pt-4">Crypto Payments</strong>
                </div>
                <div class="col-md-2 text-center">
                    <div class="roundPink"><img src="{{ asset('img/token-3.png') }}"></div>
                    <strong class="d-block pt-4">On-Chain Governance</strong>
                </div>
                <div class="col-md-2 text-center">
                    <div class="roundPink"><img src="{{ asset('img/token-4.png') }}"></div>
                    <strong class="d-block pt-4">Network Fees</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- How can i buy HYRA ? -->

    <section class="text-center">
        <h1 class="sectionHeading">How can i buy HYRA ?</h1>
        <div class="row justify-content-center pt-4 pb-10 swap">
            <div class="col-md-2 ">
                <img src="{{ asset('img/pancake.png') }}" alt="" class="pb-3">
                <div>Swap on</div>
                <h6>PancakeSwap</h6>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('img/comingsoon-1.png') }}" alt="" class="pb-3">
                <div>Coming Soon</div>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('img/comingsoon-2.png') }}" alt="" class="pb-3">
                <div>Coming Soon</div>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('img/comingsoon-3.png') }}" alt="" class="pb-3">
                <div>Coming Soon</div>
            </div>
        </div>
    </section>
</div>

@endsection