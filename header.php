<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="admin, dashboard, ecommerce, panel" />
	<meta name="description" content="Carrot - Admin.">
	<meta name="author" content="ashishmaraviya">

	<title>Carrot - Admin.</title>

	<!-- App favicon -->
	<link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">

	<!-- Icon CSS -->
	<link href="/assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
	<link href="/assets/css/vendor/remixicon.css" rel="stylesheet">
	<link href="/assets/css/vendor/owl.carousel.min.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href='/assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='/assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
	<link href='/assets/css/vendor/daterangepicker.css' rel='stylesheet'>
	<link href="/assets/css/vendor/simplebar.css" rel="stylesheet">
	<link href="/assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/vendor/apexcharts.css" rel="stylesheet">
	<link href="/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

	<!-- Main CSS -->
	<link id="main-css" href="/assets/css/style.css" rel="stylesheet">

</head>

<body>
	<main class="wrapper sb-default ecom">
		<!-- Loader -->
		<div id="cr-overlay">
			<div class="loader"></div>
		</div>

		<!-- Header -->
		<header class="cr-header">
			<div class="container-fluid">
				<div class="cr-header-items">
					<div class="left-header">
						<a href="javascript:void(0)" class="cr-toggle-sidebar">
							<span class="outer-ring">
								<span class="inner-ring"></span>
							</span>
						</a>
						<div class="header-search-box">
							<div class="header-search-drop">
								<a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
								<form class="cr-search">
									<input class="search-input" type="text" placeholder="Search...">
									<a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
									</a>
								</form>
							</div>
						</div>
					</div>
					<div class="right-header">
						<div class="cr-right-tool cr-flag-drop language">
							<div class="cr-hover-drop">
								<div class="cr-hover-tool">
									<img class="flag" src="/assets/img/flag/us.png" alt="flag">
								</div>
								<div class="cr-hover-drop-panel right">
									<ul>
										<li><a href="javascript:void(0)"><img class="flag" src="/assets/img/flag/us.png"
													alt="flag">English</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="/assets/img/flag/in.png"
													alt="flag">Hindi</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="/assets/img/flag/de.png"
													alt="flag"> Deutsch</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="/assets/img/flag/it.png"
													alt="flag">Italian</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="/assets/img/flag/jp.png"
													alt="flag">Japanese</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="cr-right-tool apps">
							<div class="cr-hover-drop">
								<div class="cr-hover-tool">
									<i class="ri-apps-2-line"></i>
								</div>
								<div class="cr-hover-drop-panel right">
									<h6 class="title">Apps</h6>
									<ul>
										<li><a href="javascript:void(0)"><img class="app" src="/assets/img/apps/1.png"
													alt="flag">English</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="/assets/img/apps/2.png"
													alt="flag">Hindi</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="/assets/img/apps/3.png"
													alt="flag"> Deutsch</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="/assets/img/apps/4.png"
													alt="flag">Italian</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="/assets/img/apps/5.png"
													alt="flag">Japanese</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="/assets/img/apps/6.png"
													alt="flag">Japanese</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="cr-right-tool display-screen">
							<a class="cr-screen full" href="javascript:void(0)"><i
									class="ri-fullscreen-line"></i></a>
							<a class="cr-screen reset" href="javascript:void(0)"><i
									class="ri-fullscreen-exit-line"></i></a>
						</div>
						<div class="cr-right-tool">
							<a class="cr-notify" href="javascript:void(0)">
								<i class="ri-notification-2-line"></i>
								<span class="label"></span>
							</a>
						</div>
						<!-- <div class="cr-right-tool display-dark">
							<a class="cr-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
							<a class="cr-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
						</div> -->
						<div class="cr-right-tool cr-user-drop">
							<div class="cr-hover-drop">
								<div class="cr-hover-tool">
									<img class="user" src="/assets/img/user/6.jpg" alt="user">
								</div>
								<div class="cr-hover-drop-panel right">
									<div class="details">
										<h6>Wiley Waites</h6>
										<p>wiley@example.com</p>
									</div>
									<ul class="border-top">
										<li><a href="team-profile.php">Profile</a></li>
										<li><a href="faq.php">Help</a></li>
										<li><a href="chatapp.php">Messages</a></li>
										<li><a href="project-overview.php">Projects</a></li>
										<li><a href="team-update.php">Settings</a></li>
									</ul>
									<ul class="border-top">
										<li><a href="signin.php"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

				<!-- sidebar -->
				<div class="cr-sidebar-overlay"></div>
		<div class="cr-sidebar" data-mode="light">
			<div class="cr-sb-logo">
				<a href="index.php" class="sb-full"><img src="/assets/img/logo.svg" alt="logo"></a>
				<a href="index.php" class="sb-collapse"><img src="/assets/img/logo.svg" alt="logo"></a>
			</div>
			<div class="cr-sb-wrapper">
				<div class="cr-sb-content">
					<ul class="cr-sb-list">
						<li class="cr-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="cr-drop-toggle">
								<i class="ri-dashboard-3-line"></i><span class="condense">Dashboard<i
										class="drop-arrow ri-arrow-down-s-line"></i></span>
							</a>
							<ul class="cr-sb-drop condense">
								<li><a href="/" class="cr-page-link drop">
								<i class="ri-dashboard-3-line"></i>
								Dashboard Home
								</a>
								</li>

								<li><a href="product-list.php" class="cr-page-link drop">
									<i class="ri-checkbox-blank-circle-line"></i>
									Product list
								</a>
								</li>


								<li><a href="add-product.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Add Product</a></li>
								<li><a href="add-category.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Add Category</a></li>
								<li><a href="add-sub-category.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Add Sub Category</a></li>
								<li><a href="order-list.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Order List</a></li>
								<li class="cr-sb-item sb-subdrop-item">
									<a href="javascript:void(0)" class="cr-sub-drop-toggle">
										<i class="ri-shield-user-line"></i><span class="condense">Vendor<i
												class="drop-arrow ri-arrow-down-s-line"></i></span></a>
									<ul class="cr-sb-subdrop condense">
										<li><a href="vendor-profile.php" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Profile</a></li>
										<li><a href="vendor-update.php" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Vendor Update</a></li>
										<li><a href="vendor-list.php" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Vendor List</a></li>
										<li><a href="invoice.php" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Invoice</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="cr-sb-item-separator"></li>
						<li class="cr-sb-title condense">Pages</li>
						<li class="cr-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="cr-drop-toggle">
								<i class="ri-pages-line"></i><span class="condense">Authentication<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="cr-sb-drop condense">
								<li><a href="signin.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i></i>Login</a></li>
								<li><a href="signup.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Signup</a></li>
								<li><a href="forgot.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Forgot password</a></li>
								<li><a href="two-factor.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>two factor</a></li>
								<li><a href="reset-password.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Reset password</a></li>
								<li><a href="remember.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Remember</a></li>
							</ul>
						</li>
						<li class="cr-sb-item-separator"></li>
						<li class="cr-sb-title condense">Elements</li>
						<li class="cr-sb-item">
							<a href="remix-icons.php" class="cr-page-link">
								<i class="ri-remixicon-line"></i><span class="condense"><span class="hover-title">remix
										icons</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="material-icons.php" class="cr-page-link">
								<i class="mdi mdi-material-ui"></i><span class="condense"><span
										class="hover-title">Material icons</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="apexchart.php" class="cr-page-link">
								<i class="ri-bar-chart-grouped-line"></i><span class="condense"><span
										class="hover-title">Apexcharts</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="buttons.php" class="cr-page-link">
								<i class="ri-radio-button-line"></i><span class="condense"><span
										class="hover-title">Buttons</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="accordions.php" class="cr-page-link">
								<i class="ri-play-list-add-line"></i><span class="condense"><span
										class="hover-title">Accordions</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="typography.php" class="cr-page-link">
								<i class="ri-file-text-line"></i><span class="condense"><span
										class="hover-title">Typography</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="alert-popup.php" class="cr-page-link">
								<i class="ri-file-warning-line"></i><span class="condense"><span
										class="hover-title">Alert Popup</span></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Notify sidebar -->
		<div class="cr-notify-bar-overlay"></div>
		<div class="cr-notify-bar">
			<div class="cr-bar-title">
				<h6>Notifications<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="cr-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
							role="tab" aria-controls="log" aria-selected="false">Log</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
						<div class="cr-alert-list">
							<ul>
								<li>
									<div class="icon cr-alert">
										<i class="ri-alarm-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your final report is overdue</div>
										<p class="time">Just now</p>
										<p class="message">Please submit your quarterly report before - June 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your product campaign is stop!</div>
										<p class="time">5:45AM - 25/05/2023</p>
										<p class="message">Please submit your quarterly report before Jun 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2023</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Budget threshold exceeded!</div>
										<p class="time">4:15AM - 01/04/2023</p>
										<p class="message">Budget threshold was exceeded for project "Carrot" B612
											elements.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-close-line"></i>
									</div>
									<div class="detail">
										<div class="title">Project submission was decline!</div>
										<p class="time">4:15AM - 01/04/2023</p>
										<p class="message">Your project "B126" is declined by Theresa Mayeras.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2023</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li class="check"><a class="cr-primary-btn" href="chatapp.php">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
						<div class="cr-message-list">
							<ul>
								<li>
									<a href="chatapp.php" class="reply">Reply</a>
									<div class="user">
										<img src="/assets/img/user/9.jpg" alt="user">
										<span class="label online"></span>
									</div>
									<div class="detail">
										<a href="chatapp.php" class="name">Boris Whisli</a>
										<p class="time">5:30AM, Today</p>
										<p class="message">Hello, I am sending some file. Please use this in landing
											page. And make sure this all files are comppress.</p>
										<span class="download-files">
											<span class="download">
												<img src="/assets/img/other/1.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="/assets/img/other/2.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="chatapp.php" class="reply">Reply</a>
									<div class="user">
										<img src="/assets/img/user/8.jpg" alt="user">
										<span class="label offline"></span>
									</div>
									<div class="detail">
										<a href="chatapp.php" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Please take a look on landing page. There is some bus to open
											popup model. and save form data.</p>
									</div>
								</li>
								<li>
									<a href="chatapp.php" class="reply">Reply</a>
									<div class="user">
										<img src="/assets/img/user/7.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.php" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Please take a look on landing page. There is some bus to open
											popup model. and save form data.</p>
										<span class="download-files">
											<span class="download">
												<span class="file">
													<i class="ri-file-zip-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-text-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="chatapp.php" class="reply">Reply</a>
									<div class="user">
										<img src="/assets/img/user/6.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.php" class="name">Paige Turner</a>
										<p class="time">4:30PM, 12/12/2023</p>
										<p class="message">Landing page issues are done. and now i am working on admin
											user module.</p>
									</div>
								</li>
								<li>
									<a href="chatapp.php" class="reply">Reply</a>
									<div class="user">
										<img src="/assets/img/user/5.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.php" class="name">Allie Grater</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Take marketing module task.</p>
									</div>
								</li>
								<li class="check"><a class="cr-primary-btn" href="chatapp.php">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
						<div class="cr-activity-list activity-list">
							<ul>
								<li>
									<span class="date-time">8 Thu<span class="time">11:30 AM - 05:10 PM
										</span></span>
									<p class="title">Project Submitted from Smith</p>
									<p class="detail">Lorem Ipsum is simply dummy text of the printing and
										lorem is typesetting industry.</p>
									<span class="download-files">
										<span class="download">
											<img src="/assets/img/other/1.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="/assets/img/other/2.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time warn">7 Wed<span class="time">1:30 PM - 02:30 PM
										</span></span>
									<p class="title">Morgus pvt - project due</p>
									<p class="detail">Project modul delay for some bugs.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="/assets/img/other/3.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">6 Tue<span class="time">9:30 AM - 11:00 AM
										</span></span>
									<p class="title">Interview for management dept.</p>
									<p class="detail">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration in some form,
										by injected humour.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">5 Mon<span class="time">3:30 AM - 4:00 PM
										</span></span>
									<p class="title">Meeting with mr. Ken doe</p>
									<p class="detail">The majority have suffered alteration in some form,
										by injected humour.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>