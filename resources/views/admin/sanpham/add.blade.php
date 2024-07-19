@extends('layout.admin')

@section('content')
<div class="card-body">
    <h1>thêm sản phẩm</h1>
    <form action="{{ route('sanpham.store')}}" method="POST" enctype="multipart/form-data">
        <!-- csrf field: là 1 trường ẩn bắt buộc phải có trong form -->
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">mã sản phẩm</label>
            <input type="text" class="form-control @error('ma_san_pham') is-invalid @enderror" name="ma_san_pham" value="{{old('ma_san_pham')}}">
            @error('ma_san_pham')
            <p class="text-danger">{{ $message  }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">tên sản phẩm</label>
            <input type="text" class="form-control @error('ten_san_pham') is-invalid @enderror" name="ten_san_pham">
            @error('ten_san_pham')
            <p class="text-danger">{{ $message  }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">hình ảnh</label>
            <input type="file" class="form-control " name="hinh_anh">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">giá</label>
            <input type="text" class="form-control @error('gia') is-invalid @enderror" name="gia">
            @error('gia')
            <p class="text-danger">{{ $message  }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">số lượng</label>
            <input type="mumber" class="form-control @error('so_luong') is-invalid @enderror" min="0" name="so_luong">
            @error('so_luong')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ngày nhập</label>
            <input type="date" class="form-control @error('ngay_nhap') is-invalid @enderror" name="ngay_nhap">
            @error('ngay_nhap')
            <p class="text-danger">{{ $message  }}</p>
            @enderror
        </div>message
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label @error('trang_thai') is-invalid @enderror">trạng thái</label>
            <select class="form-select" aria-label="Default select example" name="trang_thai">
                <option selected>trạng thái của sản phẩm</option>
                <option value="0">còn hàng</option>
                <option value="1">hết hàng</option>
            </select>
            @error('trang_thai')
            <p class="text-danger">{{ $message  }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">mô tả</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mo_ta"></textarea>
        </div>
        <button class="btn btn-success">thêm mới</button>
    </form>
</div>
@endsection