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
    <a href="{{route('category.create')}}" class="btn btn-success">ADD</a>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{!! $item->status ? '<span class="badge badge-pill badge-primary">Hiện</span>' : '<span class="badge badge-pill badge-danger">Ẩn</span>' !!}</td>
                    <td><a href="{{route('category.destroy',$item->id)}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" >Xóa</a></td>
                    <td><a href="{{route('category.edit',$item->id)}}" class="btn btn-primary" >Sửa</a></td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{$category->links()}}
</div>
@endsection