@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr">
                        <i class="fa fa-home"></i> होम
                    </a> >> हमारे बारे में >> <span> सीबीआईसी </span>
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
                    <h2 class="heading-clr">केंद्रीय अप्रत्यक्ष कर एवं सीमा शुल्क बोर्ड</h2>
                    <p class="text-justify">
                        केंद्रीय अप्रत्यक्ष कर एवं सीमा शुल्क बोर्ड (CBIC) भारत सरकार के वित्त मंत्रालय के तहत राजस्व विभाग का एक भाग है।
                        यह सीमा शुल्क शुल्क, केंद्रीय उत्पाद शुल्क और सेवा कर की वसूली एवं नीति निर्माण, तस्करी की रोकथाम, और
                        सीमा शुल्क, केंद्रीय उत्पाद शुल्क और मादक पदार्थों से संबंधित प्रशासनिक मामलों को संभालने का कार्य करता है।
                        यह बोर्ड अपने अधीनस्थ संगठनों जैसे कि कस्टम हाउस, केंद्रीय उत्पाद शुल्क आयुक्तालय, सेवा कर आयुक्तालय और
                        केंद्रीय राजस्व नियंत्रण प्रयोगशाला के प्रशासनिक कार्यों के लिए उत्तरदायी है।
                    </p>
                </div>
                <div class="container text-center my-4">
                    <img src="{{asset('website/human/orgn_cht_2 1.jpg')}}" style="width:80%;">
                </div>
            </div> <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
    </div><!--div close for container-fluid-->
</section>
@endsection