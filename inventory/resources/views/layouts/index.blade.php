@extends ('layout')

@section ('content')
	<div id="entInventory">
		<form class="entInfo" method="GET" action="/send-csv">
			</br>
			<h1> Home </h1>
			</br>
			Fill out this form to receive updated inventory:
			</br>
			</br>
			</br>
			<input type=email name="email" placeholder="Email*" required>
			</br>
			</br>
			<input type=submit value="Send Table">
		</form>
	</div>
@endsection 