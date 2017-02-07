
<!DOCTYPE html>
<head>
<link rel="shortcut icon" href="ieee_favicon.ico" type="image/x-icon" />
   <link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<style>


.f1_container {
  position: relative;
  margin: 10px auto;
  margin-bottom:50px;
    width:144px;
  height:144px;
  z-index: 1;
}
.f1_container {
  perspective: 1000;
}
.f1_card {
  width:144px;
  height:144px;
  transform-style: preserve-3d;
  transition: all 1.0s linear;
}
.f1_container:hover .f1_card {
  transform: rotateY(180deg);
   -webkit-transform: rotateY(180deg);
   -webkit-transform-style: preserve3d;
   -moz-transform: rotateY(180deg);
   -moz-transform-style: preserve3d;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
</style>
<body>
<?php include 'home_inc.php'; ?>

<br>
<h1 style="text-align:center;margin:auto;color:white">SPONSORS</h1>
<br><br>
<div class="f1_container">
<div class="f1_card">
  <div class="face">
    <a href="http://www.almamaterstore.in"><img src="img/alma_mater.jpg" /></a>
  </div>
</div>
</div>
  
  <div class="f1_container">
<div class="f1_card">
  <div class="face">
    <a href="http://time4education.com"><img src="img/time.jpg" /></a>
  </div>
</div>
</div>

<br><br><br>

<?php include 'foot_inc.php'; ?> 
</body>
</html>