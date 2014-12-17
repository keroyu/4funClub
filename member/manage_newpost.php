<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<title>4 FUN CLUB 文章管理</title>
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
			<ul class="tabsbox-nav tabs-list col-4" data-trigger="click">
				<li class="tabs-list-item"><div><a href="manage_article.html">文章管理</a></div></li><li class="tabs-list-item"><div><a href="manage_financial.html">收益報告</a></div></li><li class="tabs-list-item"><div><a href="manage_profile.html">個人資料</a></div></li><li class="active tabs-list-item"><div><a href="manage_newpost.html">發表文章</a></div></li>
			</ul>
			<div class="tabsbox-content">
				<div class="bordered text-center">
					<div class="newPostEditor">
						<ul class="newPostEditor-leftcol tabs-vertical" data-trigger="click">
							<li class="tabs-list-item active" data-toggle="quickPic"><a href="#">快速發圖文</a></li>
							<li class="tabs-list-item" data-toggle="quickVid"><a href="#">快速發影片</a></li>
							<li class="tabs-list-item" data-toggle="richText"><a href="#">多功能編輯器</a></li>
						</ul>
						<div class="tab-pane active" id="quickPic">
							<div class="newPostEditor-rightcol" >
								<form action="">
									<div class="form-field">
										<select name="" id="">
											<option value="">選擇分類</option>
										</select>
									</div>
									<div class="form-field">
										
									</div>
									<div class="form-field">
										
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- wrapper indexMain end -->
<?php require_once "../_php/footer.php" ?>
</div>
</body>
</html>