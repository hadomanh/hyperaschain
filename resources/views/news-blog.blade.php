@extends('layouts.app')

@section('content')
<div id="newsPage">
    <span class="circleBlur-1"></span>
    <span class="circleBlur-2"></span>
    <div class="container-lg position-relative">
        <section class="banner text-center">
            <h1 class="mb-0">NEWS & BLOG</h1>
        </section>
        <section>
            <div class="row">
                <div class="col-md-3">
                    <div class="search mb-5 position-relative">
                        <input class="form-control" placeholder="Search" type="text">
                        <i class="fas fa-search icon"></i>
                    </div>
                    <div class="filterElement">
                        <h3 class="title mb-4"><span class="text-gradient">Category</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('news', [ 'category' => 'announcements' ]) }}">Announcements</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'blog' ]) }}">Blog</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'community' ]) }}">Community Spotlight</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'developer' ]) }}">Developer Showcase</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'education' ]) }}">Education</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'events' ]) }}">Events</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'finance' ]) }}">Finance</a></li>
                            <li><a href="{{ route('news', [ 'category' => 'governance' ]) }}">Governance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row listNews">
                        
                        @foreach ($news as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="newsItem">
                                <a href="#">
                                    <img src="{{ $item->thumbnail }}" alt="" class="w-100 rounded-2">
                                </a>                                
                                <h5 class="title my-2">
                                    <a href="#">{{ $item->title }}</a>
                                </h5>
                                <a href="#" class="cate">{{ strtoupper($item->category) }}</a>
                                <p class="desc my-2">{{ $item->subtitle }}</p>
                                {{-- <div class="author my-2"><img src="{{ asset('img/icon-user.png') }}" alt="" class="me-2">Hyperas</div> --}}
                                <div class="date">{{ date('M d, Y', strtotime($item->updated_at)) }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
