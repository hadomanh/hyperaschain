@extends('layouts.app')

@section('content')
<section class="guildline-content-top">
    <div class="container">
        <h1 class="text-center text-light">
            GUILDLINE
        </h1>
        <p class="text-center content-text-guildline text-light">
            A decentralized exchange where cryptocurrencies and other digital assets (NFTs) are listed. Hyra Dex is considered a great step <br> forward in the mission of currency liberalization, decentralized crypto-assets of the Hyperas Chain ecosystem...
        </p>
        <div class="row d-flex">
            <div class="col-3 text-center box-step">
                <img class="image-guildline" src="{{ asset('img/Framee.png') }}" alt="">
                <h3 class="text-light progress-after position-relative">
                    Step 1
                </h3>
                <p class="text-light">
                    Fill out the registration form to send us information.
                </p>
            </div>
            <div class="col-3 text-center box-step">
                <img class="image-guildline" src="{{ asset('img/Framee1.png') }}" alt="">
                <h3 class="text-light progress-after position-relative">
                    Step 2
                </h3>
                <p class="text-light">
                    Hyperas conducts internal of project information before proceeding to digitize assets.
                </p>
            </div>
            <div class="col-3 text-center box-step">
                <img class="image-guildline" src="{{ asset('img/New_Symbol_4_copy.png') }}" alt="">
                <h3 class="text-light progress-after position-relative">
                    Step 3
                </h3>
                <p class="text-light">
                    Digitize assets through Hyperas Chain
                </p>
            </div>
            <div class="col-3 text-center box-step">
                <img class="image-guildline image-guildline-4" src="{{ asset('img/Framee3.png') }}" alt="">
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
    <div class="container position-relative">
        <div class="bg-contact-hyperras text-center">
            <img src="{{ asset('img/bg-contact-galaxy.png') }}" alt="">
        </div>
        <div class="position-absolute content-bg-contacthyperas">
            <p class="content-text-hyperras">
                Contact Hyperas
            </p>
            <div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Your Name*</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Your Email*</label>
                </div>
                <div class="form-floating box-message">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Message*</label>
                </div>
                <div class="button-box-submit">
                    <a type="button" class="btn" style="width: 100%;">SUBMIT</a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection