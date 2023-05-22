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
        <form method="POST" action="{{route('category.update',$category->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên tác giả</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="1" {{!$category->status ? 'checked' : ''}}>
                        Hiện
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="0" {{!$category->status ? 'checked' : ''}}> Ẩn
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
@stop
