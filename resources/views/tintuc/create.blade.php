@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm mới tin tức mới</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('tintuc.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <strong>Mã Tin Tức: </strong>
                                <input type="text" name="matintuc" class="form-control" placeholder="Nhập mã tin tức...">
                            </div>
                            <div class="form-group mb-2">
                                <strong>Tên Tiêu Đề: </strong>
                                <input type="text" name="tieude" class="form-control"
                                    placeholder="Nhập tên tiêu đề...">
                            </div>
                            <div class="form-group mb-2">
                                <strong>Thể loại: </strong>
                                <select class="w-100" name="matheloai" id="">
                                    @foreach ($theloais as $item)
                                        <option value="{{ $item->id }}">{{ $item->tentheloai }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div>
                                    <strong>Nội Dung: </strong>
                                </div>
                                <textarea class="w-100" name="noidung" id="" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
