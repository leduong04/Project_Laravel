<?php

namespace App\Http\Controllers\ADMIN_CONTROLLER;

use App\Http\Controllers\Controller;
use App\Models\admin_nhanvien;
use Illuminate\Http\Request;

use Carbon\Carbon;

class NhanvienController extends Controller
{
    public function show()
    {
        return view('./ADMIN/nhanvien');
    }
    public function show_add_nhanvien()
    {
        return view('./ADMIN/add_nhanvien');
    }
  


    public function xuli_add_nhanvien(Request $request)
    {
        $this->validate($request, [
            'img_link' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'ten' => 'required',
            'email' => 'required',
            'password' => 'required',
            'date_of_birth' => 'required', // Kiểm tra định dạng ngày tháng
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'level' => 'required|integer', // Kiểm tra số nguyên
            'chuc_vu' => 'required',
        ]);

        $image = $request->file('img_link');
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/image/nhanvien', $imageName);


        $nhanvien = admin_nhanvien::create([
            'full_name' => $request->ten,
            'email' => $request->email,
            'password' => $request->password,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'img_link' => $imageName,
            'level' => $request->level,
            'chuc_vu' => $request->chuc_vu,
        ]);

        session()->flash('success', 'Nhân viên added successfully');
        return redirect()->route('nhanvien.nhanvien_list');
    }
}
