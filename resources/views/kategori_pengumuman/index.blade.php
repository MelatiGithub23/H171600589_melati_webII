<html>
<head>
	    <body>
	    <table border="1">

	    <title>kategori_pengumuman</title>
	         <tr>
	         	  <td>Id</td>
	         	  <td>Nama</td>
	         	  <td>Users_id</td>

	         </tr>



		

			</tr>
		@foreach($kategori_pengumuman as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>