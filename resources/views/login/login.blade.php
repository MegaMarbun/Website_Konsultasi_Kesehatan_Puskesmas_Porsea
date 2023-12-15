@extends('layouts.login')
@section('container')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="wrap-login100">
				<div class="login90-pic" >
					<img src="img/logo.png" alt="IMG" >
				</div>   
				
				<form class="login100-form validate-form" action="/login" method="POST">
					@csrf
					<span class="login100-form-title">
						LOGIN
					</span>

					@if(session()->has('Berhasil'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('Berhasil') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif

					@if(session()->has('loginError'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						{{ session('loginError') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif

					<div class="wrap-input100 validate-input">
						<input class="input100  @error('email') is-invalid @enderror" type="text" name="email" id="email" autofocus required placeholder="Masukkan Email" value="{{ old('email') }}"  required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						@error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100  @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Masukkan Password" value="{{ old('password') }}" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Belum memiliki akun?
						</span>
						<a class="txt2" href="/registrasi">
							registasi akun sekarang
						</a>
					</div>
				</form>
			</div>

        </div>
    </div>
</div>
@endsection