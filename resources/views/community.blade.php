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
                            <a href="https://www.linkedin.com/company/hyperaschainofficial" target="blank">
                                <img src="{{ asset('img/linkedin.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://twitter.com/hyperaschain" target="blank">
                                <img src="{{ asset('img/twitter.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:marcom@hyperaschain.com" target="blank">
                                <img src="{{ asset('img/facebook.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://github.com/" target="blank">
                                <img src="{{ asset('img/github.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://twitter.com/hyperaschain" target="blank">
                                <img src="{{ asset('img/youtube.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="sectionHeading">Upcoming Event</h2>
                    <div class="row">
                        <table>
                            <tr>
                                <th></th>
                                <th>Event</th>
                                <th>Time</th>
                                <th>Type</th>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/upcoming-1.png') }}" alt="" class="w-100s"></td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>20.04.2022</td>
                                <td class="text-green">Online</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/upcoming-4.png') }}" alt=""></td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>20.04.2022</td>
                                <td class="text-pink">Offline</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/upcoming-3.png') }}" alt=""></td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>20.04.2022</td>
                                <td class="text-green">Online</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/upcoming-2.png') }}" alt=""></td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>20.04.2022</td>
                                <td class="text-green">Online</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection