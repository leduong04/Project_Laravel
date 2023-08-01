@extends('ADMIN.templates.tpl_default', ['pageId'=>'add_nhanvien'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/nhanvien.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/add_nhanvien.css')}}">




@endsection

@section('content')

<div id="container">
    <h1>Thêm nhân viên</h1>
    <form action="{{route('nhanvien.xuli_add_nhanvien')}}"  method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Tên nhân viên:</label>
        <input type="text" id="name" name="ten" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>

        <label for="gender">Giới tính:</label>
        <select id="gender" name="gender" required>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>

        <label for="date_of_birth">Ngày sinh (Năm-tháng-ngày):</label>
        <input type="text" id="date_of_birth" name="date_of_birth" required>

        <label for="phone">Số điện thoại:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

        <label for="address">Địa chỉ:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="level">Level:</label>
        <input type="number" id="level" name="level" required>

        <label for="position">Chức vụ:</label>
        <input type="text" id="chuc_vu" name="chuc_vu" required>


        <label for="avatar">Hình ảnh:</label>
        <input type="file" id="img_link" name="img_link" accept="image/*">
        <img id="preview" src="#" alt="Hình ảnh" style="max-width: 200px; display: none;">






        <input type="submit" name="btn_create" value="Thêm nhân viên">

    </form>
</div>



@endsection

@section('js')
<script src="{{ asset('assets/js/ADMIN/navbar_sidebar.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/js/ADMIN/nhanvien.js')}}"></script>
<script src="{{ asset('assets/js/ADMIN/add_nhanvien.js')}}"></script>


@endsection