<!DOCTYPE html>
<html>
<head>
	<title>Log In to Lorembook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
  	<div class="container">

      <?php
        if (isset($_GET['error'])) {
      ?>

      <div class="alert alert-dismissable alert-success">
        The Username, Password and Biautherize account do not match.
      </div>

      <?php
        }
      ?>

  		<form class="form-signin" action="verify.php" method="POST">
  			<h1 class="text-center">Lorembook</h1>
  			<input name="username" type="text" class="form-control" placeholder="Email address" autofocus>
  			<input name="password" type="password" class="form-control" placeholder="Password">

  			<!--## This is the Biauthorise include ##-->
  			<script src="http://biauthorize.com/js/script.js?key=e6b29b7c345c3401c49d797da4b8d3"></script><script>biauthorize("Check My Face!")</script>
  			<!--#####################################-->


<!--   			<label class="checkbox">
  				<input type="checkbox" value="remember-me"> Remember me
  			</label> --> 
  			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  		</form>

  	</div> <!-- /container -->

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="http://code.jquery.com/jquery.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/holder.js"></script>
  </body>
  </html>