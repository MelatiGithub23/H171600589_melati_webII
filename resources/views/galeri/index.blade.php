<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List galeri</div>
				<div class="card-body">
				<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data </a>
				
				<div class="form-group row">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead align="center" style="background-color: pink;">
	         <tr>
	         	  <th>Id</th>
	         	  <th>Nama</th>
	         	  <th>Keterangan</th>
	         	  <th>Path</th>
	         	  <th>Users_id</th>
	         	  <th>Kategori_galeri_id</th>
	         	  <th>Aksi</th>

	         </tr>



		

			</tr>
		@foreach($galeri as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->keterangan !!}</td>
			<td>{!! $item->path !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_galeri_id !!}</td>
		<td>
	
		<a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat </a>
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