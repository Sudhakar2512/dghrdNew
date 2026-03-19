@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
   <div class="container-fluid bg-menu-open">
      <div class="container">
         <div class="py-2">
            <h5 class="my-auto">
               <a href="{{url('/')}}" class="aa txt-clr"><i class="fa fa-home"></i> होम </a> >> HRM 1 >> <span> SPARROW हेल्प डेस्क</span>
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
               <h5 class="heading-clr text-center fw-bold mb-2">SPARROW IRS हेल्पडेस्क टीम</h5>
               <!--<p class="heading-clr text-center mb-4">श्री प्रतीक भाटिया (संयुक्त निदेशक) 011-23741699</p>-->
               <p class="heading-clr text-center mb-4">श्री मिरनल प्रकाश मिश्रा (उप निदेशक)</p>
               <div style="overflow-x:auto;" class="table-responsive">
                  <table class="table table-bordered" style=" width:100%;">
                     <thead>
                        <tr>
                           <th class="thm-clr text-white">क्रम संख्या</th>
                           <th class="thm-clr text-white">अधिकारी का नाम</th>
                           <th class="thm-clr text-white">पद</th>
                           <th class="thm-clr text-white">ईमेल आईडी</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>01</td>
                           <td>संदीप सिंह दहिया</td>
                           <td>सुपरिंटेंडेंट</td>
                           <td class="text-center" style="vertical-align: middle;" rowspan="4">help[dot]sparrowirs[at]gov[dot]in</td>
                        </tr>
                        <tr class="bg-menu-open">
                           <td class="bg-menu-open">02</td>
                           <td class="bg-menu-open">प्रदीप कुमार राठी</td>
                           <td class="bg-menu-open">इंस्पेक्टर</td>
                        </tr>
                        <tr>
                           <td>03</td>
                           <td>पवन कुमार</td>
                           <td>इंस्पेक्टर</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">04</td>
                           <td class="bg-menu-open">अरुण मलिक</td>
                           <td class="bg-menu-open">टी.ए.</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!--div close for container-->
            <!--2nd container-->
            <div class="container cnt-pd mt-2">
               <h5 class="heading-clr text-center fw-bold mb-2">SPARROW CBIC हेल्पडेस्क टीम</h5>
               <p class="heading-clr text-center mb-4">श्री मिर्नाल प्रकाश मिश्रा (डिप्टी डायरेक्टर)</p>

               <div class="table-responsive">
                  <table class="table table-bordered" style="width:100%;">
                     <thead>
                        <tr>
                           <th class="thm-clr text-white">क्रम संख्या</th>
                           <th class="thm-clr text-white">अधिकारी का नाम</th>
                           <th class="thm-clr text-white">पद</th>
                           <th class="thm-clr text-white">ईमेल आईडी</th>
                        </tr>
                     </thead>
                     <tbody class="text-dark">
                        <tr>
                           <td class="">01</td>
                           <td class="">संदीप सिंह दहिया</td>
                           <td class="">सुपरीटेंडेंट</td>
                           <td class="text-center" rowspan="4" style="vertical-align:middle;">help[dot]sparrowcbic[at]gov[dot]in</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">02</td>
                           <td class="bg-menu-open">ममता कुमारी</td>
                           <td class="bg-menu-open">इंस्पेक्टर</td>
                        </tr>
                        <tr>
                           <td class="">03</td>
                           <td class="">शालिनी सिंह</td>
                           <td class="">ई.ए.</td>
                        </tr>
                        <tr>
                           <td class="bg-menu-open">04</td>
                           <td class="bg-menu-open">प्रदीप मुद्गल</td>
                           <td class="bg-menu-open">ई.ए.</td>
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