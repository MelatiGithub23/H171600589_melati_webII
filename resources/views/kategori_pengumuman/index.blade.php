@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List kategori_pengumuman</div>
				<div class="card-body">
				<a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-primary">Tambah Data </a>
				<div class="form-group row">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead align="center" style="background-color: pink;">
	         <tr>
	         	  <td>Id</td>
	         	  <td>Nama</td>
	         	  <td>Users_id</td>
	         	  <td>Aksi</td>


	         </tr>



		

			</tr>
		@foreach($kategori_pengumuman as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
		<td>
	<a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat </a>
		<a href="{!! route('kategori_galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-success"> Ubah 
<a/>

				{!! Form::open(['route' => ['kategori_galeri.destroy', $item->id], 'method' => 'delete']) !!}
				    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-secondary']) !!}
				  {!! Form::close() !!}
					</td>
</tr>
@endforeach 	
				</table>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection