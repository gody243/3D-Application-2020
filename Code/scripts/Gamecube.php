<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamecube</title>
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
<body>
  <div id="body">
  <div id="title">

<nav class="navbar navbar-expand-sm bg-info navbar-light">
  <!-- Brand -->
  <a class="navbar-brand"><h1>Gamecube</h1></a>

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
        <a class="dropdown-item" href="Super Nintendo.php">Super Nintendo</a>
        <a class="dropdown-item" href="N64.php">Nintendo 64</a>
        
      </div>
    </li>
  </ul>
</nav>
<br>
  </div>
<div class="row">
  <div class='col-8'>
  
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
    <x3d id='the-element' showStat='false' showLog='false' x='0px' y='0px' width='600px' height='500px'>
      <ul id="tools">
        <li><button onclick="toggle_size(this);">Zoom</button></li>
        
      </ul>
      <scene DEF='scene'>
        <viewpoint id='persp_cam' description='persp_cam' orientation='0.3504 0.9224 0.1626 -0.9325' position='-66.45 49.33 72.07' fieldOfView='0.3983'></viewpoint>
        <viewpoint id='front_cam' description='front_cam' orientation='0 1 0 -0.01389' position='11.26 10.36 676.9' fieldOfView='0.05066'></viewpoint>
        <viewpoint id='left_cam' description='left_cam' orientation='0 1 0 -1.553' position='-219.5 10.4 1.202' fieldOfView='0.1706'></viewpoint>
        <viewpoint id='back_cam' description='back_cam' orientation='0 -1 0 -3.188' position='6.974 9.994 -245' fieldOfView='0.1706'></viewpoint>
        <viewpoint id='right_cam' description='right_cam' orientation='0 -1 0 -1.566' position='369.3 10.69 -3.643' fieldOfView='0.115'></viewpoint>
        <viewpoint id='bottom_cam' description='bottom_cam' orientation='0.5613 -0.5852 0.5852 -4.165' position='18.26 -477.3 -2.866' fieldOfView='0.115'></viewpoint>
        <viewpoint id='top_cam' description='top_cam' orientation='0.9999 0.009899 0.01188 -1.545' position='20.12 205.9 -1.275' fieldOfView='0.2768'></viewpoint>
        <inline nameSpaceName="console" mapDEFToId='true' onclick="animateModel()" url="3DModels/gamecube_scene.x3d"></inline>
      </scene>
    </x3d>
    <div id="title_Gamecube"></div>
    <div id="subTitle_Gamecube"></div>
    <div id="description_Gamecube"></div>
  
 
</div>


</div>
<div class="col-4">
  <div class="card text-left">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a href="#" class="nav-link">
            Animation
          </a>
        </li>
        <x3d id="the-element" width="390px" height='200' >
          <scene DEF='scene'>
            
            <inline nameSpaceName="console" mapDEFToId='true' onclick='spin' url="3DModels/gamecube_scene.x3d"></inline>
            
          </scene>
        </x3d>
      </ul>
    </div>
  </div>
</div>
</div>
  
<a href="N64.php">
    
    << Previous Console
    
</a>

</div>
</body>
<script src="js/zoom.js"></script>
<script src="js/getJsonData.js"></script>
<script src="js/animation.js"></script>
</html>
