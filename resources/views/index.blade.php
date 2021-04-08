<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title')</title>
    <script src="https://kit.fontawesome.com/66d975acc0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="">
            <div class="logo">
                <img src="{{ asset('images/arena-animation-logo.jpg') }}" alt="" width="100">
            </div>
            <div class="nav-bar nav">
                <div class="nav-icon-open" id="nav-icon-open">
                     <i class="fas fa-bars" style="font-size:30px;color:white" ></i>
                </div>
                <ul class="nav" id="nav-list">
                    <div class="nav-icon-close text-right p-3" id="nav-icon-close">
                        <i class="fas fa-times" style="font-size:30px;color:white" ></i>
                    </div>
                    <li class="nav-link nav-item"><a href="/">HOME</a></li>
                    <li class="nav-link nav-item"><a href="" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">COURSES</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                            <a class="dropdown-item text-dark" href="/courses/animation/vfx-prime">VFX Prime</a>
                            <a class="dropdown-item text-dark" href="/courses/animation/animation-prime">Animation Prime</a>
                            <a class="dropdown-item text-dark" href="/courses/animation/broadcast-prime">Broadcast Prime</a>
                            <a class="dropdown-item text-dark" href="/courses/degree/bsc-in-graphics-and-vfx">Bsc Graphics & VFX</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="/courses/media/UI-UX">UI / UX</a>
                            <a class="dropdown-item text-dark" href="/courses/web/web-design">Web Designing</a>
                            <a class="dropdown-item text-dark" href="/courses/web/graphics-and-web-design">Graphic and Web Designing</a>
                            <a class="dropdown-item text-dark" href="/courses/media/print-and-publishing">Print and Publishing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="/courses/media/digital-marketing">Digital Marketing</a>
                        </div>
                    </li>
                    
                    <li class="nav-link nav-item"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">WHY ARENA ?</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="/placements">Placements</a>
                            <a class="dropdown-item text-dark" href="http://blog.arenakamanahalli.in/category/events/">Events</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="#">Industry connect</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="#">Testimonials</a>
                        </div>
                    </li>
                    <li class="nav-link"><a href="" >ABOUT US</a></li>
                    <!--<li class="nav-link"><a href="">ABOUT US</a></li>-->
                    <li class="nav-link"><a href="/contact-us">CONTACT US</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @yield ('content')
   
    <!-- footer -->
    <section class="footer-wrapper ">
        <div class="container-fluid pl-5">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <span class="h3 text-white">About Us</span>
                        <div class="white-line my-3"></div>
                    </div>
                    <div>
                        <p class="text-white">Arena Animation is the leader in Animation Multimedia education with over 20 years of experience, backed by excellent faculty for latest education tools.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <span class="h4 text-white">Courses</span>
                        <div class="white-line my-3"></div>
                    </div>
                    <div>
                        <ul class="d-flex flex-column">
                            <li class="nav-list"> <a href="{{ url('courses/animation/vfx-prime') }} " class="p-2 text-white">VFX Prime</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/animation/broadcast-prime') }}" class="p-2 text-white">Broadcast Prime</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/animation/animation-prime') }}" class="p-2 text-white">Animation Prime</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/media/digital-marketing') }}" class="p-2 text-white">Digital Marketing</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/media/UI-UX') }}" class="p-2 text-white">UI / UX </a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/web/web-design') }}" class="p-2 text-white">Web Designing</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/web/graphics-and-web-design') }}" class="p-2 text-white">Graphics and Web Designing</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/media/print-and-publishing') }}" class="p-2 text-white">Print and Publishing</a> </li>
                            <li class="nav-list"> <a href="{{ url('courses/degree/bsc-in-graphics-and-vfx') }}" class="p-2 text-white">B.Sc. - Graphics & VFX</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <span class="h4 text-white">Navigation</span>
                        <div class="white-line my-3"></div>
                    </div>
                    <div>
                        <ul class="d-flex flex-column">
                            <li class="nav-list"> <a href="{{ url('/') }}" class="p-2 text-white">Home</a> </li>
                            <li class="nav-list"> <a href="{{ url('/placements') }}" class="p-2 text-white">Placements</a> </li>
                            <li class="nav-list"> <a href="{{ url('/courses') }}" class="p-2 text-white">Courses</a> </li>
                            <li class="nav-list"> <a href="{{ url('/contact-us') }}" class="p-2 text-white">Contact Us</a> </li>
                            <li class="nav-list"> <a href="http://blog.arenakamanahalli.in/category/events/" class="p-2 text-white">Events</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <span class="h4 text-white">Contact Us</span>
                        <div class="white-line my-3"></div>
                    </div>
                    <div>
                        <section class="contact-icons">
                            <div class="content">
                                <div class="contact">
                                    <i class="fas fa-mobile" style="color:white;font-size:
                                25px;"></i>
                                </div>
                                <div class="content-1">
                                9611980781
                                </div>
                            </div>
                            <div class="content">
                                <div class="contact">
                                <i class="fab fa-facebook" style="color:white;font-size:
                                25px;"></i>
                                </div>
                                <div class="content-1">
                                9611980781
                                </div>
                            </div>
                            <div class="content">
                                <div class="contact">
                                <i class="fas fa-envelope" style="color:white;font-size:
                                25px;"> </i>
                                </div>
                                <div class="content-1">
                                9611980781
                                </div>
                            </div>
                            <div class="content">
                                <div class="contact">
                                <i class="fab fa-instagram" style="color:white;font-size:
                                25px;"></i>
                                </div>
                                <div class="content-1">
                                9611980781
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center p-2 ">
            <p class="w-50 mx-auto text-white p-0 m-0">
                &copy; 2020 Arena Animation Kammanahalli
            </p>
        </div>
    </section>

    <!-- form -->
    <section class="form-wrapper">
        <section class="form-wrapper-btn d-flex justify-content-between align-content-center">
            <div>
                <span>CONTACT US NOW </span>
                <div>
                9611980781
                </div>
            </div>
            <div class="bg-white"  id="openFormIcon" style="display:none">
                <i class="fas fa-angle-up p-2 text-dark" id="openForm" style="font-size:20px"></i>
            </div>
            <div class="bg-white" id="closeFormIcon">
                <i class="fas fa-angle-down p-2 text-dark" id="closeForm" style="font-size:20px"></i>
            </div>
        </section>
        <section class="form-wrapper-content">
            <div>
                <div class="p-2">
                    <p class="h4">ENROLL NOW</p>
                    <span>Free Counselling</span>
                    
                </div>
                <div>
                    <form action="/contactForm" method="POST">
                    <div class="p-2">
                        <input class="form-control" type="text" placeholder="Enter Your Name" name="username" value="{{ old('username') }}"> 
                        <div class="text-danger" style="font-size:12px; padding:5px;">{{ $errors->first('username') }}</div>
                    </div>
                    <div class="p-2">
                        <input type="number" class="form-control" placeholder="Phone Number" name="phoneno" value="{{ old('phoneno') }}">
                        <div class="text-danger" style="font-size:12px; padding:5px;">{{ $errors->first('phoneno') }}</div>
                    </div>
                    <div class="p-2">
                        <input type="email" class="form-control" placeholder="Email id" name="email" value="{{ old('email') }}"> 
                        <div class="text-danger" style="font-size:12px; padding:5px;"> {{ $errors->first('email') }}</div>
                    </div>
                    <div class="p-2">
                        <select name="coursetype" id="" class="form-control">
                            <option value="VFX PRIME">VFX PRIME</option>
                            <option value="VFX PRIME">VFX PRIME</option>
                            <option value="VFX PRIME">VFX PRIME</option>
                            <option value="VFX PRIME">VFX PRIME</option>
                            <option value="VFX PRIME">VFX PRIME</option>
                            <option value="VFX PRIME">VFX PRIME</option>
                        </select>
                    </div>
                </div>
                <div class="p-2">
                    @csrf
                    <input type="submit" value="SUBMIT" id="contact" class="form-control font-weight-bold bg-warning btn text-white">
                </div>
                </form>   
            </div>
        </section>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>    
        $().ready(()=>{
            $("#nav-icon-open").click(()=>{
                console.log("clicked");
                $("#nav-list").addClass("nav-list").css("display","block");
            });
            $("#nav-icon-close").click(()=>{
                $("#nav-list").removeClass("nav-list").css("display","none");
            });
        });
    </script>
</body>
</html>