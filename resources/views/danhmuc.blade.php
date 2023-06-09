@extends('master')
@section('content')
    <div class="container-fruid">
        <div class="row">
            <div class="col-lg-2">
                <ul class="navbar-nav avar-div">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle danhmuc" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Danh Mục
                        </a>
                        
                        <div class="dropdown-menu dro" aria-labelledby="dropdownId">
                            @foreach ($categories as $item)
                                <a href="{{ route('danhmuc', $item->id) }}"
                                    class="list-group-item btn btn-outline-primary rounded-0"
                                    >{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            
            </div>
            <div class="col-lg-10">
                <div class="container-fruid mt-5">
                    <h1 class="text-center bg-danger">Sản phẩm theo danh mục: {{$category->name}} </h1>
                    <div class="row">
                        @foreach ($category->products as $item)
                            <div class="col-lg-4 mt-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ url('uploads') }}/{{ $item->image }}" alt=""
                                        height="200px">
                                    <div class="card-body ">
                                        <h4 class="card-title text-center">{{ $item->name }}</h4>
                                        <p class="mr-5">{{ $item->price }}</p>    
                                        <p class="card-text">Danh mục: {{ $item->category->name }}</p>
                                        <p class="card-text">Trạng thái: {!! $item->status
                                            ? '<span class="badge badge-pill badge-primary">In stock</span>'
                                            : '<span class="badge badge-pill badge-danger">Out of stock</span>' !!}</p>
                                    </div>
                                    <a href="{{ route('show', $item->id) }}"><button class="btn btn-primary">Xem chi
                                            tiết</button></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- {{ $product->links() }} --}}
            </div>
        </div>
    </div>
    </div>
@endsection
