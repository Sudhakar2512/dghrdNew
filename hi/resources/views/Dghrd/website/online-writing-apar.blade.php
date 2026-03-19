@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
   <div class="container-fluid bg-menu-open">
      <div class="container">
         <div class="py-2">
            <h5 class="my-auto">
               <a href="{{url('/')}}" class="aa txt-clr">
                  <i class="fa fa-home"></i> होम
               </a> >> एचआरएम 1 >> <span> ऑनलाइन लेखन of एपीएआर्स</span>
            </h5>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid my-3">
      <div class="row col-12 mx-auto">
         <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
            <div class="container cnt-pd ">
               
               <div style="overflow-x:auto;" class="table-responsive">
                  <table class="table table-bordered" style="border:px solid lightgrey; width:100%;">
                     <thead>
                        <tr>
                           <th class="thm-clr text-white">विषय</th>
                           <th class="thm-clr text-white">दिनांक</th>
                        </tr>
                     </thead>
                     <tbody class="text-dark">
                        <tr>
                           <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"><a href="###" class="aa text-dark"> SPARROW-IRS में NRC NO REPORT CERTIFICATE जारी करने के लिए दिशा-निर्देश - संदर्भ।</a></td>
                           <td class="text-dark">11/08/2023</td>
                        </tr>
                        <tr class="">
                           <td class="bg-menu-open text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"><a href="###" class="aa text-dark"> SPARROW-IRS के कस्टोडियन, वैकल्पिक कस्टोडियन और PAR प्रबंधक की सूची 20.03.2023 तक।</a></td>
                           <td class="bg-menu-open text-dark">20/03/2023</td>
                        </tr>
                        <tr>
                           <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"><a href="###" class="aa text-dark"> SPARROW-IRS में IRS C&IT अधिकारियों के लिए APAR ऑनलाइन लिखाई 2022-23 के लिए।</a></td>
                           <td class="text-dark">20/03/2023</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> SPARROW-IRS के कस्टोडियन, वैकल्पिक कस्टोडियन और PAR प्रबंधक की सूची 20.03.2023 तक।</td>
                           <td class="bg-menu-open text-dark">20/03/2023</td>
                        </tr>
                        <tr>
                           <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> SPARROW-IRS में NRC NO REPORT CERTIFICATE जारी करने के लिए दिशा-निर्देश - संदर्भ।</td>
                           <td class="text-dark">11/08/2023</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> SPARROW-IRS के कस्टोडियन, वैकल्पिक कस्टोडियन और PAR प्रबंधक की सूची 20.03.2023 तक।</td>
                           <td class="bg-menu-open text-dark">20/03/2023</td>
                        </tr>
                        <tr>
                           <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> SPARROW-IRS में NRC NO REPORT CERTIFICATE जारी करने के लिए दिशा-निर्देश - संदर्भ।</td>
                           <td class="text-dark">11/08/2023</td>
                        </tr>
                     </tbody>

                  </table>
               </div>
            </div><!--div close for container-->
         </div><!--div close for col-lg-9-->
         @include('Dghrd.website.layouts.important_links')
         <!--div close for col-lg-3-->
      </div><!--div close for row-->
   </div><!--div close for container-fluid-->

</section>

@endsection