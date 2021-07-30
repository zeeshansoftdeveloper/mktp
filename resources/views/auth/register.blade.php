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
                        <form method="POST" action="{{ route('registered') }}">
                                {{csrf_field()}}
                                @method('post')
                                <div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up</h3>
									<div class="text-muted font-weight-bold font-size-h4">Already Signed Up?
									<a href="{{  route('login')}}" class="text-pink font-weight-bolder heading-pink">Sign In</a></div>
								</div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Phone') }}</label>
                                    <input id="phone" type="text" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" name="phone" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Address') }}</label>
                                    <input id="address" type="text" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" name="address" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Gender') }}</label>
                                    <select name='gender' id='gender' class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 font-size-h6 font-weight-bolder text-dark" required>
                                        <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Date of Birth') }}</label>
                                    <input id="date_of_birth" type="date" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" name="date_of_birth" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Describe Yourself') }}</label>
                                    <select name='role_id' id='role_id' class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 font-size-h6 font-weight-bolder text-dark" required>
                                        <option value="">Select Your Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{ucfirst($role->role_name)}}</option>
                                        @endforeach
                                    </select>
                                </div>

								<div class="pb-lg-0 pb-5">
									<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-light-danger font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign Up</button>
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