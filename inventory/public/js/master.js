var listDown;

function clickDrop()
{
	if(document.getElementById('dropMenu').style.display == "block")
	{
		document.getElementById('dropMenu').style.display = "none";
	}
	else 
	{
		document.getElementById('dropMenu').style.display = "block";
	}
}

function hoverDrop()
{
	document.getElementById('dropMenu').style.display = "block";
}

function hoverUp()
{
	document.getElementById('dropMenu').style.display = "none";
}

function clickList(item)
{
	document.getElementById("protocol").innerText = item;
	document.getElementById('dropMenu').style.display = "none";
	if(item == "IBEACON")
	{
		document.getElementById('postProtocol').style.display = "inline";
		document.getElementById('ibeacon').style.display = "inline";
		document.getElementById('nearable').style.display = "none";
	}
	else
	{
		document.getElementById('postProtocol').style.display = "inline";
		document.getElementById('ibeacon').style.display = "none";
		document.getElementById('nearable').style.display = "inline";
	}
}