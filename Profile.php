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
			.profile-background {
				background-color: #26292B; 
				position: absolute;
				//border: 3px solid red;
				top: 0px;
				left: 800px;
				width: 900px;
				height: 1100px;
			}
			.profile-photo {
				position: relative;
				//border: 3px solid red;
				top: 40px;
				left: 40px;
				width: 300px;
				height: 300px;
			}
			.username-heading {
				position: relative;
				top: -260px;
				left: -30px;
				width: 300px;
				height: 50px;
			}
			.biography {
				position: relative;
				//border: 3px solid red;
				top: -230px;
				left: 373px;
				width: 420px;
				height: 200px;
			}
			.branch {
				position: relative;
				//border: 3px solid red;
				top: -180px;
				left: -360px;
				width: 1000px;
				height: 50px;
			}
			.specialty {
				position: relative;
				//border: 3px solid red;
				top: -150px;
				right: 360px;
				width: 1000px;
				height: 50px;
			}
			.years-served {
				position: relative;
				//border: 3px solid red;
				top: -120px;
				left: -360px;
				width: 1000px;
				height: 50px;
			}
			.vets-homepage {
				position: relative;
				//border: 3px solid red;
				bottom: -250px;
				left: 40px;
				width: 1000px;
				height: 50px;
			}
			.family-homepage {
				position: relative;
				//border: 3px solid red;
				bottom: -176px;
				left: 315px;
				width: 1000px;
				height: 50px;
			}
			.settings {
				position: relative;
				//border: 3px solid red;
				bottom: -100px;
				left: 663px;
				width: 1000px;
				height: 50px;
			}
			.link {
				color: #0C95F9;
				font-size: 20pt;
			}
			h1 {
				font-size: 30px;
				color: #D9D9D9;
			}
			p {
				font-size: 20px;
				color: #D9D9D9;
			}

		</style>
	</head>
	<body>

		<?php 
			// Setting variables for connecting to database
			$server_name = 'localhost';
			$user_name = 'root';
			$password = "";
			$database_name = 'project';
			$mysqli = new mysqli($server_name, $user_name, $password, $database_name);

			$username = $_GET['username'];

			$query_string = "SELECT * FROM user WHERE username='".$username."'";
			$posts = $mysqli->query($query_string); 
			$post = $posts->fetch_assoc(); 

		?>
		<div class="profile-background">
			<img class="profile-photo" src="stockProfile.jpg">
			<div class="username-heading"><?php
				echo "<h1><strong>".$post['username']."</strong></h1>";
				?>
			</div>
			<div class="biography">
				<?php
				echo "<p>".$post['biography']."</p>"
				?>
			</div>
			<div class="branch"><?php
				echo "<h1><strong>Branch: ".$post['branch']."</strong></h1>";
				?>
			</div>
			<div class="specialty"><?php
				echo "<h1><strong>Military Specialty: ".$post['specialty']."</strong></h1>";
				?>
			</div>
			<div class="vets-homepage"><?php
				$veterans_link = "HomePage.php?username=".$post['username'];
				echo '<a href="'.$veterans_link.'""><p class="link">Veterans Homepage</p></a>';
				?>
			</div>
			<div class="family-homepage"><?php
				$family_link = "FamilyHomePage.php?username=".$post['username'];
				echo '<a href="'.$family_link.'"><p class="link">Family/Friends Homepage</p></a>';
				?>
			</div>
			<div class="settings">
				<p class="link">Account Settings</p>
			</div>
		</div>
	</body>


</html>
