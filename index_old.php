<?php
$page_title = "Da index page :)";
$fruits = array("apple","bannana","orange", "watermelon");
?>

<!doctype html>
<html>
    <head>
        <title><?php echo $page_title; ?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css" type="text/css" />
        <script type="text/javascript" src="/node_modules/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="/node_modules/popper.js/dist/umd/popper.js"></script>
        <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <!--navbar -->
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a href="/" class="navbar-brand">Hello moto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Contact</a>
                    </li>
                </ul>
                <form class="form-inline" method="get" action="search.php">
                    <input class="form-control" type="text" name="search" placeholder="Search"/>
                    <button type="submit" class="btn btn-primary ml-2">Search</button>
                </form>
            </div>
        </nav>
        <!-- container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-4 border">
                    <h3>Column 1</h3>
                    <img src="https://dummyimage.com/800x600/121112/31389e&text=Lorem+Image" class="img-fluid"></img>
                </div>
                <div class="col-6 col-sm-4 col-md-4 border">
                    <h3>Column 2</h3>
                    <img src="https://dummyimage.com/800x600/121112/31389e&text=Lorem+Image" class="img-fluid"></img>
                </div>
                <div class="col-12 col-sm-4 col-md-4 border">
                    <h3>Column 3</h3>
                    <img src="https://dummyimage.com/800x600/121112/31389e&text=Lorem+Image" class="img-fluid"></img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border">
                    <h3>Column 1 50%</h3>
                </div>
                <div class="col-md-6 border">
                    <h3>Column 2 50%</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 border">
                    <h3>Column 1</h3>
                    <p>
                        <!-- start slipsum code -->

Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.

<!-- end slipsum code -->
                    </p>
                </div>
                <div class="col-md-3 border">
                    <h3>Column 2</h3>
                    <p>
                        <!-- start slipsum code -->

Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.

<!-- end slipsum code -->
                    </p>
                </div>
                <div class="col-md-3 border">
                    <h3>Column 3</h3>
                    <p>
                        <!-- start slipsum code -->

Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.

<!-- end slipsum code -->
                    </p>
                </div>
                <div class="col-md-3 border">
                    <h3>Column 4</h3>
                    <p>
                        <!-- start slipsum code -->

Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.

<!-- end slipsum code -->
                    </p>
                </div>
            </div>
            
            <div class="row">
                <?php foreach($fruits as $fruit){ ?>
                  <div class="col">
                      <h3><?php echo $fruit; ?></h3>
                  </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>