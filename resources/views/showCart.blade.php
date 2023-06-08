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

    <div class="container mt-5">
        <h1 class="text-center bg-primary white-text">Hóa Đơn</h1>
        <table class="table white-text">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Thể loại</th>
                    <th>Thời gian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bill as $item)
                    <tr class="bg-blur">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item['quantity'] * $item->product->price }}</td>
                        @if($item->status==1)
                        <td>Xuất hàng</td>
                        @else
                        <td>Nhập hàng</td>
                        @endif
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="nut">
            <a class="chu bar-link white-text" href="{{ url('cart/1') }}">Nhập hàng</a>
        </div>
        <div class="nut">
            <a class="chu white-text" href="{{ url('cart/0') }}">Xuất hàng</a>
        </div>
    </div>
@stop
