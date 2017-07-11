@extends ('layout')

@section ('content')
	<div id="beaconInfo">
		<form class="entInfo" id="beaconForm" method="POST" action="/store/beacons">
			
			{{ csrf_field() }}
			
			</br>
			<h1> Beacon </h1>
			</br>
			<div class="selectDrop">
				<div class="button-group">
					<button type=button id="protocol" class="dropdown" onClick="clickDrop()"> Protocol </button>
					<button type=button id="protocolArrow" class="dropdown-arrow" onClick="clickDrop()"> <i class="down"></i> </button>
				</div>
				<div id="dropMenu" class="dropOptions">
					<a value="Beacon" onClick="clickList('IBEACON')"> IBEACON </a>
					<a value="Gateway" onClick="clickList('NEARABLE')"> NEARABLE </a>
				</div>
			</div>
			<div id="postProtocol" style="display: none;">
				</br>
				</br>
				<input type=text name="name" placeholder="Name"> 
				</br>
				</br>
				<input type=text name="uuid" placeholder="UUID">
				</br>
				</br>
				<div id="ibeacon">
					<input type=text id="minor" name="minor" placeholder="Minor"> 
					<input type=text id="major" name="major" placeholder="Major">
					</br>
					</br>
					<input type=text id="macId" name="macID" placeholder="Mac Address">
					</br>
					</br>
				</div>
				<div id="nearable">
					<input type=text id="identifier" name="identifier" placeholder="Identifier">
					</br>
					</br>
				</div>
				<input type=submit id="addBeacon" value="Add Entry">
			</div>
		</form>
	</div>
@endsection 