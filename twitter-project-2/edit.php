<?php include('header.php'); ?>
		<ul class="menu">
            <li><i class="material-icons dp48 gray left">home</i><a href="index.php">Home Page</a></li>
            <li><i class="material-icons dp48 gray left">dashboard</i><a href="index.php">News Feed</a></li>
            <li class="dropdown active"><i class="material-icons dp48 teal left">supervisor_account</i> User Actions
            </li>
            <ul class="active">
                <li><a href="edit_profile.php">Edit profile</li>
                <li class="active"><a href="create_post.php">Create post</li>
                <li><a href="edit_posts.php">Edit or delete posts</li>
                <li><a href="own_posts.php">See own posts</li>
                <li><a href="all_tweets.php">See all posts </li>
                <li><a href="logout.php">Logout</a> </li>
            </ul>
        </ul>
		<div class="content">
			<form action="to_changetweet.php" method="post">
						<?php 
						require_once 'db.php';
						$t_id = $_POST['tweet_id'];
						$sql="SELECT tweets.text FROM `tweets`WHERE tweets.tweet_id='$t_id'";
    					$res=$connect->query($sql);
						 foreach($res as $ap)
  						 {
						$text = $ap['text'];
						 }
						?>
						
					<input type="text" class="create-post" name="tweettext" value="<?php echo $text ?>">
					<input type="hidden" name="tweet_id" value="<?php echo $t_id;?>">
					<button type="submit" class="btn-create">Change</button>	
				</form>
				<?php
				if(isset($_SESSION['message'])){
                        echo '<div style="height:60px; min-height: 10%; border: 2px solid #ffa908; border-radius: 3 px; margin: 40px; text-align: center; font-weight: bold; background-color: green;"> <p>' . $_SESSION['message'] . '</p></div>';
                    }
              unset($_SESSION['message']);
           ?>
</div>
    </main>
</body>
</html>


