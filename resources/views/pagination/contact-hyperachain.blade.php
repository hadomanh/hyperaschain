@extends('layouts.app')

@section('content')
<div id="contact-hyperachain">
    <section class="contact-link-hyperaschain">
        <div class="container">
            <h1 class="text-center">
                CONTACT
            </h1>
            <p class="text-center text-content-top">
                Get in touch with the Hyperas team
            </p>
            <div class="row box-contact-world justify-content-between from-boxcontact">
                <div class="col-4 text-box-contact-1 ">
                    <h3 class="text-box-contact">
                        For general chat
                    </h3>
                    <p>
                        Join the <a href="Telegram">Telegram</a>
                    </p>
                    <div class="position-relative position-image">
                        <img src="{{ asset('img/Vector-contact.png')}}" alt="">
                    </div>
                </div>
                <div class="col-4 text-box-contact-1 ">
                    <h3 class="text-box-contact">
                        For press inquiries
                    </h3>
                    <p>
                        Please fill out this <a href="Form">Form</a>
                    </p>
                    <div class="position-relative position-image">
                        <img src="{{ asset('img/Framecontact.png')}}" alt="">
                    </div>
                </div>
                <div class="col-4 text-box-contact-1 ">
                    <h3 class="text-box-contact">
                        For all other inquiries
                    </h3>
                    <div class="text-center">
                        <p>
                            <a href="Hyperas.com/FAQ">Hyperas.com/FAQ</a>
                        </p>
                    </div>
                    <div class="position-relative position-image">
                        <img src="{{ asset('img/Framecontact1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div> 
    </session>
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
                        <button type="button" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
@endsection