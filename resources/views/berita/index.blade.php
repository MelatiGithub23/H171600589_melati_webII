<html>
<head>
	    <body>
	    <table border="1">

	    <title>berita</title>
	         <tr>
	         	  <th>Id</th>
	         	  <th>judul</th>
	         	  <th>Users_id</th>
	         	  <th>Isi</th>
	         	  <th>Kategori_berita_id</th>

	         </tr>



		

			</tr>
		@foreach($berita as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_berita_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>