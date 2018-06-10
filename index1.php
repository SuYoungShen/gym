<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style media="screen">
	h1{
		font-size: 30px;
		color: #fff;
		text-transform: uppercase;
		font-weight: 300;
		text-align: center;
		margin-bottom: 15px;
	}
	table{
		width:100%;
		table-layout: fixed;
	}
	.tbl-header{
		background-color: rgba(255,255,255,0.3);
	}
	.tbl-content{
		height:300px;
		overflow-x:auto;
		margin-top: 0px;
		border: 1px solid rgba(255,255,255,0.3);
	}
	th{
		padding: 20px 15px;
		text-align: left;
		font-weight: 500;
		font-size: 12px;
		color: #fff;
		text-transform: uppercase;
	}
	td{
		padding: 15px;
		text-align: left;
		vertical-align:middle;
		font-weight: 300;
		font-size: 12px;
		color: #fff;
		border-bottom: solid 1px rgba(255,255,255,0.1);
	}


	/* demo styles */

	@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
	body{
		background: -webkit-linear-gradient(left, #25c481, #25b7c4);
		background: linear-gradient(to right, #25c481, #25b7c4);
		font-family: 'Roboto', sans-serif;
	}
	section{
		margin: 50px;
	}


	/* follow me template */
	.made-with-love {
		margin-top: 40px;
		padding: 10px;
		clear: left;
		text-align: center;
		font-size: 10px;
		font-family: arial;
		color: #fff;
	}
	.made-with-love i {
		font-style: normal;
		color: #F50057;
		font-size: 14px;
		position: relative;
		top: 2px;
	}
	.made-with-love a {
		color: #fff;
		text-decoration: none;
	}
	.made-with-love a:hover {
		text-decoration: underline;
	}

	/* for custom scrollbar for webkit browser*/

	::-webkit-scrollbar {
		width: 6px;
	}
	::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	}
	::-webkit-scrollbar-thumb {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	}
</style>
</head>
<!-- <body> -->
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<?php
					if (!isset($a)) {
				?>
				<div class="login100-more" style="background-image: url('images/0001.jpg');">
				<?php
			}else {
			 	?>
				<div class="login100-more">
					<section>
						<h1>Fixed Table header</h1>
						<div class="tbl-header">
							<table cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th>Code</th>
										<th>Company</th>
										<th>Price</th>
										<th>Change</th>
										<th>Change %</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tbl-content">
							<table cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
									<tr>
										<td>AAC</td>
										<td>AUSTRALIAN COMPANY </td>
										<td>$1.38</td>
										<td>+2.01</td>
										<td>-0.36%</td>
									</tr>
									<tr>
										<td>AAD</td>
										<td>AUSENCO</td>
										<td>$2.38</td>
										<td>-0.01</td>
										<td>-1.36%</td>
									</tr>
									<tr>
										<td>AAX</td>
										<td>ADELAIDE</td>
										<td>$3.22</td>
										<td>+0.01</td>
										<td>+1.36%</td>
									</tr>
									<tr>
										<td>XXD</td>
										<td>ADITYA BIRLA</td>
										<td>$1.02</td>
										<td>-1.01</td>
										<td>+2.36%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript">
	$(window).on("load resize ", function() {
		var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
		$('.tbl-header').css({'padding-right':scrollWidth});
	}).resize();
	// $('.login100-more').css('background-image', 'url(images/0001.jpg)');

	</script>
</body>
</html>
