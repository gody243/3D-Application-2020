<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nintendo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/X3DOM.css"></link>
  <script src="js/X3DOM.js" rel="text/javascript"></script>
  <script src="js/gallery_generator.js" rel="text/javascript"></script>  
  <script src="scripts/hook.php" rel="text/php"></script>  
  <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
  <!--spin model-->
  
</head>

<body id="body">
  
<nav class="navbar navbar-expand-sm" id="header">
  <!-- Brand -->
  <a class="navbar-brand"a href="#">
    <img src="./assets/images/nitendo.png" alt="logo" style="width: 100px;">
  </a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link " href="index.php">Home</a>
    </li>
  

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Consoles
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="NES.php">NES</a>
        <a class="dropdown-item" href="Super Nintendo.php">Super Nintendo</a>
        <a class="dropdown-item" href="N64.php">Nintendo 64</a>
        <a class="dropdown-item" href="Gamecube.php">Gamecube</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"  data-toggle="modal" data-target="#contactModal">Download</a>
    </li>
  </ul>
</nav>
<br>

  <a href="javascript:changeLook()">Change Background</a>
           
  <div id='title'>
     <div class="container">
            <div class="row">
              <div class="col-sm-10">
                <div class="card-text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" id='btnHome'>home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" id='btnNES'>3D Models</a>
                      </li>
                     </ul>
                  </div>
        
                </div>
              </div>
            </div>
          </div>   
           <!--home block page-->    
    <div id="homeContents" class="container-fluid">
        <div class="container">
         <div class="model3D"> 
          
            <div id="title_home"></div>
            <div id="subTitle_home"></div>
            <div id="description_home"></div>
         
        <br>

    <div class="row">
            
            
            <!--NES-->
            
            <div class="col-sm-3">
                
                <div class="card"> 
                <h3> <a href="NES.php">NES</h3>
                 
                     <div class="NES" alt="NES"></div>
                  </a>

                        
                   
                 </div>
                </div>
            


            <!--Super Nintendo-->
            <div class="col-sm-3">
                <div class="card">
                <h3> <a href="Super Nintendo.php">Super Nintendo</h3>
                    
                        <div class="Super_nintendo" alt="Super Nintendo"></div>
                   
                   
                </a>
                    
                       
                    
                </div>
            </div>
            <!--N64-->
            <div class="col-sm-3">
                <div class="card">
                <h3> <a href="N64.php">N64</h3>
                    
                        <div class="N64" alt="N64"></div>
                      </a>
                       
                    
                </div>
            </div>
            <!--Gamecube-->
            <div class="col-sm-3">
                <div class="card">
                <h3> <a href="Gamecube.php">Gamecube</h3>
                    
                        <div class="Gamecube" alt="Gamecube"></div>
                   
                    </a>
                       
                    
                </div>
            </div>
        </div>
      </div>
     </div>
    </div>
  </div>
    <!--X3D Models-->
