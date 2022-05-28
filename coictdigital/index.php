<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    require_once("./includes/headerContent.php");
    ?>

</head>

<body>




    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-sm-12">
                    <form action="login.php" class="card p-4 rounded shadow login" method="POST">
                        <img src="assets/img/udsmlogo.png" alt="responsive image">
                        <p class="text-center pt-3">Login to start your session</p>
                        <div class="mb-3">
                            <input type="text" placeholder="Username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="mx-auto button" name="login" value="login">Login</button>
                        <p class="text-center pt-3">Forgot Password?</p>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- incorrect password -->
    <?php

    if (isset($_SESSION["message"])) {
    ?>
        <script>
            alert("Sorry, Username or Password is Incorrect");
        </script>

    <?php
        unset($_SESSION['message']);   //to avoid unnecessary incorrect password alerts when one gaveup login in
    }
    ?>

    <?php

    require_once("includes/scripts.php");
    ?>

</body>

</html>