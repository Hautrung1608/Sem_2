@extends('master')
@section('content')
    <div class="container">
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
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Trạng thái</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @forelse ($category as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{!! $item->status
                            ? '<span class="badge badge-pill badge-primary">In stock</span>'
                            : '<span class="badge badge-pill badge-danger">Out of stock</span>' !!}</td>
                        <td><a href="{{ route('category.forceDelete', $item->id) }}" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')">Xóa</a></td>
                        <td><a href="{{ route('category.restore', $item->id) }}" class="btn btn-primary">Khôi phục</a></td>
                    </tr>
                @empty
                    <h1>No Category</h1>
                @endforelse
            </tbody>
        </table>
    </div>
@stop
