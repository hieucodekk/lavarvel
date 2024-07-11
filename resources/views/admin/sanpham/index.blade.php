@extends('layout.admin')

@section('content')
<div class="card">
    <h1>danh sách san phẩm</h1>
    <div class="card-body">
        <a href="{{ route('sanpham.create')}}" class="btn btn-success">thêm sản phẩm</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">hình ảnh</th>
                    <th scope="col">gia</th>
                    <th scope="col">so_luong</th>
                    <th scope="col">ngày nhập</th>
                    <th scope="col">mô tả</th>
                    <th scope="col">trạng thái</th>
                    <th scope="col">thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($san_phams as $index => $item)
                <tr>
                    <th scope="row">{{$index + 1}}</th>
                    <td>{{$item->ma_san_pham}}</td>
                    <td>{{$item->ten_san_pham}}</td>
                    <td>{{$item->hinh_anh}}</td>
                    <td>{{$item->gia}}</td>
                    <td>{{$item->so_luong}}</td>
                    <td>{{$item->ngay_nhap}}</td>
                    <td>{{$item->mo_ta}}</td>
                    <td>{{$item->trang_thai == 0 ? 'còn hàng' : 'hết hàng'}}</td>
                    <td>
                        <button class="btn btn-success">sửa</button>
                        <button class="btn btn-success">xóa</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection