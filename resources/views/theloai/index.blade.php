@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        Quản lý thể loại
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <form class="w-100" style="display: flex; align-items: center;"
                                action="{{ route('theloai.search') }}" method="GET">
                                @csrf
                                <input type="search" class="form-control rounded" name="search" placeholder="Search"
                                    aria-label="Search" aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-outline-primary">search</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('theloai.create') }}" class="btn btn-success float-end">Add</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{-- @if (Session::has('success'))
                    <div class="alert alert-success">
                        {!! Toastr::message() !!}
                    </div>
                @endif --}}
                <table class="table table-bordered">
                    <thead>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Mã thể loại</th>
                        <th>Tên thể loại</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>
                        @foreach ($theloai as $key => $value)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->matheloai }}</td>
                                <td>{{ $value->tentheloai }}</td>
                                <td>{{ $value->mota }}</td>
                                <td>
                                    <a href="{{ route('theloai.edit', $value->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('theloai.destroy', $value->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $theloai->links() }}
            </div>
        </div>
    </div>
@endsection