<div id="NESContents">
    
   
    <div class="container">
  
        <div class="model3D">
          
        <div id="cameraTitle"></div>
        <div id="cameraDescription"></div>
            <div class="camera-btns">
              
              <div class="btn-group">
            <button onclick="document.getElementById('persp_cam').setAttribute('set_bind','true');">persp</button>
            <button onclick="document.getElementById('front_cam').setAttribute('set_bind','true');">front</button>
            <button onclick="document.getElementById('left_cam').setAttribute('set_bind','true');">left</button>
            <button onclick="document.getElementById('right_cam').setAttribute('set_bind','true');">right</button>
            <button onclick="document.getElementById('top_cam').setAttribute('set_bind','true');">top</button>
            <button onclick="document.getElementById('back_cam').setAttribute('set_bind','true');">back</button>
           
                
              </div>
            </div>
            <div style="margin-left: 550px">
              <b>Change your Model here</b><br>
              1 <input type="range" id="sliderShadowIntesity" min="0" max="3" step="1" value="0" onchange="changeVisibleNode(this.value)"/>4
            <br><br>
            
          </div>
           <x3d id="the-element" showStat="true" width="690px" height='500px'>
           
            <scene DEF='scene'>
              <viewpoint id="front_cam" description='camera' orientation='0 1 0 -0.01392' position='-11.06 0 527.4' fieldOfView='0.2908'></viewpoint>
              <viewpoint id='back_cam'  description='camera' orientation='-0.0003964 -1 -0.008726 -3.232' position='-23.7 2.176 -315.5' fieldOfView='0.6024'></viewpoint>
              <viewpoint id='top_cam'   description='camera' orientation='1 0.001549 0.001395 -1.466' position='0.3089 443.9 46.67' fieldOfView='0.5087'></viewpoint>
              <viewpoint id='left_cam'  description='camera' orientation='0.01633 -0.9997 0.01745 -4.646' position='-493.9 -23.3 -21.56' fieldOfView='0.3171'></viewpoint>
              <viewpoint id='right_cam' description='camera' orientation='-0.05776 -0.9967 0.0566 -1.554' position='375 -34.94 3.81' fieldOfView='0.6024'></viewpoint>
              <viewpoint id='persp_cam' description='camera' orientation='0.1944 0.9772 0.08549 -0.8459' position='-104.1 31.27 49.32' fieldOfView='0.2989'></viewpoint>
              
              <Switch whichChoice="0" id="switcher">
                <transform>  
              <inline nameSpaceName="console" mapDEFToID="true" onclick="animateModel()" url="3DModels/NES_scene.x3d"></inline>
                </transform>
                <transform> 
              <inline nameSpaceName="console" mapDEFToID="true" onclick="animateModel()" url="3DModels/supernintendo_scene.x3d"></inline>
                </transform> 
                <transform> 
              <inline nameSpaceName="console" mapDEFToID="true" onclick="animateModel()" url="3DModels/N64_scene.x3d"></inline>
                </transform> 
                <transform> 
              <inline nameSpaceName="console" mapDEFToID="true" onclick="animateModel()" url="3DModels/gamecube_scene.x3d"></inline>
                </transform> 
             
              
              </Switch>
            </scene>
          </x3d>
         

         
            <div id='x3DNESTitle'></div>
            <div id="x3DNESCreationMethod"></div>
           
        
         </div>
          <br>
          
    </div>
       
</div>
   


<div id="3DgalleryContents">
<div class="card-header gallery-header">
            
    </div>
    <div class="card-body">
        
        <center>
      <div id="galleryTitle"></div>
          <table id="gallery"></table>
          </center>
    </div>
 </div>

 <!--Footer-->

 <nav class="navbar navbar-expand-sm" id="footer">
   <div class="container-fluid">
     <div class="navbar-text float-left copyright">
       <p>
         <span class="align-baseline"></span>&copy 2020 3D Mobile Application</span> 
         
      </p>
       
     </div>
   </div>
 </nav>
    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
      <div class="modal-dialog">
          <div class="modal-content">
          
          <!-- Modal Header -->
          <div class="modal-header">
              <h4 class="modal-title">Download Nintendo museum  files</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
              <p>info: Godefroy Diakite Email: gd228@sussex.ac.uk</p>
          
            <a href="https://github.com/gody243/3D-Application-2020">GitHub</a> - 
      




          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
          
          </div>
      </div>
  </div>

           
    </body> 
    <!-- Optional JavaScript -->    
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="js/swap.js" rel="text/javascript"></script> 
           
            <script src="js/bootstrap.js"></script> 
            <script src="js/gallery_generator.js"></script> 
            <script src="js/animation.js"></script>
            <script src="js/zoom.js"></script>
            <!--<script type='text/jquery'src="js/hide_show.js"></script>-->
            <script src="js/getJsonData.js"></script>
           <!--hide and show jquery-->
           <script>
             $(document).ready(function(){
    $("#homeContents").show();
    $("#NESContents").hide();
    $("#3DgalleryContents").hide();
//home
  $("#btnHome").click(function(){
    $("#homeContents").show();
    $("#NESContents").hide();
    $("#3DgalleryContents").hide();
  });
  //NES
  $("#btnNES").click(function(){
    $("#homeContents").hide();
    $("#NESContents").show();
    $("#3DgalleryContents").show();
  });


})
           </script>

           <!--display and hide nodes-->
           <script>
            /**
             * Change the selected object of the swichting node
             * 
             * @param nodeId number: New node id to set (starting from 1 to hide all of them)
             */
            function changeVisibleNode(nodeId)
            {
                var dirLight = document.getElementById("switcher");
          
                dirLight.setAttribute("whichChoice", nodeId);
                
            }
            </script>
</html>