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
        <div class="row align-items-center">
            <div class="add col-lg-6">
                <a href="{{ route('account.create') }}" class="btn btn-outline-success rounded-0">Add &plus;</a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>User's Name</th>
                    <th>Email Address</th>
                    <th>Created At</th>
                    <th>Role</th>
                    <th>Action</th>
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
                                <a href="{{ route('account.edit', $acc->id) }}"  class="btn btn-outline-success">Edit</i></a>
                                <button type="submit" {{ $acc->role == 1 ? 'disabled' : '' }} class="btn btn-outline-danger">
                                   DELETE
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        {{ $accounts->links() }}
    </div>
@endsection
