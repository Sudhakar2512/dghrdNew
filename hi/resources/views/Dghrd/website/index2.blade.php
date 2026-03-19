@extends('Dghrd.website.layouts.main')
@section('main-section')
<div class="container-fluid px-0">
  <div class="row mx-auto banner-card">
    <div class="col-lg-8 col-md-12 col-sm-12 px-0">
        
            <div id="carouselExampleFade" class="carousel slide carousel-fade"  data-bs-ride="carousel">
            
            <div class="carousel-inner">
                @foreach($slider as $key => $image)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="3000">
                          <img src="{{ asset('Admin/Images').'/'.$image->image ?? '' }}"class="d-block banner-img" alt="Slider Image" >
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

      <div class="col-lg-4 col-md-12 col-sm-12 h-100 px-0">
    <div class="card thm-clr2 h-100 border-0">
        <div class="card-header thm-clr2" style="min-height:fit-content; border-bottom:2px solid #364694;">
            <div class="d-flex justify-content-between">
                <h4 class="my-auto">Latest <span class="fw-bold txt-clr">News</span></h4>
                <a href="{{url('latest-news')}}" class="btn thm-clr text-white my-auto">View All</a>
            </div>
        </div>

        @php
        $counter = 0;
        $notificationsWithPdf = $notification->whereNotNull('pdf')->reverse();
        $notificationsWithoutPdf = $notification->whereNull('pdf')->reverse();
        $mergedNotifications = $notificationsWithPdf->merge($notificationsWithoutPdf);
        $totalNotifications = $mergedNotifications->count();
        $newsToShow = 10;
        $duplicateNews = collect();
        if ($totalNotifications < $newsToShow) {
            $duplicateNews = $mergedNotifications->take($newsToShow - $totalNotifications);
        }
        @endphp

        <div class="card-body news-body p-2" style="height:88%; overflow-y:hidden; position: relative;">
            <div id="news-container" style="position: absolute;">
                @foreach($mergedNotifications->take($newsToShow) as $news)
                @if($news->pdf)
                <div class="d-flex border-bottom my-2">
                    <div>
                        <img src="{{asset('public/website/human/icon/TriRight.png')}}">
                    </div>
                    <div class="ms-2">
                        <p class="mb-2">
                            <a href="{{ asset('Admin/Pdf') }}/{{ $news->pdf }}" target="_blank" style="text-decoration: none; color: black;">{{ $news->heading }}</a>
                        </p>
                    </div>
                </div>
                @else
                <div class="d-flex align-item-center mt-1">
                    <div class="my-1">
                        <i class="fa fa-chevron-circle-right" aria-hidden="true" style="font-size:20px;"></i>
                    </div>
                    <div class="ms-3">
                        <p class="text-mute">
                            <span style="color: black;">{{ $news->heading }}</span>
                        </p>
                    </div>
                </div>
                @endif
                @endforeach
                @foreach($duplicateNews as $duplicate)
                @if($duplicate->pdf)
                <div class="d-flex border-bottom my-2">
                    <div>
                        <img src="{{asset('public/website/human/icon/TriRight.png')}}">
                    </div>
                    <div class="ms-2">
                        <p class="mb-2">
                            <a href="{{ asset('Admin/Pdf') }}/{{ $duplicate->pdf }}" target="_blank" style="text-decoration: none; color: black;">{{ $duplicate->heading }}</a>
                        </p>
                    </div>
                </div>
                @else
                <div class="d-flex align-item-center mt-1">
                    <div class="my-1">
                        <i class="fa fa-chevron-circle-right" aria-hidden="true" style="font-size:20px;"></i>
                    </div>
                    <div class="ms-3">
                        <p class="text-mute">
                            <span style="color: black;">{{ $duplicate->heading }}</span>
                        </p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    // Start the scrolling animation
    function startScrolling() {
        const newsContainer = document.getElementById('news-container');
        const containerHeight = newsContainer.parentElement.offsetHeight;
        let scrollPosition = 0;
        let animationFrameId = null;

        function updateScroll() {
            scrollPosition += 1;
            if (scrollPosition >= newsContainer.offsetHeight - containerHeight) {
                scrollPosition = 0;
            }
            newsContainer.style.top = `-${scrollPosition}px`;
            animationFrameId = requestAnimationFrame(updateScroll);
        }

        animationFrameId = requestAnimationFrame(updateScroll);

        // Pause scrolling animation on mouseenter
        newsContainer.addEventListener('mouseenter', function() {
            cancelAnimationFrame(animationFrameId);
        });

        // Resume scrolling animation on mouseleave
        newsContainer.addEventListener('mouseleave', function() {
            animationFrameId = requestAnimationFrame(updateScroll);
        });
    }

    // Start the scrolling animation with a slight delay after the page loads
    window.onload = function () {
        setTimeout(startScrolling, 1000); // 1000 milliseconds delay
    };
