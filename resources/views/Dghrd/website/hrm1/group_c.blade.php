
@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2">
                 
                 <h5 class="my-auto">
                    <a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a>
                     >> HRM 1 >> Recruitment Rules >> Group C >>
     
                <span>
                  @if($subTabId == 1)
                    Recruitment Rules Of  Assistant Sub Inspector Weapons
                      @elseif($subTabId== 2)
                     Recruitment Rules Of DOS
                    @elseif ($subTabId==3)
                    Recruitment Rules Of  Draftsman
                    @elseif ($subTabId==4)
                   Recruitment Rules Of Drivers
                    @elseif ($subTabId==5)
                    Recruitment Rules Of Havaldar & Head Havaldar
                    @elseif ($subTabId==6)
                   Recruitment Rules Of  LDC
                    @elseif ($subTabId==7)
                   Recruitment Rules Of MTS
                    @elseif ($subTabId==8)
                    Recruitment Rules Of Record Keeper
                    @elseif ($subTabId==9)
                    Recruitment Rules Of Senior TAX Assistant
                    @elseif ($subTabId==10)
                    Recruitment Rules Of  Stenographer GR-II
                    @else
                    Recruitment Rules Of TAX Assistant
            
                 @endif
               </span>
  
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
                    <!--<h4 class="heading-clr text-center fw-bold mb-4">Directorate General of Human Resource Development:</h4>-->
                    <div style="overflow-x:auto;" class="table-responsive">
                        <table class="table table-bordered dataTable" style="border:1px solid lightgrey; width:100%;">
                            <thead>
                                <!-- Your table header -->
                                <tr>
                                    <th class="thm-clr text-white">Subject</th>
                                    <th class="thm-clr text-white">Date</th>
                                 </tr>

                            </thead>
                            <tbody class="">
                                @foreach($common  as $com)
                                    <tr>
                                        <td>
                                            @php
                                                $title = ucwords($com->tittle) ?? '';
                                                echo '
                                                <a href="' . asset('Admin/Pdf/' . $com->pdf) . '" target="_blank" class="aa text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1"><img src="' . asset('public/website/human/icon/TriRight.png') . '"></div>
                                                        <div>' . wordwrap($title, 120, "<br>\n", true) . '</div>
                                                    </div>
                                                </a>';
                                            @endphp
                                        </td>
                                        <td class="text-nowrap">{{ date('d/m/Y', strtotime($com->date)) }}</td>
                                    </tr>
                                @endforeach
                                @foreach($recruitmentRules as $content)
                                    <tr>
                                        <td>
                                            @php
                                                $title = ucwords($content->tittle) ?? '';
                                                echo '
                                                <a href="' . asset('Admin/Pdf/' . $content->pdf) . '" target="_blank" class="aa text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img src="' . asset('public/website/human/icon/TriRight.png') . '">
                                                        </div>
                                                        <div>
                                                             ' . wordwrap($title, 120, "<br>\n", true) . '
                                                        </div>
                                                    </div>
                                                   
                                                </a>';
                                            @endphp
                                        </td>
                                        <td class="text-nowrap">{{date('d/m/y', strtotime($content->date)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('Dghrd.website.layouts.important_links')
        </div>
    </div>
</section>

@endsection
