@extends('layouts.app')

@section('content')

<div id="hyraToken">
    <section>
        <div class="container">
            <div class="row">
                <h1 class="text-center pt-3 fw-bold">HYRA TOKEN</h1>
                <div class="col-md-6">
                    <div class="">
                        <img src="{{ asset('img/coinHyra.png') }}" alt="">
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h1 class="titleSection">What Is HYRA Token?</h1>
                        <p>HYRA is the primary token on the Hyperas network. Hyra is used for securing the network through staking, for governance, for payments, and for fees.</p>
                    </div>

                </div>
                <div class="text-center">
                    <h1 class="titleSection">What is HYRA Token used for?</h1>
                    <div class="row d-flex justify-content-center pt-5">
                        <div class="col-md-3 text-technology-content text-center">
                            <img class="icon-technology" src="{{ asset('img/token-1.png') }}" alt="">
                            <p class="pt-4">
                                Establishing a Proof-of-Authority Network
                            </p>
                        </div>
                        <div class="col-md-3 text-technology-content text-center">
                            <img class="icon-technology" src="{{ asset('img/token-2.png') }}" alt="">
                            <p class="pt-4">
                                Establishing a Proof-of-Authority Network
                            </p>
                        </div>
                        <div class="col-md-3 text-technology-content text-center">
                            <img class="icon-technology" src="{{ asset('img/token-3.png') }}" alt="">
                            <p class="pt-4">
                                Establishing a Proof-of-Authority Network
                            </p>
                        </div>
                        <div class="col-md-3 text-technology-content text-center">
                            <img class="icon-technology" src="{{ asset('img/token-4.png') }}" alt="">
                            <p class="pt-4">
                                Establishing a Proof-of-Authority Network
                            </p>
                        </div>
                    </div>
                    <h1 class="titleSection">How can i buy HYRA ?</h1>
                    <div class="row justify-content-center pt-4 pb-4">
                        <div class="col-md-2 swap">
                            <img src="{{ asset('img/pancake.png') }}" alt="" class="pb-3">
                            <div>Swap on</div>
                            <h6>PancakeSwap</h6>
                        </div>
                        <div class="col-md-2 swap">
                            <img src="{{ asset('img/comingsoon-1.png') }}" alt="" class="pb-3">
                            <div>Coming Soon</div>
                        </div>
                        <div class="col-md-2 swap">
                            <img src="{{ asset('img/comingsoon-2.png') }}" alt="" class="pb-3">
                            <div>Coming Soon</div>
                        </div>
                        <div class="col-md-2 swap">
                            <img src="{{ asset('img/comingsoon-3.png') }}" alt="" class="pb-3">
                            <div>Coming Soon</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

@endsection