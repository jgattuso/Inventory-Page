@extends ('layout')

@section ('content')
	<div id="otherInfo">
		<form class="entInfo" method="POST" action="/store/others/{{$post->id}}">
			
			{{ csrf_field() }}
			
			</br>
			<h1> Other </h1>
			</br>
			<input type=text name="name" placeholder="Name*" value="{{ $post->name }}" required>
			</br>
			</br>
			<input type=text name="category" placeholder="Category*" value="{{ $post->category }}" required>
			</br>
			</br>
			<input type=text name="quantity" id="quantity" placeholder="Quantity*" value="{{ $post->quantity }}" required>
			</br>
			</br>
			<input type=submit id="addPatient" value="Add Entry">
		</form>
	</div>
@endsection 