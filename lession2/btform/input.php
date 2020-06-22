<?php	
	$isPwdCheck = '123';
	$isNameCheck = 'Quan';
	//$Checkemail = 'vipvigame@gmail.com';
	if(!empty($_POST)){
	$Username = $_POST['UserName'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if($Username == $isNameCheck && $Password == $isPwdCheck){
		header('Location:Welcome.php?name='.$Username.'&password='.$Password.'&email='.$Email);
		die();
		
	}else{	
		header('Location:input.php');
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Default Information</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Form - Input User's Detail Information</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="">
					<div class="form-group">
					  <label for="usr">User Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="UserName">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="Email">
					</div>			
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="Password">
					</div>					
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>