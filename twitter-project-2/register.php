<?php
    session_start();
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="container">    
        
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                    <?php
                        if(isset($_SESSION['message'])){
                        echo '<div class="mb-3" style="height:60px; min-height: 100%; border: 2px solid #ffa908; border-radius: 3 px; margin: 40px; text-align: center; font-weight: bold; background-color: red;"> <p>' . $_SESSION['message'] . '</p></div>';
                    }
              unset($_SESSION['message']);
           ?>
        
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form action="to_register.php" method="post" id="signupform" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="login" class="col-md-3 control-label">Login</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="login" placeholder="Login">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Surname</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="surname" placeholder="Surname">
                                    </div>
                                </div>
                                
                                    
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" class="btn btn-info" value="Sign up">
                                         
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
         </div> 
    </div>
    