</script>

    
  </div>
</div>


<!-- content-->
<section class="container-fluid">
<div class="d-flex justify-content-center">
    <div class="mt-3 content">
      <div class="row mx-auto col-12 px-0 ">
        <div class="col-lg-8 col-md-8 col-sm-12 wow fadeInUp mt-4 " data-wow-duration="1.5s" data-wow-delay="0.2s" >
         <div class="container abt-content mt-3  h-100 ">
         <h3 class="abt-heading lh-md"><span class="txt-clr"><u style="text-underline-offset:9px;">About<span style="color:#1B2C51;"></span></u></span> Directorate General of Human Resource Development</h3>
          <div class="card p-3 mt-4 thm-clr2">
           <p style="text-align:justify;"><sup><i class="fa fa-quote-left me-1"></i></sup>With a view to providing a more focused approach to employee development and infrastructure expansion in order to harness the Human Resource functions as a strategic partner in business success and growth, the Directorate of Human Resource Development (HRD) was set up in Nov.
           , 2008 by merging the erstwhile Directorate of Organization & Personnel Management and Directorate of Housing & Welfare and became operational w.e.f. 1st December, 2008. <br> The organizational goal of the CBIC is to optimize revenue collection through broadening the tax base, rationalizing tax structure, simplifying procedures, improving voluntary compliance 
           and providing an efficient and responsive tax administration. In order to meet this goal, the DG (HRD) strives to develop a skilful, productive, healthy, efficient and diverse work force with highly effective supervisors, managers and leaders.<sup><i class="fa fa-quote-right ms-1"></i></sup></p>
          </div>
        </div>
        </div>
              <!-- col-lg-8 end -->

      <div class="col-lg-4 col-md-4 col-sm-12 mt-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <!--<div class="card" style="width:100%;height:100%;">-->
        <!--  <div class="card-header" style="background:#364694">-->
        <!--    <h5 class="text-center text-white my-auto">Important Link</h5>-->
        <!--  </div>-->
        <!--  <div class="card-body">-->
        <!--  <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2 ">-->
        <!--                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">APAR Module</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2 ">-->
        <!--                           <a href="https://dghrdcbic.gov.in/dpc/" class="aa  txt-clr"target="_blank">DPC Module</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                        <a href="https://dghrdcbic.gov.in/infra/" class="aa  txt-clr"target="_blank">SMART-Infra CBIC</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide ">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                        <a href="https://dghrdcbic.gov.in/dghrdreports/index.asp" class="aa  txt-clr"target="_blank">Upload Reports</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                        <a href="https://dghrdcbic.gov.in/swachh/" class="aa  txt-clr"target="_blank">SWACHHTA@CBIC</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                         <a href="https://dghrdcbic.gov.in/bhugtaan/" class="aa txt-clr"target="_blank">E-BHUGTAAN Module</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                        <a href="https://parichay.nic.in/pnv1/assets/login.html?v=8&service=passive&active=true&rm_5=false&continue=https%3A%2F%2Fjan_com%2Fmail%2F&pp=1&scc=1&lmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&sid=SPARROWIRS&lang=en" class="aa  txt-clr"target="_blank"> SPARROW-IRS</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                        <a href="{{url('/')}}" class="aa  txt-clr"target="_blank"> RTI</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2">-->
        <!--                        <a href="https://edgevpn.rcil.gov.in/my.policy" class="aa txt-clr"target="_blank">SPARROW-CBIC</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2 ">-->
        <!--                        <a href="https://dghrdcbic.gov.in/communication/" class="aa  txt-clr"target="_blank"> Cadre Restructuring</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li class="d-flex li-slide">-->
        <!--                        <div class="d-flex align-items-center">-->
        <!--                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
        <!--                        </div>-->
        <!--                        <div class="ms-2 ">-->
        <!--                        <a href="###" class="aa txt-clr">Tenders</a>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--  </div>-->
        <!--</div>-->
        <table class="table table-bordered  table-hover">
            <thead class="thm-clr">
                <tr >
                    <th colspan="2" class="text-center thm-clr text-white">
                        <h5 class="my-auto">Important Link</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-1" style="width:35px;">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="py-1">
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">APAR Module</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="thm-clr2 py-1">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="thm-clr2 py-1">
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">DPC Module</a>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td style="width:35px;" class="py-1" >
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="py-1" >
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">SMART-Infra CBIC</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="thm-clr2 py-1">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="thm-clr2 py-1">
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">Upload Reports</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="py-1" >
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="py-1" >
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">SWACHHTA@CBIC</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="thm-clr2 py-1">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="thm-clr2 pt-1">
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">E-BHUGTAAN Module</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="py-1">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="py-1" >
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">SPARROW-IRS</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="thm-clr2 py-1">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="thm-clr2 py-1">
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">RTI</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="py-1" >
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="py-1" >
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">SPARROW-CBIC</a>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td style="width:35px;" class="thm-clr2 py-1">
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="thm-clr2 py-1">
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">Cadre Restructuring</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:35px;" class="py-1" >
                         <div class="d-flex align-items-center mt-1">
                            <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                         </div>
                    </td>
                    <td class="py-1" >
                        <div class="ms-2 d-flex align-items-center li-slide">
                            <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">Tenders</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
