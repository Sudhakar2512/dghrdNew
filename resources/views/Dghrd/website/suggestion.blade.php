@extends('Dghrd.website.layouts.main')
@section('main-section')
<style>
    /* Add these styles to your CSS file or in a style tag in your Blade view */
    #success-message, #error-message {
        position: relative;
        padding: 10px 15px;
        border-radius: 4px;
        margin-top: 15px;
    }

    #success-message {
        border: 1px solid #037b07;
        background-color: #DFF0D8;
        color: #037b07;
    }

    #error-message {
        border: 1px solid #a94442;
        background-color: #f2dede;
        color: #a94442;
    }

    .message-container button.close {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 18px;
        color: inherit;
        opacity: 0.7;
        cursor: pointer;
    }

    .message-container button.close:hover {
        opacity: 1;
    }
</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- SECTION FOR MENU NAV -->
<section>
    <div class="container-fluid bg-menu-open">
        <div class="container">
            <div class="py-2"><h5 class="my-auto"><a href="{{url('/')}}"class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> <span>Suggestions</span></h5></div>
        </div>
    </div>
</section>
<section class="">
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-8 col-sm-12 mx-auto mg-box-top">
                @if(session('success'))
                <div id="success-message" class="message-container alert alert-success mt-3">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if(session('error'))
                <div id="error-message" class="message-container alert alert-danger mt-3">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="container cnt-pd">
                   <div class="card border-0">
                       <div class="card-body px-0 px-lg-2">
                           <h5 class="mb-4">Suggestions of departmental officers on organizational issues including HR & Infrastructure.</h5>
                            <form action="{{ route('suggestions.store') }}" method="post" class="container px-0" onsubmit="return validateCaptcha()">
                                @csrf
                                <!-- Your existing form fields -->
                                <div class="row col-12 mx-auto">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="name" class="text-dark">Name<span class="text-danger">*</span>:</label>
                                            <input type="text" name="name" class="form-control mt-2 border-dark" required>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                         <div class="form-group mb-2">
                                             <label for="mobile" class="text-dark">Mobile<span class="text-danger">*</span>:</label>
                                             <input type="tel" name="mobile" class="form-control mt-2 border-dark" required>
                                         </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                         <div class="form-group mb-2">
                                             <label for="email" class="text-dark">Email Address<span class="text-danger">*</span>:</label>
                                             <input type="email" name="email" class="form-control mt-2 border-dark" required>
                                         </div>
                                    </div>
                                    <div class="col-lg-6">
                                         <div class="form-group mb-2">
                                             <label for="subject" class="text-dark">Subject<span class="text-danger">*</span>:</label>
                                             <input type="text" name="subject" class="form-control mt-2 border-dark" required>
                                         </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                         <div class="form-group mb-2">
                                             <label for="suggestions" class="text-dark">Suggestions<span class="text-danger">*</span>:</label>
                                             <textarea name="suggestions" class="form-control mt-2 border-dark" required></textarea>
                                         </div>
                                    </div>
                                    
                                    <div class="col-auto">
                                        <div class="form-group mb-2 ">
                                            <label for="g-recaptcha" class="text-dark">Captcha<span class="text-danger">*</span>:</label>
                                            <div class="g-recaptcha" data-sitekey="6Ld-IWQpAAAAAMgHp73vBRn-kBufdMYQWcinc06V"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                         <button type="submit" class="btn  thm-clr text-white">Submit</button>
                                    </div>
                                </div>
                                
                                   
                                   
                                   
                                   
        
                              <!--<center>  </center>-->
        
                               
                            </form>
                       </div>
                       
                   </div>
                </div>
            </div> <!-- div close for col-lg-9 -->
            @include('Dghrd.website.layouts.important_links')
        </div><!-- div close for row -->
    </div><!-- div close for container-fluid -->
</section>

<script>
    // Auto-hide success and error messages after 5 seconds
    setTimeout(function () {
        document.getElementById('success-message').style.display = 'none';
    }, 5000);

    setTimeout(function () {
        document.getElementById('error-message').style.display = 'none';
    }, 5000);

    // JavaScript function to validate captcha before form submission
    function validateCaptcha() {
        var response = grecaptcha.getResponse();

        if (response.length === 0) {
            alert("Please complete the captcha verification.");
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>

@endsection
