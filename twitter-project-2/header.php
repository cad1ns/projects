<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
}
	else{
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBTU Twitter</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <nav >

        <img class="logo" src="./images/logo-kbtu.png" alt="">
        <div id="headerBars">
        <i class="material-icons dp48 left">menu</i>
        </div>
        <ul id="mobNav" class="mob-nav hidden">
                <li><a href="edit_profile.php">Edit profile</li>
                <li><a href="create_post.php">Create post</li>
                <li><a href="edit_posts.php">Edit or delete posts</li>
                <li><a href="own_posts.php">See own posts </li>
                <li><a href="all_tweets.php">See all posts </li>
                <li><a href="logout.php">Logout</a> </li>
            </ul>

        <spacer></spacer>
        <?php
    		require_once 'db.php';
    $curr_id = $_SESSION['user']['id'];;
    $sql="SELECT * FROM `tweets`";
    $res=$connect->query($sql);
    $row = mysqli_num_rows($res);
    $sql2="SELECT * FROM `tweets` WHERE tweets.user_id='$curr_id'";
    $res2=$connect->query($sql2);
    $row2 = mysqli_num_rows($res2);
    ?>
        <div class="notification-icon right">
            <i class="material-icons dp48">email</i>
            <span class="num-count"><?php echo $row2;?></span>
        </div>

        <div class="notification-icon right">
            <i class="material-icons dp48">notifications</i>
            <span class="num-count"><?php echo $row;?></span>
        </div>

        <div id="profile" class="profile">
            <span class="user-photo"></span>
            <span class="first-name right"><?php echo $user['surname'] . ' ' . $user['name']; ?></span>
        </div>

    </nav>
	<main>
        <div id="more" class="profile-container hidden">

            <a href="edit_profile.php" class="right"><i class="material-icons dp48 right">settings</i></a>
            <h1 class="user-name"><a><?php echo $user['surname'] . ' ' . $user['name']; ?></a></h1>
            <span class="user-email"><?php echo $user['login']; ?></span>
            <hr />
            <a href="login.php"><button class="button secondary-button left">Switch User</button></a>
            <a href="logout.php"><button class="button primary-button right">Sign Out</button></a>

        </div>

</body>
<script src="./js/scripts.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</html>