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
        font-size: 2em;
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

      .blinking-cursor {
        color: #f44336;
        -webkit-animation: 1s blink infinite;
        -moz-animation: 1s blink infinite;
        -ms-animation: 1s blink infinite;
        -o-animation: 1s blink infinite;
        animation: 1s blink infinite;
      }

      @keyframes "blink" {
        from, to {
          color: transparent;
        }
        50% {
          color: #f44336;
        }
      }

      @-moz-keyframes "blink" {
        from, to {
          color: transparent;
        }
        50% {
          color: #f44336;
        }
      }

      @-webkit-keyframes "blink" {
        from, to {
          color: transparent;
        }
        50% {
          color: #f44336;
        }
      }

      @-ms-keyframes "blink" {
        from, to {
          color: transparent;
        }
        50% {
          color: #f44336;
        }
      }

      @-o-keyframes "blink" {
        from, to {
          color: transparent;
        }
        50% {
          color: #f44336;
        }
      }
    </style>
    <title>About Us</title>
  </head>
  <body class="fade-out" oncontextmenu="return false;">
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
      <li><a class="active" href="about">About</a></li>
      <li><a href="aboutPES">About PES</a></li>
      <li style="float: right"><a href="profile"><?php echo $linkName; ?></a></li>
    </ul>
    <div class="main">
      <h1 style="font-size: 100px;">Created By <span class="blinking-cursor">_</span></h1>
      <hr>
      <div class="studs">
        <!-- img src="..\media\VRG.gif" height="230" style="float:right;" -->
        <h2><span class="stud">Varun R.</span> GUPTA</h2>
        <h3>PES1201700652</h3>
        <h4>varungupta3009@gmail<span style="color:#f44336">.</span>com</h4>
        <hr>
      </div>
      <div class="studs">
        <h2><span class="stud">Siddhant</span> SAMYAK</h2>
        <h3>PES1201700247</h3>
        <h4>siddhantsamyak@gmail<span style="color:#f44336">.</span>com</h4>
        <hr>
      </div>
      <div class="studs">
        <h2><span class="stud">Shivangi</span> RAJ</h2>
        <h3>PES1201700098</h3>
        <h4>shivangiraj902@gmail<span style="color:#f44336">.</span>com</h4>
        <hr>
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
