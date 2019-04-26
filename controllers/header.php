<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Buy and Sell Coin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="CoinExchangePro" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<!--/top-bar-->
	<div class="top-bar_sub_w3ls_agileits row">
		<div class="col col-xs-6">
			<?php
				if(!isset($username)){
					echo'
							<h6>
								<a class="sign" href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-signup" aria-hidden="true"></i>REGISTER</a>
							</h6>
						';
				}
			?>
		</div>
		<div class="col col-xs-6">
		<div class="search">
			<?php
				if(isset($username)){
					echo'
						<h5>
							<a class="sign" href="user/"><i class="fa fa-user" aria-hidden="true"></i>	Welcome	 '.$firstname.'</a>
						</h5>
					';

				}else{

					echo '
							<h5>
								<a class="sign" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i>User Login</a>
							</h5>
						';
				}
			
			?>
			
			
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--/top-bar-->
	<div class=" header_w3layouts_agile-main">
		<header class="header" id="home">
			<!--/top-bar-->
			<div class="top-bar">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1>
							<a class="navbar-brand" href="index.php">CoinExchagePro
								<span><i>a coin for the future</i></i></span>
							</a>
						</h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li>
									<a class="active" href="index.php">Home</a>
								</li>
								<li>
									<a href="about.php">About</a>
								</li>
								
								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<!--//top-bar-->
		</header>