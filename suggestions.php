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
        <div class="container">
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
                    <li><a href="cart">

                      <i class="glyphicon glyphicon-shopping-cart"></i></a></li>
                    <div class="float-right pull-right">
  						<?php
  						    if (isset($_SESSION['u_id'])) {
  								echo "Hi, {$_SESSION['u_first']}";
  								echo '<form action="includes/logout.inc" method="POST">
  							        	<button type="submit" name="submit" class="btn btn-default">Logout</button>
  									  </form>';
  							}
  						?>
  					</div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav bar -->

    <!-- start page content -->

    <div class="container" id="content">
        <ul class="nav nav-tabs">
            <ul class="input">If you have a pizza choice suggestions, that we don't already have. Please let us know below.</ul>
        </ul>
    
        <form name="contactform" method="post" action="send_form_email.php" class="tab-pane fade in active form-group">
            <table width="450px">
                <tr>
                    </br>
                    <label for="first_name">First Name *</label>
                    <input style="background: #faffbd" type="text" name="first_name" class="form-control">
                    </br>
                    <label for="last_name">Last Name *</label>
                    <input style="background: #faffbd" type="text" name="last_name" class="form-control">
                    </br>
                    <label for="email">Email Address *</label>
                    <input style="background: #faffbd" type="text" name="email" class="form-control">
                    </br>
                    <label for="telephone">Telephone Number</label>
                    <input style="background: #faffbd" type="text" name="telephone" class="form-control">
                    </br>
                    <label for="comments">Comments *</label>
                    <textarea style="background: #faffbd" name="comments" maxlength="300" class="form-control"></textarea>
                    </br>
                    <input type="submit" value="Submit">
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
