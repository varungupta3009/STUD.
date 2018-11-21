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
        text-align: center;
      }

      .formBox {
        width: 350px;
        margin: auto;
        border: 1px solid #FFFFFF;
        border-radius: 25px;
        padding: 100px 50px 100px 50px;
        transition: 0.3s;
      }

      .formBox:hover {
        border: 1px solid #DDDDDD;
      }

      img {
        width: 225px;
        margin: 0px 0px 100px 0px;
      }

      .SRN {
        border: none;
        outline: none;
        border-bottom: 2px solid #DDDDDD;
        width: 225px;
        padding: 0px 0px 5px 0px;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 1.2em;
        text-transform: uppercase;
        transition: 0.3s;
      }

      .error {
        color: #858585;
        transition: 0.3s;
      }

      .error:hover {
        color: #ff7a7a;
      }
    </style>
    <title>Login</title>
  </head>

  <body class="fade-out" oncontextmenu="return false;" ondragstart="return false;" ondrop="return false;">
    <?php
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("Location: profile");
        exit;
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "STUD";

    $link = mysqli_connect($servername, $username, $password, $dbname);

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $srn = "";
    $srnError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty(trim($_POST["SRN"]))) {
            $srnError = "The SRN field cannot be blank";
        } elseif (strlen(trim($_POST["SRN"])) != 13) {
            $srnError = "Please enter a valid SRN";
        } else {
            $srn = trim($_POST["SRN"]);
        }

        if (empty($srnError)) {
            $sql = "SELECT SRN, Section, Name FROM studentDetails WHERE SRN = ?";

            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_srn);
                $param_srn = trim($_POST["SRN"]);
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        mysqli_stmt_bind_result($stmt, $srn, $section, $name);
                        mysqli_stmt_fetch($stmt);
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["SRN"] = $srn;
                        $_SESSION["Section"] = $section;
                        $_SESSION["Name"] = $name;

                        // Redirect user to welcome page
                        header("Location: profile");
                    //$srnError = "Login Suxessful.";
                    } else {
                        // Display an error message if username doesn't exist
                        $srnError = "That SRN does not exist";
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        // Close connection
        mysqli_close($link);
    }
    ?>

    <div class="formBox">
      <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <a href="home"><img src="..\media\logoSmall.png" alt="LOGIN"></a>
        <div class="formSRN">
          <input class="SRN" type="text" name="SRN" placeholder="SRN" maxlength="13" onfocus="srnFocus()" onblur="srnBlur()" value="<?php echo $srn; ?>">
          <br>
          <span class="error">
            <?php echo $srnError; ?>
          </span>
        </div>
        <br>
        <button class="redButton" type="submit" name="submit" style="margin-top:50px; width:75px">Next</button>
      </form>
    </div>

  </body>
  <script type="text/javascript">
    window.onload = function() {
      document.body.className = ""
    }
    srn = document.querySelector(".SRN")
    function srnFocus() {
      srn.placeholder = ""
      srn.style.borderBottom = "2px solid #f44336"
    }

    function srnBlur() {
      srn.placeholder = "SRN"
      srn.style.borderBottom = "2px solid #DDDDDD"
    }
  </script>

</html>
