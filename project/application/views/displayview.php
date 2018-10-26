<!DOCTYPE html>
<html>
<head>
<title>Display the view for database</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 style="text-align:center;"><b>Import data from database:</b></h1>
<table class="table table-bordered" border="5" style="width:500px;margin-left:480px;">
                <thead>
                    <tr>
						<th>id</th>
                      <th>Name</th>
                      <th>Full Name</th>
                      <th>gender</th>
                      <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    <?php foreach ($rows as $row): ?>
                    <tr>
						<td><?= $i;?></td>
						<td><?= $row->name;?></td>
						<td><?= $row->fullname;?></td>
						<td><?= $row->gender;?></td>
						<td><?= $row->email;?></td>
                    </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>

                  </tbody>
 </table>            
</body>
</html>
