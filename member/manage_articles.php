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
			<ul class="tabsbox-nav tabs-list col-4">
				<li class="active"><div><a href="manage_articles.html">文章管理</a></div></li><li><div><a href="manage_financial.html">收益報告</a></div></li><li><div><a href="manage_profile.html">個人資料</a></div></li><li><div><a href="manage_newpost.html">發表文章</a></div></li>
			</ul>
			<div class="tabsbox-content">
				<div class="bordered text-center">
					<table class="mytable" width="900">
						<thead>
							<tr><th width="100">發佈日期</th><th width="500">文章標題</th><th>本日 / 本月 / 總瀏覽數</th><th width="100">狀態</th></tr>
						<tr>
						</thead>
						<tbody>
							<?php 
							$str = '<tr> <td>2014.11.11</td> <td><p class="title"><a href="#">文章標題放這裡文章標題放這裡文章章標題放這裡文章章標題放這裡文章</a></p></td> <td>15 / 300 / 1673</td> <td><span class="btn success">發佈</span></td> </tr>';
							for ($i=0; $i<10; $i++) { echo $str; }
							 ?>
							}
						</tbody>
					</table>
					<ul class="pages margin-btm">
						<?php 
						for ($i=1; $i<11; $i++) {
							echo '<li><a href="#">'.$i.'</a></li>';
						}
						?>
						<li class="next"><a href="#">下 10 頁<i class="fa fa-arrow-right"></i></a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
<!-- wrapper indexMain end -->
<?php require_once "../_php/footer.php" ?>
</div>
</body>
</html>