@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Postman 해당 API 사용설명 첨부') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('https://www.getpostman.com/collections/162420687c6062663afe') }}
                </div>
            </div>
<br/>
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
                                <th>Json</th>
                            </tr>
                            <tr>
                                <td>
                                    <pre>
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOi...."
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
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
                                <th>Json</th>
                            </tr>
                            <tr>
                                <td>
                                    <pre>
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOi...."
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
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
                                <th>Json</th>
                            </tr>
                            
                            <tr>
                                <td>
                                    <pre>
{
    "error": false,
    "message": "User logout successfully."
}                                        
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
            <div class="card">
                <div class="card-header">{{ __('전체 상품 조회') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>전체 상품조회 요청</h3>
                        <h6 style="color: red;">GET /api/v1/products/</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>example</th>
                            </tr>
                            <tr>
                                <td>Authorization</td>
                                <td>String</td>
                                <td>"Bearer".$UserToken</td>
                                <td>localhost:8000/api/v1/products/</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Json</th>
                            </tr>
                            <tr>
                                <td>
                                    <pre>
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "product283",
            "price": 13949,
            "created_at": "2022-02-28T03:17:15.000000Z",
            "updated_at": "2022-02-28T03:17:15.000000Z"
        },
        {
            "id": 2,
            "name": "product181",
            "price": 75657,
            "created_at": "2022-02-28T03:17:15.000000Z",
            "updated_at": "2022-02-28T03:17:15.000000Z"
        },
        {
            "id": 3,
            "name": "product768",
            "price": 24634,
            "created_at": "2022-02-28T03:17:15.000000Z",
            "updated_at": "2022-02-28T03:17:15.000000Z"
        }
        .......
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
            <div class="card">
                <div class="card-header">{{ __('단건 상품 조회') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>단건 상품조회 요청</h3>
                        <h6 style="color: red;">GET /api/v1/products/{productId}</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Description</th>
                                <th>example</th>
                            </tr>
                            <tr>
                                <td>Authorization</td>
                                <td>String</td>
                                <td>"Bearer".$UserToken</td>
                            </tr>
                            <tr>
                                <td>productId</td>
                                <td>상품 아이디</td>
                                <td>localhost:8000/api/v1/products/1</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>Json</th>
                            </tr>
                            <tr>
                                <td>
                                    <pre>
{
    "success": true,
    "data": {
        "id": 3,
        "name": "product768",
        "price": 24634,
        "created_at": "2022-02-28T03:17:15.000000Z",
        "updated_at": "2022-02-28T03:17:15.000000Z"
    }
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
            <div class="card">
                <div class="card-header">{{ __('상품 주문') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>상품 주문 요청</h3>
                        <h6 style="color: red;">Post /api/v1/orders</h6> <br/>
                        <table class="table">
                            <tr class="table-info">
                                <th>Field</th>
                                <th>Type</th>
                                <th>nullable</th>
                                <th>description</th>
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
                                <th>Json</th>
                            </tr>
                            <tr>
                                <td> 
                                    <pre>
{
    "success": true,
    "data": {
        "user_email": "mingyu@test.com",
        "product_id": "43",
        "user_id": 2,
        "updated_at": "2022-02-28T06:49:30.000000Z",
        "created_at": "2022-02-28T06:49:30.000000Z",
        "id": 6
    }
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
            <div class="card">
                <div class="card-header">{{ __('회원 단건 주문 내역 조회') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>단건 주문조회 요청</h3>
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
                        <h3>응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>JSON</th>
                            </tr>
                            <tr>
                                <td>
                                <pre>
{
    "success": true,
    "data": {
        "id": 3,
        "user_email": "mingyu@test.com",
        "product_id": 24,
        "created_at": "2022-02-28T06:12:49.000000Z",
        "updated_at": "2022-02-28T06:12:49.000000Z",
        "user_id": 2
    }
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br/>
            <div class="card">
                <div class="card-header">{{ __('회원 주문 내역 전체 조회') }}</div>
                <div class="card-body">
                    <div class="table-bordered">
                        <h3>전체 주문조회 요청</h3>
                        <h6 style="color: red;">GET /api/v1/orders/</h6>
                        <table class="table">
                            <tr class="table-info">
                                <th>Path Parametter</th>
                                <th>Description</th>
                                <th>example</th>
                            </tr>
                            <tr>
                                <td>orderId</td>
                                <td>주문 아이디</td>
                                <td>localhost:8000/api/v1/orders/</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-bordered">
                        <h3>응답</h3>
                        <table class="table">
                            <tr class="table-info">
                                <th>JSON</th>
                            </tr>
                            <tr>
                                <td>
                                <pre>
{
    "success": true,
    "data": [
        {
            "id": 1,
            "user_email": "mingyu@test.com",
            "product_id": 3,
            "created_at": "2022-02-28T06:12:26.000000Z",
            "updated_at": "2022-02-28T06:12:26.000000Z",
            "user_id": 2
        },
        {
            "id": 2,
            "user_email": "mingyu@test.com",
            "product_id": 19,
            "created_at": "2022-02-28T06:12:39.000000Z",
            "updated_at": "2022-02-28T06:12:39.000000Z",
            "user_id": 2
        },
        {
            "id": 3,
            "user_email": "mingyu@test.com",
            "product_id": 24,
            "created_at": "2022-02-28T06:12:49.000000Z",
            "updated_at": "2022-02-28T06:12:49.000000Z",
            "user_id": 2
        },
        {
            "id": 5,
            "user_email": "mingyu@test.com",
            "product_id": 44,
            "created_at": "2022-02-28T06:18:25.000000Z",
            "updated_at": "2022-02-28T06:18:25.000000Z",
            "user_id": 2
        },
        {
            "id": 6,
            "user_email": "mingyu@test.com",
            "product_id": 43,
            "created_at": "2022-02-28T06:49:30.000000Z",
            "updated_at": "2022-02-28T06:49:30.000000Z",
            "user_id": 2
        }
    ]
}
                                    </pre>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
