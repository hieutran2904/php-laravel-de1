@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        Quản lý tin tức
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <form class="w-100" style="display: flex; align-items: center;"
                                action="{{ route('tintuc.search') }}" method="GET">
                                @csrf
                                <input type="search" class="form-control rounded" name="search" placeholder="Search"
                                    aria-label="Search" aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-outline-primary">search</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('tintuc.create') }}" class="btn btn-success float-end">Add</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Mã tin tức</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Thể loại</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>
                        @foreach ($tintuc as $key => $value)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->matintuc }}</td>
                                <td>{{ $value->tieude }}</td>
                                <td>{{ $value->noidung }}</td>
                                <td>{{ $value->TheLoai->tentheloai }}</td>
                                <td>
                                    <a href="{{ route('tintuc.edit', $value->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('tintuc.destroy', $value->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tintuc->links() }}
            </div>
        </div>
    </div>
@endsection
