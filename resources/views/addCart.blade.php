@extends('master')
@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="{{route('cart.add', $id)}}" class="col-md-6 center">
            @csrf
            <div class="form-check form-check-inline">
                <label class="white-text chu">
                    Hóa đơn:
                @if($id ==1 )
                Nhập hàng
                @else
                Xuất hàng
                @endif
                </label>
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1" class="white-text chu">Sản phẩm</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="pro_id" id="pro_id">
                        @foreach($product as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    {{-- name="price" value="{{old('price')}}" --}}
                </select>
            </div>
            <div class="form-group ">
                <label class="white-text chu">Số lượng</label>
                    <input class="custom-select mr-sm-2" type="number" name="quantity" value="{{old('quantity')}}"> 
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
@stop