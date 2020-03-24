<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppExplo</title>
    <?php
    
    // define variables and set to empty values
    $nameErr = $emailErr = $phoneErr = $websiteErr = "";
    $name = $email = $phone = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
        
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }    
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
      if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
      } else {
        $phone = test_input($_POST["phone"]);
      }
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
`        .btn {
            display: inline-block;
            font-weight: 100;
            color: #212529;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .25 .75rem;
            font-size: 1rem;
            line-height: 1;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        
        .btn-danger {
            color: #fff;
            background-color: #FF3399;
            border-color: #dc3545;
        }
        
        .__center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        
        button.left {
            background: none;
            position: absolute;
            top: 50%;
            background: none;
            border: none;
        }
        
        button.right {
            background: none;
            position: absolute;
            right: 0;
            top: 50%;
            background: none;
            border: none;
        }
        
        element.style {
            border-radius: 10px;
            margin-left: 70px;
        }
        
        .p-5 {
            padding: 3rem!important;
        }
        
        .fa,
        .fab,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid">
            <nav>
                <div class=" tab-content ">
                    <div class="row " style="padding-left: 20%; padding-top: 3%;padding-bottom: 1%; ">
                        <div style="padding-bottom: 3%; ">
                            <img src="logo.svg " height="40 " width="40 ">
                        </div>
                        <div style="padding-top: 1%; padding-bottom: 3%; ">
                            <a href="#" style="font-weight: 500; color: black; ">AppExplode</a>
                        </div>

                        <div style="list-style: none;padding-left: 20%; " class="row ">

                        </div>
                        <li style="list-style: none;padding-left: 3%; ">
                            <a href="!# " style="color: black; font-size: smaller; font-weight: 500; ">Home</a>
                        </li>
                        <li style="list-style: none;padding-left: 3%; ">
                            <a href="!# " style="color: black; font-size: smaller; font-weight: 500; ">About Us</a>
                        </li>
                        <li style="list-style: none;padding-left: 3%; ">
                            <a href="!# " style="color: black; font-size: smaller; font-weight: 500; ">Portfolio</a>
                        </li>
                        <li style="list-style: none;padding-left: 3%; ">
                            <a href="!# " style="color: black; font-size: smaller; font-weight: 500; ">Approach</a>
                        </li>
                        <li style="list-style: none;padding-left: 3%; ">
                            <a href="!# " style="color: black; font-size: smaller; font-weight: 500; ">Team</a>
                        </li>
                        <li style="list-style: none;padding-left: 3%; ">
                            <a href="!# " style="color: black; font-size: smaller; font-weight: 500; ">Contact Us</a>
                        </li>
                        <li style="list-style: none;padding-left: 3%; ">
                            <button type="button " class="btn btn-danger ">Instant Quote</button>
                        </li>
                    </div>
                </div>
            </nav>
            <div id=" my-carousel " class="carousel slide " data-ride="carousel ">
                <ol class="carousel-indicators ">
                    <li class="active " data-target="#my-carousel " data-slide-to="0 " aria-current="location "></li>
                    <li data-target="#my-carousel " data-slide-to="1 "></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <img class="d-block w-100 " src="banner.jpg " alt=" ">
                        <div class="carousel-caption ">
                            <div class="row ">
                                <div class="col py-3 px-lg-5 " style="padding: 5% ">
                                    <div>
                                        <h1 style="font-size: 150px; ">BUILD YOUR DREAM</h1>
                                    </div>

                                </div>
                                <div class="col py-3 px-lg-5">
                                    <p style="font-size:large; font-weight: 500; padding: 30%;">The App Explode ethos is to bring digital dereams to reality. If you have a vision for an app or a digital prodict ( apps, websites,games), we are the team to build it
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </header>
