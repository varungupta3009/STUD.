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

      .container > div {
        display: inline;
      }

      .container img {
        max-width: 100%;
        vertical-align: middle;
      }

      .intro {
        margin: 30px 0px 20px 0px;
        font-size: 1.2em;
      }

      .founder {
        text-align: center;
        margin: 50px 0px;
        padding: 10px;
        color: #FFFFFF;
        background-color: #f44336;
      }

      blockquote {
        color: #FFFFFF;
        margin-left: 0;
        margin-top: 2em;
        margin-bottom: 2em;
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 40px;
        margin-inline-end: 40px;
      }

      blockquote:before {
        font-family: Times New Roman,Times,Arial;
        color: #FFFFFF;
        content: open-quote;
        font-size: 2.5em;
        font-weight: 600;
        float: left;
        margin-top: 0;
        margin-right: .2rem;
        width: 1.2rem;
      }

      blockquote:after {
        content: "";
        display: block;
        clear: both;
      }

      blockquote span {
        margin-left: 1rem;
        padding-top: 1rem;
      }

      blockquote author {
        display: block;
        clear: both;
        font-size: 0.8em;
        margin-left: 2.4rem;
        font-style: oblique;
      }

      blockquote author:before {
        content: "- ";
        margin-right: 1em;
      }

      .contact a {
        text-decoration: none;
        color: inherit;
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
      <li><a class="active" href="aboutPES">About PES</a></li>
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
        <a href="https://www.google.co.in/maps/place/PES+University/@12.9344948,77.5345164,15z/data=!4m5!3m4!1s0x0:0x694d74f6ac640acf!8m2!3d12.9344948!4d77.5345164" target="_blank"><img src="\stud\media\GMaps Long.png" alt="View in Google Maps" height="100"></a>
      </div>
      <br>
      <div class="intro">
        PES University, located in Bangalore, India is one of the country’s leading teaching and research universities. The University is committed to providing “education for the real world” that inspires students to realize their potential. Our students graduate with the ability to adapt to an intellectually and technologically changing environment. Over the years, we have accomplished this with the participative efforts of the management, staff, students and parents.
      </div>
      <div class="founder">
        <h2>Founder's Vision</h2>
        <img id="founder" src="\stud\media\founder.jpg" alt="Founder" /><br>
        <blockquote cite="http://pes.edu/"><br>
          <span>
            We realize that our students represent the future of our society and we take our responsibility seriously. We ensure that the rock-solid foundation we help them build here – both, in terms of skills and values – will stand them in good stead no matter which career they choose.
          </span>
          <author>
            Dr. M R Doreswamy
          </author>
        </blockquote>
      </div>
      <div class="contact">
        <h2>Contact PES</h2>
        100 Feet Ring Road,<br>
        BSK III Stage,<br>
        Bangalore-560085.<br>
        <br>
        +91 80 26721983,<br>
        +91 80 26722108<br>
        <br>
        <a href="mailto:admissions@pes.edu">admissions@pes.edu</a><br>
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
