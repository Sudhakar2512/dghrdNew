@extends('Dghrd.website.layouts.main')
@section('main-section')

<div class="container-fluid px-0">
  <div class="news-marquee-div">
    <div class="news-title-marquee">
      <p class="my-auto">समाचार अपडेट</p>
    </div>

    <marquee class="news-marquee">
      <div class="d-flex">
        <li class="me-4">53वीं जीएसटी परिषद के निर्णयों की प्रेस विज्ञप्ति <i class="fa fa-file-pdf-o ms-1 text-danger icon-ani"></i></li>
        <li class="me-4">कार्यालय आदेश संख्या 171/2023 दिनांक 10.10.2023 के अनुसार सहायक आयुक्त ग्रेड के लिए समूह बी अधिकारियों की पोस्टिंग हेतु विकल्प आमंत्रित। <i class="fa fa-file-pdf-o ms-1 text-danger icon-ani"></i></li>
        <li class="me-4">कस्टम ब्रोकर्स लाइसेंसिंग मौखिक परीक्षा, जून 2024 का परिणाम <i class="fa fa-file-pdf-o ms-1 text-danger icon-ani"></i></li>
      </div>
    </marquee>
    <div class="news-btn-marquee">
      <a href="{{url('latest-news')}}" class="aa">सभी देखें</a>
    </div>
  </div>
</div>

