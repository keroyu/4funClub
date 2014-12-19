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
	<div class="wrapper">
		
		<div class="regMain">
			<h2>會員註冊</h2>
			<div class="bordered">
				<p><input type="checkbox" >我已閱讀並同意 <a href="#" class="link">使用者合約</a></p>
				<h3>快速註冊</h3>
				<a href="#" class="btn fbreg"></a>
				<div class="line"></div>
				<div class="margin-tb">
					<h3>使用信箱註冊</h3>
					<div class="myForm margin-top">
						<div class="form-field">
							<label for="" class="lower">Email：</label>
							<div class="text"><input type="text" placeholder="Email即為您的登入帳號" class="input-md wid-300"></div>
						</div>
						<div class="form-field">
							<label for="" class="lower">密碼：</label>
							<div class="text"><input type="password" placeholder="輸入4-12個英文或數字" class="input-md wid-300"></div>
						</div>
						<div class="form-field">
							<label for="" class="lower">確認密碼：</label>
							<div class="text"><input type="password" placeholder="再次輸入您的密碼" class="input-md wid-300"></div>
						</div>
						<div class="form-field">
							<label for="" class="lower">顯示暱稱：</label>
							<div class="text"><input type="text" placeholder="輸入4-12個字元，可使用中英文數字" class="input-md wid-300"></div>
						</div>
						<div class="form-btns">
							<a href="#" class="btn btn-md btn-primary">送出</a>
						</div>
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