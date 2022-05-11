@extends('layouts.app')

@section('content')

<div id="hyraValidater">
    <section>
        <div class="container">
            <h1 class="text-center pt-3 fw-bold">HYPERAS VALIDATOR</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 bgNumber">
                    <div class="number">
                        <span class="pink">1,</span>
                        <span class="purple">2</span>
                        <span class="blue">3</span>
                        <span class="blue-light">4</span>
                    </div>
                    <strong>Current number of validators on mainnet</strong>
                </div>
                <div class="col-md-4 bgNumber">
                    <div class="number">
                        <div class="sectionHeading numberR">3 2</div>
                    </div>
                    <strong>Current number of validantors on mainnet</strong>
                </div>
                <div class="col-5 bgleft">
                    <div class="bgDocs">
                        <h1 class="fw-bold">Get Started</h1>
                        <p>Go here for documentation related to all things Validator, from validator requirements, to troubleshooting.</p>
                        <div class="text-end docText"><a href="#">Go to docs</a> <i class="fas fa-angle-right"></i></div>
                    </div>

                </div>
                <div class="col-5 bgright">
                    <div class="bgDocs">
                        <h1 class="fw-bold">Validator Explorer</h1>
                        <p>View the current list of validators, their ranking by stake amount, and information about commission below.</p>
                        <div class="text-end docText"><a href="#">Go to docs</a> <i class="fas fa-angle-right"></i></div>
                    </div>

                </div>
            </div>
            <div class="text-center"><img src="{{ asset('img/square.png') }}" alt="" class="imgSquare"></div>
            <div class="text-center">
                <h1 class="sectionHeading numberR">What is Validator with PoA-based networks?</h1>
                <p class="pt-2 pb-4">In PoA-based networks, transactions and blocks are validated by approved accounts, known as validators. Validators run software allowing them to put transactions in blocks. The process is automated and does not require validators to be constantly monitoring their computers. It, however, does require maintaining the computer (the authority node) uncompromised.</p>
                <div class="button-box-submit">
                    <a type="button" class="btn">Become Validator</a>
                </div>

            </div>
    </section>
</div>


@endsection