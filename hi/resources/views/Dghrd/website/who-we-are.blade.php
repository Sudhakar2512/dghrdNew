@extends('Dghrd.website.layouts.main')
@section('main-section')
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr">
                        <i class="fa fa-home"></i> होम
                    </a> >> हमारे बारे में >> <span> हम कौन हैं</span>
                </h5>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <div class="container abt-content cnd-pd ">
                    <div class="card p-4  thm-clr2">
                        <p style="text-align:justify;">
                            <sup><i class="fa fa-quote-left me-1"></i></sup>
                            कर्मचारी विकास और बुनियादी ढांचे के विस्तार पर अधिक केंद्रित दृष्टिकोण प्रदान करने के उद्देश्य से, ताकि मानव संसाधन कार्यों को व्यवसाय की सफलता और विकास में एक रणनीतिक भागीदार के रूप में उपयोग किया जा सके, मानव संसाधन विकास निदेशालय (HRD) की स्थापना नवंबर 2008 में की गई थी।
                            इसे पूर्ववर्ती संगठन एवं कार्मिक प्रबंधन निदेशालय और आवास एवं कल्याण निदेशालय के विलय से बनाया गया था और यह 1 दिसंबर 2008 से कार्यशील हो गया। <br>
                            सीबीआईसी (CBIC) का संगठनात्मक लक्ष्य कर आधार को विस्तृत करके, कर संरचना को तर्कसंगत बनाकर, प्रक्रियाओं को सरल बनाकर, स्वैच्छिक अनुपालन में सुधार करके और एक कुशल एवं उत्तरदायी कर प्रशासन प्रदान करके राजस्व संग्रह को अनुकूलित करना है।
                            इस लक्ष्य को प्राप्त करने के लिए, डीजी (HRD) एक कुशल, उत्पादक, स्वस्थ, प्रभावी और विविध कार्यबल के विकास के लिए प्रयासरत है, जिसमें अत्यधिक कुशल पर्यवेक्षक, प्रबंधक और नेता शामिल हैं।
                            <sup><i class="fa fa-quote-right ms-1"></i></sup>
                        </p>

                    </div>
                </div>
            </div><!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')


        </div><!--div close for row-->
    </div><!--div close for container-fluid-->
</section>
@endsection