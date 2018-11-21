<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="icon" href="..\favicon.ico">
    <link rel="stylesheet" href="..\css\master.css">
    <style media="screen">
      html, body {
        height: 100%;
      }

      body {
        display: flex;
        font-family: Product Sans;
        color: #454545;
        margin: auto;
        font-size: 3em;
      }

      .details {
        margin: auto;
        padding-bottom: 50px;
      }
    </style>
    <title>Profile Page</title>
  </head>

  <body class="fade-out" oncontextmenu="return false;" ondragstart="return false;" ondrop="return false;">
    <?php
    session_start();

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: login");
        exit;
    }
    ?>
    <div class="details">
      <h1>Welcome to STUD.</h1>
      <h2><?php echo htmlspecialchars($_SESSION["Name"]); ?></h2>
      <strong>SRN:</strong> <?php echo htmlspecialchars($_SESSION["SRN"]); ?><br>
      <strong>Section:</strong> <?php echo htmlspecialchars($_SESSION["Section"]); ?><br>
      <a href="logout"><button class="redButton" type="submit" name="submit">LOGOUT</button></a>
      <a href="home"><button class="blueButton" type="submit" name="submit">HOME</button></a>
    </div>
  </body>
  <script type="text/javascript">
    window.onload = function() {
      document.body.className = ""
    }
  </script>
</html>
