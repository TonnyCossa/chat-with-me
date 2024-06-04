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
		<section class="chat-area">
			<header>
				<?php
					include_once "php/config.php";
					$user_id = mysqli_real_escape_string($conn, $_GET['grupo_id']);
					$sql = mysqli_query($conn, "SELECT *FROM users WHERE unique_id = {$user_id}");

					if (mysqli_num_rows($sql) > 0) {
						// code...
						$row = mysqli_fetch_assoc($sql);

						$random_id =64274037;
					}
				?>
				<a href="user.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
				<img src="php/img/ground.png" alt="">
				<div class="details">
					<span>Grupo chat</span>
					<p>Disponível</p>
				</div>
			</header>
			
			<div class="chat-box">		</div>

			<form action="#" class="typing-area" autocomplete="off">
				<input type="text" name="outgoing_id" value="<?php echo $user_id;?>" hidden>
				<input type="text" name="incoming_id" value="<?php echo $random_id;?>" hidden>
				<input type="text" name="message" class="input-field" placeholder="Type a message here...">
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>
		</section>
	</div>
	<script src="js/grupo.js"></script>
</body>
</html>