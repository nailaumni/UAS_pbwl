@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 shadow-lg border-0">
                <div class="card-header bg-success text-white text-center fs-4">{{ __('Dashboard') }}</div>

                <div class="card-body text-center fw-bold">
                    @if (session('status'))
                        <div class="alert alert-success " role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Datang di Sistem Informasi Pendataan Guru SD Surya Bakti') }}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
