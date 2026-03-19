@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5 class="my-auto"><a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> HRM 1 >> <span>  SPARROW help desk</span></h5></div>
         </div>
      </div>
</section>
<section>
<div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                <div class="container cnt-pd">
                     <h5 class="heading-clr text-center fw-bold mb-2">SPARROW IRS HELPDESK TEAM</h5>
                     <!--<p class="heading-clr text-center mb-4">Shri Prateek Bhatia (Joint Director) 011-23741699</p>-->
                     <p class="heading-clr text-center mb-4"> Sh. Mirnal Prakash Mishra (Deputy Director)</p>
                    <div style="overflow-x:auto;" class="table-responsive">
                    <table class="table table-bordered" style=" width:100%;">
                          <thead>
                              <tr>
                                 <th class="thm-clr text-white">SR. No.</th>
                                 <th class="thm-clr text-white">Name of officer</th>
                                <th class="thm-clr text-white">Designation</th>
                                <th class="thm-clr text-white">Email Id</th>
                             </tr>
                          </thead>
                          <tbody class="">
                              <tr>
                                  <td class="">01</td>
                                  <td class="">Sandeep Singh Dahiya</td>
                                  <td class="">Superintendent</td>
                                  <td class="text-center" style="vertical-align: middle;"  rowspan="4">help[dot]sparrowirs[at]gov[dot]in</td>
                               </tr>
                               <tr class="bg-menu-open">
                                  <td class="bg-menu-open">02</td>
                                  <td class="bg-menu-open">Pradeep Kumar Rathi</td>
                                  <td class="bg-menu-open">Inspector</td>
                                 
                               </tr>
                               <tr>
                                  <td class="">03</td>
                                  <td class="">Pawan Kumar</td>
                                  <td class="">Inspector</td>

                               </tr>
                               <tr>
                                  <td class="bg-menu-open">04</td>
                                  <td class="bg-menu-open">Arun Malik</td>
                                  <td class="bg-menu-open">T.A.</td>
                             
                               </tr>
                          </tbody>
                     </table>
                    </div>
                </div><!--div close for container-->
                <!--2nd container-->
                <div class="container cnt-pd mt-2">
                    <h5 class="heading-clr text-center fw-bold mb-2">SPARROW CBIC HELPDESK TEAM</h5>
                    <p class="heading-clr text-center mb-4"> Sh. Mirnal Prakash Mishra (Deputy Director)</p>

                    <div class="table-responsive">
                      <table class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                   <th class="thm-clr text-white">SR. No.</th>
                                   <th class="thm-clr text-white">Name of officer</th>
                                  <th class="thm-clr text-white">Designation</th>
                                  <th class="thm-clr text-white">Email Id</th>
                               </tr>
                            </thead>
                            <tbody class="text-dark">
                                <tr>
                                     <td class="">01</td>
                                     <td class="">Sandeep Singh Dahiya</td>
                                     <td class="">Superintendent</td>
                                     <td  class="text-center" rowspan="4" style="vertical-align:middle;">help[dot]sparrowcbic[at]gov[dot]in</td>
                                 </tr>
                                 <tr>
                                     <td  class="bg-menu-open">02</td>
                                     <td  class="bg-menu-open">Mamta Kumari</td>
                                    <td  class="bg-menu-open">Inspector</td>
                                    
                                 </tr>
                                 <tr>
                                    <td class="">03</td>
                                    <td class="">Shalini Singh</td>
                                    <td class="">E.A.</td>
                                  
                                 </tr>
                                 <tr>
                                    <td  class="bg-menu-open">04</td>
                                    <td  class="bg-menu-open">Pardeep Mudgal</td>
                                    <td  class="bg-menu-open">E.A.</td>
                                   
                                 </tr>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div><!--div close for col-lg-9-->
            <!-- div for side navigation -->
            @include('Dghrd.website.layouts.important_links')     
        </div><!--div close for row-->
</div><!--div close for container-fluid-->

</section>
@endsection
