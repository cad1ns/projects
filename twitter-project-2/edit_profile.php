<?php include('header.php'); ?>
		<ul class="menu">
            <li><i class="material-icons dp48 gray left">home</i><a href="index.php">Home Page</a></li>
            <li><i class="material-icons dp48 gray left">dashboard</i><a href="index.php">News Feed</a></li>
            <li class="dropdown active"><i class="material-icons dp48 teal left">supervisor_account</i> User Actions
            </li>
            <ul class="active">
                <li class="active"><a href="edit_profile.php">Edit profile</li>
                <li><a href="create_post.php">Create post</li>
                <li><a href="edit_posts.php">Edit or delete posts</li>
                <li><a href="own_posts.php">See own posts</li>
                <li><a href="all_tweets.php">See all posts</li>
                <li><a href="logout.php">Logout</a> </li>
            </ul>
        </ul>
		<div class="content">
			<div class="edit-form">
		<h3 class="">Edit profile</h3>
					<form action="to_changeprofile.php" method="post">
						<div class="form-group">
							<label for="">Name:</label>
							<input type="text" name="name" value="<?php echo $_SESSION['user']['name'];?>">
						</div>
						<div class="form-group">
							<label for="">Surname:</label>
							<input type="text" name="surname" value="<?php echo $_SESSION['user']['surname'];?>">
						</div>
						<div class="form-group">
							<button type="submit">UPDATE PROFILE</button>
						</div>
					</form>
					<h3 class="">Edit password</h3>
					<form action="to_changepassword.php" method="post">
						<div class="form-group">
							<label for="">Old password:</label>
							<input type="password" name="old_password" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="">New password:</label>
							<input type="password" name="new_password" placeholder="New password">
						</div>
						<div class="form-group">
							<label for="">Confirm new password:</label>
							<input type="password" name="confirm_new_password" placeholder="Confirm new password">
						</div>
						<div class="form-group">
							<button type="submit">UPDATE PASSWORD</button>
						</div>
						<?php
                        if(isset($_SESSION['message'])){
                        echo '<div class="mb-3" style="height:60px; min-height: 100%; border: 2px solid #ffa908; border-radius: 3 px; margin: 40px; text-align: center; font-weight: bold; background-color: red;"> <p>' . $_SESSION['message'] . '</p></div>';
                    }
              			unset($_SESSION['message']);
           ?>
					</form>
					</div>
</div>
    </main>
</body>
</html>