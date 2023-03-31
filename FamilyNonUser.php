<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css">
		<style>
			html {
				background-color: #0A4377;
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
				border: 1px solid red;
				width: 150px;
				height: 150px;
				top: 5%;
				left: 5%;
			}
			.post-title {
				position: relative;
				border: 1px solid red;
				width: 500px;
				height: 100px;
				top: -17%;
				left: 22%;
				//text-align: center;
			}
			.post-body-text {
				position: relative;
				border: 1px solid red;
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
				top: -6%;
				left: 5%;
				text-align: center;
			}
			.like-the-post {
				position: relative;
				//border: 3px solid red;
				width: 50px;
				height: 40px;
				top: -16%;
				left: 90%;
				text-align: center;
			}
			.likes-count {
				position: relative;
				//border: 3px solid red;
				width: 50px;
				height: 40px;
				top: -26%;
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
			.create-account-message {
				position: relative;
				top: 80px;
				left: 100px;
				width: 200px;
				height: 100px;
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
		<div class="float-container">
			<div class="float-left-child">
				<a href="HomePage.php"><img class="veterans" src="veterans.jpg"></a>
				<a href="HomePage.php"><h1><strong>For Veterans</strong></h1></a>
			</div>
			<div class="float-right-child">
				<a href="FamilyHomePage.php"><img class="family-friends" src="FamilyFriends.jpg"></a>
				<a href="FamilyHomePage.php"><h2><strong>For Family & Friends</strong></h2></a>
			</div>
		</div>
		<div class="float-left-groups">
			<div class="groups-title">
				<h3><strong>Groups</strong></h3>
			</div>
			<div class="group-container"><h5 class="link">Group Name</h5>
			</div>
			<div class="group-container"><h5 class="link">Group Name</h5>
			</div>
			<div class="group-container"><h5 class="link">Group Name</h5>
			</div>

		</div>
		<div class="float-right-profile">
			<div class="create-account-message">
				<h3>Welcome!</h3>
				<p><strong>Create an account and join the conversation</strong></p>
				<a href="CreateProfile.php"><p class="link">Create Account</p></a>
			</div>
		</div>
		<div class="float-middle-posts">
			<div class="page-title"><h4>Family & Friends Page</h4>
			</div>
			<div class="post-container">
				<div class="post-print">
					<img class="post-profile-photo" src="stockProfile.jpg">
					<div class="post-title"><h4>Username | Post Title</h4>
					</div>
					<div class="post-body-text"><p>Something something dark side</p>
					</div>
					<div class="reply-to-this-post"><p class="link">View Replies</p>
					</div>
					<div class="like-the-post"><p class="link">Like</p>
					</div>
					<div class="likes-count"><p>24</p>
					</div>
				</div>
			</div>
			
			<div class="post-container">
				<div class="post-print">
					<img class="post-profile-photo" src="stockProfile.jpg">
					<div class="post-title"><h4>Username | Post Title</h4>
					</div>
					<div class="post-body-text"><p>Something something dark side</p>
					</div>
					<div class="reply-to-this-post"><p class="link">View Replies</p>
					</div>
					<div class="like-the-post"><p class="link">Like</p>
					</div>
					<div class="likes-count"><p>24</p>
					</div>
				</div>
			</div>
			<div class="post-container">
				<div class="post-print">
					<img class="post-profile-photo" src="stockProfile.jpg">
					<div class="post-title"><h4>Username | Post Title</h4>
					</div>
					<div class="post-body-text"><p>Something something dark side</p>
					</div>
					<div class="reply-to-this-post"><p class="link">View Replies</p>
					</div>
					<div class="like-the-post"><p class="link">Like</p>
					</div>
					<div class="likes-count"><p>24</p>
					</div>
				</div>
			</div>
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
