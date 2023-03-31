<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css">
		<style>
			html {
				background-color: #0A4377;
			}
			.group-container {
				//border: 3px solid red;
				height: 60px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.profile-box-username {
				position: relative;
				//border: 3px solid red;
				top: 10px;
				left: 120px;
				width: 150px;
				height: 50px;
				text-align: center;
			}
			h5 {
				font-size: 20px;
			}
		</style>
	</head>

	<body>
		<?php
			session_start();
			$_SESSION['username'] = $_GET['username'];

			// Setting variables for connecting to database
			$server_name = 'localhost';
			$user_name = 'root';
			$password = "";
			$database_name = 'project';
			$mysqli = new mysqli($server_name, $user_name, $password, $database_name);

		?>
		<div class="float-container">
			<div class="float-left-child">
				<?php
					$homelink = "HomePage.php?username=".$_SESSION['username'];
					echo '<a href="'.$homelink.'"><img class="veterans" src="veterans.jpg"></a>';
					echo '<a href="'.$homelink.'"><h1><strong>For Veterans</strong></h1></a>';
				?>
			</div>
			<div class="float-right-child">
				<?php
					$familylink = "FamilyHomePage.php?username=".$_SESSION['username'];
					echo '<a href="'.$familylink.'"><img class="family-friends" src="FamilyFriends.jpg"></a>';
					echo '<a href="'.$familylink.'"><h2><strong>For Family & Friends</strong></h2></a>';
				?>;
			</div>
		</div>
		<div class="float-left-groups">
			<div class="groups-title">
				<h3><strong>Groups</strong></h3>
			</div>
			<?php
				echo '<div class="create-group">';
				$create_group_link = "CreateGroup.php?username=".$_SESSION['username'];
				echo '<a href="'.$create_group_link.'"><p class="link">+ Create a new group</p></a></div>';
				$query_string = "SELECT * FROM groups";
				$group_names = $mysqli->query($query_string); 

				while ($group = $group_names->fetch_assoc()) {
					$group_link = "ViewGroup.php?group_id=".$group['group_id']."&username=".$_SESSION['username'];
					echo '<div class="group-container"><a href="'.$group_link.'"><h5 class="link">'.$group['name'].'</h5></a></div>';
				}
			?>
		</div>
		<div class="float-right-profile">
			<img class="profile-box-photo" src="stockProfile.jpg"> 
			<?php
				echo '<div class="profile-box-username"><h3><strong>'.$_SESSION['username'].'</strong></h3></div>';
				$profile_link = "Profile.php?username=".$_SESSION['username'];
				echo '<div class="profile-box-profile-link">
					<a href="'.$profile_link.'"><p class="link"><strong>Profile</strong></p></a>
				</div>'
			?>			
		</div>
		<div class="create-group-background">
			<div class="post-one">
					<div class="create-group-note">
						<p class="create-group-note-font"> Groups can be used to discuss specific topics. Create a group to start a new conversation with the community.
					</div>
					<form method="POST">
						<div class="group-title-header">
							<p><strong>Group Title:</strong></p>
							<input type="text" name="name" style="font-size:20pt;" size="53">
						</div>
						<button type="submit" name="create" class="create-group-button">Create Group</button>
					</form>
			</div>
		</div>
		<div class="important-links">
			<a href="https://www.woundedwarriorproject.org/"><img class="wounded-warrior-link" src="woundedWarrior.jpg"></a>
			<a href="https://www.va.gov/"><img class="veterans-affairs-link" src="VeteransAffairs.jpg"></a>
			<a href="https://www.veteranscrisisline.net/"><img class="veterans-crisis-link" src="veteransCrisis.jpg"></a>
			<a href="https://teamneverquit.com/"><img class="lone-survivor-foundation" src="loneSurvivor.jpg"></a>
			<a href="https://ptsdusa.org/"><img class="ptsd-foundation-link" src="PTSD.jpg"></a>
			</div>

			<?php
				// Setting variables for connecting to database
				$server_name = 'localhost';
				$user_name = 'root';
				$password = "";
				$database_name = 'project';
				$mysqli = new mysqli($server_name, $user_name, $password, $database_name);

				if (isset($_POST['create'])) {
					$name = $_POST['name'];

					$q = "INSERT INTO groups (group_id, name) VALUES (NULL, '".$name."')";
					$mysqli->query($q); 

					echo "<meta http-equiv='refresh' content='0'>";
				}

			?>



	</body>


</html>
