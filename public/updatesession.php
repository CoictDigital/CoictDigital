<html lang="en">

<head>
    <?php
    
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    ?>
    <?php
     $conn = mysqli_connect('localhost','root','','coict_digital') or die('unable to connect');
    ?>

</head>

<body>




    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-sm-6">
                    <form action="updatesession.php" class="card p-4 rounded shadow login" method="POST">
                        <img src="assets/img/udsmlogo.png" alt="responsive image">
                        <p class="text-center pt-3">Enter your email to start your session</p>
                        <div class="mb-3">
                            <input type="text" placeholder="email" name="email" class="form-control" required>
                        </div>
                        <button type="submit" class="mx-auto button" name="alulogin" value="alulogin">continue</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php

    if (isset($_POST['alulogin'])) {
    $email = $_POST['email'];
    $Name = $_POST['Name'];
    
    $select =mysqli_query($conn, "SELECT * FROM alumni WHERE email='$email'");
    $row = mysqli_fetch_array($select);
    
    if(is_array($row)){
        $_SESSION["email"]= $row["email"];
        $_SESSION["Name"]= $row["Name"];
        
        header("location:update.php");
    } else{
        echo'<script type = "text/javascript"> ';
        echo'alert("invalid email");';
        echo'window.location.href= "updatesession.php"';
        echo'</script>';
    }
    }

    ?>

</body>

</html>