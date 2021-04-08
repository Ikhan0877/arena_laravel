@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
    <section class="courses-bg-banner mb-5" style="background-image:url('{{asset('images/banner/ui-and-ux-design-min.jpg')}}'); background-size:cover;">
        <div class="courses-bg-banner-wrapper pl-5" style="justify-content:left;">
           
        </div>
    </section>
    <div class="course-term-title-wrapper  w-100 px-5 px-md-5 mb-5">
        <div class="corse-term-title">
                <h1 class="text-dark font-weight-bold h1">User Interface &<span class="text-orange">User Experience</span></h1>
                <div class="white-line m-0"></div>
        </div>
        <div class="course-term-shtdes">
                <p class="h5 text-dark mt-3 font-weight-bold">User Interface (UI) and User Experience (UX) are high-demand fields in the media and entertainment industry. The skills and knowledge you will gain at Arena Animation will be applicable to a wide variety of careers You will learn current best practices and conventions in UI and UX, and apply them to create effective, compelling and navigation-friendly based experiences for website users on computers and mobiles.</p>
        </div>
   </div>
    <section class="w-100 pl-5 mb-5 course-term-description">
        <p class="text-dark h6">Want to learn UI-UX Design from Scratch. Arena offers a comprehensive course that trains you on all aspects of user interface and user experience design to make you job ready. While UI design is about the look and feel of the website or app, UX design improves the overall experience of the users when they interact with the website or app. With Arena Animation's UI-UX Design course, you will learn end-to-end aspects of user interface and user experience design.</p>
    </section>
    <section class="course-term mb-5 course-term-wrapper">
        <div class="pl-5" >
            <div style="background-image:url('{{ asset('images/path22.png') }}'); background-size:cover;">
                <img src="{{ asset('images/course-image/vfxprime-thumbail.png') }}" alt="" height="300">
            </div>
        </div>
        <div class="course-term-content-wrapper ml-5" >
            <div class="course-term-nav py-3">
                <span class="h5 font-weight-bold p-2"> <a href="#UI-UX-term1" class="text-dark">TERM 1 </a> </span>
                <span class="h5 font-weight-bold p-2"> <a href="#UI-UX-term2" class="text-dark">TERM 1 </a> </span>
            </div>
            <div class="owl-carousel owl-theme course-term-content py-4" id="courses-term-content">
                <div class="item" data-hash="UI-UX-term1">
                    <p >
                    UX Design Overview,
                    UXD Process and Workflow,
                    UX Research Phase,
                    UX Design Phase,
                    Validation and Implementation Phase,
                    UX Design Portfolio-1
                    </p>
                </div> 
                <div class="item" data-hash="UI-UX-term2">
                    <p >
                    Elements of User Interface (UI) Design,
                    Pillars of UI Design,
                    Dashboards and Data Visualization,
                    UI Design for Mobile Devices, Web and Software,
                    Wireframing and Prototype for UI Design,
                    Usability and Testing for UI Design,
                    UI Design Portfolio
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
            <span class="p-2 bg-light shadow-sm h6 d-inline-block mt-1" >Visual Designer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > User Interface Designer  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > Creative Designer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >  Product Designer </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > UI developer  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >UX Designer  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" > Information Architecture </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >Interaction Designer  </span>
            <span class="p-2 bg-light shadow-sm h6 ml-1 d-inline-block mt-1" >UX tester  </span>
        </div>
    </section>

   
  
    
@endsection