@extends('layouts.app')

@section('content')
<div id="community">
    <span class="blur-community"></span>
    <section class="banner-community">
        <div class="container-lg">
            <h1 class="title-banner">COMMUNITY</h1>
        </div>
    </section> 
    <section class="page-community">
        <div class="container-lg">
            <div class="content">
                <h3>Official Hyperas chain Channels</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                </p>
                <div class="row img-page-community ">
                    <div class="col-md-2 col-6">
                        <a href="https://web.telegram.org/z/"  target="blank">
                            <img src="{{ asset('img/telegram.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-2 col-6">
                        <a href="https://www.linkedin.com/feed/"  target="blank">
                            <img src="{{ asset('img/linkedin.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-2 col-6">
                        <a href="https://twitter.com/?lang=vi"  target="blank">
                            <img src="{{ asset('img/twitter.png') }}" alt="">
                        </a>
                    </div>
                    <br>
                </div>           
                <div class="row img-page-community">
                    <div class="col-md-2 col-6">
                        <a href="https://www.facebook.com/"  target="blank"> 
                             <img src="{{ asset('img/facebook.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-2 col-6">
                        <a href="https://github.com/"  target="blank">
                            <img src="{{ asset('img/github.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-2 col-6">
                        <a href="https://www.youtube.com/"  target="blank">
                            <img src="{{ asset('img/youtube.png') }}" alt="">
                        </a>
                    </div>
                </div>               
            </div>
        </div>
    </section>
</div>
@endsection
