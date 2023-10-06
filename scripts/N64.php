<!DOCTYPE html>
<html lang="en">
<head>
  <title>N64</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' type='text/css' href='css/x3dom.css'></link>
  <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
</head>

<body id="body">
  <div id="title">

<nav class="navbar navbar-expand-sm bg-success navbar-light">
  <h1>N64</h1>
  <!-- Brand -->
  <a class="navbar-brand">
    
  </a>

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
        <a class="dropdown-item" href="NES.php">NES</a>
        <a class="dropdown-item" href="Super Nintendo.php">Super Nintendo </a>
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
            <input type="button" value="persp_cam" onclick="document.getElementById('persp_cam').setAttribute('set_bind','true');"/>
          
            <input type="button" value="front_cam" onclick="document.getElementById('front_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="left_cam" onclick="document.getElementById('left_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="right_cam" onclick="document.getElementById('right_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="top_cam" onclick="document.getElementById('top_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="back_cam" onclick="document.getElementById('back_cam').setAttribute('set_bind','true');"/>
  </div>
  </div>   
    <x3d id="the-element" showStat="false" width="690px" height="600px">
      <ul id="tools">
        <li><button onclick="toggle_size(this);">Zoom</button></li>
        
      </ul>
<scene DEF='scene'>
  <viewpoint id='persp_cam' description='persp_cam' orientation='0.1944 0.9772 0.08549 -0.8459' position='-104.1 31.27 49.32' fieldOfView='0.2989'></viewpoint>
  <viewpoint id='front_cam' description='front_cam' orientation='0.8199 0.5721 0.0227 -0.09674' position='-47.9 79.48 874.3' fieldOfView='0.05396'></viewpoint>
  <viewpoint id='right_cam' description='right_cam' orientation='0 -1 0 -1.564' position='616.4 7.993 -42.35' fieldOfView='0.05396'></viewpoint>
  <viewpoint id='back_cam' description='back_cam' orientation='0 -1 0 -3.154' position='-8.885 6.387 -771.9' fieldOfView='0.05066'></viewpoint>
  <viewpoint id='left_cam' description='left_cam' orientation='0 1 0 -1.565' position='-733.8 7.239 -42.55' fieldOfView='0.05066'></viewpoint>
             
              <viewpoint id='top_cam'   description='camera' orientation='1 0.001549 0.001395 -1.466' position='0.3089 443.9 46.67' fieldOfView='0.5087'></viewpoint>
             
  <inline nameSpaceName="console" mapDEFToId='true' onclick="animateModel()" url="3DModels/N64_scene.x3d"></inline>
</scene>
</x3d>
<div id="title_N64"></div>
<div id="subTitle_N64"></div>
<div id="description_N64"></div>
   
</div>
  </div>
  <div class="col-4">
    <div class="card text-left">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a href="javascript:spin()" class="nav-link">
              Animation
            </a>
          </li>
          <x3d id="the-element" width="390px" height='200' >
            <scene DEF='scene'>
              
              <inline nameSpaceName="console" mapDEFToId='true' onclick="spin" url="3DModels/N64_scene.x3d"></inline>
             
            </scene>
          </x3d>
        </ul>
      </div>
    </div>
  </div>
</div>

  
  <a href="Super Nintendo.php">
   <h6><< Previous Console</h6>
  </a>  
  <p style="text-align:end"> 
    <a href="Gamecube.php">
    <h6 style="text-align: right;">Next Console>></h6>
  </a></p>

</div>

</body>
<script src="js/zoom.js"></script>
<script src="js/getJsonData.js"></script>
<script src="js/animation.js"></script>
</html>