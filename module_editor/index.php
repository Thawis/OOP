<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<textarea name="editor-ckeditor" id="editor-ckeditor" rows="10" cols="80"></textarea>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'editor-ckeditor' ,{
			filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
		});
	</script>

</body>
</html>