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
        .btn {
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
    <div class="container-fluid">
        <div class="row container-fluid">
            <div class="col py-3  " style="padding:10%;">
                <div>
                    <h3 style="font-size: 80px; font-weight: 700; ">Who<br> we are</h3>
                </div>
                <div style="padding-top: 10%;">
                    <div class="container-sm">
                        <h4>Turn Your App Idea Into Reality, FAST,</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eveniet dolor vitae atque recusandae veritatis illo? Incidunt, voluptate aspernatur amet vero, labore in recusandae quis repudiandae impedit quasi nulla magni! Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Doloribus iste aspernatur placeat saepe quaerat maxime hic, quo, nisi minus veniam consectetur nostrum dolores eligendi earum, error eos. Id, autem doloremque.
                        </p>
                        <button type="button " class="btn btn-danger ">Instant Quote</button>
                    </div>
                </div>
            </div>
            <div class="col py-3 ">
                <div>
                    <p style="font-size:large; font-weight: 500;  ">The App Explode ethos is <br>to bring digital dereams to <br>reality. If you have a vision<br> for an app or a digital<br> prodict ( apps, websites,<br>games), we are the team <br>to build it
                    </p>
                </div>
                <div>
                    <img src="phone.jpg" style="padding:5% ;" height="80%" width="80%"> </div>
            </div>

        </div>
    </div>

    <div class="pt-5 pb-5  text-white" style="background-image: url('3d-grunge-room-interior-with-spotlight-smoky-atmosphere-background_1048-11333.jpg');">
        <h2 class="ml-5 pl-5ml-5 pl-5">Our Process</h2>
        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="offset-lg-1 offset-sm-1 col-lg-10 col-sm-10">
                        <p class="number text-center m-0"><strong>1</strong></p>
                        <strong class="title">Chat With an App Expert </strong>
                        <p class="description">
                            Speak with one our friendly app experts. We're happy to sign an NDA! We work together using our app quote form to define key features if your app and bring the idea to life. Book in a time here.
                        </p>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class=" offset-lg-1 offset-sm-1 col-lg-10 col-sm-10 ">
                        <p class="number text-center m-0"><strong>2</strong></p>
                        <strong class="title ">Your App Quote in 48 Hours</strong>
                        <p class="description ">
                            With the information collected in the first step, the App Explode team will plan out all the design and developement requirements for your app, and deliver your quotes fast. Prices range from $10,000-$150.000.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="offset-lg-1 offset-sm-1 col-lg-10 col-sm-10">
                        <p class="number text-center m-0"><strong>3</strong></p>
                        <strong class="title">tile asdasda da sdasda </strong>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat aliquam, vero quam id similique quos facere iure autem alias non debitis sit culpa! Mollitia tempore deleniti magni fugit dignissimos. Omnis?
                        </p>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class=" offset-lg-1 offset-sm-1 col-lg-10 col-sm-10 ">
                        <p class="number text-center m-0"><strong>4</strong></p>
                        <strong class="title ">tile asdasda da sdasda </strong>
                        <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat aliquam, vero quam id similique quos facere iure autem alias non debitis sit culpa! Mollitia tempore deleniti magni fugit dignissimos. Omnis?
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="container " style="position: relative; ">
        <div class="container">
            <div class="col-sm-6 ">
                <h3 style="font-weight: bolder; ">What our <br>cilent's say </h3>
            </div>
            <div>
                <img src="people.jpg " style="width:50%; " class="__center ">
            </div>
            <button class="left ">
                          <img src="back.svg " style="width:50px; ">
                    </button>
            <button class="right ">
                <img src="next.svg " style="width: 50px; ">
            </button>
        </div>


        <p class="text-center m-0" style="font-size: small;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sapiente vero voluptatibus facis, molestiae a?</p>


    </div>

    <div class="container">
        <div class="row pt-5 pb-5  ">
            <div class="col-sm-6 ">
                <h1><strong> What We Do</strong></h1>
            </div>
            <div class="col-sm-6 ">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo velit minima adipisci maxime omnis quisquam ut nesciunt. Quae enim magni, esse in iure eveniet soluta, fugiat doloribus delectus consectetur nam?</p>
            </div>
        </div>
        <div class="row m-auto">
            <div class="col m-3">
                <div class="what-app bg-white p-5" style="border-radius: 10px; margin-left: 70px;">
                    <img src="icon1.jpg" alt="" class="float-left pr-4">
                    <h2>App</h2>
                    <p>Get hands-on guidance in positioning your product in the market.</p>
                </div>
            </div>
            <div class="col m-3">
                <div class="what-web bg-white p-5" style="border-radius: 10px; margin-right: 70px;">
                    <img src="icon2.jpg" alt="" class="float-left pr-4">
                    <h2>Websites</h2>
                    <p>Discover the power of research in improving your buisiness in leaps and bounds.</p>
                </div>
            </div>
            <div class="row m-auto">
                <div class="col m-3">
                    <div class="what-game bg-white p-5" style="border-radius: 10px; margin-left: 70px;">
                        <img src="icon3.jpg" alt="" class="float-left pr-4">
                        <h2>Game</h2>
                        <p>Find new angles to improve your product with well-planned, cost-effective user experience changes.
                        </p>
                    </div>
                </div>
                <div class="col m-3">
                    <div class=" bg-white p-5" style="border-radius: 10px; margin-right: 70px;">
                        <img src="icon4.jpg" alt="" class="float-left pr-4">
                        <h2>UX/UI</h2>
                        <p>Stop focusing on putting out fires and map out your growth to bring your product at the next level.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-getit">
        <div class="row m-5">
            <div class="col-sm-6">
                <div style="padding-top: 50px; padding-left: 40px;">
                    <h1 class=" font-weight-bold" style="font-size: 50px;">Get in touch with the team behind the apps
                    </h1>
                </div>
            </div>
            <div class="col-sm-4 text-uppercase" style="font-size: 20px; padding-top: 50px; margin-left: 200px;">
                <p style="font-size: 15px; margin-bottom: 5px;">Phone</p>
                <h4 class="font-weight-bold">+84 234 385 7677</h4>
            </div>
        </div>

        <div class="row m-5">
            <div class="col-sm-6">
                <div style="padding-left: 40px; margin-right: 220px;">
                    <p style="font-size: 15px;">App Explode is a Sydney based cohort of designers, developers and technologists thay love breathing life intro great ideas. Call us today on 0420 922215 or contact us via the form below.
                    </p>
                </div>
            </div>
            <div class="col-sm-4" style="font-size: 20px; margin-left: 200px;">
                <p class="text-uppercase" style="font-size: 15px; margin-bottom: 5px;">Email</p>
                <h4 class="font-weight-bold">team@appexplode.com</h4>
            </div>
        </div>
        <div class="row text-muted" style="padding-bottom: 300px; margin: 0;">
            <div class="col-sm-5" style="padding-left: 100px;">
                <div class="box">
                    <form method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div>
                            <label>Your Name*</label>
                            <input type="text" class="form-control" required="" name="name">


                        </div>
                        <div>
                            <label>Your Email*</label>
                            <input type="text" class="form-control" required="" name="email">


                        </div>
                        <div>
                            <label>Your Phone Number*</label>
                            <input type="text" class="form-control" required="" name="phone">


                        </div>
                        <div>
                            <label>Your website*</label>
                            <input type="text" class="form-control" required="" name="website">


                        </div>
                        <div>
                            <label>Tell us briefly about yourr app idea.</label>
                            <textarea class="form-control" name="comment" required=""></textarea>


                        </div>
                        <button type="submit" class="btn btn-primary text-uppercase my-4 py-2 px-4" style="background: blueviolet; border: blueviolet;">Submit</button>
                        <div>
                        <?php
    echo "<h2>Your Input:</h2>";
    echo "<h5>Your Name:</h5>";
    echo $name;
    echo "<br>";
    echo "<h5>Your email:</h5>";
    echo $email;
    
    echo "<br>";
    echo "<h5>Your Phone:</h5>";
   
    echo $phone;
   
    echo "<br>";
    echo "<h5>Your Website:</h5>";
    echo $website;
    echo "<br>";
    echo "<h5>Tell US:</h5>";
    echo $comment;
    
   
    
?>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-6">
                <img src="mes.png" alt="" width="834.275">
            </div>
        </div>
    </div>
    <div class="header-contact">
        <div class="row" style="margin-left: 115px; margin-right: 50px; padding: 0;">
            <div class="col-sm-3">
                <a class="navbar-brand font-weight-bold text-dark mb-3" href="#"><img src="/img/logo.svg" width="37" alt="">AppExplode</a>
                <div style=" font-size: 15px;">
                    <p class="font-weight-bold">Business Hours</p>
                    <p>Monday - Friday 08:00AM to 05:00PM</p>
                    <p style="margin-top: -10px;">Saturday - Closed</p>
                    <p style="margin-top: -10px;">Sunday - Closed</p>
                </div>
                <div class="icons-brand">
                    <i class="fab fa-facebook-square mr-3" title="Facebook"></i>
                    <i class="fab fa-instagram mr-3" title="Instagram"></i>
                    <i class="fab fa-twitter mr-3" title="Twitter"></i>
                </div>
            </div>
            <div class="col-sm-3">
                <a class="navbar-brand font-weight-bold text-dark mb-3 ">Contact</a>
                <div class="content-contact">
                    <i class="fas fa-envelope mb-3" style="margin-top: 45px;"><span class="ml-3 font-weight-normal">team@appexplode.com</span></i>
                    <i class="fas fa-phone mb-3"><span class="ml-3 font-weight-normal">LLOYD +61 40 444 1243</span></i>
                    <i class="fas fa-phone"><span class="ml-3 font-weight-normal">PAM +61 420 922 215</span></i>
                </div>
            </div>
            <div class="col-sm-3">
                <a class="navbar-brand font-weight-bold text-dark mb-3">Company</a>
                <p style="margin-top: 40px;">Who we are</p>
                <p>How it work</p>
                <p>Team</p>
                <p>Instant Quote</p>
            </div>
            <div class="col-sm-3">
                <a class="navbar-brand font-weight-bold text-dark mb-4">Help</a>
                <p style="margin-top: 40px;">Terms and Conditions</p>
                <p>Privacy Policy</p>
            </div>
        </div>
    </div>>
    <p style="margin-left: 130px; margin-top: 10px;">Appexplode, 2019, All rights reserved.</p>
    <div class="row" style="padding: 0; margin: 0;">
        <div class="col">
            <p class="font-italic" style="margin-left: 115px; margin-top: 30px;">*We dont's share your personal info or idea with anyone. We are happy to sign on NDA before full of an idea. Check out our Privacy for more infomation.</p>
        </div>
        <div class="col">

        </div>
    </div>
</body>

</html>