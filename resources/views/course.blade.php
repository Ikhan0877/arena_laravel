@extends('index')
@section('title','Courses Offered | Arena Animation | Kammanahalli ')

@section ('content')
    <section class="courses-bg-banner">
        <div class="courses-bg-banner-wrapper">
           <div class="courses-main-content pl-5">
                <div>
                    <h1 class="text-white">Courses Offered by arena Animtaion </h1>
                    <p class="text-white">Search for top courses.</p>
                </div>
                <div>
                    <div class="d-flex  justify-content-center align-content-center p-2 w-75">
                        <a href="#animation-courses" class="h6 p-2 bg-light mr-1">ANIMATION</a>
                        <a href="#digital-media-courses" class="h6 p-2 bg-light mr-1">GRAPHICS</a>
                        <a href="#web-design-or-app-design-courses" class="h6 p-2 bg-light mr-1">DIGITAL </a>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <section class="container mt-5">
        <section class="container">
           <div>
                <h2 class="h3 font-weight-bold">Our <span class="text-orange">Courses</span> </h2>
           </div>
        </section>
        <section id="animation-courses">
            <div>
                <h2 class="h3 font-weight-bold pl-3 my-5"> Animation Courses</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-3 col-6">
                    <div class="">
                        <div class="w-100 rounded-sm" style="background-image:url('images/course-image/vfx-prime.jpg');height:300px;background-size:cover;border-radius:10px;">
                        </div>
                        <div class="course-nav-cont">
                                <a class="button secondary url" href="{{ url('courses/animation/vfx-prime') }}"><h2 class="text-dark h5">VFX Prime</h2></a> <br>
                                <span>12 months</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 col-6">
                    <div class="">
                        <div class="w-100 rounded-sm" style="background-image:url('images/course-image/animation-prime-course-in-arena-1200x720.jpg');height:300px;background-size:cover;border-radius:10px;">
                        </div>
                        <div class="course-nav-cont">
                                <a class="button secondary url" href="{{ url('courses/animation/animation-prime') }}"><h2 class="text-dark h5">Animation Prime</h2></a><br>
                                <span>12 months</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 col-6">
                    <div class="">
                        <div class="w-100 rounded-sm" style="background-image:url('images/course-image/vfx-film-making.jpg');height:300px;background-size:cover;border-radius:10px;">
                        </div>
                        <div class="course-nav-cont">
                                <a class="button secondary url" href=""><h2 class="text-dark h5">VFX Film Making</h2></a><br>
                                <span>12 months</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 col-6">
                    <div class="">
                        <div class="w-100 rounded-sm" style="background-image:url('images/course-image/video-editing.jpg');height:300px;background-size:cover;border-radius:10px;">
                        </div>
                        <div class="course-nav-cont">
                                <a class="button secondary url" href="{{ url('courses/animation/broadcast-prime') }}"><h2 class="text-dark h5">Broadcast Prime</h2></a><br>
                                <span>12 months</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section id="digital-media-courses">
            <div>
                <h2 class="h3 font-weight-bold my-5">Digital Media Course</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-3 col-6">
                        <div class="">
                            <div class="w-100 rounded-sm" style="background-image:url('images/course-image/digital-marketing.jpg');height:300px;background-size:cover;border-radius:10px;">
                            </div>
                            <div class="course-nav-cont">
                                    <a class="button secondary url" href="{{ url('courses/media/digital-marketing') }}"><h2 class="text-dark h5">Digital Marketing</h2></a><br>
                                    <span>12 months</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 col-6">
                        <div class="">
                            <div class="w-100 rounded-sm" style="background-image:url('images/course-image/print-and-publishing.png');height:300px;background-size:cover;border-radius:10px;">
                            </div>
                            <div class="course-nav-cont">
                                    <a class="button secondary url" href="{{ url('courses/media/print-and-publishing') }}"><h2 class="text-dark h5">Print and Publishing</h2></a><br>
                                    <span>12 months</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section id="web-design-or-app-design-courses">
            <div>
                <h2 class="my-5 h3 font-weight-bold">Web Design / App Design</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-3 col-6">
                        <div class="">
                            <div class="w-100 rounded-sm" style="background-image:url('images/course-image/graphic-design.jpg');height:300px;background-size:cover;border-radius:10px;">
                            </div>
                            <div class="course-nav-cont">
                                    <a class="button secondary url" href="courses/web/graphics-and-web-design"><h2 class="text-dark h5">GWDD</h2></a><br>
                                    <span>12 months</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 col-6">
                        <div class="">
                            <div class="w-100 rounded-sm" style="background-image:url('images/course-image/web-design.jpg');height:300px;background-size:cover;border-radius:10px;">
                            </div>
                            <div class="course-nav-cont">
                                    <a class="button secondary url" href="{{ url('courses/web/web-design') }}"><h2 class="text-dark h5">Web Designing</h2></a><br>
                                    <span>12 months</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 col-6">
                        <div class="">
                            <div class="w-100 rounded-sm overflow-hidden" style="background-image:url('images/course-image/ui-ux.png');height:300px;background-size:cover;border-radius:10px;">
                            </div>
                            <div class="course-nav-cont">
                                    <a class="button secondary url" href="{{ url('courses/media/UI-UX') }}"><h2 class="text-dark h5">UI /UX</h2></a><br>
                                    <span>12 months</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- latest events -->
    <section class="latest-events-wrapper d-flex ">
        <div class="latest-events-title  ">
            <h2 class="pl-md-5 mt-5 ml-5 ml-md-0">Latest Events</h2>
            <div class="white-line mt-2 ml-md-5 ml-5"></div>
            <p class="pl-md-5 ml-5 ml-md-0">Upcoming events and <br> news from arena <br> animation. </p>
            <a class="btn btn-md ml-md-5 ml-5" href="">See More</a>
        </div>
        <div class="latest-events row  mx-auto p-4 p-md-0 ">
            <div class="latest-events-content col-md-4 shadow-sm ">
                <div class="latest-events-img w-100" style="background-image:url('images/events/events-1.JPEG')">
                </div>
                <div class="latest-events-title">
                    <span class="latest-events-heading h4 py-3" >Creative Minds 2020</span>
                    <p class="pt-2 text-dark">Students participating in Gafx Sculting <br>and digital painting competition</p>
                </div>
                <div class="latest-events-nav">
                    <a href="">Read More</a>
                    <span></span>
                </div>
            </div>
            <div class="latest-events-content col-md-4 shadow-sm ">
                <div class="latest-events-img w-100" style="background-image:url('images/events/events-2.JPG')">
                </div>
                <div class="latest-events-title">
                    <span class="latest-events-heading h4 py-3">Creative Minds 2019</span>
                    <p class="pt-2 text-dark">Students participating in Gafx Sculting <br>and digital painting competition</p>
                </div>
                <div class="latest-events-nav">
                    <a href="">Read More</a>
                    <span></span>
                </div>
            </div>
            <div class="latest-events-content col-md-4 shadow-sm">
                <div class="latest-events-img w-100" style="background-image:url('images/events/events-3.JPG')">
                </div>
                <div class="latest-events-title">
                    <span class="latest-events-heading h4 py-3">Outside Art class</span>
                    <p class="pt-2 text-dark">Students participating in Outside drawing class<br>and painting.</p>
                </div>
                <div class="latest-events-nav">
                    <a href="">Read More</a>
                    <span></span>
                </div>
            </div>
        </div>
    </section>   
@endsection