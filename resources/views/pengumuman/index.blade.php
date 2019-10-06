<html>
<head>
	    <body>
	    <table border="1">

	    <title>pengumuman</title>
	         <tr>
	         	  <th>Id</th>
	         	  <th>Judul</th>
	         	  <th>Isi</th>
	         	  <th>Users_id</th>
	         	  <th>Kategori_pengumuman_id</th>

	         </tr>



		

			</tr>
		@foreach($pengumuman as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi!!}</td>
			<td>{!! $item->users_id!!}</td>
			<td>{!! $item->kategori_pengumuman_id!!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>