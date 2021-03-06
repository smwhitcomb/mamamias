<?php
	session_start();
	@ob_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Mama Mia's Pizzeria</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
      <!-- nav bar -->
        <nav class="navbar navbar-default">
            <div class="container" id="mcon">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
								</button>
                <a class="navbar-brand" href="index">Mama Mia's</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
  							<li><a href="menu">Menu</a></li>
									<?php if (!isset($_SESSION['u_id'])) {
									echo   "<li><a href=\"login\">Sign In</a></li>";
									}?>
                  <li><a href="suggestions">Suggestions</a></li>
                  <li><a href="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
									<div class="float-right pull-right">
									<?php
										if (isset($_SESSION['u_id'])) {
											echo "Hi, {$_SESSION['u_first']}";
										echo "<p id=\"loggedIn\">You are logged in!</p>";
										echo '<form action="includes/logout.inc" method="POST">
											<button type="submit" name="submit" class="btn btn-default">Logout</button>
										</form>';
									}?>
									</div>
                </ul>

              </div>
            </div>
          </nav>
          <!-- end nav bar -->

          <!-- content div-->
          <div class="container" id="content">
              <div class="jumbotron">
                  <img class="img-responsive" src="images/logo.jpg" alt="Mama Mia logo">
              </div>
          </div>
					<script>

					$(document).ready(function() {
						if (/Success/.test(window.location.href)){
							//vars
						var div = document.createElement("div");
						var diva = document.createElement("a");

					//div
						div.innerHTML = " <strong>Success</strong> You are logged in";
						div.classList.add('alert');
						div.classList.add('alert-success');
						div.classList.add('alert-dismissable');


					//diva
						diva.innerHTML ='x';
						diva.setAttribute('data-dismiss',"alert");
						diva.setAttribute('aria-labe',"close");
						diva.href='#';
						diva.classList.add('close');
					//add vars to dom
						document.getElementById("mcon").appendChild(div);
						div.appendChild(diva);
						document.getElementById("loggedIn").innerHTML="";
					}
					/*else if (/Success/.test(window.location.href)) {

					 	 //alert(" Login Success");
					 }*/


					});
					</script>


    </body>
</html>
