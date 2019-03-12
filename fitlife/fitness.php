<?php 
    session_start(); 

    include("connection_script.php"); 
     
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
            <li><a href="content.php" >Recipes</a></li>
            <li><a href="#">Workout Routines</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">face</i></a></li>
          </ul>
    
          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
        </div>
      </nav>

    <img src="img/img1.jpg" alt="vegan" width="100%"/>

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
      <h1 class="header center green-text">Fit Life</h1>
      <div class="row center">
        <h5 class="header col s12 light">Fitness at its finest.</h5><br>
      </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 m5 l5">
          <img src="img/vegan.jpg" alt="vegan" height="250px" width="350px"/>
          </div>

          <div class="col s12 m5 l6"><p>Many omnivores contemplating veganism experience a paralyzing 
            moment when they first ask themselves, “Well, what could I ever eat?”</p>

            <p>Here’s your answer—our complete list of all the best quick and delicious vegan food recipes. 
              Some of it’s super healthy, some of it’s a bit indulgent. But we left out the soda and potato chips, 
              because you can always do better than that.</p>

              <p>We also offer various workout routines for beginners and experts to ensure that you get the best results possible!</p>
                </div>
            </div>
        </div>
    <br><br>
</div>

<div class="divider"></div><br><br><br>

<h2 class="center-align">Today's Featured Video <br>Provided By</h2>

<div class="row">
<h3 class="center-align"><a href="https://www.bodybuilding.com/"><img src="img/bodybuilding.png" alt="body" height="150px" width="400px"/></a>
</div>

<iframe width="760" height="415" src="https://www.youtube.com/embed/o9zCgPtsups?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br><br>

<div class="divider"></div><br><br><br>

<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
          <a href="content.php"><h2 class="center light-blue-text"><i class="material-icons">local_dining</i></h2></a>
            <h5 class="center">Delicious Vegan Recipes</h5>

            <p class="light center-align">We've collected the best vegan recipes from around the world that are both healthful and tasty! <br>Give some of them a try!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
          <a href="#!"><h2 class="center light-blue-text"><i class="material-icons">directions_run</i></h2></a>
            <h5 class="center">The Best Workout Routines</h5>

            <p class="light center-align">Whether you're a beginner or a veteran, these workout routines will define your body and build mass to ensure you become the best you.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
          <a href="contact.php"><h2 class="center light-blue-text"><i class="material-icons">contact_mail</i></h2></a>
            <h5 class="center">Contact Our <br>Experts</h5>

            <p class="light center-align">Have a question? Let us know! Our qualified trainers and nutrionists are available 24/7.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
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
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
