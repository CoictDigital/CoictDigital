<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");



  if (isset($_SESSION["evaluationFilled"])) {
    unset($_SESSION['evaluationFilled']);
  } else {
  }

  ?>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>
  <!-- ======= Header ======= -->


  <main id="main">
    <section>
      <div class="container">
        <div class="row justify-content-center align-items-center">

          <div class="col-sm-4">
            <form action="./../login.php" class="card p-4 rounded shadow details" method="POST">
              <p class="text-center pt-3">Please fill in evaluation details</p>

              <div class="mb-3">
                <select class="form-select" name="year" aria-label="Default select example">
                  <option selected>Study year</option>
                  <option value="1">I</option>
                  <option value="2">II</option>
                  <option value="3">III</option>
                  <option value="4">IV</option>
                </select>
              </div>
              <div class="mb-3">
                <select class="form-select" name="programme" aria-label="Default select example">
                  <option selected>Student's Programme</option>
                  <option value="BSc IN CS">BSc in Cs</option>
                  <option value="2">BSc in BIT</option>
                  <option value="3">BSc in CEIT</option>
                </select>
              </div>
              <div class="mb-3">
                <select class="form-select" name="course" aria-label="Default select example">
                  <option selected="selected"> Course code </option>
                  <option value="IE 445">IE 445</option>
                  <option value="IS 335">IS 335</option>
                  <option value="3">IS 336</option>
                  <option value="4">IS 337</option>
                  <option value="5">IS 345</option>
                  <option value="6">IS 365</option>
                  <option value="7">IS 368</option>
                </select>
              </div>
                        
              <button type="submit" class="mx-auto button" name="proceedEvalutation" value="proceed">Proceed</button>
              <a href="./index.php">
                <p class="text-center pt-3">Cancel</p>
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>

</body>

</html>