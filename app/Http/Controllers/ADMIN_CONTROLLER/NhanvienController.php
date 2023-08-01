<?php

namespace App\Http\Controllers\ADMIN_CONTROLLER;

use App\Http\Controllers\Controller;
use App\Models\admin_nhanvien;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;


class NhanvienController extends Controller
{

    public function show_add_nhanvien()
    {
        return view('./ADMIN/add_nhanvien');
    }


    public function show()
    {
        $nhanviens = admin_nhanvien::all(); // Lấy danh sách nhân viên từ CSDL
        return view('./ADMIN/nhanvien', compact('nhanviens')); // Trả về view và truyền danh sách nhân viên vào view
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










    public function show_update($id)
    {
        $nhanvien = admin_nhanvien::findOrFail($id);
        $pageTitle = 'Sửa thông tin nhân viên';
        return view('ADMIN.update_nhanvien', compact('nhanvien', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ten' => 'required',
            'email' => 'required',
            'password' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'level' => 'required|integer',
            'chuc_vu' => 'required',
        ]);

        $nhanvien = admin_nhanvien::find($id);

        $nhanvien->full_name = $request->ten;
        $nhanvien->email = $request->email;
        $nhanvien->password = $request->password;
        $nhanvien->date_of_birth = $request->date_of_birth;
        $nhanvien->gender = $request->gender;
        $nhanvien->address = $request->address;
        $nhanvien->phone = $request->phone;
        $nhanvien->level = $request->level;
        $nhanvien->chuc_vu = $request->chuc_vu;

        if ($request->hasFile('img_link')) {
            // Xóa ảnh cũ
            if ($nhanvien->img_link) {
                Storage::delete('public/image/nhanvien/' . $nhanvien->img_link);
            }

            $image = $request->file('img_link');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/image/nhanvien', $imageName);
            $nhanvien->img_link = $imageName;
        }

        $nhanvien->save();

        session()->flash('success', 'Thông tin nhân viên đã được cập nhật thành công');
        return redirect()->route('nhanvien.nhanvien_list');
    }








    public function delete($id)
    {
        $nhanvien = admin_nhanvien::findOrFail($id);
        // Delete the image from storage
        Storage::delete('public/image/nhanvien/' . $nhanvien->img_link);
        // Delete the record from the database
        $nhanvien->delete();

        // You can add any response message you want
        return response()->json(['message' => 'Nhân viên đã được xóa thành công']);
    }
}