<div class="container-fluid px-0 px-md-3">
  <div class="row col-12 mx-auto px-0 landing-main-container">
    <!--left div options-->
    <div class="col-lg-3 col-md-6 col-sm-6 col-6 left-div pe-lg-auto pe-1">
      <a class="aa" href="{{url('/manuals')}}" aria-label="मैनुअल देखें">
        <div class="side-menu-card mt-0">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/manual.png')}}" alt="मैनुअल">
          </div>
          <div class="side-menu-title text-center">
            मैनुअल
          </div>
        </div>
      </a>

      <a href="{{url('/posting_transfers')}}" class="aa" aria-label="स्थानांतरण और पदस्थापन देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/exchanging.png')}}" alt="स्थानांतरण और पदस्थापन">
          </div>
          <div class="side-menu-title text-center">
            स्थानांतरण और पदस्थापन
          </div>
        </div>
      </a>

      <a href="{{url('/asset_register')}}" class="aa" aria-label="संपत्ति रजिस्टर देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/asset-register.png')}}" alt="संपत्ति रजिस्टर">
          </div>
          <div class="side-menu-title text-center">
            संपत्ति रजिस्टर
          </div>
        </div>
      </a>

      <a href="{{url('/schemes')}}" class="aa" aria-label="कल्याणकारी योजनाएँ देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/welfare.png')}}" alt="कल्याणकारी योजनाएँ">
          </div>
          <div class="side-menu-title text-center">
            कल्याणकारी योजनाएँ
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/HR-con')}}" aria-label="एचआर सम्मेलन देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/restructuring.png')}}" alt="एचआर सम्मेलन">
          </div>
          <div class="side-menu-title text-center">
            एचआर सम्मेलन
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/civil_list')}}" aria-label="सिविल सूची देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/civil-list.png')}}" alt="सिविल सूची">
          </div>
          <div class="side-menu-title text-center">
            सिविल सूची
          </div>
        </div>
      </a>

      <a class="aa" href="https://demo.riveyrainfotech.com/Apar_module/login" target="_blank" aria-label="एपीएआर मॉड्यूल देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/apar-module.png')}}" alt="एपीएआर मॉड्यूल">
          </div>
          <div class="side-menu-title text-center">
            एपीएआर मॉड्यूल
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/infrastructure_projects')}}" aria-label="चालू/आगामी अवसंरचना परियोजनाएँ देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/project.png')}}" alt="अवसंरचना परियोजनाएँ">
          </div>
          <div class="side-menu-title text-center">
            चालू/आगामी अवसंरचना परियोजनाएँ
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/apar')}}" aria-label="लापता एपीएआर/IPR देखें">
        <div class="side-menu-card">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/missing.png')}}" alt="लापता एपीएआर/IPR">
          </div>
          <div class="side-menu-title text-center">
            लापता एपीएआर/आईपीआर
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/half_yearly_brochure')}}" aria-label="अर्धवार्षिक पुस्तिका देखें">
        <div class="side-menu-card mb-0">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/brochure.png')}}" alt="अर्धवार्षिक पुस्तिका">
          </div>
          <div class="side-menu-title text-center">
            अर्धवार्षिक पुस्तिका
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/rti')}}" aria-label="सूचना का अधिकार (RTI) देखें">
        <div class="side-menu-card mb-0">
          <div class="side-menu-icon side-icon-left">
            <img src="{{asset('public/assets/images/side-icon/RTI.png')}}" alt="सूचना का अधिकार">
          </div>
          <div class="side-menu-title text-center">
            सूचना का अधिकार (आरटीआई)
          </div>
        </div>
      </a>

    </div>

    <!--Right div-->
    <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-lg-3 right-div ps-lg-auto ps-1">
      <a class="aa" href="https://demo.amaxjobs.com/dpc/login" target="_blank" aria-label="डीपीसी मॉड्यूल देखें">
        <div class="side-menu-card mt-0">
          <div class="side-menu-title">
            डीपीसी मॉड्यूल (समूह बी और सी अधिकारी)
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/businessman.png')}}" alt="डीपीसी मॉड्यूल">
          </div>
        </div>
      </a>

      <a class="aa" href="https://demo.amaxjobs.com/Infra/" target="_blank" aria-label="स्मार्ट-इन्फ्रा CBIC देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            स्मार्ट-इन्फ्रा सीबीआईसी
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/swachhta.png')}}" alt="स्मार्ट-इन्फ्रा CBIC">
          </div>
        </div>
      </a>

      <a class="aa" href="https://amaxjobs.com/dghrdreports/login_form" target="_blank" aria-label="रिपोर्ट अपलोड करें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            रिपोर्ट अपलोड करें
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/upload.png')}}" alt="रिपोर्ट अपलोड करें">
          </div>
        </div>
      </a>

      <a class="aa" href="https://demo.riveyrainfotech.com/swachhta_dghrd/" target="_blank" aria-label="स्वच्छता CBIC देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            स्वच्छता@CBIC
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/environment.png')}}" alt="स्वच्छता@CBIC">
          </div>
        </div>
      </a>

      <a class="aa" href="https://demo.riveyrainfotech.com/E-Bhugtaan/" target="_blank" aria-label="ई-भुगतान मॉड्यूल खोलें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            ई-भुगतान मॉड्यूल
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/bhugtan.png')}}" alt="ई-भुगतान मॉड्यूल">
          </div>
        </div>
      </a>

      <a class="aa" href="javascript:void(0);" aria-label="वार्षिक वाहन रिपोर्ट देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            वार्षिक वाहन रिपोर्ट
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/vehicle-report.png')}}" alt="वार्षिक वाहन रिपोर्ट">
          </div>
        </div>
      </a>

      <a class="aa" href="https://saccess.nic.in/" target="_blank" aria-label="स्पैरो IRS देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            स्पैरो-आईआरएस/सीबीआईसी
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/sparrow-irs.png')}}" alt="स्पैरो-आईआरएस CBIC">
          </div>
        </div>
      </a>

      <a class="aa" href="https://services.eoffice.gov.in/IPRSTATUS/IRS-CBEC" target="_blank" aria-label="आईपीआर स्थिति देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            आईपीआर स्थिति (आईआरएस-सीबीआईसी)
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/RTI.png')}}" alt="आरटीआई">
          </div>
        </div>
      </a>

      <a class="aa" href="{{url('/regularization')}}" aria-label="नियमितीकरण देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            नियमितीकरण
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/training.png')}}" alt="नियमितीकरण">
          </div>
        </div>
      </a>

      <a class="aa" href="javascript:void(0);" aria-label="अभिलेखागार देखें">
        <div class="side-menu-card">
          <div class="side-menu-title">
            अभिलेखागार
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/archive.png')}}" alt="अभिलेखागार">
          </div>
        </div>
      </a>

      <a href="{{url('/tender_notice')}}" class="aa" aria-label="निविदाएं देखें">
        <div class="side-menu-card mb-0">
          <div class="side-menu-title">
            निविदाएं
          </div>
          <div class="side-menu-icon side-icon-right">
            <img src="{{asset('public/assets/images/side-icon/tender.png')}}" alt="निविदाएं">
          </div>
        </div>
      </a>
    </div>

    <!--Center div-->
    <div class="col-lg-6 col-md-12 col-sm-12 col-12 center-div order-lg-2">

      <!--Banner Div-->
      <div class="banner-div card-shd">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <div class="carousel-inner">
            @foreach($slider as $key => $image)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="3000">
              <img src="{{ asset('Admin/Images').'/'.$image->image ?? '' }}" class="d-block banner-img" alt="Slider Image">
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
              <h6 class="my-auto text-white">हमारा नेतृत्व</h6>
            </div>
            <div class="card-body p-2">
              <div class="leader-detail">
                <div class="leader-img mx-auto">
                  <img src="{{asset('public/website/human/leader1.webp')}}" alt="श्रीमती निर्मला सीतारमण">
                </div>
                <div class="leader-name">
                  <h6 class="my-auto">श्रीमती निर्मला सीतारमण</h6>
                  <p>माननीय वित्त और कॉर्पोरेट मामलों की मंत्री</p>
                </div>
              </div>
              <hr>

              <div class="leader-detail">
                <div class="leader-img mx-auto">
                  <img src="{{asset('public/website/human/leader2.webp')}}" alt="श्री पंकज चौधरी">
                </div>
                <div class="leader-name">
                  <h6 class="my-auto">श्री पंकज चौधरी</h6>
                  <p class="my-lg-auto mb-md-2">माननीय वित्त राज्य मंत्री</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6  pe-sm-0  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
          <div class="card card-photo-gallery rounded-0 card-shd ">
            <div class="card-header thm-clr rounded-0">
              <h6 class="my-auto text-white">हमारा गैलरी</h6>
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
<script>
  $(document).ready(function() {
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
      stagePadding: 40,
      autoplayHoverPause: true,
      // rewind:true,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 2
        },
        767: {
          items: 3
        },
        1000: {
          items: 4
        },
        1250: {
          items: 6
        }
      }
    });
  });



  $(function() {
    $('marquee').mouseover(function() {
      $(this).attr('scrollamount', 0);
    }).mouseout(function() {
      $(this).attr('scrollamount', 5);
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
  $(document).ready(function() {
    var owl2 = $('#gallery-owl');
    owl2.owlCarousel({
      loop: true, // Enable infinite looping
      margin: 5, // Margin between items
      autoplay: true, // Enable autoplay
      nav: true, // Show navigation buttons
      dots: false, // Show pagination dots
      animateOut: 'fadeOut', // Fade out transition
      animateIn: 'fadeIn', // Fade in transition
      autoplayTimeout: 4000, // Time between slides (4 seconds)
      autoplaySpeed: 4000, // Transition speed (4 seconds)
      stagePadding: 2, // Padding on the sides
      autoplayHoverPause: true, // Pause on hover
      responsive: { // Responsive breakpoints
        0: {
          items: 1 // 1 item on small screens
        },

        800: {
          items: 1 // 3 items on medium screens
        },
        992: {
          items: 1 // 1 item on large screens
        }
      }
    });
  });
</script>
@endsection