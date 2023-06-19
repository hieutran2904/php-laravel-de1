@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Cập nhật thể loại</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('theloai.update', $theloai->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã Thể Loại: </strong>
                                <input type="text" name="matheloai" value="{{ $theloai->matheloai }}" class="form-control" placeholder="Nhập mã thể loại...">
                            </div>
                            <div class="form-group">
                                <strong>Tên Thể loại: </strong>
                                <input type="text" name="tentheloai" value="{{ $theloai->tentheloai }}" class="form-control"
                                    placeholder="Nhập tên thể loại...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div>
                                    <strong>Mô tả: </strong>
                                </div>
                                <textarea class="w-100" name="mota" id="" rows="10">
                                    {{ $theloai->mota }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
