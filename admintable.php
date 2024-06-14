<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="icon" href="image/logo-png.png" type="image/x-icon">
    <link rel="stylesheet" href="css/shop1.css">
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
                <li><a href="admintable.php" class="link">View table</a></li>
                <li ><a href="cartItem.html"><i class='bx bxs-cart cart-icon' style="font-size: 40px; color: black;    position: relative; margin-top:27px ; "></i>
                        <span class="quantity" style=" background-color: red;
                          color: #ffffff;
                          border-radius: 50%;
                          padding: 0 8px;
                          position: relative;
                          alignment-baseline: unset;
                          top: -30px;
                          left: -20px;
">0</span>
                    </a>  </li>
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
            <!--          <div class="desc">Dogs</div>-->
            <div class="title">Dogs</div>
            <div class="box">
                <button class="btn" id="dogs">View table</button>
            </div>
        </div>

        <div class="card">
            <div class="img" ><img src="image/cat.png" alt=""></div>
            <!--          <div class="desc">Dogs</div>-->
            <div class="title">Cats</div>
            <div class="box">
                <button class="btn" id="cats">View table</button>

            </div>
        </div>


        <div class="card">
            <div class="img" ><img src="image/food.png" alt=""></div>
            <!--          <div class="desc">Dogs</div>-->
            <div class="title">Food</div>
            <div class="box">
                <button class="btn" id="food">View table</button>
            </div>
        </div>


        <div class="card">
            <div class="img" ><img src="image/acss.png" alt=""></div>
            <!--          <div class="desc">Dogs</div>-->
            <div class="title">Accessorise</div>
            <div class="box">
                <button class="btn" id="Acs">View table</button>

            </div>
        </div>
        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("Acs");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "Acces.html";
            });
        </script>

        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("food");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "Food.html";
            });
        </script>

        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("dogs");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "Dogs.html";
            });
        </script>

        <script>
            // Get the button element by its ID
            var loginBtn = document.getElementById("cats");

            // Add an event listener for the click event
            loginBtn.addEventListener("click", function() {
                // Redirect to the desired URL when the button is clicked
                window.location.href = "cats1.html";
            });
        </script>


    </div>
</section>
</body>
</html>
<script src="Js/cart.js"></script>
