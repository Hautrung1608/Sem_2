@extends('master')
@section('content')
    <div class="container">
        <div class="jumbotron white-text border-none">
            <h1 class="display-4">Chào bạn</h1>
            <p class="lead">Chào mừng đến với trang web hỗ trợ quản lý kho hàng hóa của chúng tôi</p>
            <hr class="my-4">
            <p>Hãy đăng ký tài khoản và bắt đầu khiến công việc của bạn nhẹ nhàng hơn</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="{{route('admin.index')}}" role="button">Nhấn vào đây để bắt đầu</a>
            </p>
          </div>
    </div>
@endsection
