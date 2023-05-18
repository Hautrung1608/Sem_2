@extends('master')
@section('content')
    </head>

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1">Đăng kí</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" name="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Comfirm password"
                                name="confirm_password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('confirm_password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <a href="{{ route('login.index') }}" class="text-center">Đã có tài khoản</a>

                            </div>
                            <!-- /.col -->
                            <div class="col-5">
                                <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>



                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
    @stop
