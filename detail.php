<?php
include('autoloader.php');

//grab the id for the product
$id = $_GET['product_id'];

$detail = new ProductDetail();
$pd = $detail -> getProduct($id);

$page_title = $pd[0]['name'];
?>
<!doctype html>
<html>
    <?php include('includes/head.php'); ?>
    <body>
        <?php include('includes/navbar.php'); ?>
        <!-- container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <?php foreach($pd as $prod){ ?>
                        <img class="img-fluid" src="/images/products/<?php echo $prod['image_file_name']; ?>"></img> 
                    <?php } ?>
                </div>
                <div class="col-md-6">
                    <?php
                        $product = $pd[0];
                        $product_id = $product['id'];
                        $name = $product['name'];
                        $description = $product['description'];
                        $price = $product['price'];
                    ?>
                    <h2><?php echo $name; ?></h2>
                    <h5><?php echo $price; ?></h5>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
        </div>
    </body>
</html>