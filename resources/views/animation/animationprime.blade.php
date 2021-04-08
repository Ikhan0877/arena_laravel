@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
    <section class="courses-bg-banner mb-5" style="background-image:url('{{asset('images/banner/animation-prime-min.jpg')}}'); background-size:cover;" >
        <div class="courses-bg-banner-wrapper pl-5" style="justify-content:left;">
           
        </div>
    </section>
    <div class="course-term-title-wrapper w-100 px-5 px-md-5 mb-5">
        <div class="corse-term-title">
                <h1 class="text-dark font-weight-bold h1">Animation <span class="text-orange">PRIME</span></h1>
                <div class="white-line m-0"></div>
        </div>
        <div class="course-term-shtdes">
                <p class="h5 text-dark mt-3 font-weight-bold">Animation Prime, a comprehensive training program in the fundamentals and techniques of animation, provides all-inclusive understanding of the latest tools and softwares used in the animation process. It prepares students to set theis imagination free through a lively animation career.</p>
        </div>
   </div>
    <section class="w-100 px-5 mb-5 course-term-description">
        <p class="text-dark h6">Whatever one can imagine, now it's possible to create it. Well, not literally,nut on screen. Animation makes it all possible. It's a world that offers students countless oppertunities to realize their dreams. They can create and build characters, cartoons and other in animate objects right from scratch. And that's not all. Students can create unlimited number of things, ranging from humans to robots to extinct animals like mammoths, as well as creatures from stories and fables like fairies and monsters.</p>
    </section>
    <section class="course-term mb-5 course-term-wrapper">
        <div class="pl-5" >
            <div style="background-image:url('{{ asset('images/path22.png') }}'); background-size:cover;">
                <img src="{{ asset('images/course-image/vfxprime-thumbail.png') }}" alt="" height="300">
            </div>
        </div>
        <div class="course-term-content-wrapper ml-5" >
            <div class="course-term-nav py-3">
                <span class="h5 font-weight-bold p-2"> <a href="#animation-prime-term1" class="text-dark">TERM 1 </a> </span>
                <span class="h5 font-weight-bold p-2"> <a href="#animation-prime-term2" class="text-dark">TERM 2 </a> </span>
                <span class="h5 font-weight-bold p-2"> <a href="#animation-prime-term3" class="text-dark">TERM 3 </a> </span>
            </div>
            <div class="owl-carousel owl-theme course-term-content py-4" id="courses-term-content">
                <div class="item" data-hash="animation-prime-term1">
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
                <div class="item" data-hash="animation-prime-term2">
                    <p >
                    3D Basics - Modeling to Animation,
                    Digital Modeling with Maya,
                    Digital Sculpting,
                    Texturing 3D Models with Maya,
                    Art of Storytelling & Script Writing,
                    Rigging 3D Models with Maya,
                    3D Character Animation,
                    Fx, Dynamics and Simulation,
                    Crowd Simulation,
                    Working with Arnold Renderer,
                    Digital Compositing,
                    3D Animation Portfolio
                    </p>
                </div>
                <div class="item" data-hash="animation-prime-term3">
                    <p >
                        VFX Film Making,
                        Pre-visualization,
                        Introduction to Nuke,
                        Rotoscopy using Silhouette,
                        Wire Removal,
                        Color Correction,
                        Green / Blue Screen,
                        Matchmoving & Camera Tracking,
                        Matte Painting,
                        Specialisation & Digital Portfolio Development (Choose 1 elective)
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
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Story board artist </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Video Editor </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >3D Modeler</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >3D Animator </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Rigging Artist </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Texturing Artist </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Lighting Artist </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Rendering Artist </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Compositor </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >previs Artist  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Roto and Paint Artist  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Mathch move Artist  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Tracking Artist  </span>
        </div>
    </section>

   
    
@endsection