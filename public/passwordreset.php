<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>CoICT Digital</title>
<link rel="shortcut icon" href="assets/img/favicon.jpg" type="image/x-icon">
<meta name="title" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<!-- css files -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<link href="assets\css\style.css" rel="stylesheet">

</head>

<body>




    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-sm-12">
                    <form action="login.php" class="card p-5 rounded shadow login" method="POST">
                        <p class="text-center pt-3">Fill the form below to reset password</p>
                        <div class="mb-3">
                            <input type="password" placeholder="Enter old password" name="oldpassword" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Enter new password" name="newpassword" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Confirm new password" name="confirmpassword" class="form-control" required>
                        </div>
                        <button type="submit" class="mx-auto button" name="reset" value="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php

    require_once("includes/scripts.php");
    ?>

</body>

</html>