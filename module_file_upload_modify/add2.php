<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>jQuery File Upload Example</title>
	<style>
	.bar {
		height: 18px;
		background: green;
	}
</style>
</head>
<body>
	<div class="row">
		<form action="action.php" method="post">
			<div class="col-lg-6"><input id="fileupload" type="file" name="files[]" data-url="server/php/" multiple></div>
			<div class="col-lg-6"><button type="submit" id="btn_test" name="btn_test">Upload</button></div>
		</form>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div id="progress">
				<div class="bar" style="width: 0%;"></div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="container_upload">
<!-- 		<div class="row">
			<div class="col-lg-4">col-lg-4</div>
			<div class="col-lg-4">col-lg-4</div>
			<div class="col-lg-4">col-lg-4</div>
		</div>
		<div class="row">
			<div class="col-lg-4">col-lg-4</div>
			<div class="col-lg-4">col-lg-4</div>
			<div class="col-lg-4">col-lg-4</div>
		</div>	 -->
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/vendor/jquery.ui.widget.js"></script>
	<script src="js/jquery.iframe-transport.js"></script>
	<script src="js/jquery.fileupload.js"></script>
	<script>
		$(function () {
			$('#fileupload').fileupload({
				// dataType: 'json',
				// done: function (e, data) {
				// 	$.each(data.result.files, function (index, file) {
				// 	var name = file.name;
				// 	var temp_size = file.size/1024;
				// 	var img_size = (Math.round(temp_size*100)/100)+' kb.';
				// 	var html = '<div class="row">'
				// 	html += '<div class="col-lg-4"><img src="'+file.thumbnailUrl+'"></div><div class="col-lg-4">'+name+'</div><div class="col-lg-4">'+img_size+'</div>'
				// 	html += '</div>';
				// 	$('#container_upload').append(html);
				// });
				// },
				// progressall: function (e, data) {
				// 	var progress = parseInt(data.loaded / data.total * 100, 10);
				// 	$('#progress .bar').css(
				// 		'width',
				// 		progress + '%'
				// 		);
				// }
				dataType: 'json',
				add: function(e,data){					
					data.context = $('<button/>').text('Upload')
					.appendTo(document.body)
					.click(function () {
						data.context = $('<p/>').text('Uploading...').replaceAll($(this));
						data.submit();
					});
				},
				done:function(e,data){
					data.context.text('Upload finnished.')
				}
			});

			$('#btn_test').on('click',function(){
			// 	$('#container_upload').append('<div class="row"><div class="col-lg-4">col-lg-4</div><div class="col-lg-4">col-lg-4</div>'+
			// '<div class="col-lg-4">col-lg-4</div></div>');
		});
		});
	</script>
</body> 
</html>