@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2">
                 <h5 class="my-auto"><a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> HRM 1 >> <span> Online writing of APARs</span></h5>
             </div>
         </div>
      </div>
</section>
<section>
<div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                <div class="container cnt-pd ">
                     <!--<h4 class="heading-clr text-center fw-bold mb-4">Directorate General of Human Resource Development:</h4>-->
                     <div style="overflow-x:auto;" class="table-responsive">
                     <table class="table table-bordered" style="border:px solid lightgrey; width:100%;">
                          <thead>
                             <tr>
                                <th class="thm-clr text-white">Subject</th>
                                <th class="thm-clr text-white">Date</th>
                             </tr>
                          </thead>
                          <tbody class="text-dark">
                               <tr>
                                  <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"><a href="###" class="aa text-dark"> Guidelines for issuance of NRC NO REPORT CERTIFICATE in SPARROW- IRS -reg.</a></td>
                                  <td class="text-dark">11/08/2023</td>
                               </tr>
                               <tr class="">
                                  <td class="bg-menu-open text-dark d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"><a href="###" class="aa text-dark "> List Of Custodian, Alternate Custodian and PAR Manager of SPARROW-IRS as on 20.03.2023.</a></td>
                                  <td class="bg-menu-open text-dark">20/03/2023</td>
                               </tr>
                               <tr>
                                  <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"><a href="###" class="aa text-dark">Online writing of APAR in SPARROW-IRS for IRS C&IT Officers for the year 2022-23.</a></td>
                                  <td class="text-dark">20/03/2023</td>
                               </tr>
                               <tr >
                                  <td class="bg-menu-open text-dark  d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"> List Of Custodian, Alternate Custodian and PAR Manager of SPARROW-IRS as on 20.03.2023.</td>
                                  <td class="bg-menu-open text-dark">20/03/2023</td>
                               </tr>
                               <tr>
                                  <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"> Guidelines for issuance of NRC NO REPORT CERTIFICATE in SPARROW- IRS -reg.</td>
                                  <td class="text-dark">11/08/2023</td>
                               </tr>
                               <tr>
                                  <td class="bg-menu-open text-dark  d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"> List Of Custodian, Alternate Custodian and PAR Manager of SPARROW-IRS as on 20.03.2023.</td>
                                  <td class="bg-menu-open text-dark">20/03/2023</td>
                               </tr>
                               <tr>
                                  <td class="text-dark d-flex align-items-center text-justify"><img src="{{asset('website/human/icon/TriRight.png')}}"> Guidelines for issuance of NRC NO REPORT CERTIFICATE in SPARROW- IRS -reg.</td>
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
