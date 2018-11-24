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
      <li><a href="aboutPES">About PES</a></li>
      <li style="float: right"><a href="profile"><?php echo $linkName; ?></a></li>
    </ul>
    <div class="main">
      <h1>A PLACE TO <span class="stud">STUD.</span>Y</h1>
      <h2><span class="stud">STUD.</span> is a place where you can find an immense amount of resources to study which are extremely organized and available for free.</h2>
      <h3>STUD. is designed from the ground up. It is handcoded using pure HTML, CSS and JavaScript. No code was copied from the internet. It is safe to say that it is pure, and quite bug-free.</h3>
      <h3>Care was taken to make the website free of any glitches or bugs. We ensured that the website we were building was perfect rather than filled with content.</h3>
      <h1>FEATURES</h1>
      <h2>Elegant<span class="stud">.</span></h2>
      <h3>This website has been completely built from the ground up using the latest Material Design 2 rules. It looks simple and yet elegant. As it is build using pure CSS, the animations and transitions have been customized for this theme fine tuned to fit in along with the theme of the website. It follows the color scheme of both PES University and the Primary White/Red theme of this website.</h3>
      <br>
      <h2>Simple<span class="stud">.</span></h2>
      <h3>This website was created to help the students of PES University, and maybe provide some minimal assistance to others. It doesn't need a feature filled user system. Your SRN is more than enough to access the website. Why need to register when the details of every student in the department of CS&E is already in our database?<br><br>Yes! EVERY<span class="stud">.</span> SINGLE<span class="stud">.</span> STUDENT<span class="stud">.</span> So, just go the login page, type in your SRN, and enjoy!</h3>
      <br>
      <h2>Fool Proof<span class="stud">.</span></h2>
      <h3>One thing I realized when creating websites is that to improve user experience, the user's interaction with the website should be kept minimum. All this website has to achieve is to give you the study guidelines you need for your current degree, and the only keyboard input ever required will be your SRN. So, things like content selection, dragging, context-menus and link/image modification and interaction has been completely disabled. Text inputs are automatically capitalized. Links are made dual way and friendly. Try losing your way, and it will take you right back to this page. This makes errors caused due to user interaction minimum.</h3>
      <br>
      <h2>Understanding<span class="stud">.</span></h2>
      <h3>Don't like the HUUUUGE intro, or the irritating login prompt? You're covered! The website displays the intro just once, like, in a lifetime. Unless you visit the website from a different browser or you reset your computer, the insanely long intro will never play again. Also, once you login to the website, the login button (or in fact, the whole login page) will no longer appear. <em>It will CEASE to EXIST.</em></h3>
      <br>
      <h2>Lost your way<span class="stud">?</span></h2>
      <h3>Don't worry! <span class="stud">STUD.</span> has you covered. It will take you to a custom made 404 error page that not only shows you the way, but also walks you along it.</h3>
      <h3>Try it out for yourself!</h3>
      <a href="lol"><button class="redButton" type="submit" name="submit" style="float:left; width:150px; margin:10px 0px 20px 0px">Lose Your Way!</button></a>
      <br><br><br><br>
      <h2>There's Even More<span class="stud">!</span></h2>
      <h3>But that's up to YOU to explore. We won't hold you up any longer.</h3>
      <br>
      <h2>Go and Explore <span class="stud">STUD.</span></h2>
      <br>
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
