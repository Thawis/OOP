<?php 
session_start();
require_once 'config.php';
require_once 'connection.php'; 

$ID = intval($_GET['ID']);

$sql = "SELECT * FROM news WHERE ArticleID = $ID AND CategoryID = 4 AND Active = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>INSPINIA | Search Page</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<style>
	.rotate90 {
		-webkit-transform: rotate(270deg);
		-moz-transform: rotate(270deg);
		-o-transform: rotate(270deg);
		-ms-transform: rotate(270deg);
		transform: rotate(270deg);
	}
</style>
</head>
<body class="gray-bg">
	<?php 
	$sql_file = "SELECT * FROM news LEFT JOIN file ON news.ArticleID = file.ArticleID
	WHERE news.ArticleID = $ID AND news.CategoryID = 4";					$stmt_file = $conn->prepare($sql_file);
	$stmt_file->execute();
	?>
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><?=$result['Title']?></h5>
					</div>
					<div class="ibox-content">
						<p><?=$result['TitleLink']?></p>
						<!-- <img src="Portals/EasyDNNNews/1364/20170824154045385_0001.jpg" alt="..." class="img-thumbnail rotate90" width="304" height="236"> -->
					</div>
					
					<?php 
					while ($result_file = $stmt_file->fetch()) { $path = $result_file['File_Path'].$result_file['File_Name'];?>
					<div class="ibox-footer">
						<span class="pull-right">
							<a href="<?=$path?>" download target="_blank">ดาวน์โหลดไฟล์</a></br>
						</span>
						<?=$result_file['File_Name']?>
					</div>					
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>