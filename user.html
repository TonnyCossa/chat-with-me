<?php
 	session_start();
 	if (!isset($_SESSION['unique_id'])) {
 		// code...
 		header("location: login.php");
 	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChatApp</title>
	<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.0.0-web/css/all.css">
</head>
<body>
	<div class="wrapper">
		<section class="users">
			<header>
				<?php
					include "php/config.php";
					$sql = mysqli_query($conn, "SELECT *FROM users WHERE unique_id = {$_SESSION['unique_id']}");
					if (mysqli_num_rows($sql) > 0) {
						// code...
						$row = mysqli_fetch_assoc($sql);
					}
				?>
				<div class="content">
					<img src="php/img/<?php echo $row['img'] ?>" alt="">
					<div class="details">
						<span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
						<p><?php echo $row['status'] ?></p>
					</div>
				</div>
			<!--	<a href="grupo.php?grupo_id= ? <?php //echo $row['unique_id'] ;?> " class="grupo">Grupo chat</a> -->
				<a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
			</header>
			<div class="search">
				<span class="text">Select an user to start chat</span>
				<input type="text" placeholder="Enter name to search...">
				<button> <i class="fas fa-search"></i> </button>
			</div>
			<div class="users-list"> </div>

		</section>
	</div>
	<div class="group">
		<section class="groups">
		<a href="grupo.php?grupo_id=<?php echo $row['unique_id'] ;?>" class="grupo">Grupo chat</a>
		</section>
	</div>
	<script type="text/javascript" src="js/users.js"></script>

</body>
</html>
