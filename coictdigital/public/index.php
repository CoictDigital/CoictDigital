<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    unset($_SESSION["studentFilledCount"]);

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

    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1 class="">CoICT Digital</h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>

                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="fas fa-light fa-dna"></i></div>
                        <h4 class="title">Course Evaluation</h4>
                        <p class="description">
                            Students can fill evaluation forms and view evaluation results for respective courses.Evaluation results are real time and can be seen by both students and staff.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-thin fa-clipboard"></i></div>
                        <h4 class="title">Alumni Records</h4>
                        <p class="description">
                            Alumni from the University of Dar es salaam can have accounts with their information after they graduate for easy contact from the University for different purposes. </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-thin fa-chalkboard"></i></div>
                        <h4 class="title">Teaching Monitoring</h4>
                        <p class="description">
                            Teaching can be easily monitored from the system where class representatives fill monitoring forms that are submitted to the respective unit after every class </p>
                    </div>
                    <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-thin fa-book"></i></div>
                        <h4 class="title">Course Allocation</h4>
                        <p class="description">
                            Course allocation for staff is made easy in the system.Staff can easily login into their accounts to see allocated courses and suggest edits where necessary.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="fas fa-thin fa-file"></i></div>
                        <h4 class="title">Exam Invigilation</h4>
                        <p class="description">
                            Invigilators for exams are easily assigned through the system.Staff can see where they're assigned to invigilate and students can see who their invigilator is for the exams.</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

      

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <!-- <div class="copyright">
        &copy; Copyright <strong><span>coictdigital@udsm.co.tz</span></strong>
      </div> -->

        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
    <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>

    <!-- main js file -->
    <script src="assets/js/main.js"></script>

</body>

</html>