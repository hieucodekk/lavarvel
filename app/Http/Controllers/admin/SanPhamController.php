<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller

{
        public $san_pham;
        public function __construct()
        {
            $this->san_pham = new SanPham();
        }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //lẤY RA dữ liệu
        $listSanPham = $this->san_pham->getList();


        // sử dụng Eloquent
        // $listSanPham = SanPham::get();
        //  dd($listSanPham);
        return view('admin.sanpham.index', ['san_phams' => $listSanPham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.sanpham.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if($request->isMethod('POST')){
            //cách 1 :
            // $paramas =$request->post();
            // unset($paramas['_token']);
            //cách 2: 
            $paramas =$request->except('_token');
            if($request->hasFile('hinh_anh')){
                $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            }else{
                $filename = null ;
            }

            $paramas['hinh_anh'] = $filename;
            // $this->san_pham->createProduct($paramas);
            
            SanPham::create($paramas);
            return redirect()->route('sanpham.index')->with('success', 'thêm sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sanPham = $this->san_pham->getDetailProduct($id);
        return view('admin.sanpham.update', compact('sanPham'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function test()
    {
        dd('hihihi');
    }
}
