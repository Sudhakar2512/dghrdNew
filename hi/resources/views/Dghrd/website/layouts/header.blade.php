<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="images/x-icon" href="{{asset('website/human/icon/dghrd-logo.png')}}" />
  <title>मानव संसाधन विकास महानिदेशालय (डीजीएचआरडी)</title>
  <link rel="stylesheet" href="{{asset('website/css/menu.css')}}">
  <!--<link rel="stylesheet" href="{{asset('website/css/bootnavbar.css')}}">-->
  <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('website/js/dist/simple-lightbox.css?v2.14.0')}}" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel JavaScript -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Hidden Google Translate Element -->
  <div id="google_translate_element" style="display: none;"></div>

  <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
          pageLanguage: 'en',
          includedLanguages: 'en,hi',
          autoDisplay: false
        },
        'google_translate_element'
      );
    }

    function translateLanguage(lang) {
      var selectField = document.querySelector(".goog-te-combo");
      if (selectField) {
        selectField.value = lang;
        selectField.dispatchEvent(new Event("change"));
      }
    }
  </script>

  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  <style>
    .translate-btn {
      text-decoration: none;
      color: #000;

    }
  </style>



</head>

<body>

  <div class="d-flex justify-content-center">
    <div class="container-fluid " style="border-bottom:2px solid lightgrey;">
      <div class="row mx-auto my-2">
        <div class="col-lg-6 col-md-9 col-sm-9 col-7 d-flex align-items-center">
          <!--<div class="d-flex align-item-center">-->
          <div class="d-flex align-items-center">
            <img src="{{asset('website/human/flag.png')}}" alt="indian flag">
          </div>
          <div class="ms-2 fw-bold">
            <p style="white-space:nowrap;" class="my-auto">भारत सरकार</p>
          </div>
          <!--<div>-->
          <!--  <a href="javascript:void(0);" class="ms-5 aa text-dark d-none d-sm-block" style="white-space:nowrap;">FAQ |</a>-->
          <!--</div>-->
          <!--<div>-->
          <!--  <a href="javascript:void(0);" class="ms-2 aa text-dark d-none d-md-block" style="white-space:nowrap;">Feedback |</a>-->
          <!--</div>-->
          <!--<div>-->
          <!--  <a href="javascript:void(0);" class="ms-2 aa text-dark d-none d-md-block" style="white-space:nowrap;">SiteMap |</a>-->
          <!--</div>-->
          <!--<div>-->
          <!--  <a href="javascript:void(0);" class="ms-2 aa text-dark d-none d-sm-block" style="white-space:nowrap;">Contact Us </a>-->
          <!--</div>-->
          <!--</div>-->
          <!--div close for d-flex-->
        </div><!--div close for the col-lg-6 main-->

        <div class="col-lg-4  mx-auto d-none d-lg-block" id="phone">
          <!--<div class="d-flex align-items-center  my-auto"  id="phone2">-->
          <!--  <div class="">-->
          <!--    <p class="text-mute my-auto" style="white-space:nowrap;"><span>Skip to Main Content |</span></p>-->
          <!--  </div>-->
          <!--  <div class=" ms-2">-->
          <!--    <p class="text-mute my-auto"  style="white-space:nowrap;"><span>Screen Reader Access</span></p>-->
          <!--  </div>-->

          <!--</div>-->
          <!--div close for d-flex-->
        </div><!--div close for col-lg-4 main-->

        <div class="col-lg-2 col-md-3 col-sm-3 col-5">
          <div class="d-flex align-items-center">
            <div>
              <a href="http://127.0.0.1:8000/" class="text-mute my-auto translate-btn">अंग्रेज़ी</a>
            </div>
            <div class="ms-3">
              <a href="http://127.0.0.1:8000/hi/" class="text-mute my-auto translate-btn">हिन्दी</a>
            </div>
            <div class="ms-auto">
              <div class="header-search-wrapper">
                <span class="search-main">
                  <i class="fa fa-search"></i>
                </span>
                <div class="search-form-main clearfix">
                  <form role="search" name="search" method="get" class="search-form" action="sitename.com/">
                    <div class="form-group">
                      <input type="search" class="search-field form-control" placeholder="खोज …" value="" name="txt">
                      <button class="btn btn-success btn-search">खोज</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!--div close for d-flex-->
        </div><!--div close for the col-lg-2-->
      </div>
      <!-- <div class="divider border-bottom" style="background:#364694;"></div> -->

    </div>
  </div>

  <section class="">
    <!--<div class="row col-12 headings border-bottom mx-auto d-block d-md-none ">-->
    <!--    <h2 class="text-center py-2 " style=" font-size: 20px !important;"> Directorate General of Human Resource Development</h2>-->
    <!--</div> -->
    <div class="d-flex justify-content-center">

      <div class="container-fluid ">
        <div class="row mx-auto col-12 ">

          <div class="col-lg-2 col-md-2 col-sm-2 col-2 d-flex align-items-center justify-content-center px-0">
            <div class="text-center ">
              <img src="{{asset('website/human/Gov-india.webp')}}" alt="icon" class=" p-1 p-sm-2 head-img" style="width:100%;">
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
            <div class="h-100 d-flex align-items-center justify-content-center">
              <div class="text-center headings">
                <h3 class="mbl-heading">मानव संसाधन विकास महानिदेशालय</h3>
                <h5 class="d-none d-sm-block my-auto">केंद्रीय अप्रत्यक्ष कर एवं सीमा शुल्क बोर्ड</h5>
                <h5 class="d-none d-lg-block my-auto">राजस्व विभाग</h5>
                <h5 class="d-none d-lg-block my-auto">वित्त मंत्रालय</h5>
                <h5 class="d-none d-md-block my-auto">भारत सरकार</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 d-flex align-items-center justify-content-center px-0">
            <div class="text-center">
              <img src="{{asset('website/human/dghrd-logo.webp')}}" class="p-1 p-sm-2 head-img" alt="icon" style="width:100%;">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!--<section>-->
  <header>
    <nav class="navbar navbar-expand-lg shadow ">
      <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0);">

        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
          <span class="hamburger-toggle">
            <span class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('/') }}">होम</a>
            </li>
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" aria-current="page" href="{{ url('/index2') }}">Home2</a>-->
            <!--</li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">हमारे बारे में</a>
              <ul class="dropdown-menu shadow ">
                <li><a class="dropdown-item" href="{{url('who-we-are')}}">हम जो हैं</a></li>
                <li><a class="dropdown-item" href="{{ url('cbic') }}">सीबीआईसी</a></li>
                <li><a class="dropdown-item" href="{{url('contact-us')}}">हमसे संपर्क करें</a></li>
                <li><a class="dropdown-item" href="{{url('citizen')}}">नागरिक चार्टर</a></li>
                <li><a class="dropdown-item" href="{{url('/gallery_album')}}">फोटो गैलरी</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">एचआरएम 1</a>
              <!--1st level dropdown start-->
              <ul class="dropdown-menu shadow ">
                <li class="dropend"><!--1st level dropdown start-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">स्पैरो-आईआरएस</a>
                  <!-- द्वितीय स्तर ड्रॉपडाउन प्रारंभ -->
                  <ul class="dropdown-menu shadow drop-2">
                    <li><a class="dropdown-item" href="{{ route('sparrow.content', ['tab' => 1]) }}">एपीएआर का ऑनलाइन लेखन</a></li>
                    <li><a class="dropdown-item" href="{{ route('sparrow.content', ['tab' => 2]) }}">आईपीआर का ऑनलाइन लेखन</a></li>
                    <li><a class="dropdown-item" href="{{ route('sparrow.content', ['tab' => 3]) }}">स्पैरो सहायता मैनुअल</a></li>
                    <li><a class="dropdown-item" href="{{url('sparrow-help_desk')}}">स्पैरो सहायता डेस्क</a></li>
                  </ul>
                  <!--2nd level dropdown End-->
                </li><!--1st level dropdown close-->
                <!--1st level dropdown start-->
                <li class="dropend">
                  <a href="javascript:void(0);" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">एपीएआर</a>
                  <!-- द्वितीय स्तर ड्रॉपडाउन प्रारंभ -->
                  <ul class="dropdown-menu shadow drop-2">
                    <li><a class="dropdown-item" href="{{url('apar')}}">गुमशुदा एपीएआर</a></li>
                  </ul>
                  <!-- द्वितीय स्तर ड्रॉपडाउन समाप्त -->
                </li>
                <!--1st level drop down close-->
                <!--1st level dropdown start-->
                <li class="dropend">
                  <a href="javascript:void(0);" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">आईपीआर</a>
                  <!-- द्वितीय स्तर ड्रॉपडाउन प्रारंभ -->
                  <ul class="dropdown-menu shadow drop-2">
                    <li><a class="dropdown-item" href="{{url('ipr')}}">पत्र</a></li>
                    <li><a class="dropdown-item" href="https://services.eoffice.gov.in/IPRSTATUS/IRS-CBEC" target="_blank">आईपीआर स्थिति</a></li>
                  </ul>
                  <!-- द्वितीय स्तर ड्रॉपडाउन समाप्त -->
                </li>
                <!--1st level dropdown close-->
                <!--1st level dropdown start-->
                <li class="dropend">
                  <a href="javascript:void(0);" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">भर्ती नियम</a>
                  <!-- द्वितीय स्तर ड्रॉपडाउन प्रारंभ -->
                  <ul class="dropdown-menu shadow drop-2">
                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">समूह ए</a>
                      <!--3rd level menu start-->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 1]) }}">सहायक निदेशक (ओएल) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 2]) }}">सीएओ के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 3]) }}">उप निदेशक (ओएल) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 4]) }}">आईआरएस के भर्ती नियम</a></li>
                      </ul>
                      <!--3rd level menu end-->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">समूह बी</a>
                      <!-- तृतीय स्तर ड्रॉपडाउन प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 1]) }}">प्रशासनिक अधिकारी के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 2]) }}">मूल्यांकनकर्ता के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 3]) }}">परीक्षक के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 4]) }}">कार्यकारी सहायक के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 5]) }}">निरीक्षक (सीईएक्स) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 6]) }}">कनिष्ठ हिंदी अनुवादक के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 7]) }}">निवारक अधिकारी के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 8]) }}">निजी सचिव के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 9]) }}">वरिष्ठ हिंदी अनुवादक के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 10]) }}">वरिष्ठ निजी सचिव के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 11]) }}">आशुलिपिक ग्रेड-1 के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 12]) }}">अधीक्षक (सीईएक्स) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 13]) }}">अधीक्षक (निवारक) के भर्ती नियम</a></li>
                      </ul>
                      <!-- तृतीय स्तर ड्रॉपडाउन समाप्त -->
                    </li>

                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">समूह ग</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 1]) }}">सहायक उप निरीक्षक (हथियार) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 2]) }}">डीओएस के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 3]) }}">ड्राफ्ट्समैन के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 4]) }}">चालकों के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 5]) }}">हवलदार और प्रधान हवलदार के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 6]) }}">निम्न श्रेणी लिपिक (एलडीसी) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 7]) }}">मल्टी-टास्किंग स्टाफ (एमटीएस) के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 8]) }}">रिकॉर्ड कीपर के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 9]) }}">वरिष्ठ कर सहायक के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 10]) }}">आशुलिपिक- II के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 11]) }}">कर सहायक के भर्ती नियम</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">कैंटीन स्टाफ</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('canteen', ['subTabId' => 1]) }}">समूह-ग पद</a></li>
                        <li><a class="dropdown-item" href="{{ route('canteen', ['subTabId' => 2]) }}">प्रबंधक ग्रेड-II और प्रबंधक सह लेखाकार</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">केंद्रीय नारकोटिक्स ब्यूरो<br>(सीबीएन)</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 1]) }}">ड्राइवर विशेष ग्रेड</a></li>
                        <li><a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 2]) }}">ग्रेड-सी ड्राइवर</a></li>
                        <li><a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 3]) }}">समूह-बी पद</a></li>
                        <li><a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 4]) }}">समूह-सी सीबीएन</a></li>
                        <li><a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 5]) }}">एमटीएस सीबीएन</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">सीआरसीएल</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('crcl', ['subTabId' => 1]) }}">रासायनिक सहायक</a></li>
                        <li><a class="dropdown-item" href="{{ route('crcl', ['subTabId' => 2]) }}">सीआरसीएल ग्रेड-ए और बी</a></li>
                        <li><a class="dropdown-item" href="{{ route('crcl', ['subTabId' => 3]) }}">सीआरसीएल ग्रेड-सी</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">डीजीपीएम</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('dgpm', ['subTabId' => 1]) }}">ग्रेड-सी और डी</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">लॉजिस्टिक्स निदेशालय</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('dol', ['subTabId' => 1]) }}">समूह-ए</a></li>
                        <li><a class="dropdown-item" href="{{ route('dol', ['subTabId' => 2]) }}">समूह-बी</a></li>
                        <li><a class="dropdown-item" href="{{ route('dol', ['subTabId' => 3]) }}">समूह-सी और डी</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">डीपीपीआर</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('dppr', ['subTabId' => 1]) }}">ग्रेड-सी और डी पद</a></li>
                        <li><a class="dropdown-item" href="{{ route('dppr', ['subTabId' => 2]) }}">प्रबंधक प्रेस</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>

                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">डीआरआई</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('dri', ['subTabId' => 1]) }}">ग्रेड-सी और डी</a></li>
                        <li><a class="dropdown-item" href="{{ route('dri', ['subTabId' => 2]) }}">इंटेलिजेंस अधिकारी</a></li>
                        <li><a class="dropdown-item" href="{{ route('dri', ['subTabId' => 3]) }}">एसआईओ</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">निदेशालय के भर्ती नियम</a>
                      <!-- तृतीय स्तर मेनू प्रारंभ -->
                      <ul class="dropdown-menu dropdown-submenu shadow drop-3">
                        <li><a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 1]) }}">ग्रुप-सी पद</a></li>
                        <li><a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 2]) }}">अतिरिक्त सहायक निदेशक के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 3]) }}">स्टेनोग्राफर ग्रेड-I के भर्ती नियम</a></li>
                        <li><a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 4]) }}">कर सहायक</a></li>
                        <li><a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 5]) }}">कार्यकारी सहायक</a></li>
                        <li><a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 6]) }}">स्टाफ कार चालक (विशेष ग्रेड)</a></li>
                      </ul>
                      <!-- तृतीय स्तर मेनू समाप्त -->
                    </li>
                    <li><a class="dropdown-item" href="{{ route('telecommunication', ['tab' => 'systum_data_management' ]) }}">सिस्टम और डेटा प्रबंधन</a></li>
                    <li><a class="dropdown-item" href="{{ route('telecommunication', ['tab' => 'telecommunication_wing']) }}">दूरसंचार विंग, <br>लॉजिस्टिक्स निदेशालय</a></li>
                  </ul>
                  <!--2nd level dropdown close-->
                </li><!--1st level dropdown close-->
                <li class="dropend"><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">वरिष्ठता सूची</a>
                  <!--2nd स्तर ड्रॉपडाउन प्रारंभ-->
                  <ul class="dropdown-menu shadow drop-2 ">
                    <li><a class="dropdown-item" href="{{ url('seniority_list') }}">समूह बी</a></li>
                  </ul>
                  <!--2nd स्तर ड्रॉपडाउन समाप्त-->
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->
                <li class="dropend"><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">डीपीसी</a>
                  <!--2nd स्तर ड्रॉपडाउन प्रारंभ-->
                  <ul class="dropdown-menu shadow drop-2 ">
                    <li><a class="dropdown-item" href="{{ route('dpc', ['tab' => 1]) }}">समूह ए</a></li>
                    <li><a class="dropdown-item" href="{{ route('dpc', ['tab' => 2]) }}">समूह बी से ए</a></li>
                  </ul>
                  <!--2nd स्तर ड्रॉपडाउन समाप्त-->
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->


                <li><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item" href="{{url('empanelment_deputation')}}">पैनल गठन एवं प्रतिनियुक्ति</a>
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->
                <li class=""><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item" href="{{url('cadre_restructuring')}}">संवर्ग पुनर्गठन 2018</a>
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->

                <li class="dropend"><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">SPARROW-CBIC</a>
                  <!--2nd स्तर ड्रॉपडाउन प्रारंभ-->
                  <ul class="dropdown-menu shadow drop-2 ">
                    <li><a class="dropdown-item" href="{{url('sparrow_cbic')}}">SPARROW-CBIC के लिए सहायता पुस्तिका</a></li>
                  </ul>
                  <!--2nd स्तर ड्रॉपडाउन समाप्त-->
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->

                <li><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item" href="{{url('officer_detailes')}}">अधिकारी विवरण</a>
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->

                <li><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item" href="{{url('various_communication')}}">फील्ड संरचनाओं के साथ विभिन्न संचार</a>
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->
                <!--1st level dropdown close-->

              </ul><!--1st level ul dropdown close-->
            </li><!--li close for the hrm1-->

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">एचआरएम 2</a>
              <!--1st level dropdown start Hrm2-->
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="{{url('posting_transfers')}}">तैनाती और स्थानांतरण</a></li>
                <li><a class="dropdown-item" href="{{url('e_diposition')}}">समूह A IRS (C&IT) अधिकारियों की<br> ई-निपटान सूची</a></li>
                <li><a class="dropdown-item" href="{{url('sanctioned-working')}}">समूह A IRS (C&IT) अधिकारियों की<br> स्वीकृत और कार्यरत संख्या</a></li>
                <li><a class="dropdown-item" href="{{url('hop')}}">HOP</a></li>
                <li><a class="dropdown-item" href="{{url('empolyee_code')}}">कर्मचारी कोड</a></li>

                <li class="dropend"><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">स्वच्छता कार्य योजना</a>
                  <!--2nd स्तर ड्रॉपडाउन प्रारंभ-->
                  <ul class="dropdown-menu shadow drop-2">
                    <li><a class="dropdown-item" href="{{ route('swachhta', ['tab' => 1]) }}">पत्र</a></li>
                    <li><a class="dropdown-item" href="{{ route('swachhta', ['tab' => 2]) }}">पुरस्कार</a></li>
                    <li><a class="dropdown-item" href="{{ route('swachhta', ['tab' => 3]) }}">पुस्तिकाएँ</a></li>
                    <li><a class="dropdown-item" href="{{ route('swachhta', ['tab' => 4]) }}">व्यय</a></li>
                  </ul>
                  <!--2nd स्तर ड्रॉपडाउन समाप्त-->
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->

                <li><a class="dropdown-item" href="{{url('v_communication')}}">फील्ड संरचनाओं के साथ विभिन्न<br> संचार</a></li>
                <li><a class="dropdown-item" href="{{url('tender_notice')}}">निविदा सूचना</a></li>

                <li class="dropend"><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">सत्यापित डेटा</a>
                  <!--2nd स्तर ड्रॉपडाउन प्रारंभ-->
                  <ul class="dropdown-menu shadow drop-2">
                    <li><a class="dropdown-item" href="{{ route('verified', ['tab' => 1]) }}">उन अधिकारियों की सूची जिनका<br> सत्यापित डेटा लंबित है</a></li>
                    <li><a class="dropdown-item" href="{{ route('verified', ['tab' => 2]) }}">प्रोफार्मा</a></li>
                  </ul>
                  <!--2nd स्तर ड्रॉपडाउन समाप्त-->
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->
                <li><a class="dropdown-item" href="{{url('module_updates')}}">समूह B & C मॉड्यूल अपडेट्स</a></li>
                <li><a class="dropdown-item" href="{{url('irs_officers')}}">समूह A IRS (C & IT) अधिकारी<br> प्रतिनियुक्ति पर</a></li>
                <li><a class="dropdown-item" href="{{url('e_vacency')}}">ई-रिक्ति मॉड्यूल अपडेट्स</a></li>
                <li><a class="dropdown-item" href="{{url('dpc_module')}}">DPC मॉड्यूल अपडेट्स</a></li>

                <li class="dropend"><!--1st स्तर ड्रॉपडाउन प्रारंभ-->
                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">नीति</a>
                  <!--2nd स्तर ड्रॉपडाउन प्रारंभ-->
                  <ul class="dropdown-menu shadow drop-2">
                    <li><a class="dropdown-item" href="{{ route('policy', ['tab' => 1]) }}">आवंटन मॉड्यूल अपडेट्स</a></li>
                    <li><a class="dropdown-item" href="{{ route('policy', ['tab' => 2]) }}">अन्य</a></li>
                  </ul>
                  <!--2nd स्तर ड्रॉपडाउन समाप्त-->
                </li><!--1st स्तर ड्रॉपडाउन समाप्त-->

                <li><a class="dropdown-item" href="{{url('civil_list')}}">सिविल सूची</a></li>

              </ul>
            </li><!--li close for the hrm2-->

            <li class="nav-item dropdown"><!--li open for Infrastructure-->
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">आधारभूत संरचना</a>
              <!--1st स्तर ड्रॉपडाउन प्रारंभ-->
              <ul class="dropdown-menu shadow ">
                <li><a class="dropdown-item" href="{{url('infra_officer_detailes')}}">अधिकारी विवरण</a></li>
                <li><a class="dropdown-item" href="{{url('instructions_details')}}">निर्देश</a></li>
                <li><a class="dropdown-item" href="{{url('fast_track')}}">तेज ट्रैक प्रस्ताव</a></li>
                <li><a class="dropdown-item" href="{{url('infra_ppt')}}">बुनियादी ढांचा पीपीटी</a></li>
                <li><a class="dropdown-item" href="{{url('infra_manual')}}">बुनियादी ढांचा मैनुअल</a></li>
                <li><a class="dropdown-item" href="{{url('asset_register')}}">संपत्ति रजिस्टर</a></li>
                <li><a class="dropdown-item" href="{{url('land_assets')}}">भूमि संपत्ति</a></li>
                <li><a class="dropdown-item" href="{{url('construction')}}">निर्माण परियोजनाएँ</a></li>
                <li><a class="dropdown-item" href="{{url('repair_maintainence')}}">मरम्मत और रखरखाव</a></li>
                <li><a class="dropdown-item" href="{{url('ready_built')}}">तैयार निर्मित आवास</a></li>
                <li><a class="dropdown-item" href="{{url('hired_office')}}">किराए पर लिए गए कार्यालय भवन</a></li>
                <li><a class="dropdown-item" href="{{url('infra_various_communication')}}">क्षेत्रीय इकाइयों के साथ विभिन्न संचार</a></li>
              </ul>
              <!--1st स्तर ड्रॉपडाउन समाप्त-->

            </li><!--li close for Infrastructure-->


            <li class="nav-item dropdown"><!--li open for Welfare-->
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">कल्याण</a>
              <!--1st level dropdown start-->
              <ul class="dropdown-menu shadow ">
                <li><a class="dropdown-item" href="{{url('welfare_officer')}}">अधिकारी विवरण</a></li>
                <li><a class="dropdown-item" href="{{url('compendium')}}">कल्याण योजनाओं का संकलन</a></li>
                <li><a class="dropdown-item" href="{{url('welfare_schems')}}">कल्याण योजनाओं के पोस्टर</a></li>
                <li><a class="dropdown-item" href="{{url('action_plan')}}">कार्य योजना</a></li>
                <li><a class="dropdown-item" href="{{url('schemes')}}">योजनाएँ</a></li>
                <li><a class="dropdown-item" href="{{url('welfare_ppt')}}">कल्याण पीपीटी</a></li>
                <li><a class="dropdown-item" href="{{url('welfare_manual')}}">कल्याण मैनुअल</a></li>
                <li><a class="dropdown-item" href="{{url('comman_facilities')}}">सामान्य सुविधाएँ</a></li>
                <li><a class="dropdown-item" href="{{url('hotel_tie_up')}}">होटल टाई-अप की सूची</a></li>
                <li><a class="dropdown-item" href="{{url('draft_hotels')}}">होटलों की ड्राफ्ट सूची</a></li>
                <li><a class="dropdown-item" href="{{url('guest_house')}}">विभागीय गेस्ट हाउस</a></li>
                <li><a class="dropdown-item" href="{{url('covid')}}">कोविड-19</a></li>
                <li><a class="dropdown-item" href="{{url('welfare_praposals')}}">कल्याण प्रस्तावों की स्थिति</a></li>
                <li><a class="dropdown-item" href="{{url('welfare_communication')}}">क्षेत्रीय इकाइयों के साथ विभिन्न संचार</a></li>
                <li><a class="dropdown-item" href="{{url('shrdhanjali')}}">श्रद्धांजलि</a></li>
              </ul>
              <!--1st level dropdown END-->
            </li><!--li close for Welfare-->

            <li class="nav-item dropdown"><!--li open for EMC-->
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">ईएमसी</a>
              <!--1st level dropdown start-->
              <ul class="dropdown-menu shadow ">
                <li><a class="dropdown-item" href="https://beams.dghrdcbic.gov.in/#/auth/login" target="_blank">बीम्स (BEAMS)</a></li>
                <li><a class="dropdown-item" href="{{url('emc_officer')}}">अधिकारी विवरण</a></li>
                <li><a class="dropdown-item" href="{{url('fund_allocation')}}">निधि आवंटन और उपयोग</a></li>
                <li><a class="dropdown-item" href="{{url('emc_ppt')}}">ईएमसी पीपीटी</a></li>
                <li><a class="dropdown-item" href="{{url('emc_manual')}}">ईएमसी मैनुअल</a></li>
                <li><a class="dropdown-item" href="{{url('budgetary_authority')}}">बजटीय प्राधिकरण, एचओडी, पीएओ, डीडीओ</a></li>
                <li><a class="dropdown-item" href="{{url('gem_eprocurements')}}">GeM/ई-प्रोक्योरमेंट</a></li>
                <li><a class="dropdown-item" href="{{url('vehicle_policy')}}">वाहन नीति</a></li>
                <li><a class="dropdown-item" href="{{url('crb')}}">सीआरबी</a></li>
                <li><a class="dropdown-item" href="{{url('emc_communication')}}">क्षेत्रीय इकाइयों के साथ विभिन्न संचार</a></li>
              </ul>
              <!--1st level dropdown END-->
            </li><!--li close for EMC-->

            <li class="nav-item dropdown"><!--li open for CBIC's COVID RESPONSE-->
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">राजभाषा</a>
              <!--1st level menu -->
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="{{url('flipbook-view')}}" target="_blank">मानस ई-पुस्तक</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">विभिन्न संचार</a></li>
              </ul>
              <!--1st level dropdown close-->
            </li><!--li CLOSE for CBIC's COVID RESPONSE-->

            <li class="nav-item dropdown"><!--li open for e-Modules Of DGHRD-->
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">डीजीएचआरडी के ई-मॉड्यूल</a>
              <!--1st level menu -->
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://demo.amaxjobs.com/group_b_c/" target="_blank">समूह बी और सी<br> अधिकारी डेटाबेस</a></li>
                <li><a class="dropdown-item" href="https://demo.amaxjobs.com/vacancy/" target="_blank">ई-वाहन मॉड्यूल</a></li>
                <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/deputation/login" target="_blank">ई-प्रतिनियुक्ति (ऑनलाइन <br>प्रतिनियुक्ति मॉड्यूल)</a></li>
                <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/dashboard/" target="_blank">आधारशिला</a></li>
                <li><a class="dropdown-item" href="https://civil.dghrdcbic.gov.in/civillist/login" target="_blank">सिविल सूची</a></li>
                <li><a class="dropdown-item" href="https://demo.riveyrainfotech.com/Apar_module/login" target="_blank">एपीएआर मॉड्यूल</a></li>
                <li><a class="dropdown-item" href="https://demo.amaxjobs.com/dpc/login" target="_blank">समूह बी और सी अधिकारियों <br>के लिए डीपीसी मॉड्यूल</a></li>
                <li><a class="dropdown-item" href="https://demo.amaxjobs.com/Infra/" target="_blank">स्मार्ट-इंफ्रा सीबीआईसी</a></li>
                <li><a class="dropdown-item" href="https://demo.riveyrainfotech.com/swachhta_dghrd/" target="_blank">स्वच्छता@सीबीआईसी</a></li>
                <li><a class="dropdown-item" href="https://demo.riveyrainfotech.com/E-Bhugtaan/" target="_blank">ई-भुगतान मॉड्यूल</a></li>
                <li><a class="dropdown-item" href="https://beams.dghrdcbic.gov.in/#/auth/login" target="_blank">बीईएएमएस</a></li>
              </ul>

              <!--1st level dropdown close-->
            </li><!--li CLOSE for e-Modules Of DGHRD-->

          </ul><!--main ul of nav-item-->

        </div>
      </div>
    </nav>

  </header>
  <!--</section>-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function(event) {

      // Hamburger menu
      var navbarToggler = document.querySelectorAll('.navbar-toggler')[0];
      navbarToggler.addEventListener('click', function(e) {
        e.target.children[0].classList.toggle('active');
      });

      // Select the <html> element
      var html = document.querySelectorAll('html')[0];

      // Select the first element with the attribute 'data-bs-toggle-theme'
      var themeToggle = document.querySelectorAll('*[data-bs-toggle-theme]')[0];

      // Set the default theme to 'dark' for the <html> element
      html.setAttribute('data-bs-theme', 'light');

      // Check if a themeToggle element is found
      if (themeToggle) {
        // Add a click event listener to the themeToggle element
        themeToggle.addEventListener('click', function(event) {
          // Prevent the default behavior of the click event
          event.preventDefault();

          // Check the current theme attribute value of the <html> element
          if (html.getAttribute('data-bs-theme') === 'dark') {
            // If the current theme is 'dark', change it to 'light'
            html.setAttribute('data-bs-theme', 'light');
          } else {
            // If the current theme is not 'dark', change it back to 'dark'
            html.setAttribute('data-bs-theme', 'dark');
          }
        });
      }
    });
  </script>


  <!-- script for search -->
  <script>
    $(document).ready(function() {
      $('.header-search-wrapper .search-main').click(function(event) {
        event.stopPropagation(); // Prevents the click from bubbling up
        $('.search-form-main').toggleClass('active-search');
        $('.search-form-main .search-field').focus();
      });

      // Click anywhere outside the search box to close it
      $(document).click(function(event) {
        if (!$(event.target).closest('.search-form-main, .search-main').length) {
          $('.search-form-main').removeClass('active-search');
        }
      });
    });
  </script>