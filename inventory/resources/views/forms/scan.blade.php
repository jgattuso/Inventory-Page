@extends ('layout')

@section ('content')
	<div id="scanInfo">
		<form class="entInfo" method="POST" action="/store/scan">
			
			{{ csrf_field() }}
			
			</br>
			<h1> Scan </h1>
			</br>
			<input type=text id="sName" name="name" placeholder="Scan info*" required autofocus>
			</br>
			</br>
			<input type=submit id="addScan" value="Add Entry">
		</form>
	</div>
@endsection 