<?php 
    session_start(); 

    include("connection_script.php"); 

    if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent = "From: $name $last_name\n Message: $message";
    $recipient = "mgarc1013@gmail.com";
    $subject = "Fit Life Customer";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");  
    }
     
    if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) { 

        $select_query = "SELECT * FROM users";
        $select_result = $mysqli->query($select_query); 
        if($mysqli->error) { 
            print "Select query error!  Message: ".$mysqli->error; 
        } 

        while($row = $select_result->fetch_object()) { 
            if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == (md5($row->password)))) { 
                $_SESSION['logged_in'] = true; 
                $_SESSION['logged_in_username'] = $row->username; 
                $_SESSION['logged_in_access_level'] = $row->user_access;
            } else { 
				
            } 
        } 
    } 
    
     
    if (isset($_SESSION['logged_in'])) { 
        header("Location: fitness.php"); 
		exit;
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Fit Life</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="fitness.php" class="brand-logo">Fit Life</a>
          <ul class="right hide-on-med-and-down" class="navbar_link">
            <li><a href="content.php">Recipes</a></li>
            <li><a href="#">Workout Routines</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">face</i></a></li>
          </ul>
    
          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
        </div>
      </nav>

  <ul id="slide-out" class="side-nav" class="side-nav-right">
    <li><div class="user-view">
    <div class="background">
        <br><div class="account">
      <i class="material-icons">account_box</i></div>
      </div><br>
      <br><form method="post" action="fitness.php"> 
            <label for="username">Username</label> 
            <input name="username" id="username" type="text" /><br /> 
            <label for="password">Password</label> 
            <input name="password" id="password" type="password" /><br /><br> 
            <div class="center-align">
              <button class="btn waves-effect waves-light test" type="submit" name="action">Login
              </button>
            </div> 
</form>

    </div></li>
</ul>

<img src="img/fit.jpg" alt="fit" width="100%"/>

    <?php 
    if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in_access_level'] == 'user')) {
    ?>
    <ul>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

<?php
} ?>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center green-text">Contact Us</h1>
      <div class="center-align">
      <h5 class="header col s12 light">Have a question? Feel free to get in touch with one of our expert trainers or nutrionists.</h5><br>
      </div>
      <div class="row center">
        <h5 class="header col s12 light"></h5><br>
      </div>
  </div>

  <div class="divider"></div><br><br>


  <div class="container">
    <div class="row">
        <div class="col m10 offset-m1 s12">
            <div class="row">
                <form action="contact_thanks.php" method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <input id="name" type="text" class="validate" name="name">
                            <label for="name">First Name</label>
                        </div>
                        <div class="input-field col m6 s12">
                            <input id="last_name" type="text" class="validate" name="last_name">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <input id="email" type="text" class="validate" name="email">
                            <label for="email">E-Mail</label>
                        </div>
                        <div class="input-field col m6 s12">
                            <input id="message" type="text" class="materialize-textarea" name="message">
                            <label for="message">Send Us A Message!</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m12">
                        <div class="center-align">
                        <button class="btn waves-effect waves-light test" type="submit" name="action">Submit
                        </button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


  <footer class="page-footer green">
    <div class="container">
      <div class="row">
        <div class="col l5 s12">
          <h2 class="white-text left-align">Fit Life</h2>
          <h5 class="white-text left-align">#1 source for all things fitness.</h5>
        </div>
        <div class="col l7 s12">
          <h2 class="white-text right-align">About</h2>
          <ul class="right-align">
          <li><a class="white-text" href="#!">Meet Our Trainers</a></li>
          <li><a class="white-text" href="#!">Terms &amp; Conditions</a></li>
          <li><a class="white-text" href="#!">Privacy</a></li>
          <li><a class="white-text" href="#!">Employment</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center-align">
      <a class="white-text icon" href="https://www.facebook.com/"><img src="img/facebook.png" alt="facebook" height="20px" width="20px"/></a>      
      <a class="white-text icon" href="https://twitter.com/?lang=en"><img src="img/twitter.png" alt="twitter" height="20px" width="20px"/></a>      
      <a class="white-text icon" href="https://www.instagram.com/"><img src="img/insta.png" alt="instagram" height="20px" width="20px"/></a> 
</div>    
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/chat.js"></script>

  </body>
</html>
