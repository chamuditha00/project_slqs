<?php include './db_conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>login</title>

    <style>
    /* Importing fonts from Google */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    /* Reseting */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-image: url(./assert/img\ 4.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
    }

    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 100px auto;
        padding: 40px 30px 30px 30px;
        background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(128, 0, 0, 0.6));
        border-radius: 15px;
        box-shadow: 13px 13px 20px black, -13px -13px 20px gray;

    }




    .logo {
        width: 80px;
        margin: auto;
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px lightgray, 8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
        transition: 0.5s;
    }

    .wrapper .logo img:hover {
        transform: translate3d(0px, -7px, 1px);
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: lightgray;
    }

    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #fff;
        padding: 10px 15px 10px 10px;
        /* border: 1px solid red; */
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px lightgray, inset -8px -8px 8px gray;
        transition: 0.5s;
    }

    .wrapper .form-field:hover {
        transform: translate3d(-3px, -5px, 1px);
    }


    .wrapper .form-field .fas {
        color: #555 !important;
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: maroon;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px black, -3px -3px 3px gray;
        letter-spacing: 1.3px;
    }

    .btn:hover {
        background: linear-gradient(black, maroon);
    }

    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: white;
    }

    .wrapper a:hover {
        color: lightgray;
    }

    @media (max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px;
        }
    }
    </style>
</head>

<body>
    <!-- <div>
        <a class="back " href="./index.php">back to home</a>
    </div> -->
    <div class="wrapper">
        <div class="logo">
            <img src="./assert/bgMaroon.jpg" alt="" />
        </div>
        <div class="text-center mt-4 name">SLQS</div>
        <form class="p-3 mt-3" action="athu.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username" />
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" />
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a>
        </div>
    </div>
</body>

</html>