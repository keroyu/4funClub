<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<title>4 FUN CLUB 收益報告</title>
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
										月份：<input type="text" class="monthPicker">
									</div><a href="" class="btn btn-primary">查詢</a>
								</div>
								<table class="mytable margin-tb" width="700">
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
									$str = '<tr> <td>11/07</td> <td>999,999,999</td> <td>999,999</td> <td>額外獎金</td> </tr>';
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
									<div class="text-right margin-btm margin-tpsm">
										<a href="#" class="btn btn-primary btn-md switchToggle" data-show="#getMoneyBox" id="getMoneyBoxBtn">我要提領</a>
										<div id="getMoneyBox" class="margin-top sendDataBox" style="display: none;">
											<div class="form-field">
												欲提款金額：<input type="text" class="input-big wid-150" placeholder="0"> 元
											</div>
											<div class="alert-box">您輸入的金額大於可提領金額，請重新輸入</div>
											<div class="btns">
												<a href="#" class="btn btn-primary btn-md">確定</a><a href="" class="btn btn-default btn-md switchToggleClose" data-hide="#getMoneyBox" data-show="#getMoneyBoxBtn">取消</a>
											</div>
										</div>
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
							<div class="tab-pane" id="records">
								<div class="text-center">
									<table class="mytable" width="600px">
										<thead><tr><th width="50%">提領日期</th><th width="50%">金額 (新台幣)</th></tr> </thead>

										<tbody>
										<?php $str = '<tr> <td>2014/11/07</td> <td>100,555</td> </tr>';
										for($i=0; $i<10; $i++){ echo $str; } ?>
										</tbody>
									</table>
									<ul class="pages margin-tb">
										<li class="prev"><a href="#"><i class="fa fa-arrow-left"></i>上10頁</a></li>
										<?php 
										for ($i=1; $i<11; $i++) {
											echo '<li><a href="#">'.$i.'</a></li>';
										} ?>
										<li class="next"><a href="#">下10頁<i class="fa fa-arrow-right"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="tab-pane" id="invite">
								<div class="form-field">您的招募代碼：<input type="text" class="input-big wid-150" value="abcd"> <a href="#" class="btn btn-primary btn-md">複製</a></div>
								<p class="red fs-18 margin-top">活動時間內若達到指定招募人數，即可獲得招募獎勵<br>
								招募方式：其他會員於 <a href="#">[個人資料]</a> 頁面輸入您的招募代碼</p> 
								<div class="line margin-tb"></div>
								<p class="fs-18">您目前招募了 xxx 人，目前獎金為 <span class="red">NT$2,000</span><br>距離下一獎勵等級尚差 <span class="red">2</span> 人，就可獲得獎金 <span class="red">NT$2,500</span></p>
								
								<h4>獎勵及條件</h4>
								<table class="mytable margin-btm" width="500">
									<thead>
										<tr>
											<th width="150">獎勵金額</th><th width="120">需求階級</th><th>條件</th>
										</tr>
									</thead>
									<tbody>
										<tr><td>NT$500</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$1000</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$1500</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$2000</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$2500</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$5000</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$7500</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$10,000</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$15,000</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
										<tr><td>NT$20,000</td><td>小康以上</td><td>招募10位小康以上會員</td></tr>
									</tbody>
								</table>
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