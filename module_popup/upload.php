<?php
session_start();
$pp = $_GET['p'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo 'UPlOAD PAGE PHP value : '.$pp;?>
	<button onclick="window.close();">Close</button>
	<script>
		window.onunload = refreshParent;
		function refreshParent() {
			window.opener.location.reload();
		}
	</script>
</body>
</html>