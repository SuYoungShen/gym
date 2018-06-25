<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
	<!-- 彈跳視窗 -->
	<link rel="stylesheet" href="assets/css/sweetalert2.css">
	<!-- 彈跳視窗 -->

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
		/* height:300px; */
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
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43 font-weight-bold">
						<?=$title;?>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "請輸入正確">
						<input class="input100" type="number" name="card_id">
						<span class="focus-input100"></span>
						<span class="label-input100">請輸入卡號</span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div> -->

					<div class="flex-sb-m w-full p-t-3 p-b-32 text-right">
						<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> -->

						<a href="<?=$url;?>" class="txt1">
							<?=$url_name;?>
						</a>
						<a href="logout" class="txt1">
							員工登出
						</a>

					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							送出
						</button>
					</div>

					<!-- <div class="text-center p-t-46 p-b-20">
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
					</div> -->
				</form>
				<?php if (isset($page) && !empty($page)){ ?>
					<?php include $page; ?>
				<?php }else{ ?>
				<div class="login100-more" style="background-image: url('assets/images/0001.jpg');">
				<?php } ?>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

	<!-- 彈跳視窗 -->
	<script src="assets/js/sweetalert2.all.js"></script>
	<!-- 彈跳視窗 -->

	<script type="text/javascript">

	$(window).on("load resize ", function() {
		var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
		$('.tbl-header').css({'padding-right':scrollWidth});
	}).resize();
	// $('.login100-more').css('background-image', 'url(assets/images/0001.jpg)');

	$(document).ready(function() {
		<?php
		if(isset($code)){
			if ($code == 200) {
		?>
		swal({
			title: '成功!',
			text: "<?=$msg;?>",
			type: 'success'
		});
		<?php
			}else if($code == 404){
		?>
		swal({
			title: '有錯誤哦!',
			text: "<?=$msg;?>",
			type: 'success'
		}).then((result) => {
			if (result.value) {
				if ("<?=$url;?>" == "out") {
					document.location.href = "<?=base_url();?>in";
				}else if("<?=$url;?>" == "in"){
					document.location.href = "<?=base_url();?>out";
				}
			}
		});
		<?php
			} //404
		} // isset($code)
		?>
		// 防止重新整理
	  $(this).keydown(function(e) {
	    if (e.ctrlKey && e.which == 82 || e.which == 116) {
				// 82 = r
				// 116 = F5
				if (e.preventDefault) {
					e.preventDefault();
					if ("<?=$url;?>" == "out") {
						document.location.href = "<?=base_url();?>in";
					}else if("<?=$url;?>" == "in"){
						document.location.href = "<?=base_url();?>out";
					}
				}else {
					return false;
				}
	    }
	  });
	});
	</script>
</body>
</html>
