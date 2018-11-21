<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="icon" href="..\favicon.ico">
    <link rel="stylesheet" href="..\css\master.css">
    <style media="screen">
      .main {
        margin: 50px;
        margin-top: 30px;
        font-size: 1.2em;
        color: #454545;
      }

      .main h1 {
        font-size: 4em;
      }

      .stud {
        color: #DB4437;
      }

      video {
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
      }

      .loader {
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: white;
      }

      .loader.hidden {
        animation: fadeOut 0.75s;
        animation-fill-mode: forwards;
      }

      @keyframes fadeOut {
        100% {
          opacity: 0;
          visibility: hidden;
        }
      }
    </style>
    <title>Home</title>
  </head>

  <body oncontextmenu="return false;" ondragstart="return false;" ondrop="return false;">
    <?php
    session_start();

    $linkName = "Profile";
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        $linkName = "Login";
    }
    ?>
    <div class="loader">
      <video src="..\media\introWhite.mp4" preload="auto" autoplay muted onclick="quitIntro()" onended="quitIntro()">
        Loading...
      </video>
    </div>
    <ul id="menu">
      <li><img src="..\media\stud.png" alt="logo" height="25px"></li>
      <li><a class="active" href="home">Home</a></li>
      <li><a href="courses">Courses</a></li>
      <li><a href="about">About</a></li>
      <li style="float: right"><a href="profile"><?php echo $linkName; ?></a></li>
    </ul>
    <div class="main">
      <h1>A PLACE TO <span class="stud">STUD.</span>Y</h1>
      <h2><span class="stud">STUD.</span> is a place where you can find an immense amount of resources to study which are extremely organized and available for free.</h2>
      <h3>STUD. is designed from the ground up. It is handcoded using pure HTML, CSS and JavaScript. No code was copied from the internet. It is safe to say that it is pure, and quite bug-free.</h3>
    </div>
  </body>
  <script type="text/javascript">
    let loader = document.querySelector(".loader")

    function quitIntro() {
      loader.className += " hidden"
      localStorage.setItem("introPlayed", "true")
    }

    if (localStorage.getItem("introPlayed")) {
      document.body.removeChild(loader)
      document.body.className = "fade-out"
      window.onload = function() {
        document.body.className = ""
      }
    }

    let menu = document.querySelector("#menu")
    window.addEventListener("scroll", function(event) {
      let scroll = this.scrollY;
      if (scroll) {
        menu.setAttribute("class", "active")
      } else {
        menu.removeAttribute("class")
      }
    });
  </script>

</html>
