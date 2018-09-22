<?php
include('autoloader.php');

$keyword = $_GET['search'];

$search = new ProductSearch();
$result = $search->search($keyword);

?>
<!doctype html>
<html>
    <?php include('includes/head.php'); ?>
    <body>
        <?php include('includes/navbar.php'); ?>
        <!-- container -->
        <div class="container-fluid">
            <?php 
            //check if search return result
            if(count($result) == 0){
                echo "<p>Your search for $keyword returned no result</p>";
            }else{
                echo "<p>You searched for $keyword</p>";
                foreach($result as $item){
            ?>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="/images/products/<?php echo $item['image_file_name']; ?>"></img>
                    </div>
                    <div class="col-sm-6">
                        <h3><?php echo $item['name'];?></h3>
                        <h5><?php echo $item['price']; ?></h5>
                    </div>
                    <div class="col-sm-3">
                        <a href="/detail.php?product_id=<?php echo $item['id']; ?>">Detail</a>
                    </div>
                </div>
                <hr>
            <?php
                }
            }
            ?>
        </div>
    </body>
</html>