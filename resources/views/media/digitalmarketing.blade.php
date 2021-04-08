@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
    <section class="courses-bg-banner mb-5" style="background-image:url('{{asset('images/banner/digital-marketing-min.jpg')}}'); background-size:cover;">
        <div class="courses-bg-banner-wrapper pl-5" style="justify-content:left;">
           
        </div>
    </section>
    <div class="course-term-title-wrapper w-100 px-5 px-md-5 mb-5">
        <div class="corse-term-title">
                <h1 class="text-dark font-weight-bold h1">DIGITAL ADVERTISING  <span class="text-orange">DESIGN & MARKETING</span></h1>
                <div class="white-line m-0"></div>
        </div>
        <div class="course-term-shtdes">
                <p class="h5 text-dark mt-3 font-weight-bold">The Digital Adevertising Design and Marketing Program combaines technology with creativity to train students in the conceptual, design, advertising, marketing ,technical and analytical aspects of communication for the digital space.This helps students emerge as job-ready professional, ready to make impact in the digital world.</p>
        </div>
   </div>
    <section class="w-100 pl-5 mb-5 course-term-description">
        <p class="text-dark h6">Digital Advertising Design and Marketing is a comprehensive course that trains you in all aspects of digital designing and makes you a job-ready professional. It gives you a thorough grounding in the fundamentals & techniques of digital illustrations, typography techniques, digital advertising concepts, digital video techniques, internet advertising, email marketing, and mobile marketing. The course combines technology with creativity to you in the concept, design, advertising, marketing, technical and analytical aspects of communication for the digital space.
Join Us</p>
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
                <span class="h5 font-weight-bold p-2"> <a href="#digital-marketing-term2" class="text-dark">TERM 2 </a> </span>
            </div>
            <div class="owl-carousel owl-theme course-term-content py-4" id="courses-term-content">
                <div class="item" data-hash="digital-marketing-term1">
                    <p >
                    Digital Advertising Concepts,
                    Typography Design,
                    Digital Artworks,
                    Digital Imaging,
                    Sound Composition,
                    Digital Video Techniques,
                    Design Communication Design Portfolio.
                    </p>
                </div>
                <div class="item" data-hash="digital-marketing-term2">
                    <p >
                    Marketing Basics,
                    Internet Advertising with Search Network,
                    Search Optimization Techniques,
                    Creative Display ads and solution,
                    Mobile Marketing in practice,
                    Marketing using Email -1,
                    Introduction to Analytics,
                    Digtal Marketing Portfolio.
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
            <span class="p-2 bg-light shadow-sm h6 d-inline-block mt-1" >Digital Graphic Desginer</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > illustrator  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Audio - Video Editor </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Digital Sales Executive</span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >SEO Executive  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Digital Marketing Executive </span>
        </div>
    </section>

   
 
    
@endsection