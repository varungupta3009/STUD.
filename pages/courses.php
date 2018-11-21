<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="icon" href="..\favicon.ico">
    <link rel="stylesheet" href="..\css\master.css">
    <style media="screen">
      .main {
        color: grey;
        margin: 0px;
        font-size: 2em;
      }

      .main ul {
        padding: 0;
        list-style-type: none;
      }

      .main ul li a {
        color: grey;
        text-decoration: none;
        transition: 0.3s color;
      }

      .main ul li {
        padding: 35px 0px 35px 75px;
        transition: 0.3s;
      }

      .main ul li:hover {
        /*color: #FFFFFF;*/
        background: #DB4437;
        padding-left: 100px;
        font-size: 1.5em;
      }

      .main ul li:hover a {
        color: white;
      }

    </style>
    <title>Courses</title>
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
      <li><a class="active" href="courses">Courses</a></li>
      <li><a href="about">About</a></li>
      <li style="float: right"><a href="profile"><?php echo $linkName; ?></a></li>
    </ul>

    <div class="main">
      <ul>
        <li><a href="\stud\courseFiles\ddco\main" target="_blank">DDCO</a></li>
        <li><a href="\stud\courseFiles\ds\main" target="_blank">DS</a></li>
        <li><a href="\stud\courseFiles\ids\main" target="_blank">IDS</a></li>
        <li><a href="\stud\courseFiles\wt\main" target="_blank">WT-1</a></li>
        <li><a href="\stud\courseFiles\dml\main" target="_blank">DML</a></li>
      </ul>
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
