<html>
<head>
	    <body>
	    <table border="1">

	    <title>galeri</title>
	         <tr>
	         	  <th>Id</th>
	         	  <th>Nama</th>
	         	  <th>Keterangan</th>
	         	  <th>Path</th>
	         	  <th>Users_id</th>
	         	  <th>Kategori_galeri_id</th>

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
		</tr>
	
		@endforeach
		
		</table>
		</div>