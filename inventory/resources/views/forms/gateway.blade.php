@extends ('layout')

@section ('content')
	<div id="gatewayInfo">
		<form class="entInfo" method="POST" action="/store/gateways">
			
			{{ csrf_field() }}
			
			</br>
			<h1> Gateway </h1>
			</br>
			<input type=text id="gName" name="name" placeholder="Name*" required> 
			</br>
			</br>
			<input type=text id="gMacID" name="macID" placeholder="Mac Address*" required>
			</br>
			</br>
			<input type=text name="area" placeholder="Area">
			</br>
			</br>
			<input type=text name="beacon" placeholder="Beacon">
			</br>
			</br>
			<input type=text name="tenant" placeholder="Tenant">
			</br>
			</br>
			<input type=submit id="addGateway" value="Add Entry">
		</form>
	</div>
@endsection 