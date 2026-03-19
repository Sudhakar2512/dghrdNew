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
    <div class="container-fluid bg-menu-open ">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr">
                        <i class="fa fa-home"></i> होम
                    </a> >> इन्फ्रास्ट्रक्चर विंग/ईएमसी
                </h5>
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
                            <h5 class="my-auto">इन्फ्रास्ट्रक्चर विंग/ईएमसी</h5>
                        </div>
                        <div class="card-body">

                            <ul style="list-style-type:'&#10172;  ';">
                                <li>
                                    <a href="https://dghrdcbic.gov.in/infra/" target="_blank">
                                        स्मार्ट-इन्फ्रा सीबीआईसी
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dghrdcbic.gov.in/e-vacancy/" target="_blank">
                                        ई-रिक्ति मॉड्यूल
                                    </a>
                                </li>
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