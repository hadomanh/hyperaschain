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
                            <label class="form-check-label" for="flexSwitchCheckChecked">Staked only</label>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection