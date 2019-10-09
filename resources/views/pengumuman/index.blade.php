<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List pengumuman</div>
				<div class="card-body">
				<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data </a>
				<div class="form-group row">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead align="center" style="background-color: pink;">
	         <tr>
	         	  <th>Id</th>
	         	  <th>Judul</th>
	         	  <th>Isi</th>
	         	  <th>Users_id</th>
	         	  <th>Kategori_pengumuman_id</th>
	         	  <th>Aksi</th>

	         </tr>



		

			</tr>
		@foreach($pengumuman as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi!!}</td>
			<td>{!! $item->users_id!!}</td>
			<td>{!! $item->kategori_pengumuman_id!!}</td>
		<td>
	<a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat </a>
					</td>
</tr>
@endforeach 	
				</table>

				</div>	
				</div>
			</div>
		</div>
	</div>
</div>