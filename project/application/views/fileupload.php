<html>
<head>
<title>Upload Form</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color: lightgreen;">

<div class="jumbotron" style="width:500px;margin-left: 400px;margin-top: 200px;padding: 80px;">
	<h3 style="margin-top: -30px;"><b>Upload csv file<b></h3>
	<form action="<?= base_url().index_page().'/Auth/upload_file';?>" method="post" enctype="multipart/form-data">
		<input type="file" name="userfile" size="20" />
      <br /><br />
        <input type="submit" value="upload" />
	</form>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