</section>
<section class="container-fluid  mt-4 mb-5 ">
    <div class="row mx-auto col-12 d-flex justify-content-evenly">
    <div class="col-lg-3 col-md-6 col-sm-12 mt-4 text-center">
        <a href="{{url('hrm1')}}" style="text-decoration:none;">
           <div class="card   abt-card wow zoomIn " data-wow-duration="1.5s" data-wow-delay="0.5s"  style="background:url('{{asset('public/website/human/hrm1-bg.jpg')}}'); background-repeat: no-repeat; background-size: cover; border-radius: 10px; width: 100%; height:20vh;">
                  <h4 class="p-3  txt-clr my-auto">HRM 1</h4>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mt-4 text-center">
       <a href="{{url('hrm2')}}" style="text-decoration:none;">
         <div class="card  abt-card wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s" style="background: url('{{asset('public/website/human/hrm1-bg.jpg')}}'); background-repeat: no-repeat; background-size: cover; border-radius: 10px; width: 100%; height: 20vh;">
            <h4 class="p-3 txt-clr my-auto">HRM 2</h4>
         </div>
       </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mt-4 text-center">
       <a href="{{url('infra_emc')}}" style="text-decoration:none;">
          <div class="card abt-card wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s"style="background: url('{{asset('public/website/human/hrm1-bg.jpg')}}'); background-repeat: no-repeat; background-size: cover; border-radius: 10px; width: 100%; height: 20vh;">
                <h4 class="p-3 txt-clr my-auto">Infra Wing / EMC</h4>
          </div>
       </a>
    </div>
</div>
</section>
<!-- Plus 1 -->
<section class="plus py-3 mt-3" style="background: #F4F8FB;">
<div class="d-flex justify-content-center">
  <div class="container-fluid">
    <div class="row mx-auto wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3 short-menu-card" >
          <div class="d-flex align-items-center">
            
            <div class="ms-1 ">
              <h6 class="text-white my-auto"><a href="{{url('manuals')}}" class="aa ">Manuals</a></h6>
            </div>
            <div class="box-circle-short d-flex align-items-center justify-content-center">
            <a href="{{url('manuals')}}"><i class="fa fa-book  my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3  short-menu-card">
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white  my-auto"><a href="{{url('posting_transfers')}}" class="aa ">Transfer & Posting</a></h6>
            </div>
            <div class="box-circle-short">
                <a href="{{url('posting_transfers')}}"> <i class="fa fa-exchange  my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3 short-menu-card">
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white my-auto"><a href="{{url('schemes')}}" class="aa ">Welfare Scheme</a></h6>
            </div>
            <div class="box-circle-short">
              <a href="{{url('schemes')}}"><i class="fa fa-sun-o my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Plus 1 end -->


<!-- Plus 2 -->

<div class="d-flex justify-content-center">
  <div class="container-fluid mt-3">
    <div class="row mx-auto wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3  short-menu-card" >
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white my-auto"><a href="{{url('suggestion')}}" class="aa ">Suggestions</a></h6>
            </div>
            <div class="box-circle-short">
              <a href="{{url('suggestion')}}"><i class="fa fa-life-ring my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3 short-menu-card" >
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white my-auto"><a href="{{url('civil_list')}}" class="aa ">Civil List</a></h6>
            </div>
            <div class="box-circle-short">
              <a href="{{url('civil_list')}}"><i class="fa fa-list-alt  my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3  short-menu-card" >
          <div class="d-flex align-items-center">
            <div class="ms-1 pe-5">
              <h6 class="text-white  my-auto"><a href="{{url('infrastructure_projects')}}" class="aa">Ongoing / Upcoming Infrastructure project</a></h6>
            </div>
            <div class="box-circle-short">
              <a href="{{url('infrastructure_projects')}}"><i class="fa fa-tasks my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Plus 2 end -->



