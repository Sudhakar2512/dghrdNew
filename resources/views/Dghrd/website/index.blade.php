@extends('Dghrd.website.layouts.main')
@section('main-section')

<div class="container-fluid px-0">
<div class="news-marquee-div">
     <div class="news-title-marquee">
         <p class="my-auto">News Updates</p>
     </div>
     
     <marquee class="news-marquee">
        <div class="d-flex">
           <li class="me-4">Press Rlease of decisions of the 53rd GST Council <i class="fa fa-file-pdf-o ms-1 text-danger icon-ani"></i></li>
           <li class="me-4">Calling for options for posting of Group B Officers to the grade of Assistant Commissioner vide Office order No. 171/2023 dated 10.10.2023-reg. <i class="fa fa-file-pdf-o ms-1 text-danger icon-ani"></i></li>
           <li class="me-4">Result of Customs Brokers Licensing Oral Examination, 2024 held in the month of June, 2024 <i class="fa fa-file-pdf-o ms-1 text-danger icon-ani"></i></li>
        </div>
     </marquee>
     <div class="news-btn-marquee">
        <a href="{{url('latest-news')}}" class="aa">View All</a>
     </div>
</div>
</div>

<div class="container-fluid px-0 px-md-3">
    <div class="row col-12 mx-auto px-0 landing-main-container">
        <!--left div options-->
           <div class="col-lg-3 col-md-6 col-sm-6 col-6 left-div pe-lg-auto pe-1">
             <a class="aa" href="{{url('/manuals')}}" aria-label="view manual">
              <div class="side-menu-card mt-0">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/manual.png')}}" alt="Manuals">
                   </div>
                   <div class="side-menu-title text-center">
                      Manuals
                   </div>
              </div>
             </a>  
             
            <a href="{{url('/posting_transfers')}}" class="aa" aria-label="view Transfer & Posting">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/exchanging.png')}}" alt="Transfer And Posting">
                   </div>
                   <div class="side-menu-title text-center">
                      Transfer & Posting
                   </div>
              </div>
            </a>

            <a href="{{url('/asset_register')}}" class="aa" aria-label="view Asset Register">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/asset-register.png')}}" alt="Asset register">
                   </div>
                   <div class="side-menu-title text-center">
                      Asset Register
                   </div>
              </div>
            </a>
           
           <a href="{{url('/schemes')}}" class="aa" aria-label="view Welfare Schemes">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/welfare.png')}}" alt="Welfare schemes">
                   </div>
                   <div class="side-menu-title text-center">
                      Welfare Schemes
                   </div>
              </div>
           </a>


            <!--<a class="aa" href="{{url('/gallery_album')}}" aria-label="view Photo Gallery">-->
            <!--  <div class="side-menu-card">-->
            <!--       <div class="side-menu-icon side-icon-left">-->
            <!--          <img src="{{asset('public/assets/images/side-icon/gallery.png')}}" alt="Gallery">-->
            <!--       </div>-->
            <!--       <div class="side-menu-title text-center">-->
            <!--          Photo Gallery-->
            <!--       </div>-->
            <!--  </div>-->
            <!--</a>-->
            

            
            <a class="aa" href="{{url('/HR-con')}}" aria-label="view HR conference">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/restructuring.png')}}" alt=" H R conference">
                   </div>
                   <div class="side-menu-title text-center">
                      HR Conference
                   </div>
              </div>
            </a>

            <a class="aa" href="{{url('/civil_list')}}" aria-label="view civil list">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/civil-list.png')}}" alt="Civil List">
                   </div>
                   <div class="side-menu-title text-center">
                      Civil List
                   </div>
              </div>
            </a>

            <a class="aa" href="https://demo.riveyrainfotech.com/Apar_module/login" target="_blank" aria-label="view module">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/apar-module.png')}}" alt="Apar Module">
                   </div>
                   <div class="side-menu-title text-center">
                      APAR Module
                   </div>
              </div>
            </a>

            <a class="aa" href="{{url('/infrastructure_projects')}}" aria-label="view Upcoming Infrastructure">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/project.png')}}" alt="Infrastructure Project">
                   </div>
                   <div class="side-menu-title text-center">
                      Ongoing/Upcoming Infrastructure Projects
                   </div>
              </div>
            </a>

            <a class="aa" href="{{url('/apar')}}" aria-label="view apar/IPR">
              <div class="side-menu-card">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/missing.png')}}" alt="Apar Module">
                   </div>
                   <div class="side-menu-title text-center">
                      Missing APAR/IPR
                   </div>
              </div>
            </a>

            <a class="aa" href="{{url('/half_yearly_brochure')}}" aria-label="view Half Yearly brochure">
              <div class="side-menu-card mb-0">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/brochure.png')}}" alt="Half Yearly">
                   </div>
                   <div class="side-menu-title text-center">
                    Half Yearly Brochure
                   </div>
              </div>
            </a>  
            <a class="aa" href="{{url('/rti')}}" aria-label="view RTI">
              <div class="side-menu-card mb-0">
                   <div class="side-menu-icon side-icon-left">
                      <img src="{{asset('public/assets/images/side-icon/RTI.png')}}" alt="Half Yearly">
                   </div>
                   <div class="side-menu-title text-center">
                   RTI
                   </div>
              </div>
            </a> 
            
           </div>
        <!--Right div-->
           <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-lg-3 right-div ps-lg-auto ps-1">
              <a class="aa" href="https://demo.amaxjobs.com/dpc/login" target="_blank" aria-label="view DPC module">
                <div class="side-menu-card mt-0">
                   <div class="side-menu-title">
                     DPC Module for Group B and C Officers
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/businessman.png')}}" alt="DPC Module">
                    </div>
                </div>
              </a>
     
            <a class="aa" href="https://demo.amaxjobs.com/Infra/" target="_blank" aria-label="view Smart Infra CBIC">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     SMART-Infra CBIC
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/swachhta.png')}}" alt="SMART-Infra CBIC">
                    </div>
              </div>
            </a>
 
            <a class="aa" href="https://amaxjobs.com/dghrdreports/login_form" target="_blank" aria-label="view Reports">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     Upload Reports
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/upload.png')}}" alt=" Upload Reports">
                   </div>
              </div>
            </a>

            <a class="aa" href="https://demo.riveyrainfotech.com/swachhta_dghrd/" target="_blank" aria-label="view Swachhta CBIC"> 
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     SWACHHTA@CBIC
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/environment.png')}}" alt="SWACHHTA@CBIC">
                    </div>
              </div>
            </a>
 
            <a class="aa" href="https://demo.riveyrainfotech.com/E-Bhugtaan/" target="_blank" aria-label="open E-bhugtan module">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     E-BHUGTAN Module
                   </div>
                   <div class="side-menu-icon side-icon-right">
                    <img src="{{asset('public/assets/images/side-icon/bhugtan.png')}}" alt=" E-BHUGTAN Module">
                    </div>
              </div>
            </a>

            <a class="aa" href="javascript:void(0);" aria-label="view Annual Vehical Report">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     Annual Vehicle Reports
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/vehicle-report.png')}}" alt="Annual Vehicle Reports">
                    </div>
              </div>
            </a>

            <a class="aa" href="https://saccess.nic.in/" target="_blank" aria-label="view Sparrow IRS">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     SPARROW-IRS/CBIC
                   </div> 
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/sparrow-irs.png')}}" alt="Sparrow IRS CBIC">
                    </div>
              </div>
            </a>

            <a class="aa" href="https://services.eoffice.gov.in/IPRSTATUS/IRS-CBEC" target="_blank" aria-label="view IPR_status">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     IPR Status (IRS-CBIC)
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/RTI.png')}}" alt="RTI">
                    </div>
              </div>
            </a>
 

 
            <a class="aa" href="{{url('/regularization')}}" aria-label="view regularization">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                    Regularization
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/training.png')}}" alt="Regularization">
                    </div>
              </div>
            </a>

            <a class="aa" href="javascript:void(0);" aria-label="view archvies">
              <div class="side-menu-card">
                   <div class="side-menu-title">
                     Archives
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/archive.png')}}" alt="Archives">
                    </div>
              </div>
            </a>

            <a href="{{url('/tender_notice')}}" class="aa" aria-label="view tenders">
              <div class="side-menu-card mb-0">
                   <div class="side-menu-title">
                     Tenders
                   </div>
                   <div class="side-menu-icon side-icon-right">
                     <img src="{{asset('public/assets/images/side-icon/tender.png')}}" alt="Tendor">
                    </div>
              </div>
            </a>
           </div>
        <!--Center div-->
           <div class="col-lg-6 col-md-12 col-sm-12 col-12 center-div order-lg-2">
                
