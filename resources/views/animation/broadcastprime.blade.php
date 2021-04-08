@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
    <section class="courses-bg-banner mb-5" style="background-image:url('{{asset('images/banner/broadcast-prime-min.jpg')}}'); background-size:cover;">
        <div class="courses-bg-banner-wrapper pl-5" style="justify-content:left;">
           
        </div>
    </section>
    <div class="course-term-title-wrapper w-100 px-5 px-md-5 mb-5">
        <div class="corse-term-title">
                <h1 class="text-dark font-weight-bold h1">Brodcast <span class="text-orange">PRIME</span></h1>
                <div class="white-line m-0"></div>
        </div>
        <div class="course-term-shtdes">
                <p class="h5 text-dark mt-3 font-weight-bold">Grabbing Eyeballs The Indian television industry boasts of more than 800 channels offering a wide array of content. These television as well as digital channels have led to a huge demand in 'channel packaging' content:</p>
        </div>
   </div>
    <section class="w-100 px-5 mb-5 course-term-description">
        <p class="text-dark h6">The Broadcast Prime trains students to create engaging motion visuals by merging the best of graphic, animation, live footage, music, sound, electronics, interactive and unconventional media tools.</p>
    </section>
    <section class="course-term mb-5 course-term-wrapper">
        <div class=" pl-md-5" >
            <div style="background-image:url('{{ asset('images/path22.png') }}'); background-size:cover;">
                <img src="{{ asset('images/course-image/vfxprime-thumbail.png') }}" alt="" height="300">
            </div>
        </div>
        <div class="course-term-content-wrapper ml-5" >
            <div class="course-term-nav py-3">
                <span class="h5 font-weight-bold p-2"> <a href="#broadcast-prime-term1" class="text-dark">TERM 1 </a> </span>
                <span class="h5 font-weight-bold p-2"> <a href="#broadcast-prime-term2" class="text-dark">TERM 2 </a> </span>
            </div>
            <div class="owl-carousel owl-theme course-term-content py-4" id="courses-term-content">
                <div class="item" data-hash="broadcast-prime-term1">
                    <p >
                    Concepts of Graphics and Illustrations,
                    Typography Design,
                    Concepts of Cinematography & Photography,
                    Concepts of 2D Digital Animation,
                    Art of Storytelling & Script Writing,
                    Anatomy Study,
                    Character Design,
                    Digital Painting,
                    Audio-Video Editing,
                    Storyboarding and Animatics,
                    Application of 2D Animation Principles,
                    Design Portfolio
                    </p>
                </div>
                <div class="item" data-hash="broadcast-prime-term2">
                    <p >
                    Broadcast Design,
                    Digital Marketing & Media Concepts,
                    3D Basics - Modeling to Animation,
                    Motion Graphics in 3ds Max,
                    Broadcast Design using Cinema 4D,
                    Visual Effects and Compositing
                    Advanced Post-Production Techniques,
                    Broadcast Media,
                    Broadcast Design
                    </p>
                </div>
            </div>
            <div class="course-term-prev-nxt">
                <div class="owl-nav-course">
                        <div class="courseTermPrevBtn"><img src="{{ asset('images/course-image/arrow-prev.png') }}" alt=""></div>
                        <div class="courseTermNextBtn"><img src="{{ asset('images/course-image/arrow-nxt.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- course completion course -->
    <section class="course-term-completion pl-5" style="margin-bottom:100px;">
        <div>
            <h2>Job Oppurtunities: </h2>
            <div class="white-line mt-2"></div>
        </div>
        <div>
            <span class="p-2 bg-light shadow-sm h6 d-inline-block mt-1" >Graphic Designer</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > illustrator </span>
            <span class="p-2 bg-white shadow-sm h6 ml-1 d-inline-block mt-1" >Video Editor </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Storyboard Artist</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Broadcast Designer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >3D Motion Graphics Artist </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > Compositor </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Videographer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >CG Modeler </span>
        </div>
    </section>

    <!-- student works -->

   
    
@endsection