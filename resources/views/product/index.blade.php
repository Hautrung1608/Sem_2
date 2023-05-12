@extends('master')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{session('success')}}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif
        <a href="{{route('product.create')}}" class="btn btn-success">ADD</a>
        <a href="{{route('product.softDelete')}}" title="Thùng rác">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ13Fw8Nid9UTieyvpXQXvV50B-6LDOP1AtA&usqp=CAU" alt="" width="100px">
        </a>
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Tên danh mục</td>
                    <td>Xuất xứ</td>
                    <td>Số lượng</td>
                    <td>Đơn giá</td>
                    <td>Ảnh</td>
                    <td>Trạng thái</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->origin }}</td>
                        <td>{{ $item->quantity}}</td>
                        <td>{{ $item->price}}</td>
                        <td class='anh_product'>
                            <img src="{{url('uploads')}}/{{$item->image}}" alt=""  widtd="50px">
                        </td>
                        <td>{!! $item->status ? '<span class="badge badge-pill badge-primary">In stock</span>' : '<span class="badge badge-pill badge-danger">Out of stock</span>' !!}</td>
                        <td><a href="{{route('product.destroy',$item->id)}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" >Xóa</a></td>
                        <td><a href="{{route('product.edit',$item->id)}}" class="btn btn-primary" >Sửa</a></td>
                        
                    </tr>
                @endforeach


            </tbody>
        </table>
        
    </div>
@stop
