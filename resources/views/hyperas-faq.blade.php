@extends('layouts.app')

@section('content')
<div id="hyperas-faq">
    <section class="banner-hyperas-faq">
    <span class="blur-1"></span>
        <div class="container-lg">
            <h1 class="title-banner">HYPERAS FAQ</h1>
            <div class="search  d-flex justify-content-center">
                <input type="text" class="form-control" placeholder="Search">
                <i class="fa fa-search"></i>                    
            </div>
        </div>
    </section> 
    <section class="categori">
        <div class="container-lg">
            <h3>Category</h3>
            <div class="d-flex align-items-start page-hyperas-faq">
                <div class="nav flex-column nav-pills me-3 col-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="most-popular-tab" data-bs-toggle="pill" data-bs-target="#most-popular" type="button" role="tab" aria-controls="most-popular" aria-selected="true">Most Popular</button>
                  <button class="nav-link" id="technology-tab" data-bs-toggle="pill" data-bs-target="#technology" type="button" role="tab" aria-controls="technology" aria-selected="false">Technology</button>
                  <button class="nav-link" id="community-tab" data-bs-toggle="pill" data-bs-target="#community1" type="button" role="tab" aria-controls="community" aria-selected="false">Community</button>
                  <button class="nav-link" id="team-tab" data-bs-toggle="pill" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false">Team</button>
                  <button class="nav-link" id="others-tab" data-bs-toggle="pill" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Others</button>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active mb-4" id="most-popular" role="tabpanel" aria-labelledby="most-popular-tab">
                        <div class="row">
                            <h4>Most Popular</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                            Why do we need Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                            How many chains can Hyperas connect?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample3">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                            Can Hyperas connect any blockchain?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample4">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                            At what stage is development now?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample5">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample6">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5"> SEE MORE</div>
                        <div class="row">
                            <h4>Technology</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample7">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
                            Why do we need Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample8">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample9" aria-expanded="false" aria-controls="collapseExample">
                            How many chains can Hyperas connect?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample9">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample10" aria-expanded="false" aria-controls="collapseExample">
                            Can Hyperas connect any blockchain?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample10">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample11" aria-expanded="false" aria-controls="collapseExample">
                            At what stage is development now?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample11">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample12" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample12">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5"> SEE MORE</div>
                        <div class="row">
                            <h4>Community</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample13" aria-expanded="false" aria-controls="collapseExample">
                            How can i join the community?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample13">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample14" aria-expanded="false" aria-controls="collapseExample">
                            How can i help support Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample14">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5"> SEE MORE</div>
                        <div class="row">
                            <h4>Team</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample19" aria-expanded="false" aria-controls="collapseExample">
                            Who is building Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample19">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample20" aria-expanded="false" aria-controls="collapseExample">
                            Who can I contact regarding a press inquiry?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample20">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5/"> SEE MORE</div>
                    </div>
                    <div class="tab-pane fade" id="technology" role="tabpanel" aria-labelledby="technology-tab">
                        <div class="row">
                            <h4>Technology</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample7">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
                            Why do we need Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample8">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample9" aria-expanded="false" aria-controls="collapseExample">
                            How many chains can Hyperas connect?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample9">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample10" aria-expanded="false" aria-controls="collapseExample">
                            Can Hyperas connect any blockchain?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample10">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample11" aria-expanded="false" aria-controls="collapseExample">
                            At what stage is development now?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample11">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample12" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample12">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="text-center"> SEE MORE</div>
                    </div>
                    <div class="tab-pane fade" id="community1" role="tabpanel" aria-labelledby="community-tab">
                        <div class="row">
                            <h4>Community</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample13" aria-expanded="false" aria-controls="collapseExample">
                            How can i join the community?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample13">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample14" aria-expanded="false" aria-controls="collapseExample">
                            How can i help support Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample14">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <!-- <p data-bs-toggle="collapse" href="#collapseExample15" aria-expanded="false" aria-controls="collapseExample">
                            How many chains can Hyperas connect?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample15">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample16" aria-expanded="false" aria-controls="collapseExample">
                            Can Hyperas connect any blockchain?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample16">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample17" aria-expanded="false" aria-controls="collapseExample">
                            At what stage is development now?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample17">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample18" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample18">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div> -->
                        </div>
                        <div class="text-center"> SEE MORE</div>
                    </div>
                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                        <div class="row">
                            <h4>Team</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample19" aria-expanded="false" aria-controls="collapseExample">
                            Who is building Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample19">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample20" aria-expanded="false" aria-controls="collapseExample">
                            Who can I contact regarding a press inquiry?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample20">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <!-- <p data-bs-toggle="collapse" href="#collapseExample21" aria-expanded="false" aria-controls="collapseExample">
                            How many chains can Hyperas connect?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample21">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample22" aria-expanded="false" aria-controls="collapseExample">
                            Can Hyperas connect any blockchain?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample22">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample23" aria-expanded="false" aria-controls="collapseExample">
                            At what stage is development now?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample23">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample24" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample24">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div> -->
                        </div>
                        <div class="text-center"> SEE MORE</div>
                    </div>
                    <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
                        <div class="row">
                            <h4>Others</h4>
                            <p data-bs-toggle="collapse" href="#collapseExample25" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample25">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample26" aria-expanded="false" aria-controls="collapseExample">
                            Why do we need Hyperas?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample26">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample27" aria-expanded="false" aria-controls="collapseExample">
                            How many chains can Hyperas connect?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample27">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample28" aria-expanded="false" aria-controls="collapseExample">
                            Can Hyperas connect any blockchain?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample28">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample29" aria-expanded="false" aria-controls="collapseExample">
                            At what stage is development now?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample29">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <p data-bs-toggle="collapse" href="#collapseExample30" aria-expanded="false" aria-controls="collapseExample">
                            When did Hyperas launch?
                                <i class="bi bi-chevron-right"></i>
                            </p>
                            <div class="collapse" id="collapseExample30">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="text-center"> SEE MORE</div>
                    </div>
                </div>
            </div>
        </div>
        <span class="blur-2"></span>
    </section>
</div>
@endsection
