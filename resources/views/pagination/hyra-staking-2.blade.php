@extends('layouts.app')

@section('content')
<div id="hyra-staking">
    <div class="container-lg">
        <section class="banner text-center">
            <h1 class="mb-0">GETTING STARTED HYRA STAKING</h1>
        </section>
        <section class="page-hyra-staking text-white">
            <div class="row menu-hyra">
                <div class="col-md-2">
                    <ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <img src="{{ asset('img/umbrella-menu.png') }}" class="icon-menu">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <img src="{{ asset('img/item-menu.png') }}" class="icon-menu">
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="row mt-4">
                        <div class="form-check form-switch col-md-4 ">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label>Staked only</label>
                        </div>
                        <div class="col-md-6 switch btn-color-mode-switch">
                            <input type="checkbox" name="color_mode" id="color_mode" value="1">
                            <label for="color_mode" data-on="Finished " data-off="Live " class="btn-color-mode-switch-inner "></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-5">
                            <label class="form-label">Sort by</label>
                            <select class="form-select" aria-label=".form-select-lg example">
                                <option selected>Hot</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-7">
                            <label class="form-label">Search</label>
                            <div class="input-group">
                                <input class="form-control" type="" value="" id="example-search-input" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active page-cave" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item firstly" style="border-radius: 20px;">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/hyra-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn1.png') }}" class="icon-earn-1">
                                            </div>
                                            <div>
                                                <h6>Stake HYRA</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p>0~2%</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/hyra-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn.png') }}" class="icon-earn">
                                            </div>
                                            <div>
                                                <h6>Earn HYRA</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p class="text-color">1,234,567 blocks</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/ankr-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn.png') }}" class="icon-earn">
                                            </div>
                                            <div>
                                                <h6>Earn ANKR</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p class="text-color">1,234,567 blocks</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/tinc-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn.png') }}" class="icon-earn">
                                            </div>
                                            <div>
                                                <h6>Earn TINC</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p class="text-color">1,234,567 blocks</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/ceek-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn.png') }}" class="icon-earn">
                                            </div>
                                            <div>
                                                <h6>Earn CEEK</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p class="text-color">1,234,567 blocks</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/gmi-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn.png') }}" class="icon-earn">
                                            </div>
                                            <div>
                                                <h6>Earn GMI</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p class="text-color">1,234,567 blocks</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed row" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="margin-right: 30px;">
                                                <img src="{{ asset('img/hyra-earn.png') }}">
                                                <img src="{{ asset('img/icon-earn.png') }}" class="icon-earn">
                                            </div>
                                            <div>
                                                <h6>Earn FROYO</h6>
                                                <p>Stake, Earn - And more!</p>
                                            </div>
                                        </div>
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
                                <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Performance Fee</p>
                                                <ul class="list-unstyled mb-0">
                                                    <li>See Token Info<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Tutorial<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                    <li>View Contact<img src="{{ asset('img/arrow-right.png') }}"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md">
                                                <p class="text-color">1,234,567 blocks</p>
                                            </div>
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-0">
                                                        <label for="exampleInputEmail1" class="form-label">RECENT HYRA PROFIT</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="title-shadow">START STAKING</p>
                                                <button class="btn-staking">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="back-to-top" href="#" class="back-to-top" role="button">TO TOP <img src="{{ asset('img/close-selec.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box-hyra">
                                    <div class="d-flex position-relative pb-4 pt-3 img-content">
                                        <div style="margin-right: 30px;">
                                            <img src="{{ asset('img/hyra-earn.png') }}">
                                        </div>
                                        <div class="ps-4">
                                            <span class="text-content">Stake HYRA</span>
                                            <p>Stake, Earn - And more!</p>
                                        </div>
                                        <div class=" icon-box-hyra-1">
                                            <img class="position-absolute" src="{{asset('img/Group78.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>FLEXIBLE APY:</p>
                                        <p>17.38%</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>FLEXIBLE APY:</p>
                                        <p>17.38%</p>
                                    </div>
                                    <div class="col-md text-center">
                                        <p class="title-shadow">START STAKING</p>
                                        <button class="btn-staking">Connect Wallet</button>
                                    </div>

                                    <hr>
                                    <div class="text-center">
                                        <div>
                                            <p class="text-center ">
                                                <a data-bs-toggle="collapse" href="#collapseExample-0" role="button" aria-expanded="true" aria-controls="collapseExample" class="showInfo collapsed">
                                                    <span class="text-1 text-center-box">
                                                        Details
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                    <span class="text-2 text-center-box">
                                                        Hide
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample-0" style="">
                                                <div class="card card-body">
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                                Total staked
                                                            </p>
                                                            <p>
                                                                123,456,789 HYRA
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class="box-color-x">
                                                                Total locked:
                                                            </p>
                                                            <p>
                                                                3,456,789 HYRA
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>
                                                                Performance Fee
                                                            </p>
                                                            <p>
                                                                0~2%
                                                            </p>
                                                        </div>
                                                        <div class=" text-end ">
                                                            <a class="color-x" href="">
                                                                See Token Info
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a class="color-x" href="">
                                                                View Project Site
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a class="color-x" href="">
                                                                View Tutorial
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a class="color-x" href="">
                                                                View Contact
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="box-hyra">
                                    <div class="d-flex position-relative pb-4 pt-3 img-content">
                                        <img src="http://127.0.0.1:8000/img/Ellipse 18.png" alt="">
                                        <div class="ps-4">
                                            <span class="text-content">Earn HYRA</span>
                                            <p>Stake HYRA</p>
                                        </div>
                                        <div class=" icon-box-hyra-1">
                                            <img class="position-absolute" src="http://127.0.0.1:8000/img/Ellipse10.png" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>APR:</p>
                                        <p>17.38%</p>
                                    </div>
                                    <div class="text-center text-start-staking pb-3">
                                        Start Staking
                                    </div>
                                    <div class="box-connect-wallet">
                                        <a href="#">Connect Wallet</a>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center ">
                                            <a data-bs-toggle="collapse" href="#collapseExample-1" role="button" aria-expanded="true" aria-controls="collapseExample" class="showInfo collapsed">
                                                <span class="text-1 text-center-box">
                                                    Details
                                                    <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                </span>
                                                <span class="text-2 text-center-box">
                                                    Hide
                                                    <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                </span>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample-1">
                                            <div class="card card-body">
                                                <div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                            Total staked
                                                        </p>
                                                        <p>
                                                            123,456,789 HYRA
                                                        </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="box-color-x">
                                                            Ends in:
                                                        </p>
                                                        <p class="color-x">
                                                            1,234,456 blocks
                                                        </p>
                                                    </div>
                                                    <div class=" text-end ">
                                                        <a class="color-x" href="">
                                                            See Token Info
                                                            <img src="{{ asset('img/arrow-right.png') }}">
                                                        </a>
                                                    </div>
                                                    <div class="text-end">
                                                        <a class="color-x" href="">
                                                            View Project Site
                                                            <img src="{{ asset('img/arrow-right.png') }}">
                                                        </a>
                                                    </div>
                                                    <div class="text-end">
                                                        <a class="color-x" href="">
                                                            View Contact
                                                            <img src="{{ asset('img/arrow-right.png') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="box-hyra">
                                    <div class="d-flex position-relative pb-4 pt-3 img-content">
                                        <img src="http://127.0.0.1:8000/img/Ellipse 19.png" alt="">
                                        <div class="ps-4">
                                            <span class="text-content">Earn HYRA</span>
                                            <p>Stake HYRA</p>
                                        </div>
                                        <div class=" icon-box-hyra-1">
                                            <img class="position-absolute" src="http://127.0.0.1:8000/img/Ellipse10.png" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>APR:</p>
                                        <p>17.38%</p>
                                    </div>
                                    <div class="text-center text-start-staking pb-3">
                                        Start Staking
                                    </div>
                                    <div class="box-connect-wallet">
                                        <a href="#">Connect Wallet</a>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">
                                            <a data-bs-toggle="collapse" href="#collapseExample-2" role="button" aria-expanded="true" aria-controls="collapseExample" class="showInfo collapsed">
                                                <span class="text-1 text-center-box">
                                                    Details
                                                    <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                </span>
                                                <span class="text-2 text-center-box">
                                                    Hide
                                                    <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                </span>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample-2">
                                            <div class="card card-body">
                                                <div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                            Total staked
                                                        </p>
                                                        <p>
                                                            123,456,789 HYRA
                                                        </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="box-color-x">
                                                            Ends in:
                                                        </p>
                                                        <p>
                                                            1,234,456 blocks
                                                        </p>
                                                    </div>
                                                    <div class="text-end">
                                                        <a href="">
                                                            See Token Info
                                                            <img src="{{ asset('img/arrow-right.png') }}">
                                                        </a>
                                                    </div>
                                                    <div class="text-end">
                                                        <a href="">
                                                            View Project Site
                                                            <img src="{{ asset('img/arrow-right.png') }}">
                                                        </a>
                                                    </div>
                                                    <div class="text-end">
                                                        <a href="">
                                                            View Contact
                                                            <img src="{{ asset('img/arrow-right.png') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div class="row">
                                <div class="col-4">
                                    <div class="box-hyra">
                                        <div class="d-flex position-relative pb-4 pt-3 img-content">
                                            <img src="{{asset('img/Ellipse 11.png')}}" alt="">
                                            <div class="ps-4">
                                                <span class="text-content">Stake HYRA</span>
                                                <p>Earn HYRA</p>
                                            </div>
                                            <div class=" icon-box-hyra-1">
                                                <img class="position-absolute" src="{{asset('img/Ellipse10.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>APR:</p>
                                            <p>17.38%</p>
                                        </div>
                                        <div class="text-center text-start-staking pb-3">
                                            Start Staking
                                        </div>
                                        <div class="box-connect-wallet">
                                            <a href="#">Connect Wallet</a>
                                        </div>
                                        <hr>
                                        <div>
                                            <p class="text-center">
                                                <a data-bs-toggle="collapse" href="#collapseExample-3" role="button" aria-expanded="true" aria-controls="collapseExample" class="showInfo collapsed">
                                                    <span class="text-1 text-center-box">
                                                        Details
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                    <span class="text-2 text-center-box">
                                                        Hide
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample-3">
                                                <div class="card card-body">
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                                Total staked
                                                            </p>
                                                            <p>
                                                                123,456,789 HYRA
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                                Total staked
                                                            </p>
                                                            <p>
                                                                3,456,789 HYRA
                                                            </p>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                See Token Info
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Project Site
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Tutorial
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Contact
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="box-hyra">
                                        <div class="d-flex position-relative pb-4 pt-3 img-content">
                                            <img src="http://127.0.0.1:8000/img/Ellipse 12.png" alt="">
                                            <div class="ps-4">
                                                <span class="text-content">Earn HYRA</span>
                                                <p>Stake HYRA</p>
                                            </div>
                                            <div class=" icon-box-hyra-1">
                                                <img class="position-absolute" src="http://127.0.0.1:8000/img/Ellipse10.png" alt="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>APR:</p>
                                            <p>17.38%</p>
                                        </div>
                                        <div class="text-center text-start-staking pb-3">
                                            Start Staking
                                        </div>
                                        <div class="box-connect-wallet">
                                            <a href="#">Connect Wallet</a>
                                        </div>
                                        <hr>
                                        <div>
                                            <p class="text-center">
                                                <a data-bs-toggle="collapse" href="#collapseExample-4" role="button" aria-expanded="true" aria-controls="collapseExample" class="showInfo collapsed">
                                                    <span class="text-1 text-center-box">
                                                        Details
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                    <span class="text-2 text-center-box">
                                                        Hide
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample-4">
                                                <div class="card card-body">
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                                Total staked
                                                            </p>
                                                            <p>
                                                                123,456,789 HYRA
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class="box-color-x">
                                                                Ends in:
                                                            </p>
                                                            <p>
                                                                1,234,456 blocks
                                                            </p>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                See Token Info
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Project Site
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Contact
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="box-hyra">
                                        <div class="d-flex position-relative pb-4 pt-3 img-content">
                                            <img src="http://127.0.0.1:8000/img/Ellipseeeeeee1.png" alt="">
                                            <div class="ps-4">
                                                <span class="text-content">Earn HYRA</span>
                                                <p>Stake HYRA</p>
                                            </div>
                                            <div class=" icon-box-hyra-1">
                                                <img class="position-absolute" src="http://127.0.0.1:8000/img/Ellipse10.png" alt="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>APR:</p>
                                            <p>17.38%</p>
                                        </div>
                                        <div class="text-center text-start-staking pb-3">
                                            Start Staking
                                        </div>
                                        <div class="box-connect-wallet">
                                            <a href="#">Connect Wallet</a>
                                        </div>
                                        <hr>
                                        <div>
                                            <p class="text-center">
                                                <a data-bs-toggle="collapse" href="#collapseExample-5" role="button" aria-expanded="true" aria-controls="collapseExample" class="showInfo collapsed">
                                                    <span class="text-1 text-center-box">
                                                        Details
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                    <span class="text-2" id="text-center-box">
                                                        Hide
                                                        <img src="{{asset('img/Vecto-vr.png')}}" alt="">
                                                    </span>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample-5">
                                                <div class="card card-body">
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class=" box-color-x font-size-connect-bottom color-text-blue">
                                                                Total staked
                                                            </p>
                                                            <p>
                                                                123,456,789 HYRA
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class="box-color-x">
                                                                Ends in:
                                                            </p>
                                                            <p>
                                                                1,234,456 blocks
                                                            </p>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                See Token Info
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Project Site
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="">
                                                                View Contact
                                                                <img src="{{ asset('img/arrow-right.png') }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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