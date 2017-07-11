@extends ('layout')

@section ('content')
	<div id="viewInventory">
		<h1> Beacons ({{ sizeof($bposts) }}) </h1>
			<table>
				<tr>
					<th> Name </th>
					<th> UUID </th>
					<th> Minor </th>
					<th> Major </th>
					<th> Mac Address </th>
					<th> Identifier </th>
					<th class="del-column"></th>
				</tr>
				@foreach($bposts as $post)
					<tr>
						<td> {{ $post->name }} </td>
						<td> {{ $post->uuid }} </td>
						<td> {{ $post->minor }} </td>
						<td> {{ $post->major }} </td>
						<td> {{ $post->macID }} </td>
						<td> {{ $post->identifier }} </td>
						<td class="del-column"> <a class="edit-icon" href="/edit/beacons/{{$post->id}}"> &#9998; </a> <a class="delete-icon" href="/delete/beacons/{{$post->id}}"> <i class="material-icons">delete</i> </a> </td>
					</tr>
				@endforeach
			</table>
		<hr width=100%>
		
		<h1> Gateways ({{ sizeof($gposts) }}) </h1>
			<table>
				<tr>
					<th> Name </th>
					<th> Mac Address </th>
					<th> Tenant </th>
					<th> Area </th>
					<th> Beacon </th>
					<th class="del-column"></th>
				</tr>
				@foreach($gposts as $post)
					<tr>
						<td> {{ $post->name }} </td>
						<td> {{ $post->macID }} </td>
						<td> {{ $post->tenant }} </td>
						<td> {{ $post->area }} </td>
						<td> {{ $post->beacon }} </td>
						<td class="del-column"> <a class="edit-icon" href="/edit/gateways/{{$post->id}}"> &#9998; </a> <a class="delete-icon" href="/delete/gateways/{{$post->id}}"> <i class="material-icons">delete</i> </a> </td>
					</tr>
				@endforeach
			</table>
		<hr width=100%>
		
		<h1> Other ({{ sizeof($oposts) }}) </h1>
			<table>
				<tr>
					<th> Name </th>
					<th> Category </th>
					<th> Quantity </th>
					<th class="del-column"></th>
				</tr>
				@foreach($oposts as $post)
					<tr>
						<td> {{ $post->name }} </td>
						<td> {{ $post->category }} </td>
						<td> {{ $post->quantity }} </td>
						<td class="del-column"> <a class="edit-icon" href="/edit/others/{{$post->id}}"> &#9998; </a> <a class="delete-icon" href="/delete/others/{{$post->id}}"> <i class="material-icons">delete</i> </a> </td>
					</tr>
				@endforeach
			</table>
		<hr width=100%>
		
	</div>
@endsection 