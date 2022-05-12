@extends('layouts.app')

@section('content')
<div id="contactPage">
    <span class="circleBlur-1"></span>
    <span class="circleBlur-2"></span>
    <div class="container position-relative">
        <section class="banner text-center">
            <h1>CONTACT</h1>
            <p class="fs-3 text-gradient">Get in touch with the Hyperas team</p>
        </section>
        <section class="text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="contactWrap">
                        <div class="contactItem">
                            <div class="roundPink">
                                <img src="{{ asset('img/Vector-contact.png')}}" alt="">
                            </div>
                            <h4>For general chat</h4>
                            <div>Join the <a href="#">Telegram</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contactWrap">
                        <div class="contactItem">
                            <div class="roundPink">
                                <img src="{{ asset('img/Framecontact.png')}}" alt="">
                            </div>
                            <h4>For press inquiries</h4>
                            <div>Please fill out this <a href="#">Form</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contactWrap">
                        <div class="contactItem">
                            <div class="roundPink">
                                <img src="{{ asset('img/Framecontact1.png')}}" alt="">
                            </div>
                            <h4>For all other inquiries</h4>
                            <div><a href="#">Hyperas.com/FAQ</a></div>
                        </div>
                    </div>            
                </div>
            </div>
        </section>
        <section class="contactFormElement bgGrad rounded-10">
            <div class="inner rounded-10">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
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
                        <button type="button" class="btn btn-lg w-100 btnGrad">SUBMIT</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection