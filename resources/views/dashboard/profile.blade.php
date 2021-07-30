@extends("dashboard.layouts.main")

@section('content')
		<link rel="stylesheet" href="{{asset('apex/css/apexcharts.min.css')}}">
		<style>
			.apexcharts-legend.apexcharts-align-center.position-left{
				left: 90px !important;
			}
		</style>
    	<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{asset('theme/html/demo2/dist/assets/media/logos/logo-letter-1.png')}}" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    
                                    
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <!--begin::Item-->
                                        <a href="#" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>
                                        <!--end::Item-->

                                        

                                        


                                    </div>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Heading-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            
                            <!--end::Toolbar-->

                        </div>
                    </div>



                    <div class="d-flex flex-column-fluid">
                        <div class="container">

                            



    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="d-flex align-items-end mb-7">
                                <!--begin::Pic-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Pic-->
                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                        <div class="symbol symbol-circle symbol-lg-75">
                                            <img src="{{asset('profile_imgs/profile.jpg')}}" alt="image">
                                        </div>
                                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                            <span class="font-size-h3 font-weight-boldest">JM</span>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Mr Vendor</a>
                                        
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Desc-->
                            <p class="mb-7">
                                
                            </p>
                            <!--end::Desc-->
                            <!--begin::Info-->
                            <div class="mb-7 mt-10">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">vendor@app.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                    <a href="#" class="text-muted text-hover-primary">0508276228</a>
                                </div>
                                
                            </div>
                            <!--end::Info-->
                            <div class="mb-7 mt-10">
                                <a href="/Vendor/EditProfile" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Edit Profile</a>
                                <a href="/Account/ChangePassword" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">Change Password</a>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Tiles Widget 11-->
                    <div class="card card-custom bg-success gutter-b" style="height: 150px">
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo2/dist/../src/media/svg/icons/Shopping/Price2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <g transform="translate(12.500000, 12.000000) rotate(-315.000000) translate(-12.500000, -12.000000) translate(6.000000, 1.000000)" fill="#000000" opacity="0.3">
                                            <path d="M0.353553391,7.14644661 L3.35355339,7.14644661 C3.4100716,7.14644661 3.46549471,7.14175791 3.51945496,7.13274826 C3.92739876,8.3050906 5.04222146,9.14644661 6.35355339,9.14644661 C8.01040764,9.14644661 9.35355339,7.80330086 9.35355339,6.14644661 C9.35355339,4.48959236 8.01040764,3.14644661 6.35355339,3.14644661 C5.04222146,3.14644661 3.92739876,3.98780262 3.51945496,5.16014496 C3.46549471,5.15113531 3.4100716,5.14644661 3.35355339,5.14644661 L0.436511831,5.14644661 C0.912589923,2.30873327 3.3805571,0.146446609 6.35355339,0.146446609 C9.66726189,0.146446609 12.3535534,2.83273811 12.3535534,6.14644661 L12.3535534,19.1464466 C12.3535534,20.2510161 11.4581229,21.1464466 10.3535534,21.1464466 L2.35355339,21.1464466 C1.24898389,21.1464466 0.353553391,20.2510161 0.353553391,19.1464466 L0.353553391,7.14644661 Z" transform="translate(6.353553, 10.646447) rotate(-360.000000) translate(-6.353553, -10.646447) "></path>
                                            <rect x="2.35355339" y="13.1464466" width="8" height="2" rx="1"></rect>
                                            <rect x="3.35355339" y="17.1464466" width="6" height="2" rx="1"></rect>
                                        </g>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>

                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">4</div>
                            <a href="/Product/VendorProducts" class="text-inverse-primary font-weight-bold font-size-lg mt-1">Products</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>


                <div class="col-xl-6">
                    <!--begin::Tiles Widget 11-->
                    <div class="card card-custom bg-info gutter-b" style="height: 150px">
                        <div class="card-body">

                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo2/dist/../src/media/svg/icons/Shopping/Cart1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"></path>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>


                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">1</div>
                            <a href="/VendorBranch/Index" class="text-inverse-primary font-weight-bold font-size-lg mt-1">Branches</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>


            </div>
        </div>
        <div class="col-xl-8">
            <!--begin::Base Table Widget 5-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Orders</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-lg">84 + New Orders</span>
                    </h3>
                    
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2 pb-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                                <tr>
                                    <th class="p-0" style="width: 200px"></th>
                                    <th class="p-0" style="min-width: 100px"></th>
                                    <th class="p-0" style="min-width: 100px"></th>
                                    <th class="p-0" style="min-width: 100px"></th>
                                    <th class="p-0" style="min-width: 50px"></th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">text text</a>
                                            <span class="text-muted font-weight-bold d-block">customerq@app.com</span>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">a0b078b8-53c5-eb11-9e8a-1c98ec18b82f</a>
                                            <span class="text-muted font-weight-bold d-block">400.00</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-muted font-weight-500">Friday, 04 June 2021</span>
                                        </td>

                                                <td class="text-right">
                                                    <span class="label label-lg label-light-danger label-inline"> Pending</span>
                                                </td>

                                        <td class="text-right pr-0">
                                            <a href="/Order/OrderDetails?id=a0b078b8-53c5-eb11-9e8a-1c98ec18b82f" class="btn btn-icon btn-light btn-sm">
                                                <span class="svg-icon svg-icon-md svg-icon-info">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo2/dist/../src/media/svg/icons/Communication/Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"></path>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">text text</a>
                                            <span class="text-muted font-weight-bold d-block">customerq@app.com</span>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">3bc4d328-4ec5-eb11-9e8a-1c98ec18b82f</a>
                                            <span class="text-muted font-weight-bold d-block">200.00</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-muted font-weight-500">Friday, 04 June 2021</span>
                                        </td>

                                                <td class="text-right">
                                                    <span class="label label-lg label-light-danger label-inline"> Pending</span>
                                                </td>

                                        <td class="text-right pr-0">
                                            <a href="/Order/OrderDetails?id=3bc4d328-4ec5-eb11-9e8a-1c98ec18b82f" class="btn btn-icon btn-light btn-sm">
                                                <span class="svg-icon svg-icon-md svg-icon-info">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo2/dist/../src/media/svg/icons/Communication/Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"></path>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">text text</a>
                                            <span class="text-muted font-weight-bold d-block">customerq@app.com</span>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">a4f3bce4-3fc5-eb11-9e8a-1c98ec18b82f</a>
                                            <span class="text-muted font-weight-bold d-block">200.00</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-muted font-weight-500">Friday, 04 June 2021</span>
                                        </td>

                                                <td class="text-right">
                                                    <span class="label label-lg label-light-danger label-inline"> Pending</span>
                                                </td>

                                        <td class="text-right pr-0">
                                            <a href="/Order/OrderDetails?id=a4f3bce4-3fc5-eb11-9e8a-1c98ec18b82f" class="btn btn-icon btn-light btn-sm">
                                                <span class="svg-icon svg-icon-md svg-icon-info">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo2/dist/../src/media/svg/icons/Communication/Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"></path>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--end::Tablet-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Base Table Widget 5-->
        </div>
    </div>






                        </div>
                    </div>

                </div>
		<!--end::Main-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
			<!--begin::Item-->
			<li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
					<i class="flaticon2-drop"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="builder.html">
					<i class="flaticon2-gear"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
					<i class="flaticon2-telegram-logo"></i>
				</a>
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo1.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo1/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo1/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo2.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo3.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo3/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo3/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo4.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo4/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo4/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo5.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo5/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo5/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo6.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo6/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo6/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo7.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo7/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo7/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo8.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo8/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo8/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo9.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo9/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo9/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo10.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo10/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo10/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo11.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo11/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo11/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo12.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo12/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo12/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo13.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo13/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo13/rtl/index.html" class="btn font-weight-bold btn-light btn-shadow ml-2" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo14.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo15.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo16.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo17.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo18.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo19.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo20.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo21.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo22.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo23.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo24.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo25.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo26.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo27.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo28.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo29.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="{{asset('doc/assets/img/demos/demo30.png')}}" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('theme/html/demo2/dist/assets/plugins/global/plugins.bundlec3e8.js?v=7.0.6')}}"></script>
		<script src="{{asset('theme/html/demo2/dist/assets/plugins/custom/prismjs/prismjs.bundlec3e8.js?v=7.0.6')}}"></script>
		<script src="{{asset('theme/html/demo2/dist/assets/js/scripts.bundlec3e8.js?v=7.0.6')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('theme/html/demo2/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundlec3e8.js?v=7.0.6')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('theme/html/demo2/dist/assets/js/pages/widgetsc3e8.js?v=7.0.6')}}"></script>
		<!--end::Page Scripts-->

		<script src="{{asset('apex/js/apexcharts.min.js')}}"></script>
		<script>
			var trafficOption = {
			series: [{
				name: 'Products',
				type: 'column',
				data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
			}, {
				name: 'Services',
				type: 'line',
				data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
			}],
			chart: {
				height: 350,
				type: 'line',
			},
			stroke: {
				width: [0, 4]
			},
			title: {
				text: 'Sales'
			},
			dataLabels: {
				enabled: true,
				enabledOnSeries: [1]
			},
			labels: ['01 Jul 2021', '02 Jul 2021', '03 Jul 2021', 
					 '04 Jul 2021', '05 Jul 2021', '06 Jul 2021', 
					 '07 Jul 2021', '08 Jul 2021', '09 Jul 2021', 
					 '10 Jul 2021', '11 Jul 2021', '12Jul 2021'],
			xaxis: {
				type: 'datetime'
			},
			yaxis: [{
				title: {
					text: 'Products',
				},
			}, {
			opposite: true,
				title: {
					text: 'Services'
				}
			}]
		};

		var chart = new ApexCharts(document.querySelector("#trafficChart"), trafficOption);
		chart.render();

		var guestOption = {
			series: [{
				name: "Visits",
				data: [10,20,30,40,50,60]
			}],
			chart: {
				type: 'area',
				height: 350,
				zoom: {
					enabled: false
				}
			},
			dataLabels: {
				enabled: false
			},
			stroke: {
				curve: 'straight'
			},
			title: {
				text: 'Guest Users',
				align: 'left'
			},
			subtitle: {
				text: 'User visits',
				align: 'left'
			},
			labels: ['01 Jul 2021', '02 Jul 2021', '03 Jul 2021', 
					 '04 Jul 2021', '05 Jul 2021', '06 Jul 2021', 
					 '07 Jul 2021', '08 Jul 2021', '09 Jul 2021', 
					 '10 Jul 2021', '11 Jul 2021', '12Jul 2021'],
			xaxis: {
				type: 'datetime',
			},
			yaxis: {
				opposite: true
			},
			legend: {
				horizontalAlign: 'left'
			}
        };

        var chart2 = new ApexCharts(document.querySelector("#guestChart"), guestOption);
        chart2.render();

		var serviceOptions = {
          series: [{
          name: 'Nike Sales',
          data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
        }],
          chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },        
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }
        
        },
        title: {
          text: 'Monthly Sale of Nike',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var chart3 = new ApexCharts(document.querySelector("#serviceChart"), serviceOptions);
        chart3.render();


		var smOptions = {
          series: [76, 67, 61, 90],
          chart: {
          height: 390,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            offsetY: 0,
            startAngle: 0,
            endAngle: 270,
            hollow: {
              margin: 5,
              size: '30%',
              background: 'transparent',
              image: undefined,
            },
            dataLabels: {
              name: {
                show: false,
              },
              value: {
                show: false,
              }
            }
          }
        },
        colors: ['#1ab7ea', '#0084ff', '#39539E', '#0077B5'],
        labels: ['Vimeo', 'Messenger', 'Facebook', 'LinkedIn'],
        legend: {
          show: true,
          floating: true,
          fontSize: '16px',
          position: 'left',
          offsetX: 160,
          offsetY: 15,
          labels: {
            useSeriesColors: true,
          },
          markers: {
            size: 0
          },
          formatter: function(seriesName, opts) {
            return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
          },
          itemMargin: {
            vertical: 3
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
                show: false
            }
          }
        }]
        };

        var chart4 = new ApexCharts(document.querySelector("#smChart"), smOptions);
        chart4.render();
	</script>
        @endsection

