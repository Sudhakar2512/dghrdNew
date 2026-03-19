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
                    </a> >> राजभाषा >> <span>मानस ई-पुस्तक</span>
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
                    <div style="overflow-x:auto;" class="table-responsive">
                        <table class="table table-bordered dataTable" style="border:1px solid lightgrey; width:100%;">
                            <thead>
                                <tr>
                                    <th class="thm-clr text-white">शीर्षक</th>
                                    <th class="thm-clr text-white">वर्ष</th>
                                </tr>
                            </thead>
                            <tbody class="text-muted">
                                @foreach($pdf as $content)
                                <tr>
                                    <td class="text-nowrap">
                                        <a href="{{ route('ebook.show', $content->id) }}" class="text-primary" target="_blank">
                                            {{ $content->title }}
                                        </a>
                                    </td>
                                    <td class="text-nowrap">{{ $content->year }}</td>
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