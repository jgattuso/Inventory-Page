@extends ('layout')

@section ('content')
	<div id="viewInfo">
		@foreach($posts as $post)
			<form method="GET" action="/delete/beacons/{{$post->id}}">
				
				{{ csrf_field() }}
				
				</br>
				<h1> View Item </h1>
				</br>
				<h3> {{ $post->name }} </h3>
				<h3> {{ $post->uuid }} </h3>
				<h3> {{ $post->minor }} </h3>
				<h3> {{ $post->major }} </h3>
				<h3> {{ $post->macID }} </h3>
				<h3> {{ $post->identifier }} </h3>
				</br>
				<input type=submit value="Delete Entry">
			</form>
		@endforeach
	</div>
@endsection 