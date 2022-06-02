<!DOCTYPE html>
<html lang="en">

<head>

<?php
require_once '../includes/headerContent.php';
require_once '../includes/sessionStuffs.php';
require_once("../includes/db.php");
require_once("../includes/fetchvenue.php");

if (isset($_SESSION["teachingFilled"])) {
  
  echo "all good";
} else {
  header("Location: teaching.php");
}

?>


<script>
    function showHidemycode(){
      if (document.getElementById("present").checked){
        document.getElementById("mycode").style.display = "block";
        document.getElementById("abs").style.display = "none";
      }else {
      }
    }
  </script>

  <script>
    function showHideabs(){
      if (document.getElementById("absent").checked){
        document.getElementById("abs").style.display = "block";
        document.getElementById("mycode").style.display = "none";
      }else {
        
      }
    }
  </script>

<!-- reason for starting late -->
<script>
  function showHideontime(){
    if (document.getElementById("ontime").checked){
      document.getElementById("reason").style.display = "none";
    }else{
      document.getElementById("reason").style.display = "block";
    }
  }
</script>

<!-- button for absence -->
<!-- <script>
  function showHidesubmit(){
    if((document.getElementById("informed").checked) || (document.getElementById("not_informed").checked)){
      document.getElementById("inform").style.display = "block";
    }else{
      document.getElementById("inform").style.display = "none";
    }
  }
</script> -->


<!-- special issues -->
<script>
  function showHideissues(){
    if (document.getElementById("yes").checked){
      document.getElementById("issues").style.display = "block";
    }else{
      document.getElementById("issues").style.display = "none";
    }
  }
</script>

<!-- <script>
  function submit(x){
    if (x==0){
      document.getElementById("submit").style.display = "block";
    }else{

    } return;
  }
    
</script> -->

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>

  <main id="main">

  
       <!-- ======= Form Section ======= -->
       <section id="evaluation" class="services">        
        <div class="container-fluid">           
          <div class="section-title">
            <h3>UNIVERSITY OF DAR ES SALAAM</h3>         
            <h3>Quality Assurance Bureau (QAB)</h3>
            <h3>Teaching and learning Monitoring</h3>
          </div>
        </div>

        <div class="container">
          <form action="monitoringqtns.php" method="POST">

            <!-- ======= General info ======= -->
          <div class="question">
            <h3>General information</h3>
         <div class="row mb-3">
           <label for="Session time" class="col-sm-2 col-form-label">Starting time</label>
           <div class="col-sm-10">
              <input type="time" class="form-control" name="starting_time" placeholder="" required>
           </div>
         </div>
       <div class="row mb-3">
          <label for="Session time" class="col-sm-2 col-form-label">Ending time</label>
          <div class="col-sm-10">
              <input type="time" class="form-control" name="ending_time" placeholder="" required>
          </div>
       </div>

       <div class="row mb-3">
        <label for="venue" class="col-sm-2 col-form-label">Venue</label>
        <div class="col-sm-10">
       <select class="form-select" aria-label="Default select example" name="venue">
        <option hidden disabled selected value> -- select venue--</option>
        <option>Venue</option>
        <?php 
           foreach ($options as $option) {
        ?>
         <option><?php echo $option['venue']; ?> </option>
        <?php 
        }
        ?>    
       </select>
      </div>
    </div>

        <div class="row mb-3">
          <label for="venue capacity" class="col-sm-2 col-form-label">Venue capacity</label>
          <div class="col-sm-10">
              <input type="number" class="form-control" name="venue_capacity" placeholder="Venue capacity"value="venue_capacity" required>
          </div>
      </div>
      <div class="row mb-3">
        <label for="Number of students in class" class="col-sm-2 col-form-label">Number of students</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="no_of_students" placeholder="Number of students present in class" value="Number_of_students"required>
        </div>
    </div>
      </div>
      <div class="question">
         <h3>Instructor's attendance</h3>
         <h5>Please select the corresponding attendance state of the instructor </h5>       
        
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="attendance" id="present" onclick="showHidemycode()" value="present">
              <label class="form-check-label" for="inlineRadio1">Present</label>
            </div>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="attendance" id="absent" onclick="showHideabs()"value="absent">
              <label class="form-check-label" for="inlineRadio2">Absent</label>
             </div>

             <!-- reasons absence and student informed or not -->
            <div class="" id="">
            <!-- <input class="form-check-input" type="hidden" name="student_informed" id="informed"  value="yes"> -->
              <div class="" id="abs">
                
              <label for="Session type">Please select reason for instructor's absence:</label>
          <select class="form-select" name="absence_reason">
          <option hidden disabled selected value> -- select an option --</option>
            <option value="Instructor is assigned a special task">Instructor is assigned a special task</option>
            <option value="Instructor has attended a meeting">Instructor has attended a meeting</option>
            <option value="Out of university campus, travelled">Out of university campus, travelled</option>
            <option value="Sickness">Sickness</option>
            <option value="Not informed">Not informed</option>
            </select>
              
            <h5>Are the students informed about the instructor's absence?</h5>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="student_informed" id="informed"  value="Yes" >
               <label class="form-check-label" for="inlineRadio1">Yes</label>
             </div>
             
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="student_informed" id="not_informed" value="No" >
               <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
             <div class="form-group" id="inform">
              <button id ="button1" type="submit" class="mx-auto button1" name="monitoringQn" value="submit">Submit</button>
             </div>
              </div>
            </div>
          </div>
            

          <div id="mycode">
