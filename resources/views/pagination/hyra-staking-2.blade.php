@extends('layouts.app')

@section('content')
<div id="hyra-staking">
    <div class="container-lg">
        <section class="banner text-center">
            <h1 class="mb-0">GETTING STARTED HYRA STAKING</h1>
        </section>
        <section class="page-hyra-staking text-white">
            <div class="container-lg">
                <div class="row menu-hyra">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <img src="{{ asset('img/umbrella-menu.png') }}">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <img src="{{ asset('img/item-menu.png') }}">
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active page-cave" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne"></h2>
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <div class="col-md-1">
                                            <img src="{{ asset('img/hyra-earn.png') }}">
                                            <img src="{{ asset('img/transaction.png') }}" class="icon-earn">
                                        </div>
                                        <div class="col-md-2">
                                            <h6>Stake HYRA</h6>
                                            <p>Stake, Earn - And more!</p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="">Flexible APY</a>
                                            <p><strong>0.0</strong></p>
                                            <p><strong>0 USD</strong> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="">Hyperas Staked</a>
                                            <p>15.67% </p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="">Locked APY</a>
                                            <p>Up to 17.48%</p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="">Total staked</a>
                                            <p>123,456,789 HYRA</p>
                                        </div>
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <p>Performance Fee</p>
                                                    <span>
                                                        <a href="" class="">See Token Info</a>
                                                        <img src="{{ asset('img/item-menu.png') }}">
                                                    </span>
                                                    <span>
                                                        <a href="">View Tutorial</a>
                                                        <img src="{{ asset('img/item-menu.png') }}">
                                                    </span>
                                                    <span>
                                                        <a href="">View Contact</a>
                                                        <img src="{{ asset('img/item-menu.png') }}">
                                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    s
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="title-shadow">Start Staking</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo"> </h2>
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Accordion Item #2
                                    </div>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree"></h2>
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Accordion Item #3
                                    </div>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection