@extends('layouts.app')

@section('content')
<div id="guideLinePage"  class="text-center">
    <section class="banner">
        <h1 class=" text-light">
            GUILDLINE
        </h1>
        <p class=" content-text-guildline text-light">
            A decentralized exchange where cryptocurrencies and other digital assets (NFTs) are listed. Hyra Dex is considered a great step <br> forward in the mission of currency liberalization, decentralized crypto-assets of the Hyperas Chain ecosystem...
        </p>
    </section>
    <section class="guildline-content-top text-center">
        <div class="container">
            <div class="row d-flex">
                <div class="col-3">
                    <div class="roundPink">
                        <img src="{{ asset('img/Framee.png') }}" alt="">
                    </div>
                    <h3 class="text-light progress-after position-relative">
                        Step 1
                    </h3>
                    <p class="text-light">
                        Fill out the registration form to send us information.
                    </p>
                </div>
                <div class="col-3 ">   
                    <div class="roundPink">
                        <img src="{{ asset('img/Framee1.png') }}" alt="">
                    </div>
                    <h3 class="text-light progress-after position-relative">
                        Step 2
                    </h3>
                    <p class="text-light">
                        Hyperas conducts internal   of project information before proceeding to digitize assets.
                    </p>
                </div>
                <div class="col-3">
                    <div class="roundPink">
                        <img src="{{ asset('img/New_Symbol_4_copy.png') }}" alt="">
                    </div>
                    <h3 class="text-light progress-after position-relative">
                        Step 3
                    </h3>
                    <p class="text-light">
                        Digitize assets through Hyperas Chain
                    </p>
                </div>
                <div class="col-3">
                   
                    <div class="roundPink">
                        <img src="{{ asset('img/Framee3.png') }}" alt="">
                    </div>
                    <h3 class="text-light position-relative">
                        Step 4
                    </h3>
                    <p class="text-light">
                        Publish digital assets to appropriate platforms depending on the needs of the project.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="box-contact-hyperras ">
        <div class="container">
            <div class="row">
                <div class="col-6">

                </div>
                <div class=" col-6 content-bg-contacthyperas">
                    <p class="content-text-hyperras">
                        Contact Hyperas
                    </p>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name*">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Email*">
                        </div>
                        <div class="mb-3">
                            <input class="form-control form-control-lg "  placeholder ="Message*" rows="3"></input>
                        </div>
                        <div class="button-box-submit">
                            <button type="button" class="btn btn-primary"><a href="">SUBMIT</a></button>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection