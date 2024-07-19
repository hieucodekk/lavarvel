<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'ma_san_pham' => 'required|max:10|unique:san_phams,ma_san_Pham,' . $this->route('sanpham'),
            'ten_san_pham' => 'required|max:100',
            'gia' => 'required|numeric|min:1|max:999999',
            'so_luong' => 'required|numeric|min:1',
            'ngay_nhap' => 'required|date',
            
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'ma_san_pham.required' => 'nhập vào del đc để trống',
            'ma_san_pham.unique' => 'mã ko đc để trùng',
            'ma_san_pham.max' => 'tối đa 10 kí tự thôi',
            'ten_san_pham.required' => 'nhập vào del đc để trống',
            'ten_san_pham' => 'required|max:100',
            'gia.required' => 'nhập vào del đc để trống',
            'gia.numeric' => 'nhập số vào',
            'gia.min' => 'nhập ko hợp lệ',
            'gia.max' => 'nhập ko hợp lệ',
            'so_luong.required' => 'nhập vào del đc để trống',
            'so_luong.numeric' => 'nhập số vào',
            'so_luong.min' => 'nhập ko hợp lệ',
            'ngay_nhap.required' => 'nhập vào del đc để trống',
            'ngay_nhap.date' => 'Ngày nhập không hợp lệ',
            'trang_thai.required' => 'nhập vào del đc để trống',
            'trang_thai.in' => 'del hợp lệ'
        ];
    }
}
