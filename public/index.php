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

    <main id="main">

   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="p-4">

        <div class="section-title">
          <h2>CoICT Digital</h2>
          <p>A management information system that manages course evaluation by students at the end of the semester, alumni 
            information once they graduate, monitors teaching and learning processes, allocation of courses and exam invigilators to staff in the college.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
          <div class="icon"><i class="fas fa-light fa-dna"></i></div>
                        <h4 class="title">Course Evaluation</h4>
                        <p class="description">
                            At the end of the semester, courses are evaluated by students. The evaluation results are real time and
                             reports are generated for the management.
                        </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="fas fa-thin fa-clipboard"></i></div>
                        <h4 class="title">Alumni Records</h4>
                        <p class="description">
                             Alumni records provide information on the employment status of the alumni and can be used by the the college 
                             to analyse its quality of education. </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="fas fa-thin fa-chalkboard"></i></div>
                        <h4 class="title">Teaching Monitoring</h4>
                        <p class="description">
                        Teaching monitoring is a vital element in improving the quality of education done by the lecturers to monitor the 
                        teaching and learning process.</p>
                    </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="fas fa-thin fa-book"></i></div>
                        <h4 class="title">Course Allocation</h4>
                        <p class="description">
                            The head of department allocates courses to lecturers who can view their allocation and suggest change of 
                            allocation where necessary.</p>
                    </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="fas fa-thin fa-file"></i></div>
                        <h4 class="title">Exam Invigilation</h4>
                        <p class="description">
                            The head of department assigns lecturers exams to invigilate including the venue and time. Lecturers and students can view the exam invigilation details.</p>
                    </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
          <div class="icon"><i class="fas fa-thin fa-clipboard"></i></div>
            <h4 class="title">Reports</h4>
            <p class="description">Useful reports can be generated from the system that are used to analyse different responses and views from both students and staff.</p>
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