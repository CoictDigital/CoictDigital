<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once("./includes/headerContent.php");
    ?>

</head>

<body>
    <section>
    <div class="container" id="container">	
        <div class="row rounded shadow ">  

    <div class="col-sm-6 p-5">    
		<form action="login.php" method="POST">
			<img src="assets\img\udsmlogo.png" alt="responsive image">
			<p class="text-center pt-3">Login to start your session</p>
			<div class="mb-3">
				<input type="text" placeholder="Username" name="username" class="form-control" required>
			</div>
			<div class="mb-3">
				<input type="password" placeholder="Password" name="password" class="form-control" required>
			</div>
            <div class="text-center">
			<button type="submit" class="button" name="login" value="login">Login</button>
            </div>
		</form>	
</div>
    
       <div class="col-sm-6 coict-image">
           <div class="coict-text">			
				<h1>CoICT Digital</h1>
				<p>Management Information System</p>
           </div>
		</div>

    </div>
</div>
    </section>


<!-- ---------------------incorrect password -->
         <?php
           if (isset($_SESSION["message"])) {
         ?>
        <script>
            alert("Sorry, Username or Password is Incorrect");
        </script>

<!-- to avoid unnecessary incorrect password alerts when one gaveup login in -->
         <?php
            unset($_SESSION['message']); 
            }
         ?>

<!-- ------------------footer scripts -->
         <?php
           require_once("includes/scripts.php");
         ?>

</body>
</html>