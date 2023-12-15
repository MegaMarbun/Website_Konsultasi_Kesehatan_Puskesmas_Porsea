@extends('layouts.login')

@section('container')
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-4">
			<div class="wrap-login100">
				<div class="login90-pic">
					<img src="img/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="/registrasi" method="POST">
					@csrf
					<span class="login100-form-title">
						REGISTRASI
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100 rounded-full @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Masukkan nama" value="{{ old('name') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
						@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100 rounded-full @error('name') is-invalid @enderror" type="text" name="username" id="username" placeholder="Masukkan Username" value="{{ old('name') }}">
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

					<div class="wrap-input100 validate-input">
						<input class="input100 rounded-full @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100 rounded-full @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Masukkan Password">
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
							Registrasi
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
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