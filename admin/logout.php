<?php
	session_start();
	unset($_SESSION['auth']);
	header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HSP Digital Marketing Agency</title>
	<link rel="stylesheet" href="../library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../images/16x16 px - png-logo.png">
</head>
<body>

<!-- modal dialog -->
	<div class="modal" id="sign-out">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Want to leave?</h4>
					<button type="btn" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					Press logout to leave
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" data-dismiss="modal">Stay</button>
					<button class="btn btn-danger" data-dismiss="modal">Logout</button>
				</div>
			</div>
		</div>
	</div>
<!-- modal dilog -->

<!-- modal dialog -->
	<!-- <div class="modal" id="sign-out">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Want to leave?</h4>
					<button type="btn" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					Press logout to leave
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" data-dismiss="modal">Stay</button>
					<a href="index.php" class="btn btn-danger" data-dismiss="modal">Logout</a>
				</div>
			</div>
		</div>
	</div> -->
<!-- modal dilog -->

<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>
