<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<title>4 FUN CLUB 個人資料</title>
<?php require "../_php/head.php" ?>
</head>
<body>
<div class="page">
	<?php require_once  "../_php/header.php" ?>
	<div class="adbox adbox-fw hidden-md">
		<div class="wrapper"><img src="../upload/720x90.jpg" alt=""></div>
	</div>
	<div class="wrapper">
		<div class="memberPanel">
			<ul class="tabsbox-nav tabs-list col-4">
				<li><div><a href="manage_articles.html">文章管理</a></div></li><li><div><a href="manage_financial.html">收益報告</a></div></li><li class="active"><div><a href="manage_profile.html">個人資料</a></div></li><li><div><a href="manage_newpost.html">發表文章</a></div></li>
			</ul>
			<div class="tabsbox-content text-center">
				<div class="bordered">
					<form action="">
						<div class="myForm margin-top">
							<div class="form-field">
								<label for="">註冊方式：</label>
								<div class="text">Facebook</div>
							</div>
							<div class="form-field">
								<label for="">會員階級：</label>
								<div class="text">平民</div>
							</div>
							<div class="form-field">
								<label for="">會員暱稱：</label>
								<div class="text">會員暱稱ABCDEFG<a href="#" class="pull-right"><i class="fa fa-pencil-square-o"></i></a></div>
							</div>
							<div class="form-field">
								<label for="" class="lower">會員暱稱：</label>
								<div class="text"><input type="text" placeholder="輸入4-12個字元，可使用中英文數字" value="會員暱稱ABCDEFG"><a href="#" class="pull-right lower"><i class="fa fa-check-circle"></i></a></div>
							</div>
							<div class="form-field">
								<label for="">email：</label>
								<div class="text">XXXOOOdsfsdfs@gmail.com</div>
							</div>
							<div class="form-field">
								<label for="" class="lower">密碼：</label>
								<div class="text"><a href="#" class="btn">修改密碼</a></div>
							</div>
							<div class="form-field">
								<label for="" class="lower">提領設定：</label>
								<div class="text"><a href="#" class="btn">歐付寶帳號設定</a></div>
							</div>
							<div class="form-field">
								<label for="" class="lower">招募代碼：</label>
								<div class="text wid-800"><input type="text" class="wid-400" placeholder="輸入其他會員提供的招募代碼"></div>
							</div>
							<div class="form-btns">
								<a href="#" class="btn btn-md btn-primary">送出</a>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
<!-- wrapper indexMain end -->
<?php require_once "../_php/footer.php" ?>
</div>
</body>
</html>