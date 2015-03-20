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
					<form>
						<div class="myForm myform-900 margin-top">
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
								<div class="text"><a href="#" class="btn">修改密碼</a><div><span style="font-size:14px"><br>
							    系統將會發送密碼修改信件至您的註冊信箱，請依照信件內容<br>
							    進行修改密碼。</span></div></div>
							</div>
                            <div class="form-field">
								<label for="" class="lower">聯絡電話：</label>
								<div class="text wid-800"><input type="text" class="wid-200" placeholder="輸入電話號碼"></div>
							</div>
                            <div class="form-field">
								<label for="" class="lower">聯絡地址：</label>
								<div class="text wid-800"><input type="text" class="wid-400" placeholder="輸入聯絡地址"></div>
							</div>
                            <div class="form-field">
								<label for="" class="lower">實名驗證：</label>
								<div class="text"><a href="#" class="btn">進行實名驗證</a>
								<div><span style="font-size:14px"><br>
							    需通過實名驗證才能進行收益提領。審核資料需等候1至3個工<br>
						      作日，敬請耐心等待。</span></div></div>
					    </div>
                        <div class="form-field">
								<label for="">實名驗證：</label>
								<div class="text">已驗證<div><span style="font-size:14px"><br>
							    姓名或戶籍地址有變更請<a href="#" class="btn">重新驗證</a></span></div></div>
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