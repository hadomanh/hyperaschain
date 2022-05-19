@extends('layouts.app')

@section('content')
    <div id="stakingPage">
        <span class="circleBlur-1"></span>
        <div class="container position-relative">
            <section class="banner text-center">
                <h1 class="mb-0 text-uppercase">Getting Started HYRA Staking</h1>
            </section>
            <section class="poolTable">
                <div class="filter">
                    <div class="row align-items-end">
                        <div class="col-auto d-flex align-items-center">
                            <div class="displayType me-5 d-flex align-items-center">
                                <i class="fas fa-grip-horizontal typeGrid me-3"></i>
                                <i class="fas fa-list typeList active"></i>
                            </div>
                            <div class="form-check form-switch d-flex align-items-center me-5 mb-0 p-0">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Staked only</label>
                            </div>
                            <div class="status">
                                <input type="radio" class="btn-check" name="filterstatus" id="option1" autocomplete="off" checked>
                                <label for="option1">Live</label>
                                <input type="radio" class="btn-check" name="filterstatus"" id="option2" autocomplete="off">
                                <label for="option2">Finished</label>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="position-relative sort">
                                <label class="form-label fw-normal">Sort by</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Hot</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <i class="fas fa-chevron-down icon"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="searchForm position-relative">
                                <label class="form-label fw-normal">Search</label>
                                <input type="text" class="form-control" placeholder="Search Pools">
                                <i class="fas fa-search icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemDisplay displayList">
                    <div class="item">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex">
                                <div class="iconWrap">
                                    <img src="{{ asset('img/icon-hyra.svg') }}" alt="">
                                    <img src="{{ asset('img/icon-hyra.svg') }}" class="smallImg">
                                </div>
                                <div>
                                    <h4 class="mb-0">Stake HYRA</h4>
                                    <div>Stake, Earn - And more!</div>
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="cell-1">
                                    <div class="label">Hyperas Staked</div>
                                    <div class="fw-bold">0.0</div>
                                    <div class="fw-bold">0 USD</div>
                                </div>
                                <div class="cell-2">
                                    <div class="label">Flexible APY</div>
                                    <div>15.67%</div>
                                </div>
                                <div class="cell-3">
                                    <div class="label">Locked APY</div>
                                    <div>Up to 17.48%</div>
                                </div>
                                <div class="cell-4">
                                    <div class="label">Total staked</div>
                                    <div>123,456,789 HYRA</div>
                                </div>
                                <div class="cell-5 align-self-center moreInfo">
                                    <a data-bs-toggle="collapse" href="#collapseInfo-1" role="button" aria-expanded="false" class="collapsed">
                                        <img src="{{ asset('img/close-selec.png') }}" alt="">
                                    </a>
                                </div>
                            </div>                        
                        </div>
                        <div class="collapse" id="collapseInfo-1">
                            <div class="card card-body">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <div class="mb-2 d-flex">
                                            <span class="text">Performance Fee</span>
                                            <span class="value">0~2%</span>
                                        </div>
                                        <div class="mb-2">
                                            <a href="#">See Token Info <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="mb-2">
                                            <a href="#">View Tutorial <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div>
                                            <a href="#">View Contact <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row justify-content-between align-items-center mt-3">
                                            <div class="col-md-5">
                                                <h5>RECENT HYRA PROFIT</h5>
                                                <input type="text" class="form-control" readonly value="0">
                                            </div>
                                            <div class="col-md-5">
                                                <h5 class="text-center">Start Staking</h5>
                                                <button class="btn btnPink border-0 w-100">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex">
                                <div class="iconWrap">
                                    <img src="{{ asset('img/icon-hyra.svg') }}" alt="">
                                    <img src="{{ asset('img/icon-hyra.svg') }}" class="smallImg">
                                </div>
                                <div>
                                    <h4 class="mb-0">Earn HYRA</h4>
                                    <div>Stake, Earn - And more!</div>
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="cell-1">
                                    <div class="label">ANKR Staked</div>
                                    <div class="fw-bold">0.0</div>
                                    <div class="fw-bold">0 USD</div>
                                </div>
                                <div class="cell-2">
                                    <div class="label">Total staked</div>
                                    <div>123,456 HYRA</div>
                                </div>
                                <div class="cell-3">
                                    <div class="label">APR</div>
                                    <div>56.78%</div>
                                </div>
                                <div class="cell-4">
                                    <div class="label">Ends in</div>
                                    <div>123,456,789 blocks</div>
                                </div>
                                <div class="cell-5 align-self-center moreInfo">
                                    <a data-bs-toggle="collapse" href="#collapseInfo-2" role="button" aria-expanded="false" class="collapsed">
                                        <img src="{{ asset('img/close-selec.png') }}" alt="">
                                    </a>
                                </div>
                            </div>                        
                        </div>
                        <div class="collapse" id="collapseInfo-2">
                            <div class="card card-body">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <div class="mb-2 d-flex">
                                            <span class="text">Ends in:</span>
                                            <span class="label mb-0">1,234,567 blocks</span>
                                        </div>
                                        <div class="mb-2">
                                            <a href="#">See Token Info <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="mb-2">
                                            <a href="#">View Tutorial <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div>
                                            <a href="#">View Contact <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row justify-content-between align-items-center mt-3">
                                            <div class="col-md-5">
                                                <h5>HYRA EARNED</h5>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="0" readonly>
                                                    <button class="btn" type="button">Harvest</button>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <h5 class="text-center">Start Staking</h5>
                                                <button class="btn btnPink border-0 w-100">Connect Wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemDisplay displayGrid d-none">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <div class="d-flex mb-4">
                                    <div class="iconWrap">
                                        <img src="{{ asset('img/icon-hyra.svg') }}" alt="">
                                        <img src="{{ asset('img/icon-hyra.svg') }}" class="smallImg">
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Earn HYRA</h4>
                                        <div>Stake, Earn - And more!</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div>FLEXIBLE APY:</div>
                                    <div class="fw-bold">17.38%</div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>LOCKED APY:</div>
                                    <div class="fw-bold">Up to 17.38%</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="text-center">Start Staking</h5>
                                    <button class="btn btnPink border-0 w-100">Connect Wallet</button>
                                </div>
                                <div class="moreInfo">
                                    <a data-bs-toggle="collapse" href="#collapseGridInfo-1" role="button" aria-expanded="false" class="collapsed">
                                        <span class="text-1 align-middle">Detail</span>
                                        <span class="text-2 align-middle">Hide</span>
                                        <img src="{{ asset('img/close-selec.png') }}" width="15" class="ms-1 align-middle">
                                    </a>
                                </div>
                                <div class="collapse" id="collapseGridInfo-1">
                                    <div class="card card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="label">Total staked</div>
                                            <div>123,456,789 HYRA</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="label">Total locked</div>
                                            <div>3,456,789 HYRA</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>Performance Fee</div>
                                            <div>0~2%</div>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <a href="#">See Token Info <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <a href="#">View Tutorial <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="text-end">
                                            <a href="#">View Contact <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="d-flex mb-4">
                                    <div class="iconWrap">
                                        <img src="{{ asset('img/icon-hyra.svg') }}" alt="">
                                        <img src="{{ asset('img/icon-hyra.svg') }}" class="smallImg">
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Earn HYRA</h4>
                                        <div>Stake Hyra</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div>APR:</div>
                                    <div class="fw-bold">Up to 17.38%</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="text-center">Start Staking</h5>
                                    <button class="btn btnPink border-0 w-100">Connect Wallet</button>
                                </div>
                                <div class="moreInfo">
                                    <a data-bs-toggle="collapse" href="#collapseGridInfo-2" role="button" aria-expanded="false" class="collapsed">
                                        <span class="text-1 align-middle">Detail</span>
                                        <span class="text-2 align-middle">Hide</span>
                                        <img src="{{ asset('img/close-selec.png') }}" width="15" class="ms-1 align-middle">
                                    </a>
                                </div>
                                <div class="collapse" id="collapseGridInfo-2">
                                    <div class="card card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="label">Total staked</div>
                                            <div>123,456,789 HYRA</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="label">Ends in:</div>
                                            <div class="label">1,234,456 blocks</div>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <a href="#">See Token Info <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <a href="#">View Tutorial <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="text-end">
                                            <a href="#">View Contact <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="d-flex mb-4">
                                    <div class="iconWrap">
                                        <img src="{{ asset('img/icon-hyra.svg') }}" alt="">
                                        <img src="{{ asset('img/icon-hyra.svg') }}" class="smallImg">
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Earn HYRA</h4>
                                        <div>Stake Hyra</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div>APR:</div>
                                    <div class="fw-bold">Up to 17.38%</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="text-center">Start Staking</h5>
                                    <button class="btn btnPink border-0 w-100">Connect Wallet</button>
                                </div>
                                <div class="moreInfo">
                                    <a data-bs-toggle="collapse" href="#collapseGridInfo-3" role="button" aria-expanded="false" class="collapsed">
                                        <span class="text-1 align-middle">Detail</span>
                                        <span class="text-2 align-middle">Hide</span>
                                        <img src="{{ asset('img/close-selec.png') }}" width="15" class="ms-1 align-middle">
                                    </a>
                                </div>
                                <div class="collapse" id="collapseGridInfo-3">
                                    <div class="card card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="label">Total staked</div>
                                            <div>123,456,789 HYRA</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="label">Ends in:</div>
                                            <div class="label">1,234,456 blocks</div>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <a href="#">See Token Info <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <a href="#">View Tutorial <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                        <div class="text-end">
                                            <a href="#">View Contact <img src="{{ asset('img/icon-link-external.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="goTop">GO TOP <img src="{{ asset('img/arrow-up.svg') }}" alt=""></a>
                </div>
            </section>
        </div>
    </div>
@endsection
