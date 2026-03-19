@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    /* Set a light background color */
  }



  li {
    margin-left: 5px;
    /*transition:all ease 0.5s;*/
  }

  a {
    text-decoration: none;
    /* Remove the underline */
    color: #000000;
    /* Set link color to blue */
    cursor: pointer;
    /* Change cursor to pointer */
    transition: color 0.3s ease;
    /* Smooth transition for color change */
  }

  a:hover {
    color: #0056b3;
    /* Change color on hover */
  }


  .container.heading-clr {
    background-color: white;
    /* White background color for heading container */
    /*border: 2px solid lightgrey;*/
    font-weight: 500;
    margin-top: 20px;
    /* Add space at the top */
  }

  .card-header.thm-clr {
    background-color: #007bff;
    /* Blue background color for card header */
  }
</style>
<section>
  <div class="container-fluid bg-menu-open">
    <div class="container">
      <div class="py-2">
        <h5 class="my-auto">
          <a href="{{url('/')}}" class="aa txt-clr">
            <i class="fa fa-home"></i> होम
          </a> >> एचआरएम 1
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
          <div class="card rounded-0 " style="border:2px solid #364694; font-weight:500;">
            <div class="card-header thm-clr text-white fw-bolder   rounded-0">
              <h5 class="my-auto">एचआरएम 1</h5>
            </div>
            <div class="card-body">

              <ul style="list-style:none;" class="ms-0 ps-0">
                <li>
                  <!--<strong><a href="#"><i></i>HRM1</a></strong>-->
                  <ul style="list-style-type:'&#9755;  ';" class="ms-1 ps-0">
                    <li>
                      <strong><a href="#">स्पैरो</a></strong>
                      <ul>
                        <li><a href="{{ route('sparrow.content', ['tab' => 1]) }}">एपीएआर (APAR) ऑनलाइन लिखना</a></li>
                        <li><a href="{{ route('sparrow.content', ['tab' => 2]) }}">आईपीआर (IPR) ऑनलाइन लिखना</a></li>
                        <li><a href="{{ route('sparrow.content', ['tab' => 3]) }}">स्पैरो सहायता मैनुअल</a></li>
                        <li><a href="{{url('sparrow-help_desk')}}">स्पैरो हेल्प डेस्क</a></li>
                      </ul>
                    </li>
                    <li><strong><a href="#">एपीएआर</a></strong>
                      <ul>
                        <li><a href="{{url('apar')}}">लापता एपीएआर</a></li>
                      </ul>
                    </li>
                    <li> <strong><a href="##">आईपीआर</a></strong>
                      <ul>
                        <li><a href="{{url('ipr')}}">पत्र</a></li>
                        <li><a href="#">आईपीआर स्थिति</a></li>
                      </ul>
                    </li>
                    <li>
                      <strong><a href="#">भर्ती नियम</a></strong>
                      <ul>
                        <li>
                          <strong><a href="#">समूह - ए</a></strong>
                          <ul style="list-style:circle;">
                            <li><a href="{{ route('group_a', ['subTabId' => 1]) }}">सहायक निदेशक (OL) के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_a', ['subTabId' => 2]) }}">सीएओ (CAO) के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_a', ['subTabId' => 3]) }}">उप निदेशक (OL) के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_a', ['subTabId' => 4]) }}">आईआरएस (IRS) के भर्ती नियम</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">समूह - बी</a></strong>
                          <ul style="list-style:circle;">
                            <li><a href="{{ route('group_b', ['subTabId' => 1]) }}">प्रशासनिक अधिकारी के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 2]) }}">मूल्यांकक के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 3]) }}">परीक्षक के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 4]) }}">कार्यकारी सहायक के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 5]) }}">निरीक्षक (CEX) के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 6]) }}">कनिष्ठ हिंदी अनुवादक के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 7]) }}">निवारक अधिकारी के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 8]) }}">निजी सचिव के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 9]) }}">वरिष्ठ हिंदी अनुवादक के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 10]) }}">वरिष्ठ निजी सचिव के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 11]) }}">आशुलिपिक ग्रेड-1 के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 12]) }}">अधीक्षक (CEX) के भर्ती नियम</a></li>
                            <li><a href="{{ route('group_b', ['subTabId' => 13]) }}">अधीक्षक (निवारक) के भर्ती नियम</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">समूह - सी</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('group_c', ['subTabId' => 1]) }}">सहायक उप निरीक्षक (हथियार) की भर्ती नियमावली</a> </li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 2]) }}">DOS की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 3]) }}">ड्राफ्ट्समैन की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 4]) }}">ड्राइवर की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 5]) }}">हवलदार एवं प्रधान हवलदार की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 6]) }}">LDC की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 7]) }}">MTS की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 8]) }}">रिकॉर्ड कीपर की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 9]) }}">वरिष्ठ कर सहायक की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 10]) }}">स्टेनोग्राफर ग्रेड-II की भर्ती नियमावली</a></li>
                            <li> <a href="{{ route('group_c', ['subTabId' => 11]) }}">कर सहायक की भर्ती नियमावली</a></li>
                          </ul>
                        </li>


                        <li>
                          <strong><a href="#">कैंटीन स्टाफ</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('canteen', ['subTabId' => 1]) }}">ग्रुप-सी पद</a></li>
                            <li> <a href="{{ route('canteen', ['subTabId' => 2]) }}">प्रबंधक ग्रेड-II एवं प्रबंधक सह लेखाकार</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">केंद्रीय नारकोटिक्स ब्यूरो (CBN)</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('cbn', ['subTabId' => 1]) }}">ड्राइवर स्पेशल ग्रेड</a> </li>
                            <li> <a href="{{ route('cbn', ['subTabId' => 2]) }}">ग्रुप-सी ड्राइवर</a></li>
                            <li> <a href="{{ route('cbn', ['subTabId' => 3]) }}">ग्रुप-बी पद</a></li>
                            <li> <a href="{{ route('cbn', ['subTabId' => 4]) }}">ग्रुप-सी सीबीएन</a></li>
                            <li> <a href="{{ route('cbn', ['subTabId' => 5]) }}">एमटीएस सीबीएन</a></li>
                          </ul>
                        </li>
                        <!-- ... Other Recruitment Rules sub-items ... -->
                        <li>
                          <strong><a href="#">सीआरसीएल</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('crcl', ['subTabId' => 1]) }}">रासायनिक सहायक</a> </li>
                            <li> <a href="{{ route('crcl', ['subTabId' => 2]) }}">सीआरसीएल ग्रुप-ए और बी</a></li>
                            <li> <a href="{{ route('crcl', ['subTabId' => 3]) }}">सीआरसीएल ग्रुप-सी</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">डीजीपीएम</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('dgpm', ['subTabId' => 1]) }}">समूह-सी और डी</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">लॉजिस्टिक्स निदेशालय</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('dol', ['subTabId' => 1]) }}">समूह-ए</a> </li>
                            <li> <a href="{{ route('dol', ['subTabId' => 2]) }}">समूह-बी</a></li>
                            <li> <a href="{{ route('dol', ['subTabId' => 3]) }}">समूह-सी और डी</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">डीपीपीआर (DPPR)</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('dppr', ['subTabId' => 1]) }}">समूह-सी और डी पद</a></li>
                            <li> <a href="{{ route('dppr', ['subTabId' => 2]) }}">प्रबंधक प्रेस</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">डीआरआई (DRI)</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('dri', ['subTabId' => 1]) }}">समूह-सी और डी</a> </li>
                            <li> <a href="{{ route('dri', ['subTabId' => 2]) }}">खुफिया अधिकारी</a></li>
                            <li> <a href="{{ route('dri', ['subTabId' => 3]) }}">एसआईओ</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="#">निदेशालयों के भर्ती नियम (RRS)</a></strong>
                          <ul style="list-style:circle;">
                            <li> <a href="{{ route('rrod', ['subTabId' => 1]) }}">समूह-सी पद</a> </li>
                            <li> <a href="{{ route('rrod', ['subTabId' => 2]) }}">अतिरिक्त सहायक निदेशक के भर्ती नियम</a></li>
                            <li> <a href="{{ route('rrod', ['subTabId' => 3]) }}">स्टेनोग्राफर ग्रेड-I के भर्ती नियम</a></li>
                            <li> <a href="{{ route('rrod', ['subTabId' => 4]) }}">कर सहायक</a></li>
                            <li> <a href="{{ route('rrod', ['subTabId' => 5]) }}">कार्यकारी सहायक</a></li>
                            <li> <a href="{{ route('rrod', ['subTabId' => 6]) }}">स्टाफ कार ड्राइवर (विशेष ग्रेड)</a></li>
                          </ul>
                        </li>
                        <li>
                          <strong><a href="{{ route('telecommunication', ['tab' => 'systum_data_management' ]) }}">सिस्टम और डेटा प्रबंधन</a></strong>
                        </li>
                        <li>
                          <strong><a href="{{ route('telecommunication', ['tab' => 'telecommunication_wing']) }}">दूरसंचार विंग, लॉजिस्टिक्स निदेशालय</a></strong>
                        </li>
                      </ul>
                    </li>
                    <li><strong><a href="#">वरिष्ठता सूची</a></strong>
                      <ul>
                        <li>
                          <a href="{{url('seniorty_list')}}">समूह - B</a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <strong><a href="#">डीपीसी</a></strong>
                      <ul>
                        <li><a href="{{ route('dpc', ['tab' => 1]) }}">समूह - A</a></li>
                        <li><a href="{{ route('dpc', ['tab' => 2]) }}">समूह - B से A</a></li>

                        <!-- ... DPC sub-items ... -->
                      </ul>
                    </li>
                    <li><strong><a href="{{url('empanelment_deputation')}}">समूहबद्धता और प्रतिनियुक्ति</a></strong></li>
                    <li><strong><a href="{{url('cadre_restructuring')}}">कैडर पुनर्गठन 2018</a></strong></li>
                    <li>
                      <strong><a href="{{url('sparrow_cbic')}}">स्पैरो-सीबीआईसी</a></strong>
                      <ul>
                        <li><a href="{{url('sparrow_cbic')}}">स्पैरो-सीबीआईसी सहायता मैनुअल</a></li>
                      </ul>
                    </li>
                    <li><strong><a href="{{url('officer_detailes')}}">अधिकारी विवरण</a></strong></li>
                    <li><strong><a href="{{url('various_communication')}}">क्षेत्रीय संगठनों के साथ विभिन्न संचार</a></strong></li>
                    <li><strong><a href="{{url('rajyabhasha')}}">राजभाषा</a></strong></li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <!--div close for col-lg-9-->
      @include('Dghrd.website.layouts.important_links')


    </div><!--div close for row-->
  </div><!--div close for container-fluid-->
</section>
@endsection