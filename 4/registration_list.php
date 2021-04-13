<?php
include_once("config.php");

$list = mysqli_query($mysqli, "SELECT * FROM registration ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="jumbotron">
      <h1 style="align:middle;">CRUD LAB TEST</h1>
			<p>The code written by ehfaz ahmed adnan with html, css, boostrap, php and mysql with responsive design</p>
		</div>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
			
      </tr>
    </thead>
    <tbody>
			<?php
			while($elem = mysqli_fetch_array($list)) {
				echo "<tr>";
				echo "<td>".$elem['name']."</td>";
				echo "<td>".$elem['email']."</td>";
				echo "<td>".$elem['password']."</td>";
				
				echo "<td> <a href=\"delete.php?id=$elem[id]\" onClick=\"return confirm('Are you want to delete thi profile?')\">Delete</a></td>";
			}
			?>
    </tbody>
  </table>
	
</div>
</body>
</html>