<!-- Plus 3 -->

<div class="d-flex justify-content-center">
  <div class="container-fluid mt-3">
    <div class="row mx-auto mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
      <div class="col-lg-4 col-md-8 mx-auto col-sm-12 mt-5">
        <div class="card p-3 short-menu-card" >
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white my-auto"><a href="{{url('apar')}}" class="aa">Missing APAR/IPR</a></h6>
            </div>
            <div class="box-circle-short">
              <a href="{{url('apar')}}"><i class="fa fa-hand-o-left my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3  short-menu-card">
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white my-auto"><a href="{{url('half_yearly_brochure')}}" class="aa">Half Yearly brochure</a></h6>
            </div>
            <div class="box-circle-short">
               <a href="{{url('half_yearly_brochure')}}"><i class="fa fa-hourglass-half my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 col-sm-12 mt-5 mx-auto">
        <div class="card p-3 short-menu-card" >
          <div class="d-flex align-items-center">
            <div class="ms-1">
              <h6 class="text-white my-auto"><a href="http://43.224.136.155/Account/Login.aspx" class="aa">Annual Vehicle Reports</a></h6>
            </div>
            <div class="box-circle-short">
              <a href="http://43.224.136.155/Account/Login.aspx"><i class="fa fa-car my-1" aria-hidden="true" style="font-size:30px;"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Plus 3 end -->


<!-- PHOTO GALLERY -->

<div class="d-flex align-items-center my-5 py-5 wow fadeInUp" id="gallery-card" data-wow-duration="1.5s" data-wow-delay="0.2s">
    <div class="container">
        <div class="row col-12 mx-auto">
            <div class="col-lg-3 col-md-12 col-sm-12 d-flex align-items-center">
                <div class="container ">
                    <p class="text-mute fs-3 ">Photo <span class="fw-bold txt-clr"> Gallery</span></p>
                   <h2 style="color: #001B39;">Explore Our Photo Gallery</h2>
                   <div class="mt-4">
                    <a href="{{ url('photo-gallery') }}" class="aa">
                        <button type="button" class="btn" style="background:#364694;color:white;">View All</button>
                    </a>
                   </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 mt-2">
                <div class="row ">
                    @foreach($gallery->reverse()->take(3) as $item)
    <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 d-none d-md-block"> 
        <div class="card border-0 shadow">
           <a href="{{ url('photo-gallery') }}" class="aa">
              <div class="card-body p-1 gallery-img" >
                  <img src="{{ asset('Admin/Images').'/'.$item->image ?? '' }}" >
              </div>
              <div class="card-footer gallery-title d-flex align-items-center justify-content-center mx-auto" style="overflow-y:auto;">
                  <div class="caption-card text-center">
                      <p class="my-auto txt-clr">{{ $item->tittle }}</p>
                      {{-- <p class="">{{ $item->description }}</p> --}}
                  </div>
              </div>
           </a>
        </div>
    </div>
@endforeach

@foreach($gallery->reverse()->take(2) as $item)
    <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-3 d-block d-md-none"> 
        <div class="card border-0 shadow">
           <a href="{{ url('photo-gallery') }}" class="aa">
              <div class="card-body p-1 gallery-img" >
                  <img src="{{ asset('Admin/Images').'/'.$item->image ?? '' }}" >
              </div>
              <div class="card-footer gallery-title d-flex align-items-center justify-content-center mx-auto" style="overflow-y:auto;">
                  <div class="caption-card text-center">
                      <p class="my-auto txt-clr lh-sm">{{ $item->tittle }}</p>
                      {{-- <p class="">{{ $item->description }}</p> --}}
                  </div>
              </div>
           </a>
        </div>
    </div>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PHOTO GALLERY END-->





<section class="my-5" style="background: #F4F8FB;">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme" >
            @foreach($mini as $image)
                <div class="item my-3 shadow" style="border:2px solid #FFF;">
                    <img src="{{asset('Admin/Images').'/'.$image->image ?? ''}}" class="p-2" style="height:100px;">
                </div>
            @endforeach
        </div>
    </div>
</section>






<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        nav: false,
        dots: true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        stagePadding:60,
        autoplayHoverPause: true,
        // rewind:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
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
</script>






@endsection





