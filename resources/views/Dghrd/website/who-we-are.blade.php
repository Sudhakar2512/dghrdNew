@extends('Dghrd.website.layouts.main')
@section('main-section')
<section>
    <div class="container-fluid bg-menu-open">
       <div class="container">
           <div class="py-2"><h5 class="my-auto"><a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> About us >> <span>  Who we are</span></h5></div>
       </div>
    </div>
</section>
<section>
     <div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                 <div class="container abt-content cnd-pd ">
                  <!--<h3 class="abt-heading lh-md"><span class="txt-clr"><u style="text-underline-offset:9px;">About<span style="color:#1B2C51;"></span></u></span> Directorate General of Human Resource Development</h3>-->
                   <div class="card p-4  thm-clr2">
                    <p style="text-align:justify;"><sup><i class="fa fa-quote-left me-1"></i></sup>With a view to providing a more focused approach to employee development and infrastructure expansion in order to harness the Human Resource functions as a strategic partner in business success and growth, the Directorate of Human Resource Development (HRD) was set up in Nov.
                    , 2008 by merging the erstwhile Directorate of Organization & Personnel Management and Directorate of Housing & Welfare and became operational w.e.f. 1st December, 2008. <br> The organizational goal of the CBIC is to optimize revenue collection through broadening the tax base, rationalizing tax structure, simplifying procedures, improving voluntary compliance 
                    and providing an efficient and responsive tax administration. In order to meet this goal, the DG (HRD) strives to develop a skilful, productive, healthy, efficient and diverse work force with highly effective supervisors, managers and leaders.<sup><i class="fa fa-quote-right ms-1"></i></sup></p>
                   </div>
                 </div>
            </div><!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
           

        </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
