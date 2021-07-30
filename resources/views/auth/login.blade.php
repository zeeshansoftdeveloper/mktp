@extends("dashboard.layouts.main")

	@section('content')
		<div class="d-flex flex-column flex-root">
			<div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
					<div class="login-content d-flex flex-column pt-lg-0 pt-12">
						<a href="#" class="login-logo pb-xl-20 pb-15">
							<h1 class="heading-pink">Vev.ae</h1>
						</a>
						<div class="login-form">
							<form class="form" id="kt_login_singin_form" method="POST"  action="{{ route('login') }}">
                                {{ csrf_field() }}
								@method('post')
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
									<div class="text-muted font-weight-bold font-size-h4">New Here?
									<a href="{{  url('register')}}" class="text-pink font-weight-bolder heading-pink">Create Account</a></div>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
									<input id="email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" autocomplete="off" />
                                    
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5 heading-pink">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5 ">Your Password</label>
										<a href="forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5 heading-pink">Forgot Password ?</a>
									</div>
									<input id="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" />
								</div>
								<div class="pb-lg-0 pb-5">
									<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-light-danger font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
					<div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url({{asset('assets/media/login-visual-4.svg')}});">
						<h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">We Got
						<br />A Surprise
						<br />For You</h3>
					</div>
				</div>
			</div>
		</div>
	@include("dashboard.footer")
@endsection