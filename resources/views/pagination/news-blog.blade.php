@extends('layouts.app')

@section('content')
<div id="news-blog">
    <section class="banner-news-blog">
        <div class="container-lg">
            <h1 class="title-banner">NEWS & BLOG</h1>
        </div>
    </section> 
    <section class="page-news-blog">
        <span class="blur-news"></span>
        <div class="container-lg">
           
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3 col-md-3 col-sm-auto" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="">
                        <input type="text" placeholder="Search..">
                    </div>
                    <h3 >Category</h3>
                    <button class="nav-link active" id="announcements-tab" data-bs-toggle="pill" data-bs-target="#announcements" type="button" role="tab" aria-controls="announcements" aria-selected="true"><span>Announcements</span></button>
                    <button class="nav-link" id="blog-tab" data-bs-toggle="pill" data-bs-target="#blog" type="button" role="tab" aria-controls="blog" aria-selected="false"><span>Blog</span></button>
                    <button class="nav-link" id="community-spotlight-tab" data-bs-toggle="pill" data-bs-target="#community-spotlight1" type="button" role="tab" aria-controls="community-spotlight" aria-selected="false"><span>Community Spotlight</span></button>
                    <button class="nav-link" id="developer-tab" data-bs-toggle="pill" data-bs-target="#developer" type="button" role="tab" aria-controls="developer" aria-selected="false"><span>Developer Showcase</span></button>
                    <button class="nav-link" id="education-tab" data-bs-toggle="pill" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false"><span>Education</span></button>
                    <button class="nav-link" id="events-tab" data-bs-toggle="pill" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false"><span>Events</span></button>
                    <button class="nav-link" id="finance-tab" data-bs-toggle="pill" data-bs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="false"><span>Finance</span></button>
                    <button class="nav-link" id="governance-tab" data-bs-toggle="pill" data-bs-target="#governance" type="button" role="tab" aria-controls="governance" aria-selected="false"><span>Governance</span></button>
                    <button class="nav-link" id="lorem1-tab" data-bs-toggle="pill" data-bs-target="#lorem1" type="button" role="tab" aria-controls="lorem1" aria-selected="false"><span>lorem ipsum</span></button>
                    <button class="nav-link" id="lorem2-tab" data-bs-toggle="pill" data-bs-target="#lorem2" type="button" role="tab" aria-controls="lorem2" aria-selected="false"><span>lorem ipsum</span></button>
                    <button class="nav-link" id="lorem3-tab" data-bs-toggle="pill" data-bs-target="#lorem3" type="button" role="tab" aria-controls="lorem3" aria-selected="false"><span>lorem ipsum</span></button>
                    <button class="nav-link" id="lorem4-tab" data-bs-toggle="pill" data-bs-target="#lorem4" type="button" role="tab" aria-controls="lorem4" aria-selected="false"><span>lorem ipsum</span></button>
                    <button class="nav-link" id="lorem5-tab" data-bs-toggle="pill" data-bs-target="#lorem5" type="button" role="tab" aria-controls="lorem5" aria-selected="false"><span>lorem ipsum</span></button>
                </div>
                <!-- <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container-lg">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div class="">
                                <input type="text" placeholder="Search..">
                            </div>
                            <h3 ><span class="border-news-blog">Category</span></h3>
                            <button class="nav-link active" id="announcements-tab" data-bs-toggle="pill" data-bs-target="#announcements" type="button" role="tab" aria-controls="announcements" aria-selected="true">Announcements</button>
                            <button class="nav-link" id="blog-tab" data-bs-toggle="pill" data-bs-target="#blog" type="button" role="tab" aria-controls="blog" aria-selected="false">Blog</button>
                            <button class="nav-link" id="community-spotlight-tab" data-bs-toggle="pill" data-bs-target="#community-spotlight1" type="button" role="tab" aria-controls="community-spotlight" aria-selected="false">Community Spotlight</button>
                            <button class="nav-link" id="developer-tab" data-bs-toggle="pill" data-bs-target="#developer" type="button" role="tab" aria-controls="developer" aria-selected="false">Developer Showcase</button>
                            <button class="nav-link" id="education-tab" data-bs-toggle="pill" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">Education</button>
                            <button class="nav-link" id="events-tab" data-bs-toggle="pill" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false">Events</button>
                            <button class="nav-link" id="finance-tab" data-bs-toggle="pill" data-bs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="false">Finance</button>
                            <button class="nav-link" id="governance-tab" data-bs-toggle="pill" data-bs-target="#governance" type="button" role="tab" aria-controls="governance" aria-selected="false">Governance</button>
                            <button class="nav-link" id="lorem1-tab" data-bs-toggle="pill" data-bs-target="#lorem1" type="button" role="tab" aria-controls="lorem1" aria-selected="false">lorem ipsum</button>
                            <button class="nav-link" id="lorem2-tab" data-bs-toggle="pill" data-bs-target="#lorem2" type="button" role="tab" aria-controls="lorem2" aria-selected="false">lorem ipsum</button>
                            <button class="nav-link" id="lorem3-tab" data-bs-toggle="pill" data-bs-target="#lorem3" type="button" role="tab" aria-controls="lorem3" aria-selected="false">lorem ipsum</button>
                            <button class="nav-link" id="lorem4-tab" data-bs-toggle="pill" data-bs-target="#lorem4" type="button" role="tab" aria-controls="lorem4" aria-selected="false">lorem ipsum</button>
                            <button class="nav-link" id="lorem5-tab" data-bs-toggle="pill" data-bs-target="#lorem5" type="button" role="tab" aria-controls="lorem5" aria-selected="false">lorem ipsum</button>
                        </ul>
                    </div>
                    </div>
                </nav> -->
                <div class="tab-content col-md-9 col-sm-auto" id="v-pills-tabContent">
                    <div class="tab-pane fade show active mb-4" id="announcements" role="tabpanel" aria-labelledby="announcements-tab"> 
                        <div class="row">
                            <div class="col-md col-sm-10 collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md col-sm-10 collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md col-sm-10 collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md col-sm-10 collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md col-sm-10 collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md col-sm-10 collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="community-spotlight1" role="tabpanel" aria-labelledby="community-spotlight-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="developer" role="tabpanel" aria-labelledby="developer-tab">
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="governance" role="tabpanel" aria-labelledby="governance-tab">
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lorem1" role="tabpanel" aria-labelledby="lorem1-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lorem2" role="tabpanel" aria-labelledby="lorem2-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lorem3" role="tabpanel" aria-labelledby="lorem3-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lorem4" role="tabpanel" aria-labelledby="lorem4-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lorem5" role="tabpanel" aria-labelledby="lorem5-tab"> 
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/blog.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/announcements.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/community.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/developer.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2">
                                 <img src="{{ asset('img/finance.png') }}" alt="">
                                 <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md collum-blog m-2"> 
                                <img src="{{ asset('img/events.png') }}" alt="">
                                <div class="text-blog">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="blur-blog"></span>
    </section>
</div>
@endsection
