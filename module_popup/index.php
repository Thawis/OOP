<!DOCTYPE html>
<html>
<head>
	<title>POP UP</title>
</head>
<body>
<!-- 	<button onclick='window.open ("http://www.javascript-coder.com",
	"mywindow","menubar=1,toolbar=no,scrollbars=no, menubar=no, status=no, directories=no,resizable=1,width=800,height=800");'>TEST POPUP</button> -->
	<button onclick="pop_upload('upload.php?p=4','popup_test',1360,800)">POPUP LINK</button>

	<script>
		function pop_upload(url,title,w,h){
			var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
			var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

			var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
			var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

			var left = ((width / 2) - (w / 2)) + dualScreenLeft;
			var top = ((height / 2) - (h / 2)) + dualScreenTop;
			window.open(url,
				title,"menubar=1,toolbar=no,scrollbars=no, menubar=no, status=no, directories=no,resizable=1,width="+w+",height="+h+",top="+top+",left="+left); return false;
		}	
	</script>

</body>
</html>