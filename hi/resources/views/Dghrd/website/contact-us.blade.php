@extends('Dghrd.website.layouts.main')
@section('main-section')
<section>
   <div class="container-fluid bg-menu-open">
      <div class="container">
         <div class="py-2">
            <h5 class="my-auto">
               <a href="{{url('/')}}" class="aa txt-clr">
                  <i class="fa fa-home"></i> होम
               </a> >> हमारे बारे में >> <span> संपर्क करें</span>
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
               <h4 class="heading-clr text-center fw-bold mb-3">मानव संसाधन विकास महानिदेशालय</h4>
               <div style="overflow-x:auto;" class="table-responsive">
                  <table class="table table-bordered" style="width:100%;">
                     <thead>
                        <tr>
                           <th class="thm-clr text-white">नाम और पद</th>
                           <th class="thm-clr text-white">ईमेल आईडी</th>
                           <th class="thm-clr text-white">टेलीफोन नंबर</th>
                        </tr>
                     </thead>
                     <tbody class="text-muted">
                        <tr>
                           <td class="">श्री अमंद शाह, महानिदेशक</td>
                           <td class="text-center" style="vertical-align:middle;" rowspan="3">dghrdhrm1.cbic@gov.in</td>
                           <td class="">011-23741690<br>011-23748048</td>
                        </tr>
                        <tr class="bg-menu-open">
                           <td class="bg-menu-open">श्री नरेश डैंग, ओएसडी, डीजी, एचआरएम</td>
                           <!--<td class="bg-menu-open">haris.d099001[at]gov[dot]in</td>-->
                           <td class="bg-menu-open">011-23741690 (कार्यालय)<br>011-23748048 (कार्यालय)</td>
                        </tr>
                        <tr class="">
                           <td class="">सुश्री सान्या लांबा, ओएसडी, डीजी, एचआरएम</td>
                           <!--<td class="bg-menu-open">haris.d099001[at]gov[dot]in</td>-->
                           <td class="">011-21400877 (कार्यालय)<br>011-21400424 (कार्यालय)<br>011-23748051 (फैक्स)</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!-- कंटेनर का समापन -->

            <!--2nd container-->
            <div class="container mt-3 ">
               <h4 class="heading-clr text-center fw-bold mb-3">
                  मानव संसाधन विकास महानिदेशालय, एचआरएम-I विंग, अप्रत्यक्ष कर एवं सीमा शुल्क,
                  द्वितीय एवं तृतीय तल, भाई वीर सिंह साहित्य सदन, भाई वीर सिंह मार्ग, गोल मार्केट,
                  नई दिल्ली-110001
               </h4>
               <div class="col-12 row my-3 text-center mx-auto d-flex justify-content-between">
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto">
                     <span class="fw-bold">वेबसाइट:</span> www.dghrdcbic.gov.in
                  </div>
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto">
                     <span class="fw-bold">ईमेल:</span> dghrdhrm1.cbic@gov.in
                  </div>
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto">
                     <span class="fw-bold">फोन नंबर:</span> 011-21400423
                  </div>
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto pe-0">
                     <span class="fw-bold">फैक्स नंबर:</span> 011-23748051
                  </div>
               </div>
               <div style="overflow-x:auto;">
                  <table class="table table-bordered " style="width:100%;">
                     <thead class="thm-clr text-white">
                        <tr>
                           <th class="thm-clr text-white">नाम और पद</th>
                           <th class="thm-clr text-white">ईमेल आईडी</th>
                           <th class="thm-clr text-white">टेलीफोन नंबर</th>
                        </tr>
                     </thead>
                     <tbody class="text-muted">
                        <tr>
                           <td class="bg-menu-open">श्री आलोक झा, प्रधान अपर महानिदेशक</td>
                           <td class="bg-menu-open">alok.jhaa@nic.in</td>
                           <td class="bg-menu-open">011-23340413</td>
                        </tr>
                        <tr>
                           <td class="">श्री संतोष कुमार मिश्रा, अपर निदेशक</td>
                           <td class="">sk.mishra81@nic.in</td>
                           <td class="">011-23741696 (O)<br>011-21400427 (O)</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री अभिषेक अग्रवाल, अपर निदेशक</td>
                           <td class="bg-menu-open">abhi.agrawal83@gov.in</td>
                           <td class="bg-menu-open">011-21400425 (O)</td>
                        </tr>
                        <tr>
                           <td class="">श्रीमती मनु पंवार, संयुक्त निदेशक</td>
                           <td class="">manu.panwar@gov.in</td>
                           <td class="">011-23741697 (O)</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री मृणाल प्रकाश मिश्रा, उप निदेशक</td>
                           <td class="bg-menu-open">mrinal.mishra@gov.in</td>
                           <td class="bg-menu-open">011-23741699 (O)</td>
                        </tr>
                        <tr>
                           <td class="">श्री अभिजीत पटेल, उप निदेशक</td>
                           <td class="">a.patel88@gov.in</td>
                           <td class="">011-21401061 (O)</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री आशीष तिवारी, सहायक निदेशक</td>
                           <td class="bg-menu-open">ashishtiwari.1964@gov.in</td>
                           <td class="bg-menu-open">011-23741695 (O)</td>
                        </tr>
                        <tr>
                           <td class="">श्री धनबीर सिंह, सहायक निदेशक</td>
                           <td class="">dhanbirs.g089401@gov.in</td>
                           <td class="">011-21400428</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री राजेश भारद्वाज, सहायक निदेशक</td>
                           <td class="bg-menu-open">rajeshb.g089001@gov.in</td>
                           <td class="bg-menu-open">011-23741693</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>

            <!--3rd container-->
            <div class="container mt-3">
               <h4 class="heading-clr text-center fw-bold mb-3">
                  मानव संसाधन विकास महानिदेशालय, एचआरएम-II विंग, अप्रत्यक्ष कर एवं सीमा शुल्क,
                  507, दीप शिखा बिल्डिंग, राजेंद्र प्लेस, नई दिल्ली-110008
               </h4>
               <div class="col-12 row my-3 text-center mx-auto d-flex justify-content-between">
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto">
                     <span class="fw-bold">ईमेल:</span> dghrd-hrm2@gov.in
                  </div>
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto">
                     <span class="fw-bold">फोन नंबर:</span> 011-25741163
                  </div>
                  <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto pe-0">
                     <span class="fw-bold">फैक्स नंबर:</span> 011-25729871
                  </div>
               </div>
               <div class="table-responsive">
                  <table class="table w-100 table-bordered">
                     <thead class="thm-clr text-white">
                        <tr>
                           <th class="thm-clr text-white">नाम और पद</th>
                           <th class="thm-clr text-white">ईमेल आईडी</th>
                           <th class="thm-clr text-white">टेलीफोन नंबर</th>
                        </tr>
                     </thead>
                     <tbody class="text-muted">
                        <tr>
                           <td class="">श्री राजीव यादव, प्रधान अपर महानिदेशक</td>
                           <td class="">rajeev.yadav68@gov.in</td>
                           <td class="">011-25741163 (O) <br> 011-25710483 (O) <br> 011-25729871 (F)</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्रीमती पल्लविका दत्ता, अपर निदेशक</td>
                           <td class="bg-menu-open">pdutta.irs@gov.in</td>
                           <td class="bg-menu-open">011-25815870 (O)</td>
                        </tr>
                        <tr>
                           <td class="">श्री अर्जुन कुमार मीणा, अपर निदेशक</td>
                           <td class="">meena.arjun@gov.in</td>
                           <td class="">011-25761008 (O)</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री रितेश कुमार त्रिपाठी, संयुक्त निदेशक</td>
                           <td class="bg-menu-open">ritesh.tripathi@gov.in</td>
                           <td class="bg-menu-open">011-25815871 (O)</td>
                        </tr>
                        <tr>
                           <td class="">श्री नीरज मीणा, उप निदेशक</td>
                           <td class="">neeraj.meena89@gov.in</td>
                           <td class="">011 25815870 (O)</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री अंकित अग्रवाल, उप निदेशक</td>
                           <td class="bg-menu-open">agarwal.ankit91@gov.in</td>
                           <td class="bg-menu-open">011-25761008 (O)</td>
                        </tr>
                        <tr>
                           <td class="">श्री अनुपम पालीवाल, उप निदेशक</td>
                           <td class="">anupam.70@gov.in</td>
                           <td class="">011-25761008</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">डॉ. संदीप कौर, उप निदेशक</td>
                           <td class="bg-menu-open">kaur.sandeep@gov.in</td>
                           <td class="bg-menu-open">011-25761008</td>
                        </tr>
                        <tr>
                           <td class="">श्री उज्जल रॉय, सहायक निदेशक</td>
                           <td class="">ujjal.roy1969@gov.in</td>
                           <td class="">011-25733169 (O)</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!--div close for 3rd container-->
            <!--4rth container-->
            <div class="container mt-3">
               <h4 class="heading-clr text-center fw-bold mb-3">
                  मानव संसाधन विकास महानिदेशालय (I & W/EMC)
                  C-4, वेस्ट विंग, ग्राउंड फ्लोर, इरकॉन बिल्डिंग, जिला केंद्र साकेत, नई दिल्ली-110017
               </h4>

               <div class="table-responsive">
                  <table class="table w-100 table-bordered">
                     <thead class="thm-clr text-white">
                        <tr>
                           <th class="thm-clr text-white">नाम और पद</th>
                           <th class="thm-clr text-white">ईमेल आईडी</th>
                           <th class="thm-clr text-white">टेलीफोन नंबर</th>
                        </tr>
                     </thead>
                     <tbody class="text-muted">
                        <tr>
                           <td class="">श्री वाल्टे वुंगजमुन, महानिदेशक</td>
                           <td class="">v.valte.irs@gov.in</td>
                           <td class="">011-20861962 <br>011-20861952</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री संजय महेन्द्रु, प्रधान अपर महानिदेशक</td>
                           <td class="bg-menu-open">s.mahendru@nic.in</td>
                           <td class="bg-menu-open">011-20861959</td>
                        </tr>
                        <tr>
                           <td class="">श्री मनोज कुमार, अपर निदेशक</td>
                           <td class="">manojkumar.irs@gov.in</td>
                           <td class="">011-20861960</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री अमित कुमार मिश्रा, अपर निदेशक</td>
                           <td class="bg-menu-open">amit.k.mishrairs@gov.in</td>
                           <td class="bg-menu-open">011-20861953</td>
                        </tr>
                        <tr>
                           <td class="">श्री दिनेश के. जांगिड, अपर निदेशक</td>
                           <td class="">dkj.irs@nic.in</td>
                           <td class="">011-20861955</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री गणेश पोते, संयुक्त निदेशक</td>
                           <td class="bg-menu-open">ganesh.pote@gov.in</td>
                           <td class="bg-menu-open">011-20861958</td>
                        </tr>
                        <tr>
                           <td class="">श्रीमती कनिका शर्मा, उप निदेशक</td>
                           <td class="">sharma.kanika@gov.in</td>
                           <td class="">011-20907473</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री आर. के. चाहर, सहायक निदेशक</td>
                           <td class="bg-menu-open">rajeshkc.d079401@gov.in</td>
                           <td class="bg-menu-open">011-29561527</td>
                        </tr>
                        <tr>
                           <td class="">श्री आशीष शर्मा, सहायक निदेशक</td>
                           <td class="">ashishs.co99901@gov.in</td>
                           <td class="">011-20861964</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">श्री हवा सिंह, सहायक निदेशक</td>
                           <td class="bg-menu-open">singh.hawa69@gov.in</td>
                           <td class="bg-menu-open">NA</td>
                        </tr>
                        <tr>
                           <td class="">श्री लाजपत राय, सहायक निदेशक</td>
                           <td class="">lajpatr.c048901@gov.in</td>
                           <td class="">NA</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!--div close for 4th container-->


         </div><!--div close for col-lg-9-->
         @include('Dghrd.website.layouts.important_links')
      </div><!--div close for row-->
   </div><!--div close for container-fluid-->

</section>
@endsection