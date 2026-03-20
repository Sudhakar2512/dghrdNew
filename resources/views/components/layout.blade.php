

<!DOCTYPE html>
<html lang="en">

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

	<!-- PAGE TITLE HERE -->
	<title>DGHRD Admin - Dashboard</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('website/human/dghrd-logo.webp')}}">

	<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css')}}">
	<link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/jvmap/jquery-jvectormap.css')}}" rel="stylesheet">
	<link href="{{asset('assets/cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

	<!-- tagify-css -->
	<link href="{{asset('assets/vendor/tagify/dist/tagify.css')}}" rel="stylesheet">

	<!-- Style css -->
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
   <style>
	.close {
		font-size: 15px;
		font-weight: bold;
		color: #000; /* Adjust color as needed */
		cursor: pointer;
		background: none;
		border: none;
		padding: 0;
		outline: none;
	}

	.close:hover {
		color: #ff0000; /* Adjust hover color as needed */
	}
   </style>

</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="#" class="brand-logo">
               <center> <img src="{{asset('assets/images/logo.png')}}" alt="logo" style="height: 50px; width: 50px;"></center>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        	<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz- -user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<h5>Admin Panel</h5>



                        </div>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
         <!--**********************************
            Sidebar start
        ***********************************-->
		  <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li class="menu-title">

                    </li>

                    <li><a href="{{url('dashboard')}}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.5" y="4" width="17" height="14" rx="2"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.5 13L8.5 10L11.5 13L14.5 9L18 13"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <circle cx="7" cy="7" r="1"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
						</div>
						<span class="nav-text">Home</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('slider') }}">Slider</a></li>
							<li><a href="{{ url('notification') }}">Notification</a></li>
                            <li><a href="{{ url('mini-slider') }}">Mini Slider</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('photoalbum') }}">Photo Album</a></li>
							<li><a href="{{ url('suggestions') }}">Suggestions</a></li>
                            <li><a href="{{ url('add-project') }}">Ongoing/Upcoming Infrastructure Projects</a></li>
                            <li><a href="{{ url('add-hr_conference') }}">HR Conference</a></li>
                            <li><a href="{{ url('add-regularization') }}">Regularization</a></li>
						</ul>
					</li>

                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
                    		<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11 11.5C13.2091 11.5 15 9.70914 15 7.5C15 5.29086 13.2091 3.5 11 3.5C8.79086 3.5 7 5.29086 7 7.5C7 9.70914 8.79086 11.5 11 11.5Z"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 18.5C4 15.7386 7.13401 13.5 11 13.5C14.866 13.5 18 15.7386 18 18.5"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.5 6.5H19.5M18 5V8"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
						</div>
						<span class="nav-text">HRM 1</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('add-sparrow') }}">Sparrow</a></li>
							<li><a href="{{ url('add-apar') }}">Apar(Missing Apar's)</a></li>
                            {{-- <li><a href="{{ url('add-ipr') }}">Mini Slider</a></li> --}}
                            <li><a href="{{ url('add-ipr') }}">IPR</a></li>
                            <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Recruitment Rules</a>
								<ul aria-expanded="false">
									<li><a href="{{ url('add-group-a') }}">Group A</a></li>
									<li><a href="{{ url('add-group-b') }}">Group B</a></li>
									<li><a href="{{ url('add-group-c') }}">Group C</a></li>
									<li><a href="{{ url('add-canteen-staff') }}">Canteen Staff</a></li>
									<li><a href="{{ url('add-cbn') }}">CENTRAL BUREAU OF NARCOTICS</a></li>
                                    <li><a href="{{ url('add-crcl') }}">CRCL</a></li>
									<li><a href="{{ url('add-dgpm') }}">DGPM</a></li>
									<li><a href="{{ url('add-directorate-of-logistics') }}">DIRECTORATE OF LOGISTICS</a></li>
									<li><a href="{{ url('add-dppr') }}">DPPR</a></li>
									<li><a href="{{ url('add-dri') }}">DRI</a></li>
                                    <li><a href="{{ url('add-rrs-of-directorates') }}">RRs of DIRECTORATES</a></li>
									<li><a href="{{ url('add-systum-data-management') }}">SYSTEMS & DATA MANAGEMENT</a></li>
									<li><a href="{{ url('add-telecommunication-wing') }}">TELECOMMUNICATION WING, DIRECTORATE OF LOGISTICS</a></li>

								</ul>
							</li>
                            <li><a href="{{ url('add-seniority-list') }}">Seniority List</a></li>
							<li><a href="{{ url('add-dpc1') }}">DPC</a></li>
                            <li><a href="{{ url('add-empanelment-deputation') }}">Empanelment & Deputation</a></li>
                            <li><a href="{{ url('add-cadre-restructuring-2018') }}">Cadre Restructuring 2018</a></li>
                            <li><a href="{{ url('add-sparrow-cbic') }}">SPARROW-CBIC</a></li>
							<li><a href="{{ url('add-officer-details') }}">Officer Details</a></li>
                            <li><a href="{{ url('add-various-communication') }}">Various Communication with Field Formations</a></li>
							<li><a href="{{ url('add-rajyabhasha') }}">Rajyabhasha</a></li>
                            {{-- <li><a href="task-summary.html">Gallery</a></li> --}}
						</ul>
					</li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11 11.5C13.2091 11.5 15 9.70914 15 7.5C15 5.29086 13.2091 3.5 11 3.5C8.79086 3.5 7 5.29086 7 7.5C7 9.70914 8.79086 11.5 11 11.5Z"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 18.5C4 15.7386 7.13401 13.5 11 13.5C14.866 13.5 18 15.7386 18 18.5"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.5 6.5H19.5M18 5V8"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
						</div>
						<span class="nav-text">HRM 2</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('add-posting-transfer') }}">Postings & Transfers</a></li>
							<li><a href="{{ url('add-e-diposition-list') }}">e-Disposition List of Group A IRS (C&IT) Officers</a></li>
                            <li><a href="{{ url('add-sanctioned-working') }}">Sanctioned and Working Strength of Group A IRS (C&IT) Officers</a></li>
                            <li><a href="{{ url('add-hop') }}">HOP</a></li>
                            <li><a href="{{ url('add-empolyee_code') }}">Employee Codes</a></li>
                            <li><a href="{{ url('add-swachhta') }}">Swachhta Action Plan</a></li>
							<li><a href="{{ url('add-various_communication') }}">Various Communication with Field Formations</a></li>
                            <li><a href="{{ url('add-tender_notice') }}">Tender Notice</a></li>
                            <li><a href="{{ url('add-verified_data') }}">Verified Data</a></li>
                            <li><a href="{{ url('add-module_update') }}">Module Updates</a></li>
                            <li><a href="{{ url('add-irs') }}">Group A IRS (C&IT) Officers on Deputation</a></li>
							<li><a href="{{ url('add-e_vacency') }}">e-Vacancy Module Updates</a></li>
                            <li><a href="{{ url('add-dpc') }}">Dpc Module Updates</a></li>
                            <li><a href="{{ url('add-policy') }}">Policy</a></li>
                            <li><a href="{{ url('add-civil') }}">Civil List</a></li>
                            <li><a href="{{ url('add-half') }}">Half Yearly Brochure</a></li>

                            {{-- <li><a href="task-summary.html">Gallery</a></li> --}}
						</ul>
					</li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3 20H19"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 20V9L11 4L17 9V20"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9 20V14H13V20"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8 11H8.01M14 11H14.01"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
						</div>
						<span class="nav-text">Infrastructure</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('add-infra_officer-details') }}">Officer Detailes</a></li>
							<li><a href="{{ url('add-instructions-details') }}">Instructions</a></li>
                            <li><a href="{{ url('add-fast_track-details') }}">FastTrack</a></li>
                            <li><a href="{{ url('add-ppt-details') }}">Infrastructure PPT</a></li>
                            <li><a href="{{ url('add-manual-details') }}">Infrastructure Manual</a></li>
							<li><a href="{{ url('add-asset_register-details') }}">Asset Registers</a></li>
                            <li><a href="{{ url('add-land_assets-details') }}">Land Assets</a></li>
                            <li><a href="{{ url('add-construction-details') }}">Construction Projets</a></li>
                            <li><a href="{{ url('add-repair_maintenance-details') }}">Repair & Maintenance</a></li>
							<li><a href="{{ url('add-ready_built-details') }}">Ready Built Accomodation </a></li>
                            <li><a href="{{ url('add-hired_office-details') }}">Hired Office Building</a></li>
                            {{-- <li><a href="task-summary.html">Gallery</a></li> --}}
                            <li><a href="{{ url('add-various_coomunication-details') }}">Various Communication with Field Formations</a></li>
						</ul>
					</li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11 20C11 20 3 15.5 3 9.5C3 6.46243 5.46243 4 8.5 4C9.98817 4 11.3327 4.74613 12 5.88854C12.6673 4.74613 14.0118 4 15.5 4C18.5376 4 21 6.46243 21 9.5C21 15.5 11 20 11 20Z"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
						</div>
						<span class="nav-text">Welfare</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('add-welfare_officer-details') }}">Officer Detailes</a></li>
							<li><a href="{{ url('add-compendium-details') }}">Compendium </a></li>
                            <li><a href="{{ url('add-welfare_sechemes-details') }}">Welfare Schemes</a></li>
                            <li><a href="{{ url('add-action_plan-details') }}">Action Plans</a></li>
                            <li><a href="{{ url('add-schemes-details') }}">Schemes</a></li>
							<li><a href="{{ url('add-welfare_ppt-details') }}">Welfare PPT</a></li>
                            <li><a href="{{ url('add-welfare_manual-details') }}">Welfare Manual</a></li>
                            <li><a href="{{ url('add-comman_facilties-details') }}">Comman Facilities</a></li>
                            <li><a href="{{ url('add-hotel_tieup-details') }}">Hotel TieUps</a></li>
							<li><a href="{{ url('add-hotel_draft-details') }}">Draft List Of Hotels</a></li>
                            <li><a href="{{ url('add-guest_house-details') }}">Departmental Guest House</a></li>
                            <li><a href="{{ url('add-praposels-details') }}">Welfare Praposals</a></li>
                            <li><a href="{{ url('add-covid-details') }}">Covid 19</a></li>
                            {{-- <li><a href="task-summary.html">Gallery</a></li> --}}
                            <li><a href="{{ url('add-welfare_communication-details') }}">Various Communication with Field Formations</a></li>
						</ul>
					</li>

                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
						    <svg width="22" height="22" viewBox="0 0 22 22" fill="#888888" xmlns="http://www.w3.org/2000/svg">
                                <!-- Shield -->
                                <path d="M11 2L4 5V10C4 14.4183 7.13401 18.4183 11 20C14.866 18.4183 18 14.4183 18 10V5L11 2Z"/>
                                <!-- Medical cross -->
                                <rect x="10" y="7" width="2" height="8" fill="#fff"/>
                                <rect x="7" y="10" width="8" height="2" fill="#fff"/>
                            </svg>
						</div>
						<span class="nav-text">EMC</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('add-emc_officer-details') }}">Officer Detailes</a></li>
							<li><a href="{{ url('add-fund_allocation-details') }}">Fund allocation and utilisation Details </a></li>
                            <li><a href="{{ url('add-emc_ppt-details') }}">EMC PPT</a></li>
                            <li><a href="{{ url('add-emc_manual-details') }}">EMC Manual</a></li>
                            <li><a href="{{ url('add-budgetary_authority-details') }}">Budgetary Authority,HODs,PAOs,DDOs</a></li>
							<li><a href="{{ url('add-gem_eprocurements-details') }}">GeM/E Procurement</a></li>
                            <li><a href="{{ url('add-vehicle_policy-details') }}">Vehicle Policy</a></li>
                            <li><a href="{{ url('add-crb-details') }}">CRB</a></li>
                            {{-- <li><a href="task-summary.html">Gallery</a></li> --}}
                            <li><a href="{{ url('add-emc_communication-details') }}">Various Communication with Field Formations</a></li>
						</ul>
					</li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Virus outer circle -->
                                <circle cx="11" cy="11" r="4.5"
                                    stroke="#888888"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <!-- Virus spikes -->
                                <path d="M11 2V5" stroke="#888888" stroke-linecap="round"/>
                                <path d="M11 17V20" stroke="#888888" stroke-linecap="round"/>
                                <path d="M2 11H5" stroke="#888888" stroke-linecap="round"/>
                                <path d="M17 11H20" stroke="#888888" stroke-linecap="round"/>
                                <path d="M4.5 4.5L6.6 6.6" stroke="#888888" stroke-linecap="round"/>
                                <path d="M15.4 15.4L17.5 17.5" stroke="#888888" stroke-linecap="round"/>
                                <path d="M15.4 6.6L17.5 4.5" stroke="#888888" stroke-linecap="round"/>
                                <path d="M4.5 17.5L6.6 15.4" stroke="#888888" stroke-linecap="round"/>
                                <!-- Medical cross -->
                                <path d="M11 9V13" stroke="#888888" stroke-linecap="round"/>
                                <path d="M9 11H13" stroke="#888888" stroke-linecap="round"/>
                            </svg>
						</div>
						<span class="nav-text">CBIC Covid Responce</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('add-shrdhanjali-details') }}">Shraddhanjali </a></li>

						</ul>
					</li>

                    <li><a href="{{url('update_password')}}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Key head -->
                                <circle cx="7" cy="11" r="3.5"  stroke="#888888"  stroke-width="1.6"  stroke-linecap="round"  stroke-linejoin="round"/>
                            
                                <path d="M10.5 11H17"  stroke="#888888"  stroke-width="1.6" stroke-linecap="round"   stroke-linejoin="round"/>
                            
                                <path d="M14.5 11V13M16.5 11V12.5"  stroke="#888888"  stroke-width="1.6"  stroke-linecap="round"/>
                            
                                <rect x="12.5" y="5.5" width="7" height="5.5" rx="1.2" stroke="#888888" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            
                                <path d="M14 5.5V4.5C14 3.4 14.9 2.5 16 2.5C17.1 2.5 18 3.4 18 4.5V5.5" stroke="#888888" stroke-width="1.6" stroke-linecap="round"/>
                            </svg>
						</div>
						<span class="nav-text">Change Password</span>
						</a>
					</li>

                    <li><a href="{{url('logout')}}" class="" aria-expanded="false">
						<div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 2.5H6.5C4.84315 2.5 3.5 3.84315 3.5 5.5V16.5C3.5 18.1569 4.84315 19.5 6.5 19.5H12.5" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7L18.5 11L15 15" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 11H9" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
						</div>
						<span class="nav-text">Logout</span>
						</a>
					</li>


				
				</ul>

			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
{{$slot}}

