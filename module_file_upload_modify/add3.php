<!DOCTYPE html>
<html>
<head>
	<title>
		Uploader
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-heading">Demo Uploader</div>
		<div class="panel-body">
			<form method='post' action='action.php' enctype='multipart/form-data'>
				<div class="row">
					<div class="col-md-4">
						<input type="file" name="files[]" id="gallery-photo-add" multiple>
					</div>
					<div class="col-md-4">
						<input type='submit' name='submit' value='Upload'>
					</div>
					<div class="col-md-4">
						<input type='button' name='btn1' id='btn1' value='TEST'>
					</div>
				</div>
			</form>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Preview</th>
							<th>File Name</th>
							<th>File Status</th>
							<th>File Size</th>
						</tr>
					</thead>
					<tbody id="bodyImg">
<!-- 						<td id="dt1">TEST</td>
						<td>TEST</td>
						<td>TEST</td>
						<td>TEST</td>
						<td>TEST</td> -->
					</tbody>
				</table>
			</div>
		</div>
	</div>





	<div class="gallery"></div>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(function() {
    // Multiple images preview in browser
    $('#btn1').on('click',function(){

    });
    var imagesPreview = function(input, placeToInsertImagePreview) {

    	if (input.files) {
    		var filesAmount = input.files.length;
    		// var rowimg = $("#dt1");


    		for (i = 0; i < filesAmount; i++) {
    			var myrow = '<td id="dt1"></td>'
    			myrow +='<td>TEST</td>'
    			myrow +='<td>TEST</td>'
    			myrow +='<td>TEST</td>'
    			myrow +='<td>TEST</td>';
    			var reader = new FileReader();
    			$('#bodyImg').append(myrow);
    			reader.onload = function(event) {
    				$($.parseHTML('<img>')).attr('src', event.target.result).appendTo($('#dt1'));

    			}
    			reader.readAsDataURL(input.files[i]);
    		}
    	}

    };

    $('#gallery-photo-add').on('change', function() {
    	imagesPreview(this, 'div.gallery');
    	// alert(this.files[0].size);
    	var num = $('#gallery-photo-add').get(0).files;
    	for (i = 0; i < num.length; i++)
    	{
    		console.log(this.files[i].size);
    	}
    });
});
</script>
</body>
</html>