<!--Banner Div-->
               <div class="banner-div card-shd" >
                <div id="carouselExampleFade" class="carousel slide carousel-fade"  data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                        @foreach($slider as $key => $image)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="3000">
                                  <img src="{{ asset('Admin/Images').'/'.$image->image ?? '' }}" class="d-block banner-img" alt="Slider Image" >
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
               </div>

                <!-- PHOTO GALLERY -->

 
                <div class="col-lg-12   row text-center mx-auto banner-bottom-div"> 
                          <div class="col-lg-6 col-md-6 col-sm-6  ps-sm-0  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                             <div class="card card-leader rounded-0 card-shd h-100">
                                <div class="card-header thm-clr rounded-0">
                                <h5 class="my-auto text-white">Our Leadership</h5>
                                </div>
                                <div class="card-body p-2">
                                    <div class="leader-detail">
                                        <div class="leader-img mx-auto">
                                             <img src="{{asset('public/website/human/leader1.webp')}}" alt="Smt. Nirmala Sitharaman">
                                        </div>
                                        <div class="leader-name">
                                            <h6 class="my-auto">Smt. Nirmala Sitharaman</h6>
                                            <p>Hon'ble Minister of Finance & Corporate Affairs</p>
                                        </div>
                                    </div>
                                    <hr>
                
                                    <div class="leader-detail">
                                        <div class="leader-img mx-auto">
                                             <img src="{{asset('public/website/human/leader2.webp')}}" alt="Sh. Pankaj Chaudhary">
                                        </div>
                                        <div class="leader-name">
                                            <h6 class="my-auto">Sh. Pankaj Chaudhary</h6>
                                            <p class="my-lg-auto mb-md-2">Hon'ble Minister of State for Finance</p>
                                        </div>
                                    </div>
                                   
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6  pe-sm-0  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                             <div class="card card-photo-gallery rounded-0 card-shd ">
                                 <div class="card-header thm-clr rounded-0">
                                    <h5 class="my-auto text-white">Our Gallery</h5>
                                 </div>
                                 <div class="card-body p-0">
                                        <div class="owl-carousel owl-theme " id="gallery-owl">
                                            @foreach($gallery->reverse() as $item)
                                                @php
                                                    $images = json_decode($item->image, true);
                                                @endphp
                                            
                                                @if(!empty($images) && is_array($images))
                                                    @foreach($images as $image)
                                                        <div class="item">
                                                            <img src="{{ asset('Admin/Images') . '/' . $image }}" alt="Icons">
                                                            <div class="img-caption">
                                                                <p class="my-auto txt-clr">{{ $item->title }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </div>   
                                 </div>
                             </div>
                          </div>
                </div>
                <!-- PHOTO GALLERY END-->

           </div>
 
    </div>
</div>









<div class="container my-5" style="background:#fff2e1;">
    <div class="owl-carousel owl-theme" id="bottom-owl">
        @foreach($mini as $image)
            <div class="item my-3 shadow" style="border:2px solid #FFF;">
                <img src="{{asset('Admin/Images').'/'.$image->image ?? ''}}" class="p-2" style="height:95px;" alt="image">
            </div>
        @endforeach
    </div>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script >
$(document).ready(function () {
    var owl = $('#bottom-owl');
    owl.owlCarousel({
        loop: true,
        margin: 25,
        autoplay: true,
        nav: false,
        dots: true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        stagePadding:40,
        autoplayHoverPause: true,
        // rewind:true,
        responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        767:{
            items:3
        },
        1000:{
            items:4
        },
        1250:{
            items:6
        }
    }
    });
});



