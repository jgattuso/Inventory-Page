@extends ('layout')

@section ('content')
	<div id="otherInfo">
		<form class="entInfo" method="POST" action="/store/others">
			
			{{ csrf_field() }}
			
			</br>
			<h1> Other </h1>
			</br>
			<input type=text name="name" placeholder="Name*" required>
			</br>
			</br>
			<input type=text name="category" placeholder="Category*" required>
			</br>
			</br>
			<input type=text name="quantity" id="quantity" placeholder="Quantity*" required>
			</br>
			</br>
			<input type=submit id="addPatient" value="Add Entry">
		</form>
	</div>
@endsection 