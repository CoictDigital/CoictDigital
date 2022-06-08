
<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once("../includes/db.php");
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../public/addnewallocation.php");
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


  <main id="main">

     <div class="row" >
      <div class="col-md-12"><div class="dropdown" style="float: right; width: 100px;">
          <!-- <button class="dropbtn">user<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">Logout</a> --> 
            <div class="dropdown nav-link">
          <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-dark" href="#"><p>Change Password</p></a>
          </div>
          </div>
          </div>
      </div>
    </div>
      
      </div>
    </div>
       <!-- ======= Form Section ======= -->
       <section id="invigilation" class="services">
        <div class="container-fluid">            
         
          <div class="section-title">
            <h2>EXAM INVIGILATION</h2>
          </div>
          <div class="container">
          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><i class="fa fa-search" aria-hidden="true"></i> Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
              <div class="col-sm-5 mb-1">
              <a href="#addnewModal"  data-toggle="modal" data-target="#addnewModal" > 
                <button type="submit" class="mx-auto button" style="float: right; height: 40px;">Add New</button>
              </a>
              </div>
            </div>
            <form action="#" method="POST">
            <div class="container">
            <div class="">
          <div class="card">
         <div class="card-body">
            <div class="row">
    
        <div class="col-sm-4">
                <select class="form-select" name="course" aria-label="Default select example">
                      
                          <option selected>Select Course</option>
                          <?php 
                          foreach ($options as $option) {
                          ?>
                            <option><?php echo $option['course_title']; ?> </option>
                            <?php 
                            }
                          ?>
                                
                  </select>
              </div>

              <div class="col-sm-4">
              <select class="form-select" name="Instructor" aria-label="Default select example">
                      
                      <option selected>Select Instructor</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option><?php echo $option['instructor']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              </div>

              <div class="col-sm-4">
              <select class="form-select" name="venue" aria-label="Default select example">
                  <option selected>venue</option>
                  <?php 
                      foreach ($options as $option) {
                      ?>
                        <option><?php echo $option['venue']; ?> </option>
                        <?php 
                        }
                      ?>
                </select>
              </div>
              <div class="col-sm-4">
    
                  <input class="form-select" type="date" placeholder="Select day">
                
              
               
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="From time" aria-label="Default select example">
                  <option selected> From Time</option>
              
                  <option value="7:30">7:30   </option>
                  <option value="8:00 ">8:00   </option>
                  <option value="8:30">8:30   </option>
                  <option value="9:00">9:00   </option>
                  <option value="9:30">9:30   </option>
                  <option value="11:30">11:30   </option>
                  <option value="9:30">15:30   </option>
                  
                </select>
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="to time" aria-label="Default select example">
                  <option selected>To time</option>
                  <option value="10:30">10:30</option>
                  <option value="14:30">14:30</option>
                  <option value="18:30">18:30</option>
                 
                  
                </select>
              </div>
        </div>
          </div>
          <button type="submit" class="mx-auto button" >Save</button>
        </div>
        </div>
        </div>
        
        </form>
           <div class="form-group row">
              <h5>Table of selected exam Invigilators</h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Time</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Invigilators</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php   
                $sql = "select * from exam_invigilation" ;
              //   $sql = "SELECT id, firstname, lastname FROM MyGuests";
              //  $result = $conn->query($sql);

                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr>
                   <td><?php echo $row['day']; ?></td>
                   <td><?php echo $row['from_time'] ;?> - <?php echo $row['to_time'] ;?></td>
                   <td><?php echo $row['course_name']; ?></td>
                   <td><?php echo $row['venue']; ?></td>
                   <td><?php echo $row['invigilators']; ?></td>
                   
                   <!-- <td><?php echo $row['#']; ?></td> -->
                   <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <?php }
                 }
                 ?> 
                 
                  <!-- <tr>
                    <td>1/2/2022</td>
                    <td>8:00 -10:00</td>
                    <td>Information Systems</td>
                    <td>B302</td>
                    <td>Mlaki,Japhet</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                  <td>1/2/2022</td>
                    <td>8:00 -10:00</td>
                    <td>Information Systems</td>
                    <td>B302</td>
                    <td>Mlaki,Japhet</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                  <td>1/2/2022</td>
                    <td>8:00 -10:00</td>
                    <td>Information Systems</td>
                    <td>B302</td>
                    <td>Mlaki,Japhet</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                  <td>1/2/2022</td>
                    <td>8:00 -10:00</td>
                    <td>Information Systems</td>
                    <td>B302</td>
                    <td>Mlaki,Japhet</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                  <td>1/2/2022</td>
                    <td>8:00 -10:00</td>
                    <td>Information Systems</td>
                    <td>B302</td>
                    <td>Mlaki,Japhet</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                  <td>1/2/2022</td>
                    <td>8:00 -10:00</td>
                    <td>Information Systems</td>
                    <td>B302</td>
                    <td>Mlaki,Japhet</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr> -->
                  
                </tbody>
              </table>
            </div>
            </div>
          
          </form>
        </div>


        
        </div>
      </section><!-- End Form Section -->

      <!-- fading addnew form-->
      <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Add New Invigilator</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="Course Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="venue" placeholder="Venue">
                  </div>
                  <div class="form-group">
                    <input type="time" class="form-control" id="time" placeholder="Time">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading aadnew form-->
      
      <!-- fading edit form-->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Edit Invigilation</h4>
              </div>
              <div class="d-flex flex-column text-center">
              <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="assistantname"placeholder="Assistant Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="Course Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursetoinvigilate" placeholder="Invigilation Course ">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="venue" placeholder="Venue">
                  </div>
                  <div class="form-group">
                    <input type="time" class="form-control" id="time" placeholder="Time">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading edit form-->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Get in touch</h2>
         </div>
        <div class="info">
          <div class="row d-flex align-items-center">
           
              <div class="col-sm-4 address">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Our Location</h4>
                <p>Kijitonyama, Dar es salaam Tz</p>
              </div>

              <div class="col-sm-4 email">
                <i class="far fa-envelope"></i>
                <h4>Our Email</h4>
                <p>coictdigital@udsm.co.tz</p>
              </div>

              <div class="col-sm-4 phone">
                <i class="fas fa-phone-alt"></i>
                <h4>Call us at</h4>
                <p>+255 123 456 789</p>
              </div>
             
            </div>

         
          <div class="row d-flex align-items-center ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.948246895608!2d39.2399597!3d-6.7714281!3m2
            !1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31c34ce3703cc9eb!2sCollege%20of%20Information%20and%20Communication%20Technologi
            es%20(CoICT)%20-%20University%20of%20Dar%20es%20salaam!5e0!3m2!1sen!2stz!4v1648727896321!5m2!1sen!2stz" width="600" 
            height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
    </div>
    </section>




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