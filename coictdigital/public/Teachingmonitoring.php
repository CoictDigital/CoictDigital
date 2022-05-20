<!DOCTYPE html>
<html lang="en">

<head>

<?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    unset($_SESSION["studentFilledCount"]);

    ?>


<script>
    function showHidemycode(){
      if (document.getElementById("absent").checked){
        document.getElementById("abs").style.display = "block";
      }else {
        document.getElementById("abs").style.display = "none";
      }
    }
  </script>
  <script>
    function showHideabs(){
      if (document.getElementById("present").checked){
        document.getElementById("abs").style.display = "none";
      }else {
        document.getElementById("abs").style.display = "block";
      }
    }
  </script>

<script>
  function showHideontime(){
    if (document.getElementById("ontime").checked){
      document.getElementById("reason").style.display = "none";
    }else if (document.getElementById("0-30").checked || document.getElementById("15-30").checked || document.getElementById(">30").checked){
      document.getElementById("reason").style.display = "block";
    }
  }
</script>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">
       
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto"> <span>Home</span></a></li>
          <li><a href="<?php
            if ($_SESSION["userData"]["role"] == 2) {
              echo "department1.php";
            } else if ($_SESSION["userData"]["role"] == 1) {
              echo "evaluation1.php";
            }
            ?>" class="nav-link scrollto"> <span>Course Evaluation</span></a></li>        
          <li><a href="alumnirecords.php" class="nav-link scrollto"><span>Alumni Records</span></a></li>
          <li><a href="teaching.php" class="nav-link scrollto active"> <span>Teaching Monitoring</span></a></li>
          <li><a href="courseallocation.php" class="nav-link scrollto"> <span>Course Allocation</span></a></li>
          <li><a href="examinvigilation.php" class="nav-link scrollto"> <span>Exam Invigilation</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <main id="main">

  
       <!-- ======= Form Section ======= -->
       <section id="evaluation" class="services">        
        <div class="container-fluid">           
          <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>         
            <h3>Quality Assurance Bureau (QAB)</h3>
            <h3>Teaching and learning Monitoring</h3>
            <h2>Undergraduate Programmes</h2>
            </div>
            </div>

          <div class="container">
          <form>

            <!-- ======= General info ======= -->
            <div class="question">
            <h3>General information</h3>
            
          <div class="row mb-3">
          <h5>Please fill in the right information</h5>
            <label for="Course code" class="col-sm-2 col-form-label">Session date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="Session date" placeholder="Session date" required>
            </div>
        </div>

        <div class="row mb-3">
          <label for="Session time" class="col-sm-2 col-form-label">Starting time</label>
          <div class="col-sm-10">
              <input type="time" class="form-control" name="Starting time" placeholder="" required>
          </div>
      </div>
      <div class="row mb-3">
          <label for="Session time" class="col-sm-2 col-form-label">Ending time</label>
          <div class="col-sm-10">
              <input type="time" class="form-control" name="Ending time" placeholder="" required>
          </div>
      </div>
      </div>



         <!-- ======= Attendance ======= -->
        <div class="question">
         <h3>Instructor's attendance</h3>
         <h5>Please select the corresponding attendance state of the instructor </h5>       
        
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="present" onclick="showHidemycode()" value="option1">
              <label class="form-check-label" for="inlineRadio1">Present</label>
            </div>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="absent" onclick="showHideabs()"value="option2">
              <label class="form-check-label" for="inlineRadio2">Absent</label>
             </div>
            <div class="" id="abs">
            <select class="form-select" aria-label="Default select example">
            <option selected="Select reason for starting late">If absent, select the reason for absence</option>
            <option value="1">Sickness</option>
            <option value="2">Travelled</option>
            <option value="3">Assigned a special task</option>
            <option value="4">Attended a meeting</option>
            <option value="5">Not informed</option>
            </select> 
          
             <h5>Are the students informed about the instructor's absence?</h5>
        
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1"  value="option1">
               <label class="form-check-label" for="inlineRadio1">Yes</label>
             </div>
             
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
               <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              </div>
          </div>
            
