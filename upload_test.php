<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    print_r($_FILES);
    $myimage = $_FILES['myfile'];
    if($myimage['size'] < 5000){
        echo "smaller than 5k";
    }else{
        echo "bigger than 5k";
    }
    $type = exif_imagetype($myimage['tmp_name']); //exif_imagetype grabs the exif information from the file
    $allowed = array(1,2,3);
    if(in_array($type, $allowed) == false){
        echo "format not allowed";    
    }else{
        //move to directory
        $dir = 'images/uploads';
        if(move_uploaded_file($myimage['tmp_name'], $dir . '/' . $myimage['name'])){
            echo "cool uploaded!";
        }else{
            echo "failed";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
    <body>
         <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="upload" class="btn btn-primary">Select a file</label>
            <input type="file" name="myfile" id="upload" style="display:none;">
            <button class="btn btn-outline-primary" type="Submit">Upload</button>
        </form>   
    </body>
</html>