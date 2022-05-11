@extends('layouts.app')

@section('content')
<div id="community">
    <div class="container-lg community-content">
        <section class="banner">
            <h1 class="mb-0">COMMUNITY</h1>
        </section>
        <section class="page-community">
            <h3 class="sectionHeading">Official Hyperas chain Channels</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
            <div class="row justify-content-center">
                <div class="col-md-2 col-6">
                    <a href="https://web.telegram.org/z/" target="blank">
                        <img src="{{ asset('img/telegram.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="https://www.linkedin.com/feed/" target="blank">
                        <img src="{{ asset('img/linkedin.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="https://twitter.com/?lang=vi" target="blank">
                        <img src="{{ asset('img/twitter.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 col-6">
                    <a href="https://www.facebook.com/" target="blank">
                        <img src="{{ asset('img/facebook.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="https://github.com/" target="blank">
                        <img src="{{ asset('img/github.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="https://www.youtube.com/" target="blank">
                        <img src="{{ asset('img/youtube.png') }}" alt="">
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection