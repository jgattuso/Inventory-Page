@extends ('layout')

@section ('content')
	<div id="gatewayInfo">
		<form class="entInfo" method="POST" action="/store/gateways/{{ $post->id }}">
			
			{{ csrf_field() }}
			
			</br>
			<h1> Gateway </h1>
			</br>
			<input type=text id="gName" name="name" placeholder="Name*" value="{{ $post->name }}" required> 
			</br>
			</br>
			<input type=text id="gMacID" name="macID" placeholder="Mac Address*" value="{{ $post->macID }}" required>
			</br>
			</br>
			<input type=text name="area" placeholder="Area" value="{{ $post->area }}">
			</br>
			</br>
			<input type=text name="beacon" placeholder="Beacon" value="{{ $post->beacon }}">
			</br>
			</br>
			<input type=text name="tenant" placeholder="Tenant" value="{{ $post->tenant }}">
			</br>
			</br>
			<input type=submit id="addGateway" value="Add Entry">
		</form>
	</div>
@endsection 