<div class="footer">
    <div class="copyright">
       <p>Copyright © Developed by <a href="https://riveyrainfotech.com/" target="_blank">Riveyra Infotech</a> 2026</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

<!--**********************************
   Support ticket button start
***********************************-->

<!--**********************************
   Support ticket button end
***********************************-->


</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/vendor/apexchart/apexchart.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>
<script src="{{asset('assets/vendor/draggable/draggable.js')}}"></script>


<!-- tagify -->
<script src="{{asset('assets/vendor/tagify/dist/tagify.js')}}"></script>

<script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>

<!-- Apex Chart -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all delete buttons with the class 'btn-danger'
        var deleteButtons = document.querySelectorAll('.btn-danger');

        // Attach a click event listener to each delete button
        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                // Prevent the default link navigation
                event.preventDefault();

                // Display a confirmation dialog
                var isConfirmed = confirm('Are you sure you want to delete this item?');

                // If the user confirms, navigate to the delete URL
                if (isConfirmed) {
                    // Get the delete URL from the button's parent anchor
                    var deleteUrl = button.closest('a').getAttribute('href');

                    // Navigate to the delete URL
                    window.location.href = deleteUrl;
                }
            });
        });
    });
</script>

<script src="{{asset('assets/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- Vectormap -->
<script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/deznav-init.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

<script>
jQuery(document).ready(function(){
    setTimeout(function(){
        dzSettingsOptions.version = 'light';
        new dzSettings(dzSettingsOptions);
    },1500)
});
</script>


<script>
	$(document).ready(function() {
	 $('.delete-confirm').on('click', function(event) {
	   event.preventDefault();
	   const url = $(this).attr('href');
	   const confirmed = confirm("Do you really want to delete this data?");
	   if (confirmed) {
		 window.location.href = url; // Redirect to the delete route
	   }
	 });
	});
</script>
</body>

</html>