$(function() {
    $('marquee').mouseover(function() {
        $(this).attr('scrollamount',0);
    }).mouseout(function() {
         $(this).attr('scrollamount',5);
    });
});

const marquee = document.querySelector('.news-marquee');

  marquee.addEventListener('mouseover', function() {
    this.stop();
  });

  marquee.addEventListener('mouseout', function() {
    this.start();
  });

  
</script>

<script>
$(document).ready(function () {
    var owl2 = $('#gallery-owl');
    owl2.owlCarousel({
        loop: true,                // Enable infinite looping
        margin:5,                // Margin between items
        autoplay: true,            // Enable autoplay
        nav: true,                 // Show navigation buttons
        dots:false,                // Show pagination dots
        animateOut: 'fadeOut',     // Fade out transition
        animateIn: 'fadeIn',       // Fade in transition
        autoplayTimeout: 4000,     // Time between slides (4 seconds)
        autoplaySpeed: 4000,       // Transition speed (4 seconds)
        stagePadding:2,          // Padding on the sides
        autoplayHoverPause: true,  // Pause on hover
        responsive: {              // Responsive breakpoints
            0: {
                items: 1           // 1 item on small screens
            },
          
            800: {
                items:1       // 3 items on medium screens
            },
            992: {
                items: 1           // 1 item on large screens
            }
        }
    });
});

</script>
@endsection





