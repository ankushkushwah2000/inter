<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<table class="table table-bordered">
				<tr>
					<th colspan="11" class="text-center bg-info text-white">DATA DISPLAY</th>
				</tr>
				<h1 class="fs-2 text-center text-info"><?php echo$_SESSION['ankush'] ?></h1>	
				<tr>
					<th>S.NO</th>
					<th>size</th>
					<th>prize</th>
					<th>EMI</th>
				</tr>
				<tr>
					<td>1</td>
					<td>32 sq ft</td>
					<td>2500</td>
					<td>12month</td>
				</tr>
				<tr>
					<td>2</td>
					<td>56 sq ft</td>
					<td>4500</td>
					<td>36month</td>
				</tr>
				</table>
				<div>
					<a href="logout.php" class="btn btn-danger">Logout</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>