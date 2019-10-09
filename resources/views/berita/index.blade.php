<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List berita</div>
				<div class="card-body">
				<a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data </a>
				<table border="2">

					<div class="form-group row">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead align="center" style="background-color: pink;">
	         <tr>
	         	  <th>Id</th>
	         	  <th>judul</th>
	         	  <th>Users_id</th>
	         	  <th>Isi</th>
	         	  <th>Kategori_berita_id</th>
	         	  <td> Aksi </td>

	         </tr>



		

			</tr>
		@foreach($berita as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_berita_id !!}</td>
		<td>
	
		<a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat </a>
					</td>
</tr>
@endforeach 	
				</table>	
				</div>
			</div>
		</div>
	</div>
</div>