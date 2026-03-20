@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
    <section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5 class="my-auto"> <a href="{{url('/')}}" class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> About us >> <span>  CBIC </span></h5></div>
         </div>
      </div>
    </section>
    <section>
     <div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                <div class="container cnt-pd">
                     <h2 class="heading-clr " >Central Board of Indirect Taxes & Customs</h2>
                     <p class="text-justify ">Central Board of Indirect Taxes & Customs (CBIC) is a part of the Department of Revenue under the Ministry of Finance, Government of India.
                        It deals with the tasks of formulation of policy concerning levy and collection of Customs duties, Central Excise duties and Service Tax, prevention of smuggling and administration
                        of matters relating to Customs, Central Excise and Narcotics to the extent under CBIC's purview. The Board is the administrative authority for its subordinate organizations, including
                        Custom Houses, Central Excise Commissionerates, Service Tax Commissionerates and the Central Revenues Control Laboratory.
                    </p>
                </div>
                <div class="container text-center my-4">
                    <img src="{{asset('website/human/orgn_cht_2 1.jpg')}}" style="width:80%;">
                </div>
            </div> <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
