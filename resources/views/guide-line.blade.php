@extends('layouts.app')

@section('content')
<div id="guideLinePage">
    <span class="circleBlur-1"></span>
    <span class="circleBlur-2"></span>
    <div class="container-lg position-relative">
        <section class="banner text-center">
            <h1 class="mb-5">GUILDLINE</h1>
            <p class="mb-0">A decentralized exchange where cryptocurrencies and other digital assets (NFTs) are listed. Hyra Dex is considered a great step <br> forward in the mission of currency liberalization, decentralized crypto-assets of the Hyperas Chain ecosystem...</p>
        </section>
        <section class="steps text-center">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="roundPink">
                        <img src="{{ asset('img/icon-step-1.png') }}" alt="">
                    </div>
                    <h3 class="stepName">Step 1</h3>
                    <p class="px-3">Fill out the registration form to send us information.</p>
                </div>
                <div class="col-md-3">
                    <div class="roundPink">
                        <img src="{{ asset('img/icon-step-2.png') }}" alt="">
                    </div>
                    <h3 class="stepName">Step 2</h3>
                    <p class="px-3">Hyperas conducts internal   of project information before proceeding to digitize assets.</p>
                </div>
                <div class="col-md-3">
                    <div class="roundPink">
                        <img src="{{ asset('img/icon-step-3.png') }}" alt="">
                    </div>
                    <h3 class="stepName">Step 3</h3>
                    <p class="px-3">Digitize assets through Hyperas Chain</p>
                </div>
                <div class="col-md-3">
                    <div class="roundPink">
                        <img src="{{ asset('img/icon-step-4.png') }}" alt="">
                    </div>
                    <h3 class="stepName">Step 4</h3>
                    <p class="px-3">Publish digital assets to appropriate platforms depending on the needs of the project.</p>
                </div>
            </div>
        </section>
        <section class="contactFormElement bgGrad rounded-10">
            <div class="inner rounded-10">
                <div class="row">
                    <div class="col-lg-6 col-12 offset-lg-6">
                        <h3 class="sectionHeading">Contact Hyperas</h3>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Email*">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Message*" rows="6"></textarea>
                        </div>
                        <button  type="button" class="btn btn-lg w-100 btnGrad">SUBMIT</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection