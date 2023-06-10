@extends('admin.master')

@section('title', 'Account')

@section('content')
    <div class="p-4">
        @if (session('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>
                    {{ session('success') }}
                </strong>
            </div>
        @endif

        <table class="table table-bordered white-text">
            <thead>
                <tr>
                    <th>Thứ tự</th>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Thời gian tạo tài khoản</th>
                    <th>quyền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $acc)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $acc->id }}</td>
                        <td>{{ $acc->name }}</td>
                        <td>{{ $acc->email }}</td>
                        <td>{{ $acc->created_at }}</td>
                        <td>{{ $acc->role }}</td>
                        <td>
                            <form action="{{ route('account.destroy', $acc->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('account.edit', $acc->id) }}"  class="nut-edit bar-link">Sửa</i></a>
                                <button type="submit" style="{{ $acc->role == 1 ? 'display:none' : '' }}" class="nut-dele">
                                   Xóa
                                </button>
                                {{-- {{ $acc->role == 1 ? 'disabled' : '' }} --}}
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        {{ $accounts->links() }}
    </div>
@endsection
