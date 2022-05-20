@extends('layouts.app')

@section('content')

<div id="hyraValidator">
    <span class="circleBlur-1"></span>
    <div class="container position-relative">
        <section class="banner text-center">
            <h1 class="mb-0">HYPERAS VALIDATOR</h1>
        </section>
        <section>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="numberWrap">
                        <div class="numberItem">
                            <div class="number text-gradient mb-2">1,234</div>
                            <div>Current number of validators on mainnet</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="numberWrap">
                        <div class="numberItem">
                            <div class="number text-gradient mb-2">34</div>
                            <div>Current Superminority</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="docsWrap d-flex flex-column">
                        <h3 class="title mb-3">Get Started</h3>
                        <p class="flex-grow-1">Go here for documentation related to all things Validator, from validator requirements, to troubleshooting.</p>
                        <div class="text-end font-regular"><a href="#">Go to docs <i class="fas fa-angle-right"></i></a></div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="docsWrap d-flex flex-column bgright">
                        <h3 class="title mb-3">Validator Explorer</h3>
                        <p class="flex-grow-1">View the current list of validators, their ranking by stake amount, and information about commission below.</p>
                        <div class="text-end font-regular"><a href="#">Go to docs <i class="fas fa-angle-right"></i></a></div>
                    </div>

                </div>
            </div>
        </section>
        <section class="text-center p-0"><img src="{{ asset('img/cube.png') }}" alt="" class="imgCube"></section>
        <section class="text-center">
            <h2 class="sectionHeading">What is Validator with PoA-based networks?</h2>
            <p>In PoA-based networks, transactions and blocks are validated by approved accounts, known as validators. Validators run software allowing them to put transactions in blocks. The process is automated and does not require validators to be constantly monitoring their computers. It, however, does require maintaining the computer (the authority node) uncompromised.</p>
            <a href="#" class="btn btn-lg btnGrad mt-4">Become Validator</a>
        </section>
    </div>
</div>


@endsection