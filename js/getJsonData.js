$(document).ready(function(){

    $.getJSON('./model/data.json',function(jsonObj){
        console.log(jsonObj);
        //main home  text data
        $('#title_home').html('<h1>'+jsonObj.pageTextData[0].title+'</h1>');
        $('#subTitle_home').html('<h2>'+jsonObj.pageTextData[0].subTitle+'</h2>');
        $('#description_home').html('<p>'+jsonObj.pageTextData[0].description+'</p>');

        //NES
        $('#x3DNESTitle').html('<h3>'+jsonObj.pageTextData[1].x3DNESTitle+'</h3>');
        $('#x3DNESCreationMethod').html('<p>'+jsonObj.pageTextData[1].x3DNESCreationMethod+'</p>');
        $('#title_NES').html('<h3>'+jsonObj.pageTextData[1].NEStitle+'</h3>');
        $('#subTitle_NES').html('<h4>'+jsonObj.pageTextData[1].NESsubtitle+'</h4>');
        $('#description_NES').html('<p>'+jsonObj.pageTextData[1].NESdescription+'</p>');

        //SN
        $('#x3DSNTitle').html('<h3>'+jsonObj.pageTextData[2].x3DSNTitle+'</h3>');
        $('#x3DSNCreationMethod').html('<p>'+jsonObj.pageTextData[2].x3DSNCreationMethod+'</p>');
        $('#title_Super_Nintendo').html('<h3>'+jsonObj.pageTextData[2].SNtitle+'</h3>');
        $('#subTitle_Super_Nintendo').html('<h4>'+jsonObj.pageTextData[2].SNsubTitle+'</h4>');
        $('#description_Super_Nintendo').html('<p>'+jsonObj.pageTextData[2].SNdescription+'</p>');
       
        //N64
        $('#x3DN64Title').html('<h3>'+jsonObj.pageTextData[3].x3DN64Title+'</h3>');
        $('#x3DN64CreationMethod').html('<p>'+jsonObj.pageTextData[3].x3DN64CreationMethod+'</p>');
        $('#title_N64').html('<h3>'+jsonObj.pageTextData[3].N64title+'</h3>');
        $('#subTitle_N64').html('<h4>'+jsonObj.pageTextData[3].N64subTitle+'</h4>');
        $('#description_N64').html('<p>'+jsonObj.pageTextData[3].N64description+'</p>');

        //Gamecube
        $('#x3DGamecubeTitle').html('<h3>'+jsonObj.pageTextData[4].x3DGamecubeTitle+'</h3>');
        $('#x3DGamecubeCreationMethod').html('<p>'+jsonObj.pageTextData[4].x3DGamecubeCreationMethod+'</p>');
        $('#title_Gamecube').html('<h3>'+jsonObj.pageTextData[4].Gtitle+'</h3>');
        $('#subTitle_Gamecube').html('<h4>'+jsonObj.pageTextData[4].GsubTitle+'</h4>');
        $('#description_Gamecube').html('<p>'+jsonObj.pageTextData[4].Gdescription+'</p>');

       //gallery
        $('#galleryTitle').html('<h4>'+jsonObj.pageTextData[5].galleryTitle+'</h4>');
        
       
        //camera
        $('#cameraTitle').html('<h5>'+jsonObj.pageTextData[6].cameraTitle+'</h5>');
        $('#cameraDescription').html('<p>'+jsonObj.pageTextData[6].cameraDescription+'</p>');

        //rlo
        $('#renderTitle').html('<h3>'+jsonObj.pageTextData[7].renderTitle+'</h3>');


    });
});