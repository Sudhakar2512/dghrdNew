
@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
                     
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa; /* Set a light background color */
    }

 

    li {
      margin-left: 5px;
      /*transition:all ease 0.5s;*/
    }
    li:hover{
      /*transform:scale(1.05);*/
  }
    a {
      text-decoration: none; /* Remove the underline */
      color: #000000; /* Set link color to blue */
      cursor: pointer; /* Change cursor to pointer */
      transition: color 0.3s ease; /* Smooth transition for color change */
    }

    a:hover {
      color: #0056b3; /* Change color on hover */
    }

  
    .container.heading-clr {
      background-color: white; /* White background color for heading container */
      /*border: 2px solid lightgrey;*/
      font-weight: 500;
      margin-top: 20px; /* Add space at the top */
    }
    .card-header.thm-clr {
      background-color: #007bff; /* Blue background color for card header */
    }
  </style>
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2"><h5 class="my-auto"><a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> HRM 1</h5></div>
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
                            <h5 class="my-auto">HRM 1</h5>
                        </div>
                        <div class="card-body">

                            <ul style="list-style:none;" class="ms-0 ps-0">
                                <li>
                                  <!--<strong><a href="#"><i></i>HRM1</a></strong>-->
                                  <ul style="list-style-type:'&#9755;  ';" class="ms-1 ps-0" >
                                    <li>
                                      <strong><a href="#"> SPARROW</a></strong>
                                      <ul>
                                        <li><a href="{{ route('sparrow.content', ['tab' => 1]) }}">Online writing of APARs</a></li>
                                        <li><a href="{{ route('sparrow.content', ['tab' => 2]) }}">Online writing of IPRs</a></li>
                                        <li><a href="{{ route('sparrow.content', ['tab' => 3]) }}">SPARROW help manual</a></li>
                                        <li><a href="{{url('sparrow-help_desk')}}">SPARROW help desk</a></li>
                                      </ul>
                                    </li>
                                    <li><strong><a href="#">APAR</a></strong>
                                    <ul>
                                        <li><a href="{{url('apar')}}">Missing apar</a></li>
                                    </ul>
                                    </li>
                                     <li> <strong><a href="">IPR</a></strong>
                                      <ul>
                                        <li><a href="{{url('ipr')}}">Letters</a></li>
                                        <li><a href="#">IPR Status</a></li>
                                      </ul>
                                    </li>
                                    <li>
                                      <strong><a href="#">Recruitment Rules</a></strong>
                                      <ul>
                                        <li>
                                          <strong><a href="#">Group A</a></strong>
                                          <ul style="list-style:circle;">
                                        <li>    <a href="{{ route('group_a', ['subTabId' => 1]) }}">RECRUITMENT RULES OF ASSISTANT DIRECTOR(OL)</a></li>
                         <li> <a  href="{{ route('group_a', ['subTabId' => 2]) }}">RECRUITMENT RULES OF CAO</a></li>
                        <li>  <a  href="{{ route('group_a', ['subTabId' => 3]) }}">RECRUITMENT RULES OF DEPUTY DIRECTOR (OL)</a></li>
                       <li>   <a  href="{{ route('group_a', ['subTabId' => 4]) }}">RECRUITMENT RULES OF IRS</a></li>
                                          </ul>
                                        </li>
                                        <li>
                                          <strong><a href="#">Group B</a></strong>
                                          <ul style="list-style:circle;">
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 1]) }}">RECRUITMENT RULES OF  ADMINISTRATIVE  OFFICER</a>  </li>    
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 2]) }}">RECRUITMENT RULES OF APPRAISER</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 3]) }}">RECRUITMENT RULES OF EXAMINER</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 4]) }}">RECRUITMENT RULES OF  EXECUTIVE ASSISTANT</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 5]) }}">RECRUITMENT RULES OF  INSPECTOR CEX</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 6]) }}">RECRUITMENT RULES OF  JUNIOR HINDI  TRANSLATOR</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 7]) }}">RECRUITMENT RULES OF  PREVENTIVE OFFICER</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 8]) }}">RECRUITMENT RULES OF  PRIVATE SECRETARY</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 9]) }}">RECRUITMENT RULES OF  SENIOR HINDI   TRANSLATOR</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 10]) }}">RECRUITMENT RULES OF  SENIOR PRIVATE  SECRETARY</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 11]) }}">RECRUITMENT RULES OF  STENOGRAPHER GRADE-1</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 12]) }}">RECRUITMENT RULES OF  SUPERINTENDENT CEX</a></li>
                                         <li>   <a  href="{{ route('group_b', ['subTabId' => 13]) }}">RECRUITMENT RULES OF  SUPERINTENDENT PREVENTIVE</a></li>
                  
                                          </ul>
                                        </li>
                                        <li>
                                          <strong><a href="#">Group C</a></strong>
                                          <ul style="list-style:circle;">
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 1]) }}">RECRUITMENT RULES OF ASSISTANT SUB INSPECTOR WEAPONS</a>     </li>                         
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 1]) }}">RECRUITMENT RULES OF ASSISTANT SUB INSPECTOR WEAPONS</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 1]) }}">RECRUITMENT RULES OF ASSISTANT SUB INSPECTOR WEAPONS</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 2]) }}">RECRUITMENT RULES OF DOS</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 3]) }}">RECRUITMENT RULES OF DRAFTSMAN</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 4]) }}">RECRUITMENT RULES OF DRIVERS</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 5]) }}">RECRUITMENT RULES OF HAVALDAR & HEAD  HAVALDAR</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 6]) }}">RECRUITMENT RULES OF LDC</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 7]) }}">RECRUITMENT RULES OF MTS</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 8]) }}">RECRUITMENT RULES OF RECORD KEEPER</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 9]) }}">RECRUITMENT RULES OF SENIOR TAX ASSISTANT</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 10]) }}">RECRUITMENT RULES OF STENOGRAPHERGR-II</a></li>
                                        <li>    <a  href="{{ route('group_c', ['subTabId' => 11]) }}">RECRUITMENT RULES OF TAX ASSISTANT</a></li>
                                          </ul>
                                        </li>

                                        <li>
                                            <strong><a href="#">Canteen Staff</a></strong>
                                            <ul style="list-style:circle;">
                                              <li>  <a  href="{{ route('canteen', ['subTabId' => 1]) }}">GROUP-C POSTS</a></li>
                                               <li> <a  href="{{ route('canteen', ['subTabId' => 2]) }}">MANAGER GRADE-II & MANAGER CUM ACCOUNTANT</a></li>
                                            </ul>
                                          </li>
                                          <li>
                                            <strong><a href="#"> CENTRAL BUREAU OF NARCOTICS(CBN)</a></strong>
                                            <ul style="list-style:circle;">
                                              <li>  <a  href="{{ route('cbn', ['subTabId' => 1]) }}">DRIVER SPECIAL GRADE</a>                                 </li>
                                              <li>  <a  href="{{ route('cbn', ['subTabId' => 2]) }}">GR-C DRIVER</a></li>
                                              <li>  <a  href="{{ route('cbn', ['subTabId' => 3]) }}">GROUP-B POSTS</a></li>
                                              <li>  <a  href="{{ route('cbn', ['subTabId' => 4]) }}">GROUP-C CBN</a></li>
                                              <li>  <a  href="{{ route('cbn', ['subTabId' => 5]) }}">MTS CBN</a></li>
                                                 </ul>
                                          </li>
                                        <!-- ... Other Recruitment Rules sub-items ... -->
                                        <li>
                                            <strong><a href="#">CRCL</a></strong>
                                            <ul style="list-style:circle;">
                                             <li>   <a  href="{{ route('crcl', ['subTabId' => 1]) }}">CHEMICAL ASSISTANT</a>                              </li>             
                                             <li>   <a  href="{{ route('crcl', ['subTabId' => 2]) }}">CRCL GR-A & B</a></li>
                                             <li>   <a  href="{{ route('crcl', ['subTabId' => 3]) }}">CRCL GR-C</a></li>
                                                 </ul>
                                          </li>
                                          <li>
                                            <strong><a href="#">DGPM</a></strong>
                                            <ul style="list-style:circle;">
                                          <li>      <a  href="{{ route('dgpm', ['subTabId' => 1]) }}">GR C & D</a></li>
                                            </ul>
                                          </li>
                                          <li>
                                            <strong><a href="#"> DIRECTORATE OF LOGISTICS </a></strong>
                                            <ul style="list-style:circle;">
                                             <li>   <a  href="{{ route('dol', ['subTabId' => 1]) }}">GROUP-A</a>                </li>                  
                                             <li>   <a  href="{{ route('dol', ['subTabId' => 2]) }}">GROUP-B</a></li>
                                             <li>   <a  href="{{ route('dol', ['subTabId' => 3]) }}">GROUP-C & D</a></li>
                                               </ul>
                                          </li>
                                          <li>
                                            <strong><a href="#">DPPR</a></strong>
                                            <ul style="list-style:circle;">
                                             <li>   <a  href="{{ route('dppr', ['subTabId' => 1]) }}">GR C and D posts</a></li>
                                             <li>   <a  href="{{ route('dppr', ['subTabId' => 2]) }}">MANAGER PRESS</a></li>
                                                                           </ul>
                                          </li>
                                          <li>
                                            <strong><a href="#">DRI</a></strong>
                                            <ul style="list-style:circle;">
                                            <li>    <a  href="{{ route('dri', ['subTabId' => 1]) }}">GR C AND D</a>                                          </li>
                                            <li>    <a  href="{{ route('dri', ['subTabId' => 2]) }}">INTELLIGENCE OFFICER</a></li>
                                            <li>    <a  href="{{ route('dri', ['subTabId' => 3]) }}">SIO</a></li>
                                                </ul>
                                          </li>
                                          <li>
                                            <strong><a href="#">RRS Of Directorates</a></strong>
                                            <ul style="list-style:circle;">
                                            <li>    <a  href="{{ route('rrod', ['subTabId' => 1]) }}">GROUP-C POSTS</a>          </li>                                                                                              
                                            <li>    <a  href="{{ route('rrod', ['subTabId' => 2]) }}">RECRUITMENT RULES OF  ADDITIONAL ASSISTANT <br> DIRECTOR</a></li>
                                            <li>    <a  href="{{ route('rrod', ['subTabId' => 3]) }}">RECRUITMENT RULES OF STENOGRAPHER GR-I</a></li>
                                            <li>    <a  href="{{ route('rrod', ['subTabId' => 4]) }}">TAX ASSISTANT</a></li>
                                            <li>    <a  href="{{ route('rrod', ['subTabId' => 5]) }}">EXECUTIVE ASSISTANT</a></li>
                                            <li>    <a  href="{{ route('rrod', ['subTabId' => 6]) }}">STAFF CAR DRIVER(SPECIAL GRADE)</a></li>
                                            </ul>
                                          </li>
                                          <li>
                                            <strong><a href="{{ route('telecommunication', ['tab' => 'systum_data_management' ]) }}">System And Data Manegment</a></strong>
                                             </li>
                                          <li>
                                            <strong><a href="{{ route('telecommunication', ['tab' => 'telecommunication_wing']) }}">TELECOMMUNICATION WING, DIRECTORATE OF LOGISTICS</a></strong>
                                            
                                          </li>
                                      </ul>
                                    </li>
                                    <li><strong><a href="#">Seniority List</a></strong>
                                      <ul>
                                          <li>
                                            <a href="{{url('seniorty_list')}}">GROUP B</a>
                                          </li>
                                      </ul>
                                    </li>

                                    <li>
                                      <strong><a href="#">DPC</a></strong>
                                      <ul>
                                       <li> <a  href="{{ route('dpc', ['tab' => 1]) }}">GROUP A</a></li>
                                       <li> <a  href="{{ route('dpc', ['tab' => 2]) }}">GROUP B to A</a></li>
                    
                                        <!-- ... DPC sub-items ... -->
                                      </ul>
                                    </li>
                                    <li><strong><a href="{{url('empanelment_deputation')}}">Empanelment & Deputation</a></strong></li>
                                    <li><strong><a href="{{url('cadre_restructuring')}}">Cadre Restructuring 2018</a></strong></li>
                                    <li>
                                      <strong><a href="{{url('sparrow_cbic')}}">SPARROW-CBIC</a></strong>
                                      <ul>
                                        <li><a href="{{url('sparrow_cbic')}}">HELP MANUAL FOR SPARROW-CBIC</a></li>
                                      </ul>
                                    </li>
                                    <li><strong><a href="{{url('officer_detailes')}}">Officer Details</a></strong></li>
                                    <li><strong><a href="{{url('various_communication')}}">Various Communication with Field Formations</a></strong></li>
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
