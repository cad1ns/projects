<?php
    session_start();
    $user_login="";  
    $user_password="";  
    if(isset($_COOKIE['user_login'])&&isset($_COOKIE['user_password'])){
        $user_login=$_COOKIE['user_login'];
        $user_password=$_COOKIE['user_password'];

    }
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                 <?php
                        if(isset($_SESSION['message'])){
                        echo '<div class="mb-3" style="height:60px; min-height: 100%; border: 2px solid #ffa908; border-radius: 3 px; margin: 40px; text-align: center; font-weight: bold; background-color: red;"> <p>' . $_SESSION['message'] . '</p></div>';
                    }
              unset($_SESSION['message']);
           ?>
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                            
                        <form action="to_login.php" method="post" id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text" class="form-control" name="login" value="<?php echo $user_login; ?>" placeholder="Login">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" value="<?php echo $user_password; ?>" placeholder="password">
                                    </div>
                                
                            


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls text-center">
                                        <input type="submit" class="btn btn-success" value="Login">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="register.php">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>

               
               
                
         </div> 
    </div>
    