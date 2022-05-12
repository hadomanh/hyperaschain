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
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">b </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">s</div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
<<<<<<< HEAD
=======

>>>>>>> origin
@endsection