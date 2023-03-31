<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css">
		<style>
			html {
				background-color: #0A4377;
			}
			textarea {
				position: relative;
				top: 30px;
				left: 135px;
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
			//$_SESSION['homepage_id'] = $_GET['homepage_id'];
			//$username = $_GET['username'];
			$_SESSION['group_id'] = $_GET['group_id'];

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
		<div class="write-post-background-white">
			<div class="write-post-background-grey">
					<div class="create-group-note">
						<p class="create-group-note-font"> Write a new post 
					</div>
					<form method="POST">
						<div class="group-title-header">
							<p><strong>Post Title:</strong></p>
							<input type="text" name="title" style="font-size:20pt;" size="53">
						</div>
						<div class="post-body-header">
							<p><strong>Post Body:</strong></p>
						</div>
						<textarea class="post-text-area" name="post-body" rows="30" cols="103"></textarea>
						<button type="submit" name="create" class="create-post-button">Create Post</button>
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
					$title = $_POST['title'];
					$post_body = $_POST['post-body'];

					$q = "INSERT INTO post (post_id, title, post_body, likes_count, username, group_id, homepage_id) VALUES (NULL, '".$title."', '".$post_body."', NULL, '".$_SESSION['username']."', '".$_SESSION['group_id']."', NULL)";
					$mysqli->query($q); 

					$new_link = "ViewGroup.php?group_id=".$_SESSION['group_id']."&username=".$_SESSION['username'];
					header("Location:".$new_link.""); 
					exit(); 
				}
			?>


	</body>


</html>
