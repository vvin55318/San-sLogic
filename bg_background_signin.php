<?php
$db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
session_start();
if(empty($_SESSION['admin'])) header("location:signin.php");
$sql="SELECT * FROM p_bg_home WHERE 1";
$rows=$db->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
  
    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <!-- material-dashboard css -->
  <link href="css/material-dashboard.css" rel="stylesheet" />
  <!-- mystyle -->
  <!-- <link rel="stylesheet" href="css/mystyle.css"> -->

</head>




<body class="">
  <div id="cover" style="display:none;position:absolute;width:100%;height:100%" class="justify-content-center align-items-center">
    <div id="coverr" class=" text-center d-flex justify-content-center w-25 bg-light" style="position:fixed;border:2px solid #0b025a;border-radius:10px;z-index:9998;">
        <a style="cursor:pointer;z-index:9999;position:absolute;right:0px" class="m-2" id="close">X</a>
        <div id="cvr" style="z-index:9898;">
      </div>
    </div>
  </div>


  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
 
      <!-- left menu -->
      <div class="logo mt-3">
        <a href="bg_background.php" class="simple-text logo-normal">
          <img src="images/home_logo_top/LOGO_延伸圖案_DM.png" width=112px>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="bg_background.php" style="cursor:pointer;">
              <i class="material-icons">hom_e</i>
              <p>home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bg_background_about.php"  style="cursor:pointer;">
              <i class="material-icons">about</i>
              <p>about</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bg_background_news.php" style="cursor:pointer;">
              <i class="material-icons">news</i>
              <p>news</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bg_background_model.php" style="cursor:pointer;">
              <i class="material-icons">model</i>
              <p>model</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bg_background_member.php" style="cursor:pointer;">
              <i class="material-icons">member</i>
              <p>member</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="bg_background_signin.php" style="cursor:pointer;">
              <i class="material-icons">signin</i>
              <p>signin</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bg_background_contact.php" style="cursor:pointer;">
              <i class="material-icons">contact</i>
              <p>contact</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
<!-- js 插入 -->
    </div>
  </div>
</body>

  <!--  jq boostrap   -->
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-material-design.min.js"></script>
  <script src="js/perfect-scrollbar.jquery.min.js"></script>
<!-- chartist -->
  <script src="js/chartist.min.js"></script>
  <!-- bootstrap-notify -->
  <script src="js/bootstrap-notify.js"></script>
  <!-- material-dashboard -->
  <script src="js/material-dashboard.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<script>
  // 第一次進入，載入
  $.get("bg_signin_ajax.php",function(re){
    $(".main-panel").replaceWith(re);
  })
</script>
</html>



