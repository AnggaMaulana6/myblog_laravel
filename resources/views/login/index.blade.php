@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        {{-- <div class="d-flex justify-content-center py-4">
                            <a href="./index.php" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">PB.SALMAIRA</span>
                            </a>
                        </div><!-- End Logo --> --}}

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn btn-close" data-bs-dismis="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn btn-close" data-bs-dismis="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login Gudang Beras</h5>
                                    <p class="text-center small">Masukkan Username & Password anda</p>
                                </div>

                                <form class="row g-3 needs-validation" action="/login" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="" autofocus placeholder="Email" required value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" id="yourPassword" required>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="login" value="Login">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0 d-block text-center">Belum Punya akun? <a href="/register">Buat akun!</a></p>
                                    </div>
                                </form>
                                  
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->
@endsection