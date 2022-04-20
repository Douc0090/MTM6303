<?php
/**
 * @package MTM6303Final
 */
/*
Plugin Name: mtm6303final
Plugin URI: 
Description: the plugin made for the final assignment in mtm6303
Version: 1.0.0
Author: Kevin Doucette
Author URI: 
License: GPLv2 or later
Text Domain: mtm6303final
*/
?>

<php
echo get_stylesheet_directory_uri();
?>


<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/mtm6303finalplugin/assets/img-1.jpg" style="width:100%">
   <div class="text">
      <p><b>Post Title 1</b></p>
      <p>Post Description 1</p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/mtm6303finalplugin/assets/img-2.jpg" style="width:100%">
    <div class="text">
      <p><b>Post Title 1</b></p>
      <p>Post Description 1</p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/mtm6303finalplugin/assets/img-3.jpg" style="width:100%">
    <div class="text">
      <p><b>Post Title 3</b></p>
      <p>Post Description 3</p>
    </div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script src="<?php echo get_stylesheet_directory_uri();?>/mtm6303finalplugin/assets/slider.js"></script>