<?php 

if(isset($_SESSION['email'])){
    $navs = array(
            'Home' => 'index.php',
            'My Account' => 'account.php',
            'Log Out' => 'logout.php'
        );
}else{
    $navs = array(
            'Home' => 'index.php',
            'Sign Up' => 'signup.php',
            'Sign In' => 'login.php'
        );
}
?>
<!--navbar -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md">
    <a href="/" class="navbar-brand">Hello moto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="main-menu">
        <ul class="navbar-nav ml-auto">
            <?php 
            foreach($navs as $key => $value){
                echo "<li class=\"nav-item\">
                        <a href=\"/$value\" class=\"nav-link\">$key</a>
                    </li>";
            }
            ?>
        </ul>
        <form class="form-inline" method="get" action="search.php">
            <input class="form-control" type="text" name="search" placeholder="Search"/>
            <button type="submit" class="btn btn-primary ml-2">Search</button>
        </form>
        <h4><?php if($_SESSION['username']){echo $_SESSION['username']; } ?></h4>
    </div>
</nav>