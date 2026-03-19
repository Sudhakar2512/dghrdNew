@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto"><a href="{{url('/')}}" class="aa txt-clr"><i class="fa fa-home"></i> होम </a> >> <span> आरटीआई</span></h5>
    </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                <div class="container cnt-pd">
                    <div class="card rounded-0 " style="border:2px solid lightgrey; font-weight:500;">
                        <div class="card-header thm-clr text-white fw-bolder   rounded-0">
                            <h5>RTI</h5>
                        </div>
                        <div class="card-body">
                            <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">
                                <li class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{asset('public/assets/Document/RTI/RTI Act, 2005 (Amended).pdf')}}" class="aa text-dark">आरटीआई अधिनियम, 2005 (संशोधित)</a>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{asset('public/assets/Document/RTI/RTI-Act, 2005.pdf')}}" class="aa text-dark">आरटीआई अधिनियम, 2005</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
    </div><!--div close for container-fluid-->
</section>
@endsection