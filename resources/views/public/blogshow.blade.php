@extends('publicblog.blogmaster')
@section('title')
    Post view
@endsection
@section('content')
    {{----------------------
       bannar section srtats
    ----------------------}}
    <section class="bannar mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="">
                        <h2 class="pb-3 pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <img src="{{ asset('blogImage/banner1.jpg') }}" class="d-block w-100 bannar_sliderImg mb-4" alt="Bannaar image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec tincidunt odio. Mauris sodales lacus a tortor egestas tincidunt. Nullam tempus lorem nec erat sagittis, non dictum velit euismod. Etiam quis magna sed ligula interdum ornare. Duis vitae lorem nec sapien feugiat condimentum in vestibulum mi. Cras congue sodales lacus, vitae commodo eros blandit maximus. Etiam varius felis id eros dictum, id pharetra mauris convallis. Pellentesque sollicitudin dui at tincidunt feugiat. Sed convallis ipsum felis, mollis congue dui varius non. Ut lacus quam, dictum vitae neque sodales, blandit ornare urna. Sed a rhoncus nisl. Praesent ac ligula a justo luctus luctus et ut mauris.
                        </p>
                        <p>
                            Nam imperdiet ac turpis nec laoreet. Quisque in commodo est, at iaculis lorem. Suspendisse quis dapibus tellus, rutrum consectetur orci. Nunc lobortis scelerisque tristique. Nulla tellus enim, tempus non dapibus at, convallis eget lorem. Aliquam mattis nibh at nisl bibendum imperdiet sit amet quis neque. In tincidunt leo eget sem ullamcorper, quis lacinia dolor sodales. Maecenas a ligula dolor.
                        </p>
                        <p>
                            Donec vestibulum imperdiet ex. Cras mollis lorem est, non venenatis nulla placerat a. Vestibulum commodo fringilla elit, et pellentesque est vehicula a. Nunc efficitur in nulla bibendum gravida. Praesent egestas sapien eu sagittis congue. Integer urna metus, venenatis nec quam semper, porta cursus dui. Phasellus dignissim ante nec elit dapibus, vel imperdiet felis convallis. Phasellus blandit, ipsum vel facilisis cursus, lacus ex eleifend sapien, vel vulputate ligula nunc tincidunt ante. Sed fringilla magna vel metus mollis imperdiet. Quisque scelerisque efficitur tellus.
                        </p>
                        <p>
                            Nam vitae suscipit massa. Curabitur tincidunt nulla quis nisi sagittis tempus. Cras blandit lacus eu vestibulum molestie. Etiam vitae ex suscipit, ultricies justo in, porta dolor. Praesent imperdiet libero et augue tincidunt mollis. Curabitur mollis faucibus risus, vitae gravida lorem dictum ut. Fusce vestibulum justo nulla, ut faucibus nisl lacinia sed. In posuere metus vitae lacinia accumsan. Vivamus dapibus quam sit amet luctus sodales. Ut laoreet leo iaculis rhoncus gravida.
                        </p>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6">
                    <div id="popularPost" class="carousel slide carousel-fade banarPopularPost" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active position-relative">
                            <a href="">
                                <img src="{{ asset('blogImage/banner1.jpg') }}" class="d-block w-100 bannar_sliderImg" alt="Bannaar image">
                                <div class="text-center popular_content py-3">
                                    <h5>Third slide label</h5>
                                    <p class="mb-0">Some representative placeholder content for the third slide.</p>
                                </div>
                            </a>
                          </div>
                          <div class="carousel-item position-relative">
                            <a href="">
                                <img src="{{ asset('blogImage/banner2.jpg') }}" class="d-block w-100 bannar_sliderImg" alt="Bannaar image">
                                <div class="text-center popular_content py-3">
                                    <h5>Third slide label</h5>
                                    <p class="mb-0">Some representative placeholder content for the third slide.</p>
                                </div>
                            </a>
                          </div>
                          <div class="carousel-item position-relative">
                            <a href="">
                                <img src="{{ asset('blogImage/banner1.jpg') }}" class="d-block w-100 bannar_sliderImg" alt="Bannaar image">
                                <div class="text-center popular_content py-3">
                                    <h5>Third slide label</h5>
                                    <p class="mb-0">Some representative placeholder content for the third slide.</p>
                                </div>
                            </a>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#popularPost" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#popularPost" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="">
                        <h2 class="pb-3 pt-5 HTMediam border_bottom d-inline-block">POPULAR POST</h2>
                        <div class="bn_popular d-flex justify-content-center">
                            <img class="bn_popularImg rounded-circle" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                            <div class="bn_popularContent ms-3">
                                <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                                <span>1 month ago.</span>
                            </div>
                        </div>
                        <div class="bn_popular mt-4 d-flex justify-content-center">
                            <img class="bn_popularImg rounded-circle" src="{{ asset('blogImage/banner2.jpg') }}" alt="">
                            <div class="bn_popularContent ms-3">
                                <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                                <span>1 month ago.</span>
                            </div>
                        </div>
                        <div class="bn_popular mt-4 d-flex justify-content-center">
                            <img class="bn_popularImg rounded-circle" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                            <div class="bn_popularContent ms-3">
                                <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                                <span>1 month ago.</span>
                            </div>
                        </div>
                        <div class="bn_popular mt-4 d-flex justify-content-center">
                            <img class="bn_popularImg rounded-circle" src="{{ asset('blogImage/banner2.jpg') }}" alt="">
                            <div class="bn_popularContent ms-3">
                                <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                                <span>1 month ago.</span>
                            </div>
                        </div>
                        <div class="bn_popular mt-4 d-flex justify-content-center">
                            <img class="bn_popularImg rounded-circle" src="{{ asset('blogImage/banner2.jpg') }}" alt="">
                            <div class="bn_popularContent ms-3">
                                <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                                <span>1 month ago.</span>
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
                    <h2 class="HTMediam border_bottom d-inline-block">RECENT POST</h2>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="tranding_post d-flex justify-content-center">
                        <img class="trandingImg" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                        <div class="trandingContent ms-3">
                            <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="tranding_post d-flex justify-content-center">
                        <img class="trandingImg" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                        <div class="trandingContent ms-3">
                            <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="tranding_post d-flex justify-content-center">
                        <img class="trandingImg" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                        <div class="trandingContent ms-3">
                            <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="tranding_post d-flex justify-content-center">
                        <img class="trandingImg" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                        <div class="trandingContent ms-3">
                            <p class="mb-0">Hi I am Md Yasin Khan a bot developer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-----------------------------
       tranding post section end
    -------------------------------}}
    {{----------------------
       featcher section srtats
    ----------------------}}
    <section class="coments_post my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="HTlarge border_bottom d-inline-block">Comments</h2>
                </div>
                <div class="">
                    <div class="bn_popular mt-4 d-flex ">
                        <img class="bn_popularImg rounded-circle" src="{{ asset('blogImage/banner1.jpg') }}" alt="">
                        <div class="bn_popularContent ms-3">
                            <p class="mb-0">Md Yasin Khan</p>
                            <p class="mb-0">example@mail.com</p>
                        </div>
                    </div>
                    <div class="ps-5">
                        <p class="ps-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec tincidunt odio. Mauris sodales lacus a tortor egestas tincidunt. Nullam tempus lorem nec erat sagittis, non dictum velit euismod. Etiam quis magna sed ligula interdum ornare. Duis vitae lorem nec sapien feugiat condimentum in vestibulum mi. Cras congue sodales lacus, vitae commodo eros blandit maximus. Etiam varius felis id eros dictum, id pharetra mauris convallis. Pellentesque sollicitudin dui at tincidunt feugiat. Sed convallis ipsum felis, mollis congue dui varius non. Ut lacus quam, dictum vitae neque sodales, blandit ornare urna. Sed a rhoncus nisl. Praesent ac ligula a justo luctus luctus et ut mauris.
                        </p>
                        <a class="replyBtn px-4 py-2 ms-4 fw-bold">REPLY</a>
                    </div>
                </div>
                <div class="coments mt-5">
                    <div class="coment_section p-5">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class=" mb-3">
                                        <label for="userName" class="form-label">User name</label>
                                        <input name="userName" type="text" class="form-control" placeholder="Username" id="userName">
                                    </div>
                                    <div class=" mb-3">
                                        <label for="email" class="form-label">Email addres</label>
                                        <input name="email" type="text" class="form-control" placeholder="Username" id="email">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="ps-3 mb-3">
                                        <label for="comment" class="form-label">Write your comment</label>
                                        <textarea name="comment" class="form-control" id="comment" rows="5" placeholder="Write here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <a type="submit" class="replyBtn px-4 py-2 fw-bold">SUBMIT</a>
                        </form>
                    </div>
                </div>
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
                    <h2 class="HTlarge border_bottom d-inline-block">Related post</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="letest_post">
                        <a href=""><img class="letest_postImg" src="{{ asset('blogImage/banner1.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="letest_post">
                        <div class="letest_postContent">
                            <p class="mb-3 letest_postContentP">Hi I am Md Yasin Khan a bot developer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae molestias rerum dolorum ipsa velit totam ad aut eos sequi atque!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate accusamus, eaque, quasi illum ipsum eos vel, modi atque perspiciatis corrupti! Eaque corporis modi sit officiis doloribus aut at ipsam voluptates soluta, excepturi libero eveniet voluptatibus qui minima cumque quis deserunt quo magnam temporibus! Sapiente ad laboriosam voluptates delectus error excepturi sint magnam earum, ut tempore architecto ipsam molestiae nam sequi cum! Minima atque et sunt rem quo esse vitae.</p>
                            <a href="#" class="linkText px-4 letest_link btn-warning fw-bold">Read more <i class="letest_linkIcon fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mt-sm-5">
                <div class="col-md-5 order-md-2">
                    <div class="letest_post">
                        <a href=""><img class="letest_postImg" src="{{ asset('blogImage/banner2.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-7 order-md-1">
                    <div class="letest_post">
                        <div class="letest_postContent">
                            <p class="mb-3 letest_postContentP">Hi I am Md Yasin Khan a bot developer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae molestias rerum dolorum ipsa velit totam ad aut eos sequi atque!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate accusamus, eaque, quasi illum ipsum eos vel, modi atque perspiciatis corrupti! Eaque corporis modi sit officiis doloribus aut at ipsam voluptates soluta, excepturi libero eveniet voluptatibus qui minima cumque quis deserunt quo magnam temporibus! Sapiente ad laboriosam voluptates delectus error excepturi sint magnam earum, ut tempore architecto ipsam molestiae nam sequi cum! Minima atque et sunt rem quo esse vitae.</p>
                            <a href="#" class="linkText letest_link px-4 btn-warning fw-bold">Read more <i class="letest_linkIcon fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h2 class="HTlarge border_bottom d-inline-block">My servoce</h2>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 service_content">
                        <i class="service_contentIcon fa-brands fa-audible fa-3x"></i>
                        <h2 class="fw-bold">What I Do</h2>
                        <p class="mb-3 service_contentP textMediam">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quas enim natus voluptatem?</p>
                        <a href="#" class="linkText letest_link px-4 btn-warning fw-bold">Find out more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 service_content">
                        <i class="service_contentIcon fa-brands fa-delicious fa-3x"></i>
                        <h2 class="fw-bold">My Services</h2>
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
