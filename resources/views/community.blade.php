@extends('layouts.app')

@section('content')
<div id="communityPage">
    <div class="container text-white text-center">
        <section class="banner">
            <h1 class="mb-0">COMMUNITY</h1>
        </section>
        <section class="listCommunity">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="sectionHeading">Official Hyperas chain Channels</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="https://web.telegram.org/z/" target="blank">
                                <img src="{{ asset('img/telegram.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.linkedin.com/feed/" target="blank">
                                <img src="{{ asset('img/linkedin.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://twitter.com/?lang=vi" target="blank">
                                <img src="{{ asset('img/twitter.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.facebook.com/" target="blank">
                                <img src="{{ asset('img/facebook.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://github.com/" target="blank">
                                <img src="{{ asset('img/github.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.youtube.com/" target="blank">
                                <img src="{{ asset('img/youtube.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
    </div>
</div>
@endsection