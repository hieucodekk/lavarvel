@extends('layout.admin')

@section('content')
<div class="card-body">
    <h1>thêm sản phẩm</h1>
    <form action="{{ route('sanpham.store')}}" method="POST" enctype="multipart/form-data">
        <!-- csrf field: là 1 trường ẩn bắt buộc phải có trong form -->
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">mã sản phẩm</label>
            <input type="text" class="form-control" name="ma_san_pham" value=" {{ $sanPham->ma_san_pham }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">tên sản phẩm</label>
            <input type="text" class="form-control" name="ten_san_pham" value="{{ $sanPham->ma_san_pham }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">hình ảnh</label>
            <input type="file" class="form-control" name="hinh_anh" onchange="showImage(event)">
        </div>
        <img id="image_san_pham" src="{{ Storage::url($sanPham->hinh_anh) }}" alt="Hình ảnh sản phầm" style="width: 200px;">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">giá</label>
            <input type="text" class="form-control" name="gia" value="{{ $sanPham->ma_san_pham }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">số lượng</label>
            <input type="mumber" class="form-control" min="0" name="so_luong" value="{{ $sanPham->so_luong }}">
        </div>
        <div class=" mb-3">
            <label for="exampleFormControlInput1" class="form-label">ngày nhập</label>
            <input type="date" class="form-control" name="ngay_nhap" value="{{ $sanPham->ngay_nhap }}">
        </div>
        <div class=" mb-3">
            <label for="exampleFormControlInput1" class="form-label">trạng thái</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Trạng thái của sản phẩm</option>
                <option value="0" {{ $sanPham->trang_thai == '1' ? 'selected' : '' }}>Hết hàng</option>
                <option value="1" {{ $sanPham->trang_thai == '0' ? 'selected' : '' }}>Còn hàng</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">mô tả</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mo_ta">{{ $sanPham->mo_ta }}</textarea>
        </div>
        <button class="btn btn-success">thêm mới</button>
    </form>
</div>
@endsection

@section('js')
<script>
    function showImage(event) {
        const image_san_pham = document.getElementById('image_san_pham');

        const file = event.target.files[0];

        const reader = new FileReader();

        reader.onload = function() {
            image_san_pham.src = reader.result;
            image_san_pham.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection