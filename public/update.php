<?php

     $conn = mysqli_connect('localhost','root','','coict_digital');

    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    if (isset($_POST['login'])){
        $occupation = $_POST['occupation'];
        $employedat=$_POST['employedat'];
        $employedas=$_POST['employedas'];
        $contact = $_POST['contact'];
        $field=$_POST['field'];
        $email = $_SESSION['email'];
        
        

        $query = "UPDATE alumni SET occupation='$occupation',contact='$contact',employedat='$employedat',employedas='$employedas',field='$field' WHERE email='$email' ";
        $result = mysqli_query($conn,$query);
        if (isset($_POST['login'])){
          echo'<script type = "text/javascript"> ';
        echo'alert("thank you for your corporation");';
        echo'window.location.href= "updatesession.php"';
        echo'</script>';
        }


    }

    ?>
    <script>
  function showHideissues(){
    if ((document.getElementById("yes").checked) || (document.getElementById("ya").checked)){
      document.getElementById("issues").style.display = "block";
    }else{
      document.getElementById("issues").style.display = "none";
    }
  }
  function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
  }
</script>
   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">   
<!-- css files -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<title>CoICT Digital</title>
    </head>
    <body>
        
        <section>
            <div class="container">
              <div class="row justify-content-center align-items-center">
            
 <div class="col-sm-10">
<form action="" class="card p-4 rounded shadow login" method="POST">
<img src="assets/img/udsmlogo.png" alt="responsive image">
<p class="text-center pt-3">Alumni Employment Status</p>
<div class="mb-3">
<center>WELCOME! <?php
                          echo $_SESSION['Name'];
 ?>
 </center>
  <div class="question">           
                  <h6>Please select your current employment status:</h6>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="occupation" id="yes" value="Employed" onclick="showHideissues()">
                  <label class="form-check-label">Employed</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="occupation" id="ya" value="Self employed" onclick="showHideissues()">
                  <label class="form-check-label"> Self Employed</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="occupation" id="no" value="Not Employed" onclick="showHideissues()">
                  <label class="form-check-label">Not Employed</label>
                </div>

                <div>
                <div class="form-group" id="issues">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="field" id="yes" value="IT " onclick="">
                  <label class="form-check-label">IT Field</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="field" id="ya" value="NON IT" onclick="">
                  <label class="form-check-label"> NON IT Field</label>
                </div>
                <div>
                 Employed at/company name <textarea class="form-control" name="employedat" value="<?php echo ['employedas']; ?>" placeholder="" oninput="this.value = this.value.toUpperCase()"></textarea>
                 Employed as/deal with<textarea class="form-control" name="employedas" value="" placeholder=""  oninput="this.value = this.value.toUpperCase()"></textarea>
                </div>
</div>
                <!-- <div class="form-group" id="issues">
                 Contact<textarea class="form-control" type="number" name="contact" value="" placeholder=""></textarea>
                </div> -->
                <div class="form-group">
                  <label class="form-check-label">contact:</label>
                <input type="number" name="contact" required >
                </div>
            </div>
 <center>       
</div>
<button type="submit" class="mx-auto button" name="login">continue</button>
</div>
</center>    

</div>


                </form>
            </div>
            </div>
            </div>
        </section>

<script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>

    </body>
</html>
