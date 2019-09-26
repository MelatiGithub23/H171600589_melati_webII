<html>
<head>
	    <body>
	    <table border="1">

	    <title>Kategori Artikel</title>
	         <tr>
	         	  <td>Id</td>
	         	  <td>Nama</td>
	         	  <td>Users id</td>

	         </tr>



		

			</tr>
		@foreach($kategoriArtikel as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>