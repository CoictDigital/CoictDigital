<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="../assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>

        <li><a href="index.php" class="nav-link scrollto"> <span>Home</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "department2.php";
                      } else if ($_SESSION["userData"]["role"] == 1) {
                        echo "evaluation1.php";
                      }
                      ?>" class="nav-link scrollto"> <span>Course Evaluation</span></a></li>
        <li><a href="alumnirecords.php" class="nav-link scrollto"><span>Alumni Records</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "monitoringresults.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "Teachingmonitoring.php";
                      }
                      ?>" class="nav-link scrollto"> <span>Teaching Monitoring</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "courseallocation.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "lecturerallocation.php";
                      }
                      ?>" class="nav-link scrollto"> <span>Course Allocation</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "examinvigilation.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "leacturerinvigilation.php";
                      }
                      ?>" class="nav-link scrollto"> <span>Exam Invigilation</span></a></li>
        <li>
          <div class="dropdown nav-link" <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Profile
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item text-dark" href="#">
                <p>Change Password</p>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->