@extends('layouts.app')

@section('content')
<div id="contact-hyperachain" class="text-center">
    <section class="banner">
    <h1 class="">
                CONTACT
            </h1>
            <p class=" text-content-top">
                Get in touch with the Hyperas team
            </p>
    </section>
    <section class="contact-link-hyperaschain">
        <div class="container">
            
            <div class="row box-contact-world justify-content-between from-boxcontact">
                <div class="col-4 text-box-contact-1 position-relative">
                    <div class=" roundPink position-absolute round-pink-position">
                        <img src="{{ asset('img/Vector-contact.png')}}" alt="">
                    </div>
                    <h3 class="text-box-contact">
                        For general chat
                    </h3>
                    <p>
                        Join the <a href="Telegram">Telegram</a>
                    </p>
                    
                </div>
                <div class="col-4 text-box-contact-1 position-relative">
                <div class=" roundPink position-absolute round-pink-position">
                        <img src="{{ asset('img/Framecontact.png')}}" alt="">
                    </div>
                    <h3 class="text-box-contact">
                        For press inquiries
                    </h3>
                    <p>
                        Please fill out this <a href="Form">Form</a>
                    </p>
                </div>
                <div class="col-4 text-box-contact-1 position-relative">
                <div class=" roundPink position-absolute round-pink-position">
                        <img src="{{ asset('img/Framecontact1.png')}}" alt="">
                    </div>
                    <h3 class="text-box-contact">
                        For all other inquiries
                    </h3>
                    <div class="text-center">
                        <p>
                            <a href="Hyperas.com/FAQ">Hyperas.com/FAQ</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </session>
    <section class="box-contact-hyperras ">
        <div class="container">
            <div class="row">
                <div class="col-6">

                </div>
                <div class=" col-6 ">
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
                            <input class="form-control form-control-lg " placeholder="Message*" rows="3">
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