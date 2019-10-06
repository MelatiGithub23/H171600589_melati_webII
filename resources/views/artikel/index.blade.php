<html>
<head>
	    <body>
	    <table border="1">

	    <title>artikel</title>
	         <tr>
	         	  <td>Id</td>
	         	  <td>judul</td>
	         	  <td>Users_id</td>
	         	  <td>kategori_artikel_id</td>

	         </tr>



		

			</tr>
		@foreach($artikel as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_artikel_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>