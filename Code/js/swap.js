var counter=0;
/*function swap(selected)
{
    document.getElementById('home').style.display='none';
    document.getElementById('NES').style.display='none';
    document.getElementById('Super_Nintendo').style.display='none';
    document.getElementById('N64').style.display='none';
    document.getElementById('Gamecube').style.display='none';

    document.getElementById(selected).style.display='block';

}*/
function changeLook()
{
    counter+=1;
    switch(counter){
        case 1:
    document.getElementById('body').style.backgroundImage="url('assets/images/nitendo.png')";
    document.getElementById('header').style.backgroundColor='red';
    document.getElementById('footer').style.backgroundColor='red';
            break;
        case 2:
        document.getElementById('body').style.backgroundImage="url('assets/images/NES_logopng.png')";
        document.getElementById('header').style.backgroundColor='black';
        document.getElementById('footer').style.backgroundColor='black';
        break;
        case 3:
        document.getElementById('body').style.backgroundImage="url('assets/images/Super_Nintendo_logo.png')";
        document.getElementById('header').style.backgroundColor='grey';
        document.getElementById('footer').style.backgroundColor='grey';
        break;
        case 4:
            
            document.getElementById('body').style.backgroundImage="url('assets/images/N64_logo.png')";
            document.getElementById('header').style.backgroundColor='green';
            document.getElementById('footer').style.backgroundColor='green';
            break;
        case 5:
            counter=0;
            document.getElementById('body').style.backgroundImage="url('assets/images/gamecube_logo.png')";
            document.getElementById('header').style.backgroundColor='darkblue';
            document.getElementById('footer').style.backgroundColor='darkblue';
           
            break;
    }
}



