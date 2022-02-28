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
                    <div class="table-bordered">
                        <h3>회원가입 요청</h3>
                        <h6 style="color: red;">POST /api/v1/register/</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>String(Min 4)</td>
                                <td>사용자 이름</td>
                            </tr>
                            <tr>
                                <td>user_email</td>
                                <td>String</td>
                                <td>사용자 이메일</td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>String</td>
                                <td>사용자 비밀번호</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>회원가입 응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>token</td>
                                <td>String</td>
                                <td>토큰값</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('로그인') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>로그인 요청</h3>
                        <h6 style="color: red;">POST /api/v1/login/</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>String</td>
                                <td>유저 이메일</td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>String</td>
                                <td>유저 비밀번호</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>로그인 응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>token</td>
                                <td>String</td>
                                <td>토큰값</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('로그아웃') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>로그아웃 요청</h3>
                        <h6 style="color: red;">POST /api/v1/logout/</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>Authorization</td>
                                <td>String</td>
                                <td>"Bearer".$UserToken</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>로그인 응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>error</td>
                                <td>boolean</td>
                                <td>true Or False</td>
                            </tr>
                            <tr>
                                <td>message</td>
                                <td>String</td>
                                <td>로그인 성공여부</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('상품 조회') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>상품조회 요청</h3>
                        <h6 style="color: red;">GET /api/v1/items/{itemId}</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Description</th>
                                <th>example</th>
                            </tr>
                            <tr>
                                <td>itemId</td>
                                <td>상품 아이디</td>
                                <td>localhost:8000/api/v1/items/1</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>상품조회 응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>Number</td>
                                <td>상품 아이디</td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>String</td>
                                <td>상품 이름</td>
                            </tr>
                            <tr>
                                <td>price</td>
                                <td>Number</td>
                                <td>상품 가격</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('상품 주문') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>상품 주문 요청</h3>
                        <h6 style="color: red;">Post /api/v1/orders</h6> <br/>
                        Request Fileds
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>nullable</th>
                                <th>description</th>
                            </tr>
                            <tr>
                                <td>user_email</td>
                                <td>String</td>
                                <td>NOT NULL</td>
                                <td>주문 고객 이메일</td>
                            </tr>
                            <tr>
                                <td>product_id</td>
                                <td>Number</td>
                                <td>NOT NULL</td>
                                <td>상품 아이디</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>상품 주문 응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>Number</td>
                                <td>주문 아이디</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('회원 주문 내역 조회') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>주문조회 요청</h3>
                        <h6 style="color: red;">GET /api/v1/orders/{orderId}</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Description</th>
                                <th>example</th>
                            </tr>
                            <tr>
                                <td>orderId</td>
                                <td>주문 아이디</td>
                                <td>localhost:8000/api/v1/orders/1</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>주문조회 응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>Number</td>
                                <td>주문 아이디</td>
                            </tr>
                            <tr>
                                <td>user_email</td>
                                <td>String</td>
                                <td>주문 고객 이메일</td>
                            </tr>
                            <tr>
                                <td>OrderItemList</td>
                                <td>Array</td>
                                <td>주문 상품 정보</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
