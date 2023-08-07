@extends('ADMIN.templates.tpl_default', ['pageId'=>'product'])

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
					<p id="myText">Sản phẩm</p>
				</li>
			</ul>
		</div>
	</div>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Sản phẩm</h3>
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<button class="add-button">
				<i class="fa-solid fa-plus"></i> Thêm sản phẩm mới
			</button>
			<table id="tb">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên sản phẩm</th>
						<th>Ảnh</th>
						<th>Danh mục</th>
						<th>Thương hiệu</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->product_name }}</td>
						<td>
							@if ($product->image->count() > 0)
							<img src="{{ $product->image->first()->img_link }}" alt="">
							@endif
						</td>

						<td>{{ $product->category_id }}</td>
						<td>{{ $product->brand_id }}</td>
						<td>{{ $product->price }}</td>
						<td>{{ $product->quantity }}</td>
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
					@endforeach
				</tbody>
			</table>
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