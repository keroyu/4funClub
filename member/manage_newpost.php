<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<title>4 FUN CLUB 發表文章</title>
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
				<li><div><a href="manage_articles.html">文章管理</a></div></li><li><div><a href="manage_financial.html">收益報告</a></div></li><li><div><a href="manage_profile.html">個人資料</a></div></li><li class="active"><div><a href="manage_newpost.html">發表文章</a></div></li>
			</ul>
			<div class="tabsbox-content">
				<div class="bordered text-center">
					<div class="memberPanel-inner">
						<ul class="leftcol tabs-vertical" data-trigger="click">
							<li class="tabs-list-item active" data-toggle="#quickPic"><a href="#">快速發圖文</a></li>
							<li class="tabs-list-item" data-toggle="#quickVid"><a href="#">快速發影片</a></li>
							<li class="tabs-list-item" data-toggle="#richText"><a href="#">多功能編輯器</a></li>
						</ul>
						<div class="rightcol" >
							<div class="tab-pane active" id="quickPic">
								<form action="">
									<div class="form-field">
										<select name="" id="">
											<option value="">選擇分類</option>
										</select>
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="標題（4-20個中文字）">
									</div>
									<div class="form-field">
										<input type="file" name="datafile" placeholder="直接輸入圖片網址" size="40"><br>
										<button>上傳</button>
										<p class="info">上傳圖片（支援 .jpg、.png、.gif格式），檔案大小請限制在 3MB 以內</p>
									</div>
									<div class="form-field">
										<textarea name="" id="" cols="65" rows="10">文字敘述</textarea>
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="參考來源（可不填）">
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="幫文章加上 tag（以逗號分隔，可不填）">
									</div>
									<div class="form-btns">
										<a href="#" class="btn btn-md btn-primary">送出</a>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="quickVid">
								<form action="">
									<div class="form-field">
										<select name="" id="">
											<option value="">選擇分類</option>
										</select>
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="標題（4-20個中文字）">
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="影片網址">
										<p class="info">適用Youtube、土豆、優酷等網站連結</p>
									</div>
									<div class="form-field">
										<textarea name="" id="" cols="65" rows="10">文字敘述</textarea>
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="參考來源（可不填）">
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="幫文章加上 tag（以逗號分隔，可不填）">
									</div>
									<div class="form-btns">
										<a href="#" class="btn btn-md btn-primary">送出</a>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="richText">
								<form action="">
									<div class="form-field">
										<select name="" id="">
											<option value="">選擇分類</option>
										</select>
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="標題（4-20個中文字）">
									</div>
									<div class="form-field">
										<textarea name="" id="" cols="65" rows="10">文字內容</textarea>
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="參考來源（可不填）">
									</div>
									<div class="form-field">
										<input type="text" class="wid-500" placeholder="幫文章加上 tag（以逗號分隔，可不填）">
									</div>
									<div class="form-btns">
										<a href="#" class="btn btn-md btn-primary">送出</a>
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