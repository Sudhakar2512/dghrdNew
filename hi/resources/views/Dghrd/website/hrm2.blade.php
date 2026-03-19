@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    a {
        text-decoration: none;
        
        color: #000000;
        
        cursor: pointer;
        
        transition: color 0.3s ease;
        
    }

    a:hover {
        color: #0056b3;
       
    }


    .container.heading-clr {
        background-color: white;
        font-weight: 500;
        margin-top: 20px;
    }

    .card-header.thm-clr {
        background-color: #007bff;
    }
</style>
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr">
                        <i class="fa fa-home"></i> होम
                    </a> >> एचआरएम 2
                </h5>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mg-box-top mx-auto">
                <div class="container cnt-pd">
                    <div class="card rounded-0  " style="border:2px solid #364694; font-weight:500;">
                        <div class="card-header thm-clr text-white fw-bolder   rounded-0">
                            <h5 class="my-auto">एचआरएम 2</h5>
                        </div>
                        <div class="card-body">

                            <ul style="list-style-type:'&#10172;  ';">

                                <li><a href="{{url('posting_transfers')}}">नियुक्तियाँ और स्थानांतरण</a></li>
                                <li><a href="{{url('e_diposition')}}">ग्रुप ए आईआरएस (सी & आईटी) अधिकारियों की ई-निपटान सूची</a></li>
                                <li><a href="{{url('sanctioned-working')}}">ग्रुप ए आईआरएस (सी & आईटी) अधिकारियों की स्वीकृत और कार्यरत संख्या</a></li>
                                <li><a href="{{url('hop')}}">एचओपी</a></li>
                                <li><a href="{{url('empolyee_code')}}">कर्मचारी कोड</a></li>

                                <li><a href="###">स्वच्छता कार्य योजना</a>
                                    <!-- 3rd स्तर मेनू -->
                                    <ul style="list-style:circle;">
                                        <li><a href="{{ route('swachhta', ['tab' => 1]) }}">पत्र</a></li>
                                        <li><a href="{{ route('swachhta', ['tab' => 2]) }}">पुरस्कार</a></li>
                                        <li><a href="{{ route('swachhta', ['tab' => 3]) }}">पुस्तिकाएँ</a></li>
                                        <li><a href="{{ route('swachhta', ['tab' => 4]) }}">व्यय</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{url('v_communication')}}">फील्ड इकाइयों के साथ विभिन्न संचार</a></li>
                                <li><a href="{{url('tender_notice')}}">निविदा सूचना</a></li>

                                <li><a href="#">सत्यापित डेटा</a>
                                    <!-- 3rd स्तर मेनू -->
                                    <ul>
                                        <li><a href="{{ route('verified', ['tab' => 1]) }}">वे अधिकारी जिनका सत्यापित डेटा प्रतीक्षित है</a></li>
                                        <li><a href="{{ route('verified', ['tab' => 2]) }}">प्रारूप</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{url('module_updates')}}">ग्रुप बी और सी मॉड्यूल अपडेट्स</a></li>
                                <li><a href="{{url('irs_officers')}}">ग्रुप ए आईआरएस (सी & आईटी) अधिकारी प्रतिनियुक्ति पर</a></li>
                                <li><a href="{{url('e_vacency')}}">ई-रिक्ति मॉड्यूल अपडेट्स</a></li>
                                <li><a href="{{url('dpc_module')}}">डीपीसी मॉड्यूल अपडेट्स</a></li>

                                <li><a href="#">नीति</a>
                                    <!-- 3rd स्तर मेनू -->
                                    <ul>
                                        <li>
                                            <a href="{{ route('policy', ['tab' => 1]) }}">आवंटन मॉड्यूल अपडेट्स</a>
                                        </li>
                                        <li> <a href="{{ route('policy', ['tab' => 2]) }}">अन्य</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('civil_list')}}">सिविल सूची</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')

            <!--div close for col-lg-3-->
        </div><!--div close for row-->
    </div><!--div close for container-fluid-->
</section>
@endsection