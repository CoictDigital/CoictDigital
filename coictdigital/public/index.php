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
    <!-- ======= End Header  ======= -->    

    <main id="main">

   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="p-4">

        <div class="section-title">
          <h2>CoICT Digital</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                            Alumni from the University of Dar es salaam can have accounts with their information after they graduate for easy contact from the University. </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="fas fa-thin fa-chalkboard"></i></div>
                        <h4 class="title">Teaching Monitoring</h4>
                        <p class="description">
                            Teaching can be easily monitored from the system where class representatives fill monitoring forms that are submitted to the respective unit after every class </p>
                    </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="fas fa-thin fa-book"></i></div>
                        <h4 class="title">Course Allocation</h4>
                        <p class="description">
                            Course allocation for staff is made easy in the system.Staff can easily login into their accounts to see allocated courses and suggest edits where necessary.</p>
                    </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="fas fa-thin fa-file"></i></div>
                        <h4 class="title">Exam Invigilation</h4>
                        <p class="description">
                            Invigilators for exams are easily assigned through the system.Staff can see where they're assigned to invigilate and students can see who their invigilator is for the exams.</p>
                    </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Reports</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

                    </p>
                </div>

  <!-- <div class="card-columns ">
 <div class="col-4">
 <div class="card " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning">Course Evaluation</h5>
    <p class="card-text">Course evaluation is a short survey conducted by students at the end of a class or course of study. The evaluation form aims to collect general information on what each student liked and disliked most about the class with the goal of improving the educational experience for future students
    </p>
  </div>
</div>
</div>

<div class="col-4">
<div class="card bg-light" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning">Teaching Monitoring</h5>
    <p class="card-text">Teaching monitoring is a vital element in improving the quality of education which simultaneously gives positive benefits to students' learning outcomes. The significance of teaching monitoring is to improve the quality of teaching done by the lecturers as the main basis improvement in teaching and learning processes  </p>
  </div>
</div>
</div>

<div class="col-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning">Course Allocation</h5>
    <p class="card-text">Filling end of semester evaluation forms and viewing evaluation results for respective courses.
    and viewing evaluation results for respective courses
    </p>
  </div>
</div>
</div>   
</div>

<div class="card-columns">

<div class="col-4">
<div class="card bg-light" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning">Alumni Records</h5>
    <p class="card-text">Filling end of semester evaluation forms and viewing evaluation results for respective courses.
    and viewing evaluation results for respective courses
    </p>
  </div>
</div>
</div> 

<div class="col-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning">Exam Invigilation</h5>
    <p class="card-text">Filling end of semester evaluation forms and viewing evaluation results for respective courses.
    and viewing evaluation results for respective courses
    </p>
  </div>
</div>
</div>  -->

<!-- <div class="col-4">
<div class="card bg-light" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning">Card title</h5>
    <p class="card-text">Filling end of semester evaluation forms and viewing evaluation results for respective courses.
    and viewing evaluation results for respective courses
    </p>
  </div>
</div>
</div>  -->

</div>

            </div>
        </section><!-- End Services Section -->

      

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!-- <div class="container">
              <div class="copyright">
                   &copy; Copyright <strong><span>coictdigital@udsm.co.tz</span></strong>
              </div> 
             </div> -->
    </footer>
    <!-- ======= End Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
    <!-- font awesome file -->
    <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
    <!-- main js file -->
    <script src="assets/js/main.js"></script>


</body>
</html>