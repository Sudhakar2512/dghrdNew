@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2">
                <h5 class="my-auto">
                    <a href="{{url('/')}}" class="aa txt-clr"><i class="fa fa-home"></i> होम </a>
                    >> एचआरएम 1 >> <span>संपर्क नियुक्ति</span>
                </h5>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto mg-box-top">
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
                                @foreach($senior as $content)
                                <tr>
                                    <td>
                                        @php
                                        $title = ucwords($content->tittle) ?? '';
                                        echo '<a href="' . asset('Admin/Pdf/' . $content->pdf) . '" target="_blank" class="aa text-dark">
                                            <div class="d-flex align-items-center">
                                                <div class="me-1">
                                                    <img src="' . asset('website/human/icon/TriRight.png') . '">
                                                </div>
                                                <div>
                                                    ' . wordwrap($title, 120, true) . '
                                                </div>
                                            </div>
                                        </a>';
                                        @endphp
                                    </td>
                                    <td class="text-nowrap">{{ date('d/m/Y', strtotime($content->date)) }}</td>
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