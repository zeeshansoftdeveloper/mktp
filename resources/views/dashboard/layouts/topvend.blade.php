<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-stretch mr-3">
								<!--begin::Header Logo-->
								<div class="header-logo">
									<a href="index.html">
										<img alt="Logo" src="{{asset('theme/html/demo2/dist/assets/media/logos/logo-letter-9.png')}}" class="logo-default max-h-40px" />
										<img alt="Logo" src="{{asset('theme/html/demo2/dist/assets/media/logos/logo-letter-1.png')}}" class="logo-sticky max-h-40px" />
									</a>
								</div>
								<!--end::Header Logo-->
								<!--begin::Header Menu Wrapper-->
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">
											<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
												@if(Auth::user()->role_id===1)
												<a href="{{route('adminDash')}}" class="menu-link">
													<span class="menu-text">Dashboard</span>
													<i class="menu-arrow"></i>
												</a>
												@elseif(Auth::user()->role_id===2)
												<a href="{{route('vendDash')}}" class="menu-link">
													<span class="menu-text">Dashboard</span>
													<i class="menu-arrow"></i>
												</a>
												@endif
											</li>
											
										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							@include('dashboard.layouts.topmenu2')
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>