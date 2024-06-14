<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="icon" href="image/logo-png.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Dogs.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="IE=edge">

    <link rel="stylesheet" href="">
</head>
<body>

<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src='image/logo-transparent-png.png' alt="Logo">
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="home1.html" class="link">Home</a></li>
                <li><a href="about1.html" class="link">About</a></li>
                <li><a href="contact1.html" class="link">Contact</a></li>
                <li><a href="shop1.html" class="link">Catalog</a></li>
                <li><a href="cartItem.html"><i class='bx bxs-cart cart-icon' style="font-size: 40px; color: black;    position: relative; margin-top:27px ; "></i></a>  </li>
                <li><a href="admintable.php" class="link">data Table</a></li>
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
    </nav>
</div   >

<section class="sec">
    <div class="product">

        <div class="card">
            <div class="img" ><img src="image/dog.png" alt=""></div>

            <div class="box">

                <button class ="btn" id="Additem">Add item</button>
            </div>
        </div>


        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("Additem");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "AddDogs.php";
            });
        </script>

    </div>
</section>
</body>
</html>