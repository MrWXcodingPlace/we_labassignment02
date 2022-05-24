<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script>
      function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script></head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <nav class="w3-bar w3-white w3-card w3-padding-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"></a>
    </div>
  </nav>
</div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <nav
      id="navDemo"
      class="w3-bar-block w3-flat-pumpkin w3-hide w3-hide-large w3-hide-medium w3-top"
      style="margin-top: 46px"
    >
      <a
        href="#about"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >About</a
      >
      <a
        href="#background"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >Background</a
      >
      <a
        href="#edu"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >Education</a
      >
      <a
        href="#skills"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >Profesional skills</a
      >
      <a
        href="#training"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >Training attended</a
      >
      <a
        href="#project"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >Previous project</a
      >
    </nav>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="assets/images/header.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white" style="margin: 32px;">
        <span class="w3-padding w3-black w3-opacity-min">
            <b>MyTutor</b>
        </span> 
    </h1>
  </div>
</header>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 w3-bottom">
    <p>Copyright 
        <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">
          Goh Wen Xuan
        </a>
    </p>
</footer>
</body>
</html>
