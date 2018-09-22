<?php
//include the autoloader class
include('autoloader.php');

$page_title = "Sign Up";

//if the method request is POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //handle sign up here
    $account = new Account();
    
    //receive post variables from forms
    $signup = $account->create($_POST['email'], $_POST['password']);
    if($signup == true){
        //signup succeded
        //start session
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $message = 'Your account has been created';
        $message_class = 'success';
    }else{
        //signup failed, get errors
        $message = implode(' ', $account->errors);
        $message_class = 'warning';
    }
}

?>

<!doctype html>
<html>
    <?php include('includes/head.php'); ?>
    <body>
        <?php include('includes/navbar.php'); ?>
        <!-- container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form id="signup-form" method="post" action="signup.php">
                        <h3>sign up for an account</h3>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="you@example.com"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="minimum 6 characters"/>
                        </div>
                        <button class="btn btn-primary mt-2" type="submit"/>Sign up</button>
                        <button class="btn btn-danger mt-2" type="reset"/>Clear</button>
                    </form>
                    <?php 
                        if($message){
                            echo "<div class=\"alert alert-$message_class alert-dismissable fade show\">
                                    $message
                                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                            </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>