<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<title>4 FUN CLUB 查詢密碼</title>
<?php require_once "../../_php/head.php" ?>
</head>
<body>
<div class="page">
	<?php require_once "../../_php/header.php" ?>
	<div class="wrapper">
		<div class="regMain">
			<h2>查詢密碼</h2>
			<div class="bordered margin-tb">
				<p>密碼將會寄送到您註冊填寫的email信箱</p>
				<div class="myForm">
					<div class="form-field">
						<label for="" class="lower">Email：</label>
						<div class="text"><input type="text" placeholder="輸入帳號 (Email)" class="input-md wid-300"></div>
					</div>
					<span class="alert-box">Email不存在，請重新輸入</span>
					<div class="form-btns">
						<a href="#" class="btn btn-md btn-primary">送出</a>
					</div>
				</div>
			</div>
		</div>		
	</div>
<!-- wrapper indexMain end -->
<?php require_once "../../_php/footer.php" ?>
</div>
</body>
</html>