<div class="question">
         <h3>Time management</h3>
            <h5>Please select the session starting time</h5>
            <div class="row">
              <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="time" id="ontime" onclick="showHideontime()" value="started_on_time">
              <label class="form-check-label" for="ontime">Started on time</label>
            </div>
          </div>
            <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="time" id="0-15" onclick="showHideontime()" value="Started late between 0-15 minutes">
              <label class="form-check-label" for="0-15">Started late between 0-15 minutes</label>
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="time" id="15-30" onclick="showHideontime()" value="Started late between 15-30 minutes">
              <label class="form-check-label" for="15-30">Started late between 15-30 minutes</label>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="time" id=">30" onclick="showHideontime()" value="Started late for more than 30 minutes">
              <label class="form-check-label" for=">30">Started late for more than 30 minutes</label>
            </div>
          </div>
          </div>

        <div class="starting_time" id="reason">
          <label for="started_late">Please select the reason for starting late:</label>
          <select class="form-select" aria-label="Default select example" name="started_late">
          <option hidden disabled selected value> -- select an option --</option>
          <option value="late arrival of the Instructor">late arrival of the Instructor</option>
            <option value="late arrival of the students">late arrival of the students</option>
            <option value="Change of Venue due to collision">Change of Venue due to collision</option>
            <option value="Sitting arrangement">Sitting arrangement</option>
            <option value="Previous class ended late">Previous class ended late</option>
            <option value="No initial teaching preparations">No initial teaching preparations</option>
            <option value="Other reasons">Other reasons</option>
          </select>
        </div>

        <div class="question">
          <h3>Teaching Process</h3>
          <h4>a) Session Type</h4>
          <label for="Session type">Please select the corresponding session type:</label>
          <select class="form-select" aria-label="Default select example" name="session_type">
          <option hidden disabled selected value> -- select an option --</option>
            <option value="Tutorial">Tutorial</option>
            <option value="Seminar">Seminar</option>
            <option value="Practical">Practical</option>
            <option value="Lecture">Lecture</option>
            <option value="Other">Other</option>
            </select>

            <h4>b) Teaching Mode</h4>
            <label for="Teaching mode">Please select the teaching mode used:</label>
          <select class="form-select" aria-label="Default select example" name="teaching_mode">
          <option hidden disabled selected value> -- select an option --</option>
            <option value="Teacher centred">Teacher centred</option>
            <option value="Student centred">Student centred</option>
            <option value="Student lead with instructor supervisor">Student lead with instructor supervisor</option>
          </select>

            <h4>c) Teaching method used</h4>
            <label for="Teaching method used">Please note the type of teaching method used:</label>
            <select class="form-select" aria-label="Default select example" name="teaching_method">
            <option hidden disabled selected value> -- select an option --</option>
              <option value="Talk and Chalk">Talk and Chalk</option>
              <option value="Conventional overhead projector">Conventional overhead projector</option>
              <option value="Student Presentation and practical">Student Presentation and practical</option>
              <option value="Power point presentation with LCD projector">Power point presentation with LCD projector</option>
              <option value="Other">Other</option>
              </select>

          <h4>d) Medium of instruction</h4>
          <label for="Medium of instruction">Please select the medium of instruction used:</label>
          <select class="form-select" aria-label="Default select example" name="medium_of_instruction">
          <option hidden disabled selected value> -- select an option --</option>
            <option value="Course in English and English is used through out">Course in English and English is used through out</option>
            <option value="Course in English but code-switching to Kiswahili">Course in English but code-switching to Kiswahili</option>
            <option value="Course in Kiswahili but code-switching to English">Course in Kiswahili but code-switching to English</option>
          </select>
          </div>
      
        <div class="question">
     
        <h3>Teaching venue conditions</h3>
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
              <td>A. Sitting arrangements of students</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="NA" id="flexRadioDefault"></td>
              </tr>

             <tr>
              <td>B. Lighting</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="NA" id="flexRadioDefault"></td>
              </tr>        
                <td>C. Chairs and Tables</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
               <td>D. Fixed LCD projector system (if any)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
                <td>E. Display and Visibility</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
              <td>F. General physical condition of the room</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
                <td>G. Public address system (if any)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
                <td>H. Availability of brash and chalks/markers</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
                <td>I. Use of whiteboard/blackboard</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="NA" id="flexRadioDefault"></td>
              </tr>

              <tr>
                <td>J. Room ventilation</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="5" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="NA" id="flexRadioDefault"></td>
              </tr>
              
            </tbody>
          </table>
          </div>

<div class="question">
<h3>Matters for immediate/special attention</h3>
      <h5>Are there matters of immediate attention?</h5>
                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="special_matters" id="yes" value="yes" onclick="showHideissues()">
                  <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="special_matters" id="no" value="no" onclick="showHideissues()">
                  <label class="form-check-label">No</label>
                </div>
                <div class="form-group" id="issues">
                  <textarea class="form-control" rows="4" name="identified_matters" value="" placeholder="If the answer is Yes, identify them:"></textarea>
                </div>
</div>

            <div class="form-group">
              <!-- <a href="#evaluationModal"  data-toggle="modal" data-target="#evaluationModal" >  -->
              <button type="submit" class="mx-auto button1" name="monitoringQn">Submit</button>
              <!-- </a> -->
            </div>

              
              </div>
            </div>
            
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


  <script>
$(document).ready(function(){
  console.log("ASDfa")
  // document.getElementById("inform").style.display = "none";
  // hide submit by default
  $('#button1').hide();
  $("input[value='Yes']").click(function(){
    $("#button1").show();
});
});
</script>
<script>
    $(document).ready(function(){
  // hide submit by default
  $('#button1').hide();
  $("input[value='No']").click(function(){
    $("#button1").show();
});
});
</script>

</body>

</html>