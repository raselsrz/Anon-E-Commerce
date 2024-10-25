
<?php include 'header.php'; ?>

		<!-- main content -->
		<div class="cr-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="cr-page-title cr-page-title-2">
					<div class="cr-breadcrumb">
						<h5>Update Vendor</h5>
						<ul>
							<li><a href="index.html">Carrot</a></li>
							<li>Update Vendor</li>
						</ul>
					</div>
				</div>
				<form class="cr-profile-add">
					<div class="row">
						<div class="col-xxl-3 col-xl-4 col-md-12">
							<div class="vendor-sticky-bar">
								<div class="col-xl-12">
									<div class="cr-card">
										<div class="cr-card-content">
											<div class="cr-vendor-block-img">
												<div class="cr-vendor-block-detail">
													<div class="profile-img">
														<div class="avatar-preview">
															<div class="v-img" id="imagePreview"
																style="background-image: url(assets/img/clients/3.jpg); background-position: center;">
															</div>
														</div>
														<span class="tag-label online"></span>
														<div class="avatar-edit">
															<input type='file' id="imageUpload"
																accept=".png, .jpg, .jpeg">
															<label for="imageUpload"></label>
														</div>
													</div>
													<div class="form-group p-b-15">
														<input type="text" class="form-control" id="name_profile"
															placeholder="Enter firm name" value="Harley Pharma">
													</div>
													<div class="cr-settings">
														<a href="" class="cr-btn-primary m-r-10">Add Profile</a>
														<div class="dropdown" title="Status">
															<button class="btn btn-secondary dropdown-toggle"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false">
																<i class="mdi mdi-dots-vertical"></i>
															</button>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="#"><span
																			class="tag-label online"></span>Online</a>
																</li>
																<li><a class="dropdown-item" href="#"><span
																			class="tag-label offline"></span>Offline</a>
																</li>
																<li><a class="dropdown-item" href="#"><span
																			class="tag-label busy"></span>Busy</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="cr-vendor-info">
													<ul>
														<li>
															<label>Name :</label>
															<div class="form-group p-b-15">
																<input type="text" class="form-control"
																	placeholder="Enter name" value="Elizabeth Morgus">
															</div>
														</li>
														<li>
															<label>Companey :</label>
															<div class="form-group p-b-15">
																<input type="text" class="form-control"
																	placeholder="Companey type" value="Corporate">
															</div>
														</li>
														<li>
															<label>Website :</label>
															<div class="form-group p-b-15">
																<input type="text" class="form-control"
																	placeholder="Web site" value="www.example.com">
															</div>
														</li>
														<li>
															<label>Phone :</label>
															<div class="form-group p-b-15">
																<input type="text" class="form-control"
																	placeholder="Enter number"
																	value="+1 546 4548 878787">
															</div>
														</li>
														<li class="mb-m-24">
															<label>location :</label>
															<div class="form-group p-b-15">
																<input type="text" class="form-control"
																	placeholder="Enter location" value="Australia">
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-9 col-xl-8 col-md-12">
							<div class="cr-card vendor-overview vendor-profile">
								<div class="cr-card-content cr-card-vendor vendor-details mb-m-30">
									<div class="row">
										<div class="col-sm-12">
											<h3>Account Details</h3>
											<div class="cr-vendor-detail">
												<p>From your account you can easily view and track Deals. You can manage
													and change your account information like address, contact
													information
													and history of deals.</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>E-mail address</h6>
												<ul>
													<li><strong>Email 1 : </strong>
														<div class="form-group">
															<input type="email" class="form-control"
																placeholder="Enter email" value="support1@exapmle.com">
														</div>
													</li>
													<li><strong>Email 2 : </strong>
														<div class="form-group">
															<input type="email" class="form-control"
																placeholder="Enter email" value="support2@exapmle.com">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Contact nubmer</h6>
												<ul>
													<li><strong>Phone Nubmer 1 : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter number" value="+1 123 456 7890">
														</div>
													</li>
													<li><strong>Phone Nubmer 2 : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter number" value="+1 123 456 7890">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Address</h6>
												<ul>
													<li>
														<textarea class="form-control" id="profile_address1" rows="2"
															placeholder="Enter address">123, 2150 Sycamore Street, dummy text of the, bara cota San Jose, California - 95131.</textarea>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Address 2</h6>
												<ul>
													<li>
														<textarea class="form-control" id="profile_address2" rows="2"
															placeholder="Enter address">123, 2150 Sycamore Street, dummy text of the, bara cota San Jose, California - 95131.</textarea>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Bank Accounts</h6>
												<ul>
													<li><strong>Account Name : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter acc name" value="Elizabeth Morgus">
														</div>
													</li>
													<li><strong>Account Nubmer : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter acc number" value="123**********80">
														</div>
													</li>
													<li><strong>IFSC Code : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter acc ifsc" value="123**********80">
														</div>
													</li>
													<li><strong>Bank name : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter bank name"
																value="Barky Central Bank">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Social media</h6>
												<ul>
													<li><strong>Facebook</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Faceboot id"
																value="https://www.facebook.com/youraccount">
														</div>
													</li>
													<li><strong>Twitter</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Twitter id"
																value="https://twitter.com/youraccount">
														</div>
													</li>
													<li><strong>Linkedin</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Linkedin id"
																value="https://in.linkedin.com/youraccount">
														</div>
													</li>
													<li><strong>Github</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Github Id"
																value="https://github.com/youraccount">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Payment</h6>
												<ul>
													<li><strong>Paypal : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Paypal id" value="support1@exapmle.com">
														</div>
													</li>
													<li><strong>Payoneer : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Payoneer id" value="support2@exapmle.com">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="cr-vendor-detail">
												<h6>Tax Info</h6>
												<ul>
													<li><strong>TIN NO : </strong>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="TIN No"
																value="SDF5***********5F">
														</div>
													</li>
													<li><strong>Tax ID Number : </strong>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Tax id"
																value="6582***********523">
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<?php include 'footer.php'; ?>