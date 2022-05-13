@extends('layouts.app')

@section('content')
<div id="hyperas-faq">
    <section class="banner text-center">
        <div class="container-lg">
            <h1 class="mb-0">HYPERAS FAQ</h1>
            <div class="search  d-flex justify-content-center mt-5">
                <input type="text" class="form-control" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </section>
    <section class="page-hyperas-faq">
        <div class="container-lg">
            <h4 class="text-gradient">Category</h4>
            <div class="d-flex">
                <div class="nav flex-column nav-pills me-3 col-md-3 category" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="most-popular-tab" data-bs-toggle="pill" data-bs-target="#most-popular" type="button" role="tab" aria-controls="most-popular" aria-selected="true">Most Popular</button>
                    <button class="nav-link" id="technology-tab" data-bs-toggle="pill" data-bs-target="#technology" type="button" role="tab" aria-controls="technology" aria-selected="false">Technology</button>
                    <button class="nav-link" id="community-tab" data-bs-toggle="pill" data-bs-target="#community1" type="button" role="tab" aria-controls="community" aria-selected="false">Community</button>
                    <button class="nav-link" id="team-tab" data-bs-toggle="pill" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false">Team</button>
                    <button class="nav-link" id="others-tab" data-bs-toggle="pill" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Others</button>
                </div>
                <div class="tab-content col-md-9 " id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="most-popular" role="tabpanel" aria-labelledby="most-popular-tab">
                        <div class="row">
                            <h3 class="title-hyperas">Technology</h3>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        What is Hyperas?
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Why do we need Hyperas?
                                    </div>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        How many chains can Hyperas connect?
                                    </div>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                        Can Hyperas connect any blockchain?
                                    </div>
                                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                        At what stage is development now?
                                    </div>
                                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                        When did Hyperas launch?
                                    </div>
                                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="see-more"> SEE MORE</span>
                    <div class="row">
                        <h3 class="title-hyperas">Community</h3>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                    How can i join the community?
                                </div>
                                <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                    Why do we need Hyperas?
                                </div>
                                <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="see-more"> SEE MORE</span>
                    <div class="row">
                        <h3 class="title-hyperas">Team</h3>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                    Who is building Hyperas?
                                </div>
                                <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                                    Who can I contact regarding a press inquiry?
                                </div>
                                <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="see-more"> SEE MORE</span>
                </div>
                <div class="tab-pane fade" id="technology" role="tabpanel" aria-labelledby="technology-tab"></div>
                <div class="tab-pane fade" id="community1" role="tabpanel" aria-labelledby="community-tab"></div>
                <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab"></div>
                <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab"></div>
            </div>
        </div>
        <!-- </div> -->
        <!-- <span class="blur-2"></span> -->
    </section>
</div>
@endsection