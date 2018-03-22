<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2nd Force Recon 2016 Reunion Pictures</title>
<link href="../css/sshow3.css" rel="stylesheet" type="text/css"> 
</head>
<body>
<p><center><h1>2nd Force Recon 2016 Reunion</h1></center></p>
<?php
$dir ='../reunion2016/';
$slides = array();
$slides = array_slice(scandir($dir), 2);
reset($slides);
while (list($key, $val) = each($slides)) {
	$picname = "../reunion2016/"."$val\n";
//echo $picname;
}
?>
	<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php 
  //echo    "<img src=\"$picname" style="width:100%"/>";
  echo "<img src=\"$picname\" />";
  ?>
  
  
  <div class="text">Caption Three</div>
</div>



<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>