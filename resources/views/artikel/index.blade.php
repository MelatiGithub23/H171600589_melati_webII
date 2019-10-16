@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List artikel</div>
				<div class="card-body">
				<a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data </a>

					<div class="form-group row">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead align="center" style="background-color: pink;">
	         <tr>
	         	  <td>Id</td>
	         	  <td>judul</td>
	         	  <td>Isi</td>
	         	  <td>Users_id</td>
	         	  <td>kategori_artikel_id</td>
	         	  <td>aksi</td>
	         	  

	         </tr>

		@foreach($artikel as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_artikel_id !!}</td>
		<td>
			<a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat </a>
			<a href="{!! route('artikel.edit',[$item->id]) !!}" class="btn btn-sm btn-success"> Ubah 
<a/>

				{!! Form::open(['route' => ['artikel.destroy', $item->id], 'method' => 'delete']) !!}
				    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-secondary']) !!}
				  {!! Form::close() !!}
              
		</td>
</tr>
@endforeach 	
                         <tbody>
				       </table>

				   </div>	
				</div>
			</div>
		</div>
	</div>
</div>

@endsection