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
			.page-title {
				background-color: #26292B;
				height: 100px;
				display: flex;
				justify-content: center;
				//text-align: center;
			}
			.post-container {
				background-color: #D9D9D9;
				//position: relative;
				//border: 3px solid red;
				//width: 300px; 
				height: 650px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.post-print {
				background-color: #26292B;
				width: 1050px;
				height: 600px;
				position: absolute;
				//top: 50%;
				//left: 50%;
				//margin: -50px 0 0 -50px;
			}
			.post-profile-photo {
				position: relative;
				//border: 1px solid red;
				width: 150px;
				height: 150px;
				top: 5%;
				left: 5%;
			}
			.post-title {
				position: relative;
				//border: 1px solid red;
				width: 500px;
				height: 100px;
				top: -17%;
				left: 22%;
				//text-align: center;
			}
			.post-body-text {
				position: relative;
				//border: 1px solid red;
				width: 940px;
				height: 300px;
				top: -7%;
				left: 5%;
			}
			.reply-to-this-post {
				position: relative;
				//border: 3px solid red;
				width: 200px;
				height: 40px;
				top: -15%;
				left: 5%;
				text-align: center;
			}
			.like-the-post {
				position: relative;
				//border: 3px solid red;
				width: 50px;
				height: 40px;
				top: -26%;
				left: 90%;
				text-align: center;
			}
			.likes-count {
				position: relative;
				//border: 3px solid red;
				width: 50px;
				height: 40px;
				top: -36%;
				left: 86%;
				text-align: center;
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
			h4 {
				font-size: 30px;
				color: #D9D9D9;
			}
			h5 {
				font-size: 20px;
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

			//do session here
			$_SESSION['username'] = $_GET['username'];
			$_SESSION['post_id'] = $_GET['post_id'];
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
				$query_string = "SELECT name FROM groups";
				$group_names = $mysqli->query($query_string); 

				while ($group = $group_names->fetch_assoc()) {
					$group_link = "ViewGroup.php?name=".$group['name'];
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
					<div class="post-body-header">
						<p><strong>Comment Body:</strong>
					</div>
					<form method="POST">
						<textarea type="text" name="comment_body" class="post-text-area" rows="30" cols="103"></textarea>
						<button type="submit" name="create" class="create-post-button">Comment</button>
					</form>
			</div>
				<?php
					if (isset($_POST['create'])) {
						$q= "INSERT INTO comment (comment_id, comment_body, username, post_id) VALUES (NULL, '".$_POST['comment_body']."', '".$_SESSION['username']."', '".$_SESSION['post_id']."')";
						$mysqli->query($q); 

						$link = "ViewPost.php?post_id=".$_SESSION['post_id']."&username=".$_SESSION['username'];
						header("Location:".$link."");
						exit();
					}
				?>
		</div>
		<div class="important-links">
			<a href="https://www.woundedwarriorproject.org/"><img class="wounded-warrior-link" src="woundedWarrior.jpg"></a>
			<a href="https://www.va.gov/"><img class="veterans-affairs-link" src="VeteransAffairs.jpg"></a>
			<a href="https://www.veteranscrisisline.net/"><img class="veterans-crisis-link" src="veteransCrisis.jpg"></a>
			<a href="https://teamneverquit.com/"><img class="lone-survivor-foundation" src="loneSurvivor.jpg"></a>
			<a href="https://ptsdusa.org/"><img class="ptsd-foundation-link" src="PTSD.jpg"></a>
			</div>
	</body>


</html>
