@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">

                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr"><i class="fa fa-home"></i> होम </a>
                    >> एचआरएम 1 >> भर्ती नियम >> समूह C >>
                    <span>
                        @if($subTabId == 1)
                        सहायक उप निरीक्षक शस्त्रों के भर्ती नियम
                        @elseif($subTabId== 2)
                        डीओएस के भर्ती नियम
                        @elseif ($subTabId==3)
                        ड्राफ्ट्समैन के भर्ती नियम
                        @elseif ($subTabId==4)
                        ड्राइवरों के भर्ती नियम
                        @elseif ($subTabId==5)
                        हवलदार और मुख्य हवलदार के भर्ती नियम
                        @elseif ($subTabId==6)
                        एलडीसी के भर्ती नियम
                        @elseif ($subTabId==7)
                        एमटीएस के भर्ती नियम
                        @elseif ($subTabId==8)
                        रिकॉर्ड कीपर के भर्ती नियम
                        @elseif ($subTabId==9)
                        वरिष्ठ कर सहायक के भर्ती नियम
                        @elseif ($subTabId==10)
                        शॉर्टहैंड लेखक ग्रेड-II के भर्ती नियम
                        @else
                        कर सहायक के भर्ती नियम
                        @endif
                    </span>
                </h5>
            </div>
        </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                <div class="container cnt-pd">
                    
                    <div style="overflow-x:auto;" class="table-responsive">
                        <table class="table table-bordered dataTable" style="border:1px solid lightgrey; width:100%;">
                            <thead>
                                <!-- Your table header -->
                                <tr>
                                    <th class="thm-clr text-white">विषय</th>
                                    <th class="thm-clr text-white">दिनांक</th>
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
                                                    ' . wordwrap($title, 120, true) . '
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