var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('console__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('console__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('console__RotationTimer').getAttribute('enabled')!= 'true')
       document.getElementById('console__RotationTimer').setAttribute('enabled', 'true');
    else
       document.getElementById('console__RotationTimer').setAttribute('enabled', 'false');
}





