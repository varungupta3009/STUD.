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
        font-size: 1em;
        color: #454545;
      }

      .stud {
        color: #6a6a6a;
        font-size: 0.75em;
        transition: 0.3s;
      }

      .studs:hover .stud {
        color: #454545;
        font-size: 1em;
      }

      .container > div {
        display: inline;
      }

      .container img {
        max-width: 100%;
        vertical-align: middle;
      }
    </style>
    <title>About PES</title>
  </head>
  <body class="fade-out" oncontextmenu="return false;" ondragstart="return false;" ondrop="return false;">
    <?php
    session_start();

    $linkName = "Profile";
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        $linkName = "Login";
    }
    ?>
    <ul id="menu">
      <li><img src="..\media\stud.png" alt="logo" height="25px"></li>
      <li><a href="home">Home</a></li>
      <li><a href="courses">Courses</a></li>
      <li><a href="about">About</a></li>
      <li><a class="active" href="about">About PES</a></li>
      <li style="float: right"><a href="profile"><?php echo $linkName; ?></a></li>
    </ul>
    <div class="main">
      <div class="container" style="margin:50px 0px">
        <div>
          <img src="..\media\PESU-Logo.gif" height="125px" />
        </div>
        <div>
          <img src="..\media\PES UNIVERSITY Text Logo.png" height="75px" style="margin-left:20px"/>
        </div>
      </div>
      <div class="map">
        <a href="https://www.google.co.in/maps/place/PES+University/@12.9344948,77.5345164,15z/data=!4m5!3m4!1s0x0:0x694d74f6ac640acf!8m2!3d12.9344948!4d77.5345164">View in Google Maps</a>
      </div>
      <br>
      <div class="intro">
        PES University, located in Bangalore, India is one of the country’s leading teaching and research universities. The University is committed to providing “education for the real world” that inspires students to realize their potential. Our students graduate with the ability to adapt to an intellectually and technologically changing environment. Over the years, we have accomplished this with the participative efforts of the management, staff, students and parents.
      </div>
    </div>
  </body>
  <script type="text/javascript">
    window.onload = function() {
      document.body.className = ""
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
