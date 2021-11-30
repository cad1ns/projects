<?php include('header.php'); ?>
		<ul class="menu">
            <li><i class="material-icons dp48 gray left">home</i><a href="index.php">Home Page</a></li>
            <li><i class="material-icons dp48 gray left">dashboard</i><a href="index.php">News Feed</a></li>
            <li class="dropdown active"><i class="material-icons dp48 teal left">supervisor_account</i> User Actions
            </li>
            <ul class="active">
                <li><a href="edit_profile.php">Edit profile</li>
                <li><a href="create_post.php">Create post</li>
                <li><a href="edit_posts.php">Edit or delete posts</li>
                <li class="active"><a href="own_posts.php">See own posts </li>
                <li><a href="all_tweets.php">See all posts</li>
                <li><a href="logout.php">Logout</a> </li>
            </ul>
        </ul>
		<div class="content">
			<?php
    		require_once 'db.php';
    $curr_id = $_SESSION['user']['id'];;
    $sql="SELECT tweets.text, tweets.date, user.name, user.surname  FROM `tweets` INNER JOIN `user` ON tweets.user_id = user.user_id WHERE tweets.user_id='$curr_id'";
    $res=$connect->query($sql);

    foreach($res as $ap)
    {
      $text = $ap['text'];
      $date = $ap['date'];
      $name = $ap['name'];
      $surname = $ap['surname'];
?>
<div class="post">
                <p class="author">Posted by: <?php echo  $name?> <?php echo $surname ?></p>
                <p class="text"><?php echo $text;?></p>
                <p class="date"><?php echo $date;?></p>
            </div>
<?php
}
?> 
</div>
    </main>
</body>
</html>


