@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr">
                        <i class="fa fa-home"></i> होम
                    </a> >> <span> मैनुअल्स</span>
                </h5>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                <div class="container cnt-pd">
                    <div class="card rounded-0 " style="border:2px solid lightgrey; font-weight:500;">
                        <div class="card-header thm-clr text-white fw-bolder   rounded-0">
                            <h5>मैनुअल्स</h5>
                        </div>
                        <div class="card-body">
                            <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">
                                <li class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{ route('sparrow.content', ['tab' => 3]) }}" class="aa text-dark">स्पैरो सहायता मैनुअल</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('infra_manual')}}" class="aa text-dark">बुनियादी ढाँचा मैनुअल</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('welfare_manual')}}" class="aa text-dark">कल्याण मैनुअल</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('emc_manual')}}" class="aa text-dark">ईएमसी मैनुअल</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('asset_register')}}" class="aa text-dark">संपत्ति रजिस्टर</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="###" class="aa text-dark">उपयोगकर्ता मैनुअल</a>
                                    </div>
                                </li>
                                <li class="d-flex lh-sm mt-2 text-justify">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="###" class="aa text-dark">
                                            ई-रिक्ति मॉड्यूल के लिए उपयोगकर्ता मैनुअल - डीजीएचआरडी ने ऑनलाइन उपयोगिता ई-रिक्ति मॉड्यूल लॉन्च किया,
                                            जो सीसीए द्वारा सीबीआईसी के समूह बी और सी पदों की प्रत्यक्ष भर्ती रिक्तियों की रिपोर्टिंग के लिए है।
                                        </a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'website/human/icon/TriRight.png'}}">
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="###" class="aa text-dark">मैनुअल ई-रिक्ति मॉड्यूल</a>
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