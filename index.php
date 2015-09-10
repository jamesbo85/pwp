<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
				rel="stylesheet"/>
		<!-- ////////////////////////////////////////////////
		//// LINK TO YOUR CUSTOM CSS FILES HERE
		//// <link type="text/css" href="css/style.css" rel="stylesheet"/>
		///////////////////////////////////////////////////// -->
		<link type="text/css" href="css/stylesheet.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript"
				  src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.1/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/tilt.js"></script>
		<title>James Huber</title>
	</head>
	<body>
		<header>
			<nav class="navbar">
				<div class="container-fluid">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav"
								  aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-menu"></i>
						</button>
						<a class="navbar-brand">James Huber</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-nav">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									aria-expanded="false">Options<span class="caret"></span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#portfolio-page">Portfolio</a></li>
									<li><a href="#aboutme-page">About James</a></li>
									<li><a href="#contactform-page">Contact James</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>
		<div class="pageheight">
			<div class="container" id="launchpage">
				<div class="row" id="launchpage">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<h2>Welcome to James Huber's<br>Portfolio Website</h2>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
		<div class="pageheight">
			<div class="container" id="portfolio-page">
				<div class="row">
					<div class="col-md-4">
						<h3>Punctuality App</h3>
						<img src="/images/punctappthumb.png" alt="punct app screen shot">
					</div>
					<div class="col-md-2">
						<p class="screenshotdescript">Punctuality app is a project, which aims to dynamically track users and bring together calender
						APIs with Google Maps APIs in order to keep users on time and notify other family members and friends if they will not be on time.</p>
					</div>
					<div class="col-md-4">
						<h3>Inventory TEXT</h3>
						<img src="/images/invtextscreenthumb200.png" alt="invtext screen shot">
					</div>
					<div class="col-md-2">
						<p class="screenshotdescript">Inventory managment software, tailored towards small businesses. Built using PHP, Angular, HTML,
							CSS3,	Bootstrap. Also includes Swift Mailer, Chrontab, and manually build APIs</p>
					</div>
				</div>
			</div>
		</div>
		<div class="pageheight">
			<div class="container" id="aboutme-page">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="resumeabout col-md-6">
						<p class="resumeholder">Resume/Bio here</p>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
		<div id="contactform-page">

		</div>
		<footer>

		</footer>
	</body>
</html>