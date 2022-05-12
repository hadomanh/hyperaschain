@extends('layouts.app')

@section('content')
<div id="news-blog">
    <div class="container-lg">
        <section class="banner text-center">
            <h1 class="mb-0">NEWS & BLOG</h1>
        </section>
        <section class="page-news-blog">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3 col-md-3 category" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="col-md">
                        <div class="input-group">
                            <input class="form-control border-end-0 border" placeholder="Search" type="search" id="example-search-input">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <h3 class="sectionHeading ">Category</h3>
                    <button class="nav-link active" id="announcements-tab" data-bs-toggle="pill" data-bs-target="#announcements" type="button" role="tab" aria-controls="announcements" aria-selected="true"><span>Announcements</span></button>
                    <button class="nav-link" id="blog-tab" data-bs-toggle="pill" data-bs-target="#blog" type="button" role="tab" aria-controls="blog" aria-selected="false"><span>Blog</span></button>
                    <button class="nav-link" id="community-spotlight-tab" data-bs-toggle="pill" data-bs-target="#community-spotlight1" type="button" role="tab" aria-controls="community-spotlight" aria-selected="false"><span>Community Spotlight</span></button>
                    <button class="nav-link" id="developer-tab" data-bs-toggle="pill" data-bs-target="#developer" type="button" role="tab" aria-controls="developer" aria-selected="false"><span>Developer Showcase</span></button>
                    <button class="nav-link" id="education-tab" data-bs-toggle="pill" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false"><span>Education</span></button>
                    <button class="nav-link" id="events-tab" data-bs-toggle="pill" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false"><span>Events</span></button>
                    <button class="nav-link" id="finance-tab" data-bs-toggle="pill" data-bs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="false"><span>Finance</span></button>
                    <button class="nav-link" id="governance-tab" data-bs-toggle="pill" data-bs-target="#governance" type="button" role="tab" aria-controls="governance" aria-selected="false"><span>Governance</span></button>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active mb-4" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="community-spotlight1" role="tabpanel" aria-labelledby="community-spotlight-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="developer" role="tabpanel" aria-labelledby="developer-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="governance" role="tabpanel" aria-labelledby="governance-tab">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/blog.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Blogs</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/announcements.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Announcements</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/community.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Community Spotlight</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/developer.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Developer Showcase</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/finance.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Finance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-10">
                                <div class=" collum-blog">
                                    <img src="{{ asset('img/events.png') }}" alt="" class="w-100">
                                    <h5 class="pt-2">Lorem ipsum dolor sit amet</h5>
                                    <span class="title-pink">Events</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span><img src="{{ asset('img/icon-user.png') }}" alt="" class="icon-user">Hyperas</span>
                                    <p>April 13,2022</p>
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