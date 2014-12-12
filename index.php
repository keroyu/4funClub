<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<head>
<?php require_once "_php/head.php" ?>
</head>
<body>
<div class="page">
<?php require_once "_php/header.php" ?>
<?php include "_php/adbox_720x90.php" ?>
<div class="wrapper indexMain">
	<div class="row">
		<div class="row-col col-640">
			<?php include "_php/widgets/mediablocks.php" ?>
		</div>
		<!-- col-640 end -->
		<div class="row-col col-300 hidden-sm">
			<?php 
				include "_php/adbox_300x300.php";
				include "_php/widgets/tabsbox.php";
				include "_php/adbox_300x600.php";
			 ?>
		</div>
		<!-- col-300 end -->
	</div>
	<!-- row end -->
</div>
<!-- wrapper indexMain end -->
<?php require_once "_php/footer.php" ?>
</div>
</body>
</html>