@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
    <section class="banner">
        <div class="cover1">
            <!-- <img src="images/group 99.png" alt=""> -->
            <div class='ml-2 white-line'>
            </div>
            <h1 class="pl-2">Learn Animation, Visual Effects and Graphics from the leader in Animation training.</h1>
        </div>
    </section>
    <!-- our testimonials -->
    <!--  -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 bg-success p-4">
                    <div class="">
                        <div class="pt-3">
                            <i class="fas fa-trophy" style="font-size:30px; color:white"></i>
                        </div>
                        <div class="pt-3">
                            <p class="text-white h4" style="font-size:25px;">19 Years of Successful Training</p>
                        </div>
                        <div >
                            <a href="" class="text-white">Know more About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 p-4" style="background:purple">
                    <div class="" >
                        <div class="pt-3">
                            <i class="fas fa-award" style="font-size:30px; color:white"></i>
                        </div>
                        <div class="pt-3">
                            <p class="text-white h4" style="font-size:25px;">Award Winners <br></p>
                        </div>
                        <div>
                            <a href="" class="text-white">Know more About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 bg-warning p-4">
                    <div class="">
                        <div class="pt-3">
                            <i class="fas fa-briefcase" style="font-size:30px; color:white"></i>
                        </div>
                        <div class="pt-3">
                            <p class="text-white h4" style="font-size:25px;">100% Students Placed.</p>
                        </div>
                        <div>
                            <a href="" class="text-white">Know more About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 bg-info p-4">
                    <div class="">
                        <div class="pt-3">
                            <i class="fas fa-cloud-download-alt" style="font-size:30px; color:white"></i>
                        </div>
                        <div class="pt-3">
                            <p class="text-white h4" style="font-size:25px;">Download Brochure. <br> </p>
                        </div>
                        <div>
                            <a href="" class="text-white">Know more About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- industry expert -->
    <section class="container px-md-5" style="margin-top:100px;">
        <div style="margin-bottom:50px;">
            <h2 >Industry Expert <span class="text-orange">Talk</span></h2>
            <div class="white-line" style="margin:10px 0;"></div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="card border-0">
                    <div class="card-header">
                        <img src="{{ asset('images/emp.jpg') }}" alt="" style="height:300px;width:100%;" >
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="h4">John Doe</p>
                        </div>
                        <div>
                            <span>Software Engineering</span>
                        </div>
                        <div>
                            <a href=""><p class="text-danger pt-2"><i class="fab fa-youtube"></i> Play in Youtube</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card  border-0">
                    <div class="card-header">
                        <img src="{{ asset('images/emp.jpg') }}" alt="" style="height:300px;width:100%;" >
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="h4">John Doe</p>
                        </div>
                        <div>
                            <span>Software Engineering</span>
                        </div>
                        <div>
                            <a href=""><p class="text-danger pt-2"><i class="fab fa-youtube"></i> Play in Youtube</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border-0">
                    <div class="card-header">
                        <img src="{{ asset('images/emp.jpg') }}" alt="" style="height:300px;width:100%;" >
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="h4">John Doe</p>
                        </div>
                        <div>
                            <span>Software Engineering</span>
                        </div>
                        <div>
                            <a href=""><p class="text-danger pt-2"><i class="fab fa-youtube"></i> Play in Youtube</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border-0">
                    <div class="card-header">
                        <img src="{{ asset('images/emp.jpg') }}" alt="" style="height:300px;width:100%;" >
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="h4">John Doe</p>
                        </div>
                        <div>
                            <span>Software Engineering</span>
                        </div>
                        <div>
                            <a href=""><p class="text-danger pt-2"><i class="fab fa-youtube"></i> Play in Youtube</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!--industry expert  -->
    <!-- our course -->
    <section class="our-courses-container px-2 px-md-5">
        <div class="our-course-title">
            <div class="our-course-nav">
                <div>
                    <h2 >Our <span class="text-orange">Courses</span></h2>
                    <div class="white-line" style="margin:10px 0;"></div>
                </div>
                <div>
                    <div class="owl-nav-course">
                        <div class="coursePrevBtn"><img src="images/course-image/arrow-prev.png" alt=""></div>
                        <div class="courseNextBtn"><img src="images/course-image/arrow-nxt.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="our-courses-content">
                    <div class="item" data-hash="zero">
                        <div class="course-thumbnail-wrapper">
                            <div class="course-thumbnail">
                                <div class="course-img" style="background-image:url('images/course-image/vfx-prime.jpg')">
                                    
                                </div>
                                <div class="course-title">
                                    <p>VFX Prime</p>
                                    <span>12 month Course</span>
                                </div>
                            </div>
                            <div class="coure-content-wrapper">
                                <p class="course-content">Where reality meets and blends with the imagination,VFX begins. The demand for VFX has been rising relentlessly with the production of movies and television shows set in fantasy worlds with imaginary creatures like dragons,magical realms,extratresstial planets and galaxies, and more. VFX helps transform the ordinary into something Extradinory.</p>
                                <span class="course-role">Job Roles</span>
                                <p class="course-job">Graphic Designer | Story board artist | Video Editor | 3D Modeler | 3D Animator .....</p>
                                <div class="course-actions">
                                    <a href="" class="course-view">View More</a>
                                    <a href="" class="course-enroll">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="one">
                        <div class="course-thumbnail-wrapper">
                                <div class="course-thumbnail">
                                    <div class="course-img" style="background-image:url('images/course-image/animation-prime-course-in-arena-1200x720.jpg')">
                                        
                                    </div>
                                    <div class="course-title">
                                        <p>Animation <br> Prime</p>
                                        <span>12 month Course</span>
                                    </div>
                                </div>
                                <div class="coure-content-wrapper">
                                    <p class="course-content">Whatever one can imagine, now it's possible to create it. Well, not literally,nut on screen. Animation makes it all possible. It's a world that offers students countless oppertunities to realize their dreams. They can create and build characters, cartoons and other in animate objects right from scratch. And that's not all. Students can create unlimited number of things, ranging from humans to robots to extinct animals like mammoths, as well as creatures from stories and fables like fairies and monsters.</p>
                                    <span class="course-role">Job Roles</span>
                                    <p class="course-job">Graphic Designer | Story board artist | Video Editor | 3D Modeler | 3D Animator .....</p>
                                    <div class="course-actions">
                                        <a href="" class="course-view">View More</a>
                                        <a href="" class="course-enroll">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="item" data-hash="two">
                        <div class="course-thumbnail-wrapper">
                                <div class="course-thumbnail">
                                    <div class="course-img" style="background-image:url('images/course-image/vfx-film-making.jpg')">
                                        
                                    </div>
                                    <div class="course-title">
                                        <p>VFX FILM MAKING</p>
                                        <span>12 month Course</span>
                                    </div>
                                </div>
                                <div class="coure-content-wrapper">
                                    <p class="course-content">who doesn't love to bea a part of an action-packed film with extraordinary VFX? This course would do exactly that. From VFX design to the creation of a realistic fantasy-world based on the vision of the film director, VFX has indeed become a neccessary feature in today's film making process. It strikes a balance between art and technology. You would learn the art of VFX design and the latest VFX techniques using the best of the 3D & VFX softwares in the industry.</p>
                                    <span class="course-role">Job Roles</span>
                                    <p class="course-job">Previs /Postvis Artist | Asset Artist | Layout Artist | Rotomation Artist | FX Artist | Matchmoving Artist | Compositor</p>
                                    <div class="course-actions">
                                        <a href="" class="course-view">View More</a>
                                        <a href="" class="course-enroll">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="item" data-hash="three">
                        <div class="course-thumbnail-wrapper">
                                    <div class="course-thumbnail">
                                        <div class="course-img" style="background-image:url('images/course-image/video-editing.jpg')">
                                            
                                        </div>
                                        <div class="course-title">
                                            <p>Broadcast Prime</p>
                                            <span>12 month Course</span>
                                        </div>
                                    </div>
                                    <div class="coure-content-wrapper">
                                        <p class="course-content">Grabbing Eyeballs The Indian television industry boasts of more than 800 channels offering a wide array of content. These television as well as digital channels have led to a huge demand in 'channel packaging' content.Join Us
                                                The Broadcast Prime trains students to create engaging motion visuals by merging the best of graphic, animation, live footage, music, sound, electronics, interactive and unconventional media tools.</p>
                                        <span class="course-role">Job Roles</span>
                                        <p class="course-job">Graphic Designer | illustrator | Storyboard Artist | Video Editor | Broadcast Designer 3D Motion Graphics Artist | Compositor | Videographer | CG Modeler</p>
                                        <div class="course-actions">
                                            <a href="" class="course-view">View More</a>
                                            <a href="" class="course-enroll">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="item" data-hash="four">
                        <div class="course-thumbnail-wrapper">
                            <div class="course-thumbnail">
                                <div class="course-img" style="background-image:url('images/course-image/digital-marketing.jpg')">
                                    
                                </div>
                                <div class="course-title">
                                    <p>DIGITAL MARKETING</p>
                                    <span>12 month Course</span>
                                </div>
                            </div>
                            <div class="coure-content-wrapper">
                                <p class="course-content">Digital Advertising Design and Marketing is a comprehensive course that trains you in all aspects of digital designing and makes you a job-ready professional. It gives you a thorough grounding in the fundamentals & techniques of digital illustrations, typography techniques, digital advertising concepts, digital video techniques, internet advertising, email marketing, and mobile marketing. The course combines technology with creativity to you in the concept, design, advertising, marketing, technical and analytical aspects of communication for the digital space.</p>
                                <span class="course-role">Job Roles</span>
                                <p class="course-job">Digital Graphic Desginer | illustrator | Audio-Video Edito | Digital Sales Executive | SEO Executive | Digital Marketing Executive</p>
                                <div class="course-actions">
                                    <a href="" class="course-view">View More</a>
                                    <a href="" class="course-enroll">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="five">
                        <div class="course-thumbnail-wrapper">
                            <div class="course-thumbnail">
                                <div class="course-img" style="background-image:url('images/course-image/graphic-design.jpg')">
                                    
                                </div>
                                <div class="course-title">
                                    <p>GRAPHICS, WEBDESIGN AND DEVELOPMENT</p>
                                    <span>12 month Course</span>
                                </div>
                            </div>
                            <div class="coure-content-wrapper">
                                <p class="course-content">Today,everything is progressing towards digital. Companies acriss the world and across industries are taking the digital route,opening up a great number of career oppertunities. While the projected job growth for web developers from 2014 through 2024 is 27%, the graphic design industry is predicted to grow 7% from 2015 to 2022. Thus graphics, web design & development offer great scope for a successful casreer in the near future.</p>
                                <span class="course-role">Job Roles</span>
                                <p class="course-job">Web Designer | Layout Designer | Graphics Designer | Flash Animator | Web Developer | Content Management System Specialist | illustrator |Visualizer</p>
                                <div class="course-actions">
                                    <a href="" class="course-view">View More</a>
                                    <a href="" class="course-enroll">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="six">
                        <div class="course-thumbnail-wrapper">
                            <div class="course-thumbnail">
                                <div class="course-img" style="background-image:url('images/course-image/web-design.jpg')">
                                    
                                </div>
                                <div class="course-title">
                                    <p>WEBDESIGNING</p>
                                    <span>12 month Course</span>
                                </div>
                            </div>
                            <div class="coure-content-wrapper">
                                <p class="course-content">Today,everything is progressing towards digital. Companies acriss the world and across industries are taking the digital route,opening up a great number of career oppertunities. While the projected job growth for web developers from 2014 through 2024 is 27%, the graphic design industry is predicted to grow 7% from 2015 to 2022. Thus graphics, web design & development offer great scope for a successful casreer in the near future.</p>
                                <span class="course-role">Job Roles</span>
                                <p class="course-job">Web Designer | Layout Designer | Graphics Designer | Flash Animator | Web Developer | Content Management System Specialist | illustrator |Visualizer</p>
                                <div class="course-actions">
                                    <a href="" class="course-view">View More</a>
                                    <a href="" class="course-enroll">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="seven">
                        <div class="course-thumbnail-wrapper">
                            <div class="course-thumbnail">
                                <div class="course-img" style="background-image:url('images/course-image/ui-ux.png')">
                                    
                                </div>
                                <div class="course-title">
                                    <p>UI/UX</p>
                                    <span>12 month Course</span>
                                </div>
                            </div>
                            <div class="coure-content-wrapper">
                                <p class="course-content">User Interface (UI) and User Experience (UX) are high-demand fields in the media and entertainment industry. The skills and knowledge you will gain at Arena Animation will be applicable to a wide variety of careers You will learn current best practices and conventions in UI and UX, and apply them to create effective, compelling and navigation-friendly based experiences for website users on computers and mobiles.</p>
                                <span class="course-role">Job Roles</span>
                                <p class="course-job">Visual Designer | User Interface Designer | Creative Designer | Product Designer | UI developer | UX Designer | Information Architecture | Interaction Designer | UX tester</p>
                                <div class="course-actions">
                                    <a href="" class="course-view">View More</a>
                                    <a href="" class="course-enroll">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="eight">
                        <div class="course-thumbnail-wrapper">
                            <div class="course-thumbnail">
                                <div class="course-img" style="background-image:url('images/course-image/print-and-publishing.png')">
                                    
                                </div>
                                <div class="course-title">
                                    <p>G W D - PRINT & PUBLISH</p>
                                    <span>12 month Course</span>
                                </div>
                            </div>
                            <div class="coure-content-wrapper">
                                <p class="course-content">Today,everything is progressing towards digital. Companies acriss the world and across industries are taking the digital route,opening up a great number of career oppertunities. While the projected job growth for web developers from 2014 through 2024 is 27%, the graphic design industry is predicted to grow 7% from 2015 to 2022. Thus graphics, web design & development offer great scope for a successful casreer in the near future.</p>
                                <span class="course-role">Job Roles</span>
                                <p class="course-job">Web Designer | Layout Designer | Graphics Designer | Flash Animator | Web Developer | Content Management System Specialist | illustrator |Visualizer</p>
                                <div class="course-actions">
                                    <a href="" class="course-view">View More</a>
                                    <a href="" class="course-enroll">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-nav-wrapper">
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/vfx-prime.jpg')">
                        </div>
                        <div class="course-nav-cont">
                             <a class="button secondary url" href="#zero"><p>VFX prime</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/animation-prime-course-in-arena-1200x720.jpg')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#one"><p>ANIMATION <br> PRIME</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/vfx-film-making.jpg')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#two"><p>VFX FILM <br> MAKING</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/video-editing.jpg')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#three"><p>Broadcast <br> prime</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/digital-marketing.jpg')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#four"><p>Digital <br> Marketing</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/graphic-design.jpg')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#five"><p>GWDD</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/web-design.jpg')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#six"><p>Web Designing</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/ui-ux.png')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#seven"><p>UI / UX</p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                    <div class="course-nav">
                        <div class="course-nav-img" style="background-image:url('images/course-image/print-and-publishing.png')">
                        </div>
                        <div class="course-nav-cont">
                            <a class="button secondary url" href="#eight"><p>Printing & <br> Publishing </p></a> <br>
                             <span>12 months</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- degree course -->
    <section class="container-fluid mt-5 mb-5">
        <div class="our-course-nav">
            <div class="container mb-5 " >
                <h2 >Degree <span class="text-orange">Courses</span></h2>
                <div class="white-line" style="margin:10px 0;"></div>
            </div>
        </div>
        <div class="container-fluid p-2 p-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="images/langara.png" alt="" class="w-100">
                            </div>
                            <div class="col-md-9">
                                <div class="">

                                    <h3>Langara CEA Canada</h3>
                                    <p>Largest cluster of Animation & VFX studios in the world. close to 100+ Entertainment Businesses Over 42,00 jobs are generated by Film and TV production in BC, with more than 80 per cent located in Metro Vancouver.</p>
                                    <div class="course-actions">
                                        <a href="" class="course-view">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- degree course end -->
    <!-- students testimonials -->
    <section class="px-2 px-md-5 bg-light mt-5 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="p-5">
                        <h2 class="h1">Students <span class="text-orange">Talk</span></h2>
                        <div class="white-line" style="margin:20px auto;"></div>
                        <p style="font-size:20px;">Testimonials Provided some of our students of arena animation.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5">
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="" style="background-image:url('images/hari-arena-testimonial.png'); height:300px; width:100%; background-repeat:no-repeat; background-size:cover;background-position:center;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%;position:relative;">
                            <div style="position:absolute;bottom:20px; left:20px;">
                                <a href="https://www.youtube.com/watch?v=Nd8aVQIfcOo&ab_channel=ArenaAnimationBangaloreKammanahalli" style="color:white;display:flex;gap:10px;align-items:center;text-decoration:none"><img src="http://127.0.0.1:8000/images/course-image/arrow-nxt.png" style="border-radius:100px;overflow:hidden;" alt="">   </a>
                            </div>
                            
                        </div>
                    </div>
                    <div>
                    <span class="h5 px-2 pt-2 d-inline-block">Mr. Hari</span> <br>
                        <span class="h6 px-2 d-inline-block">VFX PRIME</span>
                    </div>
                </div>
            
                <div class="col-md-4 col-6">
                    <div class="" style="background-image:url('images/pradeep.png'); height:300px; width:100%; background-repeat:no-repeat; background-size:cover;background-position:center;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%;position:relative;">
                            <div style="position:absolute;bottom:20px; left:20px;">
                                <a href="https://www.youtube.com/watch?v=FM6VcOFjf8U&ab_channel=ArenaAnimationBangaloreKammanahalli" style="color:white;display:flex;gap:10px;align-items:center;text-decoration:none"> <img src="http://127.0.0.1:8000/images/course-image/arrow-nxt.png" style="border-radius:100px;overflow:hidden;" alt="">  </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="h5 px-2 pt-2 d-inline-block">Mr. Pradeep</span> <br>
                        <span class="h6 px-2 d-inline-block">VFX PRIME</span>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="" style="background-image:url('images/nilofar-arena-testimonail.PNG'); height:300px; width:100%; background-repeat:no-repeat; background-size:cover;background-position:center;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%;position:relative;">
                            <div style="position:absolute;bottom:20px; left:20px;">
                                <a href="https://www.youtube.com/watch?v=Nd8aVQIfcOo&ab_channel=ArenaAnimationBangaloreKammanahalli" style="color:white;display:flex;gap:10px;align-items:center;text-decoration:none"><img src="http://127.0.0.1:8000/images/course-image/arrow-nxt.png" style="border-radius:100px;overflow:hidden;" alt="">   </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="h5 px-2 pt-2 d-inline-block">Ms. Nilofar</span> <br>
                        <span class="h6 px-2 d-inline-block">GRAPHIC DESIGN</span>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- students testimonials -->
    <section class="container" style="margin-top:50px;margin-bottom:100px;"> 
        <div class="mt-5">
            <h2 class="h1 text-center">Students <span class="text-orange">Success Stories</span></h2>
            <div class="white-line" style="margin:20px auto;"></div>
            <p class="text-center" style="font-size:20px;"> Some of Our students who have worked on below movies.</p>
        </div>
        <div class="p-5">
            <div class="row">
                <div class="col-md-3 col-6 p-2">
                    <div class="d-flex " style="background-image:url('images/1917.png');height:300px; width:100%;background-size:cover;backround-repeat:none;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%:">
                        <div class="text-white p-2 d-flex flex-column " style="height: 100%;justify-content: flex-end;">
                            <h2 class="h6">Ranjith Kizhakkey</h2>
                            <span>Sr. Layout Artist,Method Studios</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 p-2">
                    <div class="" style="background-image:url('images/junglebook.png');height:300px; width:100%;background-size:cover;backround-repeat:none;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%:">
                        <div class="text-white p-2 d-flex flex-column" style="height: 100%;justify-content: flex-end;">
                            <h2 class="h6">Vinay Tiwari</h2>
                            <span>Lightning Artist,Prime Focus Studio</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 p-2">
                    <div class="" style="background-image:url('images/lionking.png');height:300px; width:100%;background-size:cover;backround-repeat:none;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%:">
                        <div class="text-white p-2 d-flex flex-column" style="height: 100%;justify-content: flex-end;">
                            <h2 class="h6">Shubham Thakare</h2>
                            <span>Technology Resource Manager – Rendering Artist,MPC Films</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 p-2">
                    <div class="" style="background-image:url('images/captain.png');height:300px; width:100%;background-size:cover;backround-repeat:none;">
                        <div style="background-color:rgba(0,0,0,0.5);height:100%;width:100%:">
                        <div class="text-white p-2 d-flex flex-column" style="height: 100%;justify-content: flex-end;">
                            <h2 class="h6">Snehasis Adhikari</h2>
                            <span>Post Product Artist,Anibrain India</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection