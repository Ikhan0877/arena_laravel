$(document).ready(function() {

// our course page slider
    $('#our-courses-content').owlCarousel({
      items: 1,
      loop: false,
      center: true,
      margin: 10,
      callbacks: true,
      URLhashListener: true,
      autoplayHoverPause: true,
      startPosition: 'URLHash',
      dots:false,
      // nav:true,
      // navContainerClass:'owl-nav-course'
    });

    $('.courseNextBtn').click(function() {
      $('#our-courses-content').trigger('next.owl.carousel');
    });
  // Go to the previous item
    $('.coursePrevBtn').click(function() {
        $('#our-courses-content').trigger('prev.owl.carousel', [300]);
    });

// terms page
    // slider

    $('#courses-term-content').owlCarousel({
      items: 1,
      loop: false,
      center: true,
      margin: 10,
      callbacks: true,
      URLhashListener: true,
      autoplayHoverPause: true,
      startPosition: 'URLHash',
      dots:false,
      // nav:true,
      // navContainerClass:'owl-nav-course'
    });

    $('.courseTermNextBtn').click(function() {
      $('#courses-term-content').trigger('next.owl.carousel');
    });
  // Go to the previous item
    $('.courseTermPrevBtn').click(function() {
        $('#courses-term-content').trigger('prev.owl.carousel', [300]);
    });

    $('#student-works-img').owlCarousel({
      items: 4,
      loop: false,
      center: false,
      margin: 10,
      callbacks: true,
      // URLhashListener: true,
      autoplayHoverPause: true,
      // startPosition: 'URLHash',
      dots:false,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            // nav:true,
            loop:false
        }
      }
    });

    // open and close form
    $('#openForm').click(()=>{
      console.log('clicked');
      $('.form-wrapper-content').css("height","auto");
      $('#openFormIcon').css("display","none");
      $('#closeFormIcon').css("display","block");
      $('.form-wrapper-content').css("padding","20px");
    });
    $('#closeForm').click(()=>{
      console.log('clicked');
      $('.form-wrapper-content').css("height","0px");
      $('.form-wrapper-content').css("padding","0px");
      $('#openFormIcon').css("display","block");
      $('#closeFormIcon').css("display","none");
    });
    
    // 
    // $('#contact').click((e)=>{
    //         e.preventDefault();
    //         $username = $("input[name='username']").val();
    // 	    $phoneno = $("input[name='phoneno']").val();
    // 	    $email = $("input[name='email']").val();
    // 	    $coursetype = $("input[name='coursetype']").val(); 
    // 	    console.log($usename+$phoneno+$email+$coursetype);
    // });
});