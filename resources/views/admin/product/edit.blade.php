@extends('admin.master')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" enctype="multipart/form-data" action="{{route('product.update',$product->id)}}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <select class="form-control" name="cate_id" id="">
                    @foreach ($category as $value)
                        @if ($value->id == $product->cate_id)
                            <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                        @else
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Xuất Xứ</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="origin" value="{{$product->origin}}">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số lượng</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="quantity" value="{{$product->quantity}}">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đơn giá</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="price" value="{{$product->price}}">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ảnh</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="file">
                    <img src="{{url('uploads')}}\{{$product->image}}" alt="" width="300">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="1"
                            {{ $product->status ? 'checked' : '' }}>
                        Còn hàng
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="0"
                            {{ !$product->status ? 'checked' : '' }}> Hết hàng
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@stop
