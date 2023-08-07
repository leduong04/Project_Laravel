@extends('ADMIN.templates.tpl_default', ['pageId'=>'detail_nhanvien'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/navbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/detail_nhanvien.css')}}">



@endsection

@section('content')

<main>
			<div class="head-title">
				<div class="left">
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<p id="myText"></p>
						</li>
					</ul>
				</div>
			</div>
			<div class="detail-nhanvien">
				<div class="nv">
					<!-- <div class="head">
						<h3>Nhân viên</h3>
					</div> -->

					<div class="nhanvien-img">
						<img src="{{ asset('storage/image/nhanvien/' . $nhanvien->img_link) }}">
					</div>
					<div class="inform">
						<div class="ID">
							<p>ID: </p>
							<p>{{ $nhanvien->id }}</p>
						</div>
						<div class="name">
							<p>Tên: </p>
							<p>{{ $nhanvien->full_name }}</p>
						</div>
						<div class="email">
							<p>Email: </p>
							<p>{{ $nhanvien->email }}</p>
						</div>
						<div class="pass">
							<p>Password: </p>
							<p>{{ $nhanvien->password }}</p>
						</div>
						<div class="birth">
							<p>Date of birth: </p>
							<p>{{ $nhanvien->date_of_birth }}</p>
						</div>
						<div class="gender">
							<p>Giới Tính: </p>
							<p>{{$nhanvien->gender}}</p>
						</div>
						<div class="address">
							<p>Địa chỉ: </p>
							<p>{{$nhanvien->address}}</p>
						</div>
						<div class="phone">
							<p>Số điện thoại: </p>
							<p>{{ $nhanvien->phone }}</p>
						</div>
						<div class="level">
							<p>level: </p>
							<p>{{ $nhanvien->level }}</p>
						</div>
						<div class="chuc_vu">
							<p>Chức vụ: </p>
							<p>{{ $nhanvien->chuc_vu }}</p>
						</div>
					
				</div>
			</div>
		</main>



@endsection

@section('js')
<script src="{{ asset('assets/js/ADMIN/navbar_sidebar.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/js/ADMIN/nhanvien.js')}}"></script>

@endsection