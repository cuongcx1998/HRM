<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Quản Lý Cán Bộ, Nhân Viên</title>
		<meta charset = "utf-8" />
		<link rel = "shortcut icon" href = "">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" href = "css/bootstrap.css">
		<link rel = "stylesheet" href = "css/bootstrap.min.css">
		<link rel="stylesheet" href = "css/login.css">
		<style type="text/css">
			#sidelogin{
				width:25%;
				float:right;
				position:relative;
				top:120px;
				right:20px;
				padding:10px;
				border-radius:5px;
				height:350px;
				background-color:rgba(255, 255, 255, 0.6);
				border:1px solid #e7e7e7;
			}
		</style>
	</head>
<body>
	
	<div style="background: url('images/background.jpg'); width: 100%;height:100%;">
		<div class = "navbar navbar-default" style="background-color:#0B0B3B; height:90px;">
			<span class = "navbar-brand"><p style="text-align: center;"><img src="images/logo.jpg" style="display: inline-block;" width="40" height="60"> ĐẠI HỌC BÁCH KHOA HÀ NỘI - VIỆN CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</p></span>
		</div>
		<div id = "top" class = "login">
			<div class = "panel panel-primary">
				<div class = "panel-heading">
					<center><h1 class = "panel-title">Đăng Nhập</h1></center>
				</div>
				<div class = "panel-body">
					<form enctype = "multipart/form-data" action = "login_query.php" role = "form" method = "POST">
						<div class = "form-group">
							<label for = "username">Username</label>
							<input class = "form-control" name = "admin_user" type = "text" required = "required">
						</div>
						<div class = "form-group">
							<label for = "password">Password</label>
							<input class = "form-control" name = "admin_pass" type = "password" required = "required">
						</div>
						<div class = "form-group">
							<button class = "btn btn-block btn-success" name = "login">Login</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

	
</body>
<?php
	include("script.php");
?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>