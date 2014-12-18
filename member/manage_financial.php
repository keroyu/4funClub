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
<style>
.ui-datepicker-calendar { display: none; }
</style>
<div class="page">
	<?php require_once  "../_php/header.php" ?>
	<div class="adbox adbox-fw hidden-md">
		<div class="wrapper"><img src="../upload/720x90.jpg" alt=""></div>
	</div>
	<div class="wrapper">
		<div class="memberPanel">
			<ul class="tabsbox-nav tabs-list col-4">
				<li><div><a href="manage_articles.html">文章管理</a></div></li><li class="active"><div><a href="manage_financial.html">收益報告</a></div></li><li><div><a href="manage_profile.html">個人資料</a></div></li><li><div><a href="manage_newpost.html">發表文章</a></div></li>
			</ul>
			<div class="tabsbox-content">
				<div class="bordered text-center">
					<div class="memberPanel-inner">
						<ul class="leftcol tabs-vertical" data-trigger="click">
							<li class="tabs-list-item active" data-toggle="#details"><a href="#">收益明細</a></li>
							<li class="tabs-list-item" data-toggle="#earnings"><a href="#">目前收益</a></li>
							<li class="tabs-list-item" data-toggle="#records"><a href="#">提領記錄</a></li>
							<li class="tabs-list-item" data-toggle="#invite"><a href="#">好友招募</a></li>
						</ul>
						<div class="rightcol" >
							<div class="tab-pane active" id="details">
								<div class="forum-field">
									<div class="input-withIcon">
										月份：<input type="text" class="monthPicker"> <i class="fa fa-calendar"></i> 
									</div><a href="" class="btn btn-primary">查詢</a>
								</div>
								<table class="mytable" width="700">
									<thead>
										<tr>
											<th width="25%">日期</th>
											<th width="25%">瀏覽數</th>
											<th width="25%">收益</th>
											<th width="25%">備註</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$str = '<tr> <td>11/07</td> <td>999,999,999</td> <td>999,999</td> <td>999,999,999</td> </tr>';
									for($i=0; $i<15; $i++) {
										echo $str;
									} ?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane" id="earnings">
								<div class="wid-500 padding-btm">
									<h4>收益<span class="pull-right small">※金額單位皆為台幣</span></h4>
									<ul class="termlist">
										<li><span class="dt">今日</span><span class="dd">NT$ 500.00</span></li>
										<li><span class="dt">昨日</span><span class="dd">NT$ 999.00</span></li>
										<li><span class="dt">本月</span><span class="dd">NT$ 89,555.00</span></li>
										<li><span class="dt">尚未提領</span><span class="dd">NT$ 89,555.00</span></li>
									</ul>
									<div class="text-right margin-tb">
										<a href="" class="btn btn-primary btn-md">我要提領</a>
									</div>
									<div class="line" style="padding-top: 30px; margin-bottom: 30px; "></div>
									<h4>瀏覽數</h4>
									<ul class="termlist">
										<li><span class="dt">今日</span><span class="dd">1,188</span></li>
										<li><span class="dt">昨日</span><span class="dd">24,267</span></li>
										<li><span class="dt">本月</span><span class="dd">999,999</span></li>
									</ul>
								</div>
								
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