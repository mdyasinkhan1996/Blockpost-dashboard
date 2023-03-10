@extends('public.blogmaster')
@section('title')
    Blog
@endsection
@section('content')
    {{----------------------
       bannar section srtats
    ----------------------}}
    <section class="bannar mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div id="bannarCarousel" class="carousel slide pe-md-4" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach ($blogsbannars as $blogsbannar)
                                <div class="carousel-item">
                                    <img src="{{ asset($blogsbannar->image->url) }}" class="d-block w-100 bannar_sliderImg" alt="Bannaar image">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $blogsbannar->title }}</h5>
                                        <p>{{ Str::words($blogsbannar->description, 20) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannarCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-warning" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next me-4" type="button" data-bs-target="#bannarCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-warning" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6">
                    <div class="ps-md-2 ps-lg-5">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active fw-bold linkItemText" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav_Popular" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Popular</button>
                              <button class="nav-link fw-bold linkItemText" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav_Recent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Recent</button>
                            </div>
                        </nav>
                        <div class="tab-content pt-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav_Popular" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                @foreach ($blogsPopulars as $blogsPopular)
                                    <div class="bn_popular d-flex ">
                                        <img class="bn_popularImg rounded-circle" src="{{ asset($blogsPopular->image->url) }}" alt="">
                                        <div class="bn_popularContent ms-3">
                                            <p class="mb-0">{{ $blogsPopular->title }}</p>
                                            <span>{{  \Carbon\Carbon::parse($blogsPopular->created_at)->diffForHumans() }}.</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="nav_Recent" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                @foreach ($blogsRecents as $blogsRecent)
                                    <div class="bn_popular d-flex ">
                                        <img class="bn_popularImg rounded-circle" src="{{ asset($blogsRecent->image->url) }}" alt="">
                                        <div class="bn_popularContent ms-3">
                                            <p class="mb-0">{{ $blogsRecent->title }}</p>
                                            <span>{{  \Carbon\Carbon::parse($blogsRecent->created_at)->diffForHumans() }}.</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{----------------------
       bannar section end
    ----------------------}}
    {{-------------------------------
       tranding post section srtats
    --------------------------------}}
    <section class="tranding_post mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="HTMediam border_bottom d-inline-block">Tranding</h2>
                </div>
                @foreach ($blogsTrends as $blogsTrend)
                    <div class="col-md-3 mt-4 mt-md-0">
                        <div class="tranding_post d-flex justify-content-center">
                            <img class="trandingImg" src="{{ asset($blogsTrend->image->url) }}" alt="">
                            <div class="trandingContent ms-3">
                                <p class="mb-0">{{ $blogsTrend->title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-----------------------------
       tranding post section end
    -------------------------------}}
    {{----------------------
       featcher section srtats
    ----------------------}}
    <section class="featcher_post my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="HTlarge border_bottom d-inline-block">Featcher post</h2>
                </div>
                @foreach ($blogsfeatures as $blogsfeature)
                    <div class="col-md-4 padding_1">
                        <a href="Thirdslidelabel">
                            <div class="featcher_backImg" style="background-image: url({{ asset($blogsfeature->image->url) }})">
                                <div class="text-center featcher_content">
                                    <h5>{{ $blogsfeature->title }}</h5>
                                    <p class="mb-0">{{ Str::words($blogsfeature->description, 8) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{----------------------
       featcher section end
    ----------------------}}
    {{----------------------
       letest section srtats
    ----------------------}}
    <section class="letest_post my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="HTlarge border_bottom d-inline-block">Letest post</h2>
                </div>
            </div>
            @foreach ($blogsLetests as $blogsLetest)
                @if($loop->iteration % 2 == 0)
                    <div class="row mt-5 mt-sm-5">
                        <div class="col-md-5">
                            <div class="letest_post">
                                <img class="letest_postImg" src="{{ asset($blogsLetest->image->url) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="letest_post">
                                <div class="letest_postContent">
                                    <h4>{{ $blogsLetest->title }}</h4>
                                    <p>Published at <span class="text-secondary">{{ \Carbon\Carbon::parse($blogsPopular->created_at)->diffForHumans() }}</span></p>
                                    <p class="mb-3 letest_postContentP">{{ Str::words($blogsLetest->description, 80) }}</p>
                                    <a href="{{ route('blog.show', $blogsLetest->slug ) }}" class="linkText px-4 letest_link btn-warning fw-bold">Read more <i class="letest_linkIcon fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row mt-5 mt-sm-5">
                        <div class="col-md-5 order-md-2">
                            <div class="letest_post">
                                <img class="letest_postImg" src="{{ asset($blogsLetest->image->url) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 order-md-1">
                            <div class="letest_post">
                                <div class="letest_postContent">
                                    <h4>{{ $blogsLetest->title }}</h4>
                                    <p>Published at <span class="text-secondary">{{ \Carbon\Carbon::parse($blogsPopular->created_at)->diffForHumans() }}</span></p>
                                    <p class="mb-3 letest_postContentP">{{ Str::words($blogsLetest->description, 80) }}</p>
                                    <a href="{{ route('blog.show', $blogsLetest->slug ) }}" class="linkText letest_link px-4 btn-warning fw-bold">Read more <i class="letest_linkIcon fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    {{----------------------
       letest section end
    ----------------------}}
    {{------------------------
       service section srtats
    --------------------------}}
    <section class="service py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="HTlarge border_bottom d-inline-block">Our servoce</h2>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 service_content">
                        <i class="service_contentIcon fa-brands fa-audible fa-3x"></i>
                        <h2 class="fw-bold">What We Do</h2>
                        <p class="mb-3 service_contentP textMediam">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quas enim natus voluptatem?</p>
                        <a href="#" class="linkText letest_link px-4 btn-warning fw-bold">Find out more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 service_content">
                        <i class="service_contentIcon fa-brands fa-delicious fa-3x"></i>
                        <h2 class="fw-bold">Our Services</h2>
                        <p class="mb-3 service_contentP textMediam">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quas enim natus voluptatem?</p>
                        <a href="#" class="linkText letest_link px-4 btn-warning fw-bold">Find out more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 service_content">
                        <i class="service_contentIcon fa-solid fa-chalkboard fa-3x"></i>
                        <h2 class="fw-bold">Portfolio</h2>
                        <p class="mb-3 service_contentP textMediam">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quas enim natus voluptatem?</p>
                        <a href="#" class="linkText letest_link px-4 btn-warning fw-bold">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{----------------------
       servicet section end
    ----------------------}}
    {{----------------------
       footer section srtats
    ----------------------}}
    <section class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="HTlarge border_bottom d-inline-block">Quick link</h2>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Contact</a>
                        <a class="nav-link" href="#">Service</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">help</a>
                      </nav>
                </div>
                <div class="col-md-3">
                    <h2 class="HTlarge border_bottom d-inline-block">Terms and policy</h2>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Terms And condidtion</a>
                        <a class="nav-link" href="#">Privacy policy</a>
                        <a class="nav-link" href="#">Faq</a>
                      </nav>
                </div>
                <div class="col-md-3">
                    <h2 class="HTlarge border_bottom d-inline-block">Quick link</h2>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Contact</a>
                        <a class="nav-link" href="#">Service</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Qusetion</a>
                        <a class="nav-link" href="#">help</a>
                      </nav>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <h2 class="HTlarge border_bottom d-inline-block">Search about</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, enim!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dicta, natus iure accusantium similique minima.</p>
                    </div>
                    <div class="">
                        <h2 class="HTlarge">Folw us</h2>
                        <div class=" d-flex mb-lg-0">
                            <a class="nav-link d-inline fw-bold text-primary" id="blog_navSearch"><i class="fa-solid fa-magnifying-glass rounded-circle bg-warning p-2"></i></a>
                            <a class="nav-link d-inline fw-bold text-primary" href="#"><i class="fa-brands fa-twitter rounded-circle bg-warning p-2"></i></a>
                            <a class="nav-link d-inline fw-bold text-primary" href="#"><i class="fa-brands fa-facebook rounded-circle bg-warning p-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{----------------------
       footer section end
    ----------------------}}
@endsection
@section('script')
    <script>
        $('.carousel-inner').children().first().addClass('active')
    </script>
@endsection


