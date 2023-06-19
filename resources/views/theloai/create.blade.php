@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm mới thể loại</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('theloai.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã Thể Loại: </strong>
                                <input type="text" name="matheloai" class="form-control" placeholder="Nhập mã thể loại...">
                            </div>
                            <div class="form-group">
                                <strong>Tên Thể loại: </strong>
                                <input type="text" name="tentheloai" class="form-control"
                                    placeholder="Nhập tên thể loại...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div>
                                    <strong>Mô tả: </strong>
                                </div>
                                <textarea class="w-100" name="mota" id="" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
