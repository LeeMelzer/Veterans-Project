<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css">
		<style>
			body {
				background-image: url('Veterans.jpg');
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center center;
			}	


		</style>
	</head>
	<body>
		<div class="welcome-page-background">
			<h3 >Welcome!</h3>
			<p><strong>"Insert name" is a new online community for veterans and their families / friends to connect, share their stories, and find / give support.</strong></p>
			<p><strong>Our community is designed, created, and maintained by veterans, for veterans. We do not require payments or accept donations</strong></p>
			<p><strong>Please feel welcome to share as much or as little information about yourself as you like. Our goal is for this community to help you feel connected to the people facing the same struggles as you</strong></p>
			<p><strong>To our beloved family and friends, we encourage you to share how you support a veteran struggling with PTSD in the hopes that we can all become better for the ones who sacrificed so much for us.</strong></p>
			<p><strong>Create your profile below and join the conversation!</strong></p>
			<form method="POST">
				<div class="select-username">
					<p><strong>Select a username - required*</strong></p>
				</div>
				<input class="username-input" type="text" name="username" style="font-size:20pt;" size="20">
				<div class="select-branch">
					<p><strong>In which branch did you serve?</strong></p>
				</div>
				<input class="branch-input" type="text" name="branch" style="font-size:20pt;" size="20">
				<div class="years-served">
					<p><strong>What was your rank?</strong></p>
				</div>
				<input type="text" class="years-input" style="font-size:20pt;" size="20">
				<div class="military-specialty">
					<p><strong>What was your military specialty</strong></p>
				</div>
				<input class="specialty-input" type="text" name="specialty" style="font-size:20pt;" size="20">
				<div class="about-yourself">
					<p><strong>Tell us a little about yourself</strong></p>
				</div>
				<textarea class="about-yourself-input" name="biography" rows="15" cols="114"></textarea>
				<button type="submit" name="create" class="create-profile-button">Create Profile</button>
			</form>
			<div class="back-homepage">
				<a href="HomeNonUser.php"><p class="link"><< Back to homepage</p></a>
			</div>
		</div>

		<?php 
			// Setting variables for connecting to database
			$server_name = 'localhost';
			$user_name = 'root';
			$password = "";
			$database_name = 'project';
			$mysqli = new mysqli($server_name, $user_name, $password, $database_name);
		
			if (isset($_POST['create'])) {
				$username = $_POST['username'];
				$branch = $_POST['branch'];
				$specialty = $_POST['specialty'];
				$biography = $_POST['biography'];
				$q = "INSERT INTO user (username, biography, profile_photo, branch, specialty) VALUES ('".$username."', '".$biography."', NULL, '".$branch."', '".$specialty."')";
					$mysqli->query($q);
					$profile_link = "Profile.php?username=".$username;

					header("Location:Profile.php?username=".$username);
					exit();
			}






		?>

	</body>


</html>
