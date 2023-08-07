@extends('ADMIN.templates.tpl_default', ['pageId'=>'categories'])

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
							<p id="myText">Danh mục sản phẩm</p>
						</li>
					</ul>
				</div>
			</div>
		
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh mục sản phẩm</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<button id="add-button">
						<i class="fa-solid fa-plus"></i><a href="#">Thêm danh mục mới</a>
					</button>
					<table id="tb">
						<thead>
							<tr>
								<th>id</th>
								<th>Tên danh mục</th>
								<th>Trạng thái</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>111</p>
								</td>
								<td>
									<p>tủ lạnh</p>
								</td>
								<td>
									<p>còn tủ lạnh?</p>
								</td>
								
								
								<td>
									<button class="edit-button">
										<i class="fa-solid fa-pen-to-square"></i>
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
