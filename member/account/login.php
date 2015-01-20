<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<title>4 FUN CLUB 會員註冊</title>
<?php require_once "../../_php/head.php" ?>
</head>
<body>
<div class="page">
	<?php require_once "../../_php/header.php" ?>
	<div class="wrapper text-center">
		<div class="myForm popup login" style="width: 650px; min-height: 780px; ">
			<h3>會員登入</h3>
			<h4>使用 Facebook 帳號登入</h4>
			<a href="#" class="btn fbreg"></a>
			<h4>使用 Email 帳號登入</h4>
			<div class="form-field">
				<label for="" class="lower">Email：</label>
				<div class="text wid-500"><input type="text" placeholder="Email即為您的登入帳號" class="input-md wid-300"> <input type="checkbox"> 記住密碼</div>
			</div>
			<div class="form-field">
				<label for="" class="lower">密碼：</label>
				<div class="text" style="width: 480px;"><input type="password" placeholder="輸入4-12個英文或數字" class="input-md wid-300"><a href="passwordFind.html" class="link">忘記密碼？</a> | <a href="register.html" class="link">註冊</a></div>
			</div>
			<div class="form-field">
				<label for="" style="opacity: 0;">提示欄</label>
				<div class="text">
					<div class="alert-box">Email 不存在，請重新輸入</div>
				</div>
			</div>
			<div class="form-btns">
				<a href="#" class="btn btn-md btn-primary">登入</a>
			</div>
		</div>

	</div>
<?php require_once "../../_php/footer.php" ?>
</div>
</body>
</html>