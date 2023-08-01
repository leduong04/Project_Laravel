@extends('ADMIN.templates.tpl_default', ['pageId'=>'nhanvien'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/navbar.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/orders.css')}}"> -->
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
					<p id="myText"></p>
				</li>
			</ul>
		</div>
	</div>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Nhân viên</h3>
				<!-- <button class="add-button">Thêm</button> -->
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<button class="add-button">
				<i class="fa-solid fa-plus"></i><a href="{{route('nhanvien.add_nhanvien')}}">Thêm nhân viên mới</a>
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
						<th>Level</th>
						<th>Chức vụ</th>
						<th>Hành động</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($nhanviens as $nhanvien)
					<tr>
						<td>
							<p>{{ $nhanvien->id }}</p>
						</td>
						<td>
							<p>{{ $nhanvien->full_name }}</p>
						</td>
						<td>
							<p>{{ $nhanvien->email }}</p>
						</td>
						<td>{{ $nhanvien->gender }}</td>
						<td>{{ $nhanvien->phone }}</td>

						<td>
							<img src="/storage/image/nhanvien/{{ $nhanvien->img_link }}">

						</td>
						<td>{{ $nhanvien->level }}</td>
						<td>{{ $nhanvien->chuc_vu }}</td>
						<td>
							<!-- <button class="edit-button">
									   <i class="fa-solid fa-pen-to-square"></i>
									</button> -->

							<button class="edit-button" onclick="redirectToUpdateNhanvien({{ $nhanvien->id }})">
								<i class="fa-solid fa-pen-to-square"></i>
							</button>


							<button class="detail-button">
								<i class="fa-solid fa-info"></i>
							</button>
							<button class="delete-button" onclick="deleteNhanvien({{ $nhanvien->id }})">
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
<script>
	// Xử lý khi nhấn nút "edit-button"
	function redirectToUpdateNhanvien(id) {
		var url = "{{ route('nhanvien.show_update', ['id' => ':id']) }}";
		url = url.replace(':id', id);
		window.location.href = url;
	}
</script>


<script>
	// Function to delete nhavien by id
	function deleteNhanvien(id) {
		var confirmation = confirm("Bạn có chắc là muốn xóa nhân viên có id là: " + id + "?");
		if (confirmation) {
			// Send a DELETE request to the server
			var url = "{{ route('nhanvien.delete', ':id') }}";
			url = url.replace(':id', id);

			$.ajax({
				url: url,
				type: 'DELETE',
				data: {
					"_token": "{{ csrf_token() }}"
				},
				success: function(response) {
					// Handle success (optional)
					console.log(response);
					// Reload the page to update the list
					window.location.reload();
				},
				error: function(error) {
					// Handle error (optional)
					console.log(error);
				}
			});
		}
	}

	
</script>




<script src="{{ asset('assets/js/ADMIN/navbar_sidebar.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/js/ADMIN/nhanvien.js')}}"></script>

@endsection