@extends('layout.admin')

@section('content')
<div class="card-body">
    <h1>thêm sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">mã sản phẩm</label>
            <input type="text" class="form-control" name="ma_san_pham">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">tên sản phẩm</label>
            <input type="text" class="form-control" name="ten_san_pham">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">hình ảnh</label>
            <input type="file" class="form-control" name="hinh_anh">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">giá</label>
            <input type="text" class="form-control" name="gia">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">số lượng</label>
            <input type="mumber" class="form-control" min="1" name="so_luong">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ngày nhập</label>
            <input type="date" class="form-control" name="ngay_nhap">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">tên sản phẩm</label>
            <input type="text" class="form-control" name="ten_san_pham">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">mô tả</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-success">thêm mới</button>
    </form>
</div>
@endsection