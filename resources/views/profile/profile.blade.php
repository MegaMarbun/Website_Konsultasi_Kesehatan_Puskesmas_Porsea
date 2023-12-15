@extends('profile.layouts.main')


@section('container')

<div class="container-xl px-4 mt-4">
    <div class="row">
        @if(session()->has('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Detail Akun</div>
                <div class="card-body">
                    <form action="{{ route('profile.profile') }}" method="post">
                        @method("put")
                        @csrf
                        <!-- Form (name)-->
                        <div class="mb-3">
                            <input class="form-control rounded-full @error('name') is-invalid @enderror" type="text" name="name" id="name"  value="{{ old('name', Auth::user()->name) }}">

                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div><br>
                        <!-- Form (username)-->
                        <div class="mb-3">
                            <input class="form-control rounded-full @error('name') is-invalid @enderror" type="text" name="username" id="username"  value="{{ old('name', Auth::user()->username)  }}">

                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div><br>
                        <!-- Form (email)-->
                        <div class="mb-3">
                            <input class="form-control rounded-full @error('email') is-invalid @enderror" type="email" name="email" id="email"  value="{{ old('email', Auth::user()->email) }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div><br>
                        <!-- Save changes button-->
                        
                        <div class="container-login100-form-btn">
                            <button class="btn btn-success">Simpan Perubahan</button>
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
