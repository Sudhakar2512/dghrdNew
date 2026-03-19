<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- PAGE TITLE HERE -->
	<title>Admin Panel | Directorate General of Human Resource Development (DGHRD)</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('public/website/human/dghrd-logo.webp')}}">
	<link href="{{asset('public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
    <script>
        function validateCaptcha() {
            var response = grecaptcha.getResponse();

            if (response.length === 0) {
                alert("Please complete the captcha verification.");
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
                            @if ($message = Session::get('success'))
	                        <div class="alert alert-success alert-block">
	                        	<button type="button" class="close" data-dismiss="alert">×</button>
	                        	<strong>{{ $message }}</strong>
	                        </div>
	                        @endif
	                        @if ($message = Session::get('error'))
	                        <div class="alert alert-danger alert-block">
	                        	<button type="button" class="close" data-dismiss="alert">×</button>
	                        	<strong>{{ $message }}</strong>
	                        </div>
	                        @endif
	                        
	                       <div class="col-12 mx-auto row text-center">
	                           <img src="{{asset('public/website/human/dghrd-logo.webp')}}"  style="height:150px; width:auto;" class="img-fluid text-center mb-4 mx-auto" alt="DGHRD Logo">
	                       </div>
							<!--<h3 class="title">Sign In</h3>-->
							<!--<p>DGHRD</p>-->
						</div>
                            <form action="{{ url('admin/login') }}" method="post" onsubmit="return validateCaptcha()">
                        @csrf
                            <div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" name='email' required>
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dz-password" class="form-control" name='password'required>
								<span class="show-pass eye">

									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>

								</span>
							</div>
							<div class="form-group mb-2">
                                <label for="g-recaptcha" class="text-muted">Captcha*:</label>
                                <div class="g-recaptcha" data-sitekey="6Ld-IWQpAAAAAMgHp73vBRn-kBufdMYQWcinc06V"></div>
                            </div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<!--<div class="mb-4">-->
								<!--	<a href="{{url('forgot-password')}}" class="btn-link text-primary">Forgot Password?</a>-->
								<!--</div>-->
							</div>
							                                 



							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>
                        </form>

						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<p>Admin Login.</p>
						</div>
						<div class="login-media text-center">
							<img src="{{asset('public/assets/images/login.png')}}" alt="Logo Image">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>


<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="{{asset('public/assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/assets/js/deznav-init.js')}}"></script>
<script src="{{asset('public/assets/js/demo.js')}}"></script>
  <script src="{{asset('public/assets/js/custom.js')}}"></script>
<script src="{{asset('public/assets/js/styleSwitcher.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
