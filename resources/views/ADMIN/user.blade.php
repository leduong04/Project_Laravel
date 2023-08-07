@extends('ADMIN.templates.tpl_default', ['pageId'=>'user'])

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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/cate.css')}}">

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
		
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Thông tin người dùng</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<button id="add-button">
						<i class="fa-solid fa-plus"></i><a href="#">Thêm người dùng mới</a>
					</button>
					<table id="tb">
						<thead>
							<tr>
								<th>id</th>
								<th>Tên</th>
								<th>Email</th>
								<th>Giới tính</th>
								<th>SĐT</th>
								<th>Ảnh</th>
                                <th>Địa chỉ</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>#1314</p>
								</td>
								<td>
									<p>le doan duong</p>
								</td>
								<td>
									<p>example@gmail.com</p>
								</td>
								<td>nu</td>
								<td>9999999999</td>
								<td>
									<img src="img/1.jpg">
								</td>
								<td>175 son tay</td>
								<td>
									<button class="edit-button">
										<i class="fa-solid fa-pen-to-square"></i>
									 </button>
									 <button class="detail-button">
										 <i class="fa-solid fa-info"></i>
									 </button>
									 <button class="delete-button">
										 <i class="fa-solid fa-trash"></i>
									 </button>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
</main>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('assets/js/ADMIN/navbar_sidebar.js')}}"></script>
<script src="{{ asset('assets/js/ADMIN/nhanvien.js')}}"></script>
@endsection