<!-- ======= session starting time ======= -->
<div id="mycode">
<div class="question">
         <h3>Time management</h3>
            <h5>Please select the session starting time</h5>
            <div class="row">
              <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ontime" onclick="showHideontime()" value="option1">
              <label class="form-check-label" for="ontime">Started on time</label>
            </div>
          </div>
            <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="0-15" onclick="showHideontime()" value="option1">
              <label class="form-check-label" for="0-15">Started late between 0-15 minutes</label>
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="15-30" onclick="showHideontime()" value="option1">
              <label class="form-check-label" for="15-30">Started late between 15-30 minutes</label>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id=">30" onclick="showHideontime()" value="option1">
              <label class="form-check-label" for=">30">Started late for more than 30 minutes</label>
            </div>
          </div>
          </div>

          <div id="reason">
          <select class="form-select" aria-label="Default select example">
            <option selected="Select reason for starting late">Select reason for starting late</option>
            <option value="late arrival of the Instructor">late arrival of the Instructor</option>
            <option value="late arrival of the Instructor">late arrival of the Instructor</option>
            <option value="Change of Venue due to collision">Change of Venue due to collision</option>
            <option value="Sitting arrangement">Sitting arrangement</option>
            <option value="Previous class ended late">Previous class ended late</option>
            <option value="No initial teaching preparations">No initial teaching preparations</option>
            <option value="Other reasons">Other reasons</option>

          </select>
          </div>
          </div>

          <!-- ======= teaching process ======= -->
          <div class="question">

          <h3>Teaching Process</h3>

          <h5>a) Session Type</h5>
          <label for="Session type">Please select the corresponding session type:</label>
          <select class="form-select" aria-label="Default select example">
            
            <option value="Tutorial">Tutorial</option>
            <option value="Seminar">Seminar</option>
            <option value="Practical">Practical</option>
            <option value="Lecture">Lecture</option>
            <option value="Other">Other</option>
            </select>

            <h5>b) Teaching Mode</h5>

            <label for="Teaching mode">Please select the teaching mode used:</label>
          <select class="form-select" aria-label="Default select example">
            
            <option value="Teacher centred">Teacher centred</option>
            <option value="Student centred">Student centred</option>
            <option value="Student lead with instructor supervisor">Student lead with instructor supervisor</option>
          </select>

            <h5>c) Teaching method used</h5>
            
            <label for="Teaching method used">Please note the type of teaching method used:</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Talk and Chalk</option>
              <option value="Conventional overhead projector">Conventional overhead projector</option>
              <option value="Student Presentation and practical">Student Presentation and practical</option>
              <option value="Power point presentation with LCD projector">Power point presentation with LCD projector</option>
              <option value="Other">Other</option>
              </select>

            

          <h5>d) Medium of instruction</h5>

          <label for="Medium of instruction">Please select the medium of instruction used:</label>
          <select class="form-select" aria-label="Default select example">
            
            <option value="Course in English and English is used through out">Course in English and English is used through out</option>
            <option value="Course in English but code-switching to Kiswahili">Course in English but code-switching to Kiswahili</option>
            <option value="Course in Kiswahili but code-switching to English">Course in Kiswahili but code-switching to English</option>
          </select>
          </div>

          <!-- ======= venue and conditions ======= -->
          
          <div class="question">
          <h3>Teaching venues and their conditions</h3>
            
          <div class="row mb-3">
            <label for="Room name" class="col-sm-2 col-form-label">Room name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Room name" placeholder="Room name" required>
            </div>
        </div>
        <div class="row mb-3">
          <label for="Room capacity" class="col-sm-2 col-form-label">Room capacity</label>
          <div class="col-sm-10">
              <input type="number" class="form-control" name="Room capacity" placeholder="Room capacity" required>
          </div>
      </div>
      <div class="row mb-3">
        <label for="Number of students in class" class="col-sm-2 col-form-label">No of students</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="Number of students in class" placeholder="Number of students in class" required>
        </div>
    </div>
          </div>

    <!-- ======= condition of teaching room ======= -->
    <div class="question">
     
        <h3>Condition of the teaching room</h3>
        <div class="form-group row">
          <h5>Please rate the condition of the teaching room using the given standards. Put a tick in the appropiate box found on the extreme right.
            1 = Very poor, 2 = Poor, 3 = Good, 4 = Very good, 5 = Excellent, NA = Not Applicable
          </h5>
        </div>
        <div class="form-group row">
          <div class="centre">
          <table class="table table-sm">
            <thead class="table-secondary">
              <tr>
                <th scope="col">Conditions</th>
                <th scope="col">5</th>
                <th scope="col">4</th>
                <th scope="col">3</th>
                <th scope="col">2</th>
                <th scope="col">1</th>
                <th scope="col">NA</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sitting arrangement of students</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>lighting</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Chairs and tables</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Fixed LCD projector system (if any)</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Display and visibility</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>General physical condition of the room</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Public address system (if any)</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Availability of brash and chalks/markers</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Blackboard/whiteboard</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>
              <tr>
                <td>Room ventilation</td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
                <td><input class="form-check-input" type="checkbox" ></td>
              </tr>                         
            </tbody>
          </table>

          </div>

          <div class="question">
      <h3>Matters for immediate/special attention</h3>
      <h5>Please note any issues that require a special attention</h5>

      <div class="form-group">
        <textarea class="form-control" rows="4" placeholder="Matters that require an immediate attention:"></textarea>
      </div>
          </div>
          
          </div>
            <div class="form-group">
              <a href="#evaluationModal"  data-toggle="modal" data-target="#evaluationModal" > 
              <button type="submit" class="mx-auto button1" name="submit">Submit</button>
              </a>
            </div>

             <!-- fading evaluation submit-->
       <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <p>Thankyou for your response</p>
              
              <button type="submit" class="mx-auto button2" ><a href="index.php">Exit</a></button>                             
            </div>
          </div>
           </div>
      </div>

          
          </form>
        </div>


        
        </div>
      </section><!-- End Form Section -->


    <!-- End Contact Section -->

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
  
  <script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
   <!-- main js file -->
  <script src="assets/js/main.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

</body>

</html>