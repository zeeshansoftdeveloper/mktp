<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
											<span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
											<span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{Auth::user()->name}}</span>
											<span class="symbol symbol-35">
												<span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">S</span>
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
										<!--begin::Header-->
										<div class="d-flex align-items-center p-8 rounded-top">
											<!--begin::Symbol-->
											<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
												<img src="{{asset('theme/html/demo2/dist/assets/media/users/300_21.jpg')}}" alt="" />
											</div>
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">Sean Stone</div>
											<span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span>
											<!--end::Text-->
										</div>
										<div class="separator separator-solid"></div>
										<!--end::Header-->
										<!--begin::Nav-->
										<div class="navi navi-spacer-x-0 pt-5">
											<!--begin::Item-->
											<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-calendar-3 text-success"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Profile</div>
														<div class="text-muted">Account settings and more 
														<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="custom/apps/user/profile-3.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-mail text-warning"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Messages</div>
														<div class="text-muted">Inbox and tasks</div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="custom/apps/user/profile-2.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-rocket-1 text-danger"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Activities</div>
														<div class="text-muted">Logs and notifications</div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-hourglass text-primary"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Tasks</div>
														<div class="text-muted">latest tasks and projects</div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Footer-->
											<div class="navi-separator mt-3"></div>
											<div class="navi-footer px-8 py-5">
												<a href="custom/user/login-v2.html" target="_blank" class="btn btn-light-primary font-weight-bold">Sign Out</a>
												<a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean font-weight-bold">Upgrade Plan</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>