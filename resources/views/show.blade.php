@extends('master')
@section('content')
    @if (session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('success') }}</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
    @endif
    <div class="card mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="card-img-top mt-5" src="{{ url('uploads') }}/{{ $product->image }}" alt=""
                        height="500px" width="200px">
                </div>
                <div class="card-body col-lg-6">
                    <h4 class="card-title text-center">{{ $product->name }}</h4>
                    <p class="card-text">Gía: {{ $product->price }}</p>
                    <p class="card-text">Danh mục: {{ $product->category->name }}</p>

                    <p class="card-text">Trạng thái: {!! $product->status
                        ? '<span class="badge badge-pill badge-primary">Còn hàng</span>'
                        : '<span class="badge badge-pill badge-danger">Hết hàng</span>' !!}</p>

                    <form action=" {{ route('cart.add',$product->id) }} " method="POST">
                        @csrf
                        <div class="form-group">
                            <a class="">Số lượng:</a>
                            <input type="text" value="1" class="form-control" name="quantity">
                        </div>
                        <button type="submit" class="btn btn-block btn-success">Thêm hóa đơn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
