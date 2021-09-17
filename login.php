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
<style type="text/css">
	.mt{
		
		margin-bottom: 100px;
		background: aliceblue;
	}
	.ck{
		
		padding-top: 140px;
	}
</style>
</head>
<body>
	<div class="container-fluid ck">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 shadow mt">
					<?php
			if (isset($_SESSION['error'])) {
			 	 echo '<div class="alert alert-danger alert-dismissible fade show       col-lg-12" role="alert">
             '.$_SESSION['error'].'
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                       </button>
                           </div>';
			 	unset($_SESSION['error']);
			 } 
			?>
					<div class="text-center text-info"><h1>login form</h1></div>
					<form method="post" action="login_insert.php">
						<div class="mb-3">
							<label>email</label>
							<input type="text" name="email" value="" class="form-control">
						</div>
						<div class="mb-3">
							<label>password</label>
							<input type="text" name="pass" value="" class="form-control">
						</div>
						<div class="mb-3 text-center">
							<input type="submit" name="" value="submit" class="btn btn-info">
							<a href="logout.php" class="btn btn-danger">logout</a>
							<br> 
							<a href="signup.php">create your account</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>