@extends('layouts.app')

@section('content')
<div id="hyra-staking">
        <section class="banner text-center">
            <h1 class="mb-0">GETTING STARTED HYRA STAKING</h1>
        </section>
    <div class="container-lg">
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
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">b </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-4">
                                <div class="box-connect-wallet ">
                                    <div class="d-flex position-relative">
                                        <img src="{{asset('img/Ellipse 18.png')}}" alt="">
                                        <div class="icon-prink position-absolute">
                                            <img src="{{asset('img/Group 78 (1).png')}}" alt="">
                                        </div>
                                        <div class="ps-5">
                                            <h3>
                                                Stake HYRA
                                            </h3>
                                            <p>
                                                Stake, Earn - And more!
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                FLEXIBLE APY:
                                            </span>
                                            <p>
                                                17.38%
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                LOCKED APY:
                                            </span>
                                            <p>
                                                Up to 17.38%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="style-text text-center">
                                        Start Staking   
                                    </div>
                                    <div class="box-connect text-center">
                                           <a href="">Connect Wallet</a>
                                    </div>
                                    <hr>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Hide
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <div>
                <div>
                    <span>
                        Total staked
                    </span>
                    <p>
                        123,456,789 HYRA
                    </p>
                </div>
                <div>
                    <span>
                        Total staked
                    </span>
                    <p>
                        3,456,789 HYRA
                    </p>
                </div>
            </div>
      </div>
      </div>
    </div>
</div>








                                </div>
                            </div>
                            <div class="col-4">

                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
@endsection