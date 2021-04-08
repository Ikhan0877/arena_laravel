@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
    <section class="courses-bg-banner mb-5" style="background-image:url('{{asset('images/banner/graphic-and-web-design-min.jpg')}}'); background-size:cover;">
        <div class="courses-bg-banner-wrapper pl-5" style="justify-content:left;">
           
        </div>
    </section>
    <div class="course-term-title-wrapper w-100 px-5 px-md-5 mb-5">
        <div class="corse-term-title">
                <h1 class="text-dark font-weight-bold h1">G W D - WEB<span class="text-orange">DESIGN</span></h1>
                <div class="white-line m-0"></div>
        </div>
        <div class="course-term-shtdes">
                <p class="h5 text-dark mt-3 font-weight-bold">The GWDD Program ensures that you get tranining in all aspects of Graphics and Web Design and become proficient in software used extensively by industry endorsed techniques to transform you into an in-demand new media creative professional.</p>
        </div>
   </div>
    <section class="w-100 px-5 mb-5 course-term-description">
        <p class="text-dark h6">Today,everything is progressing towards digital. Companies acriss the world and across industries are taking the digital route,opening up a great number of career oppertunities. While the projected job growth for web developers from 2014 through 2024 is 27%, the graphic design industry is predicted to grow 7% from 2015 to 2022. Thus graphics, web design & development offer great scope for a successful casreer in the near future.</p>
    </section>
    <section class="course-term mb-5 course-term-wrapper">
        <div class="pl-5" >
            <div style="background-image:url('{{ asset('images/path22.png') }}'); background-size:cover;">
                <img src="{{ asset('images/course-image/vfxprime-thumbail.png') }}" alt="" height="300">
            </div>
        </div>
        <div class="course-term-content-wrapper ml-5" >
            <div class="course-term-nav py-3">
                <span class="h5 font-weight-bold p-2"> <a href="#digital-marketing-term1" class="text-dark">TERM 1 </a> </span>
            </div>
            <div class="owl-carousel owl-theme course-term-content py-4" id="courses-term-content">
                <div class="item" data-hash="digital-marketing-term1">
                    <p >
                    Concepts of Graphics and Illustrations,
                    Web Design Concepts,
                    UI/UX for Responsive Design,
                    Typography Designs,
                    Illustrations for Web,
                    Creative Artworks,
                    Layout Designs,
                    Web Animation using Animate CC,
                    Web Design Porfolio.
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
            <span class="p-2 bg-light shadow-sm h6 d-inline-block mt-1" >Web Designer</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > Layout Designer  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Graphics Designer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > Flash Animator</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Web Developer  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >illustrator </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Visualizer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Content Management System Specialist </span>
        </div>
    </section>

    
@endsection