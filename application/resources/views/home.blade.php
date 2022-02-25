@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('회원가입') }}</div>
                <div class="card-body">

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('로그인') }}</div>
                <div class="card-body">

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('로그아웃') }}</div>
                <div class="card-body">

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('상품 조회') }}</div>
                <div class="card-body">

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('상품 주문') }}</div>
                <div class="card-body">

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('회원 주문 내역 조회') }}</div>
                <div class="card-body">

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
