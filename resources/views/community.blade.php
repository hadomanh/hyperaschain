@extends('layouts.app')

@section('content')
<div id="communityPage">
    <div class="circleBlur-1"></div>
    <div class="circleBlur-2"></div>
    <div class="container-lg text-white text-center position-relative">
        <section class="banner">
            <h1 class="mb-0">COMMUNITY</h1>
        </section>
        <section class="listCommunity">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12">
                    <h2 class="sectionHeading">Official Hyperas chain Channels</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <a href="https://t.me/hyperaschainchannel" target="blank">
                                <img src="{{ asset('img/telegram.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://www.linkedin.com/company/hyperaschainofficial" target="blank">
                                <img src="{{ asset('img/linkedin.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://twitter.com/hyperaschain" target="blank">
                                <img src="{{ asset('img/twitter.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://www.facebook.com/hyperaschain" target="blank">
                                <img src="{{ asset('img/facebook.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://github.com/hyperaschain-com" target="blank">
                                <img src="{{ asset('img/github.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="https://www.youtube.com/channel/UC76gQwZQzZS4cPKYUOvnABQ" target="blank">
                                <img src="{{ asset('img/youtube.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="event">
            <h2 class="sectionHeading">Upcoming Event</h2>
            <div class="table-responsive">
                <table class="table align-middle text-white text-start">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Event</th>
                            <th>Time</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('img/event-img.png') }}" alt=""></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>20.04.2022</td>
                            <td class="text-blue">Online</td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/event-img.png') }}" alt=""></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>20.04.2022</td>
                            <td class="text-pink">Offline</td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/event-img.png') }}" alt=""></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>20.04.2022</td>
                            <td class="text-blue">Online</td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/event-img.png') }}" alt=""></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                            <td>20.04.2022</td>
                            <td class="text-blue">Online</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="#">SEE MORE</a>
            </div>
        </section>
    </div>
</div>
@endsection