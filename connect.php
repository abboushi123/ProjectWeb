<?php
$conn=mysqli_connect("localhost","root","","myshopping_cart")or die("connection failed");
if (isset($_POST["add_dogs"])) {
    $Dog_name = $_POST["Dog_name"];
    $Dog_price = $_POST["Dog_price"];
    $Dog_image = $_FILES["Dog_image"]["name"];
    $Dog_image_temp_name = $_FILES["Dog_image"]["tmp_name"];
    $Dog_image_folder = "image/" . $Dog_image;

    // Corrected SQL query with single quotes around string values
    $insert_query = mysqli_query($conn, "INSERT INTO `dogs` (name, price, image) VALUES ('$Dog_name', '$Dog_price', '$Dog_image')") or die("Insert query failed");

    if ($insert_query) {
        move_uploaded_file($Dog_image_temp_name, $Dog_image_folder);
    } else {
        echo "There was an error inserting the dog";
    }
}


?>
