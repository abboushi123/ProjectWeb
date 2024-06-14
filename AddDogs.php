<?php
include "connect.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Pets Store_Login </title>
    <link rel="stylesheet" href="css/dogsAdmin.css">
    <!--    <link rel="stylesheet" href="Welcome.css">-->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="image/logo-png.png" type="image/x-icon">

</head>
<body>

<nav class="nav">
    <div class="nav-logo">
        <img src='image/logo-transparent-png.png'>
    </div>

    <div class="nav-menu">
        <ul>
            <li><a href="home1.html" class="link">Home</a></li>
            <li><a href="about1.html" class="link">About</a></li>
            <li><a href="contact1.html" class="link">Contact</a></li>
            <li><a href="shop1.html" class="link">Catalog</a></li>
            <li><a href="cartItem.html"><i class='bx bxs-cart cart-icon' style="font-size: 40px; color: black;    position: relative; margin-top:27px ; "></i></a>  </li>
        </ul>
        <div class="nav-button">
            <button class="btn" id="Logout">LogOut</button>
        </div>
        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("Logout");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "HomePage.html";
            });
        </script>

    </div>


        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("LoginBtn");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "Login.html";
            });
        </script>
    </div>
</nav>
<div class="wrapper1">

    <form action="" class="add_dogs" method="post" enctype="multipart/form-data">

        <h1>Add Dogs</h1>
        <div class="input-box">
            <input type="text" name="Dog_name" placeholder="Dog Name" required>

        </div>



        <div class="input-box">
            <input type="text" name="Dog_price" min="1" placeholder="Price" required>

        </div>
        <div class="input-file">
            <input type="file" name="Dog_image" class="input-file" required accept="image/png, image/jpg, image/jpeg">
        </div>







        <button type="submit" name="add_dogs" class="btn">Add Item</button>








    </form>

</div>

</body>
</html>