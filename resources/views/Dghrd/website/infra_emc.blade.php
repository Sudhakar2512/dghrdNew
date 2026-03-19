
@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
                     
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa; /* Set a light background color */
    }

  

    a {
      text-decoration: none; /* Remove the underline */
      color: #000000; /* Set link color to blue */
      cursor: pointer; /* Change cursor to pointer */
      transition: color 0.3s ease; /* Smooth transition for color change */
    }

    a:hover {
      color: #0056b3; /* Change color on hover */
    }

  
    .container.heading-clr {
      background-color: white; /* White background color for heading container */
      /*border: 2px solid lightgrey;*/
      font-weight: 500;
      margin-top: 20px; /* Add space at the top */
    }

    .card-header.thm-clr {
      background-color: #007bff; /* Blue background color for card header */
    }

  </style>
<section>
    <div class="container-fluid bg-menu-open ">
        <div class="container ">
            <div class="py-2"><h5 class="my-auto"><a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >>   Infra Wing/EMC </h5></div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mg-box-top mx-auto">
                <div class="container cnd-pd">
                    <div class="card rounded-0 " style="border:2px solid #364694; font-weight:500;">
                        <div class="card-header thm-clr text-white fw-bolder   rounded-0">
                            <h5 class="my-auto">Infra Wing/EMC</h5>
                        </div>
                        <div class="card-body">

                            <ul style="list-style-type:'&#10172;  ';" class="">
                                   <li>
                                       <a href="https://dghrdcbic.gov.in/infra/" target="_blank">
                                        SMART-Infra CBIC
                                       </a>
                                   </li>
                                   <li>
                                       <a  href="https://dghrdcbic.gov.in/e-vacancy/"target="_blank">
                                           E-vacancy Module
                                       </a>
                                   </li>
                                
                              </ul>
                              
                        </div>
                    </div>
                </div>
            </div>
            <!--div close for col-lg-9-->
<!--            <div class="col-lg-3 col-md-4 col-sm-12 mg-box-top mx-auto">-->
<!--    <div class="card rounded-0" style="border:2px solid #364694; font-weight:500;">-->
<!--        <div class="card-header thm-clr text-white fw-bolder   rounded-0 text-center">-->
<!--           <h5> Important Links</h5>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--            <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2 ">-->
<!--                        <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr"target="_blank">APAR Module</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2 ">-->
<!--                       <a href="https://dghrdcbic.gov.in/dpc/"  class="aa txt-clr" target="_blank">DPC Module</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2">-->
<!--                    <a href="https://dghrdcbic.gov.in/infra/"  class="aa txt-clr" target="_blank">SMART-Infra CBIC</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2">-->
<!--                    <a href="https://dghrdcbic.gov.in/dghrdreports/index.asp"  class="aa txt-clr" target="_blank">Upload Reports</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2">-->
<!--                    <a href="https://dghrdcbic.gov.in/swachh/"  class="aa txt-clr" target="_blank">SWACHHTA@CBIC</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2">-->
<!--                     <a href="https://dghrdcbic.gov.in/bhugtaan/" class="aa txt-clr"target="_blank">E-BHUGTAAN Module</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2 ">-->
<!--                    <a href="https://parichay.nic.in/pnv1/assets/login.html?v=8&service=passive&active=true&rm_5=false&continue=https%3A%2F%2Fjan_com%2Fmail%2F&pp=1&scc=1&lmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&sid=SPARROWIRS&lang=en"  class="aa txt-clr" target="_blank"> SPARROW-IRS</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2">-->
<!--                    <a href="{{url('/')}}"  class="aa txt-clr" target="_blank"> RTI</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2">-->
<!--                    <a href="https://edgevpn.rcil.gov.in/my.policy" class="aa txt-clr"target="_blank">SPARROW-CBIC</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2 ">-->
<!--                    <a href="https://dghrdcbic.gov.in/communication/"  class="aa txt-clr" target="_blank"> Cadre Restructuring</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="d-flex">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >-->
<!--                    </div>-->
<!--                    <div class="ms-2 ">-->
<!--                    <a href="{{url('/tender_notice')}}" class="aa txt-clr">Tenders</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
    @include('Dghrd.website.layouts.important_links')

            <!--div close for col-lg-3-->
        </div><!--div close for row-->
    </div><!--div close for container-fluid-->
</section>
@endsection
