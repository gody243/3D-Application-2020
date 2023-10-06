<!DOCTYPE html>
<html lang="en">
<head>
  <title>NES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></link>
  <link rel="stylesheet" type="text/css" href="./css/custom.css"></link>
  <link rel="stylesheet" type="text/css" href="./css/X3DOM.css"></link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/X3DOM.js" rel="text/javascript"></script>    
  <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
</head>
<body id="body">
 <div id="title"> 
<nav class="navbar navbar-expand-sm bg-secondary navbar-danger">
  <!-- Brand -->
  <a class="navbar-brand"><h1>NES</h1></a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
  

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Consoles
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Super Nintendo.php">Super Nintendo</a>
        <a class="dropdown-item" href="N64.php">Nintendo 64</a>
        <a class="dropdown-item" href="Gamecube.php">Gamecube</a>
      </div>
    </li>
  </ul>
</nav>
<br>
 </div>

 <div class="row">
 <div class="col-8">
  
<div class="model3D">
 <div id="cameraTitle"></div>
    <div class="camera-btns">
      <div id="cameraDescription"></div>
      <div class="btn-group">
        
            
            <input type="button" value="front_cam" onclick="document.getElementById('front_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="left_cam" onclick="document.getElementById('left_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="right_cam" onclick="document.getElementById('right_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="top_cam" onclick="document.getElementById('top_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="back_cam" onclick="document.getElementById('back_cam').setAttribute('set_bind','true');"/>
      </div>
    </div>
   <x3d id="the-element"showStat="true" width="690px" height='500px'>
     <ul id="tools">
        <li><button onclick="toggle_size(this);">Zoom</button></li>
        
      </ul>
    <scene>
              <viewpoint id="front_cam" description='camera' orientation='0 1 0 -0.01392' position='-11.06 0 527.4' fieldOfView='0.2908'></viewpoint>
              <viewpoint id='back_cam'  description='camera' orientation='-0.0003964 -1 -0.008726 -3.232' position='-23.7 2.176 -315.5' fieldOfView='0.6024'></viewpoint>
              <viewpoint id='top_cam'   description='camera' orientation='1 0.001549 0.001395 -1.466' position='0.3089 443.9 46.67' fieldOfView='0.5087'></viewpoint>
              <viewpoint id='left_cam'  description='camera' orientation='0.01633 -0.9997 0.01745 -4.646' position='-493.9 -23.3 -21.56' fieldOfView='0.3171'></viewpoint>
              <viewpoint id='right_cam' description='camera' orientation='-0.05776 -0.9967 0.0566 -1.554' position='375 -34.94 3.81' fieldOfView='0.6024'></viewpoint>
              <viewpoint id='persp_cam' description='camera' orientation='0.1944 0.9772 0.08549 -0.8459' position='-104.1 31.27 49.32' fieldOfView='0.2989'></viewpoint>
      
     <!-- <background DEF="World0" groundColor='0.051 0.051 0.051' skyColor='0.051 0.051 0.051'></background>-->
      
      <inline nameSpaceName="console" mapDEFToId='true' onclick="animateModel()"url="3DModels/NES_scene.x3d"></inline>
    
    </scene>
  </x3d>
    <div id="title_NES"></div>
    <div id="subTitle_NES"></div>
    <div id="description_NES"></div>
    
    

  </div>

</div>
<div class="col-4">
  <div class="card text-left">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link">
            Animation
         
        
        <x3d id='the-element' showStat='false' showLog='false' x='0px' y='0px' width='450px' height='400px'>
          <scene DEF='scene'>
            
            <inline   nameSpaceName="console" mapDEFToId='true' onclick="animateModel()"url="3DModels/NES_scene.x3d"></inline>
             </a>
        </li>
        
      </ul>
    </div>
  </div>
</div>
</div>

 







<!--Next Console-->
<a href="Super Nintendo.php">
    
    <p style="text-align: right;">Next Console>></p>
    
</a>

<script src="js/zoom.js"></script>
<script src="js/getJsonData.js"></script>
<script src="js/animation.js"></script>
</body>
</html>
