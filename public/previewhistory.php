<!DOCTYPE html>
<html lang="en">

<head>
   
<?php
require_once("../includes/db.php");
require_once("../includes/headerContent.php");
require_once("../includes/sessionStuffs.php");
require_once("../includes/scripts.php");
// require_once("../assets/css/modification.css");
unset($_SESSION["studentFilledCount"]);

?>
<title>Table V02</title>
<meta charset="UTF-8">

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="modification.css">
<!-- <link rel="stylesheet" type="text/css" href="css/main.css">  -->
<!--===============================================================================================-->


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
       <section id="allocation" class="services">
        <div class="container-fluid">            
          <!-- <span class="badge alert-success" style="float: right;">Admin</span> -->
          <div class="section-title">
            <h2>COURSE ALLOCATION HISTORY</h2>
          </div>
          <div class="">

<!--       
          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Search</label> 
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
              
              <head> 




           <div class="form-group row">
              <h5><center> Table of course allocation History</center></h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                  <tr>
                  <th scope="col">Instructors</th>
                      <th scope="col">Course Name</th>
                       <th scope="col">supervisor</th> 
                      <th scope="col">Practical	/	Tutorial	Assistant</th> 
                      <th scope="col">semester</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    
                    <td>2008 </td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    
                    <td>IS 565</td>
                    <td>Information Systems,DS</td>
                    
                    <td>2019</td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    
                    <td>2020</td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    
                    <td>2021</td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    
                    <td>2022</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
           
          </form> -->
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver1 m-b-110">
<div class="table100-head">
<table>
<thead>
<tr class="row100 head">
<th class="cell100 column1">Class name</th>
<th class="cell100 column2">Type</th>
<th class="cell100 column3">Hours</th>
<th class="cell100 column4">Trainer</th>
<th class="cell100 column5">Spots</th>
</tr>
</thead>
</table>
</div>
<div class="table100-body js-pscroll">
<table>
<tbody>
<tr class="row100 body">
<td class="cell100 column1">Like a butterfly</td>
<td class="cell100 column2">Boxing</td>
<td class="cell100 column3">9:00 AM - 11:00 AM</td>
<td class="cell100 column4">Aaron Chapman</td>
<td class="cell100 column5">10</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Mind & Body</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">8:00 AM - 9:00 AM</td>
<td class="cell100 column4">Adam Stewart</td>
<td class="cell100 column5">15</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Crit Cardio</td>
<td class="cell100 column2">Gym</td>
<td class="cell100 column3">9:00 AM - 10:00 AM</td>
<td class="cell100 column4">Aaron Chapman</td>
<td class="cell100 column5">10</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Wheel Pose Full Posture</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">7:00 AM - 8:30 AM</td>
<td class="cell100 column4">Donna Wilson</td>
<td class="cell100 column5">15</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Playful Dancer's Flow</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">8:00 AM - 9:00 AM</td>
<td class="cell100 column4">Donna Wilson</td>
<td class="cell100 column5">10</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Zumba Dance</td>
<td class="cell100 column2">Dance</td>
<td class="cell100 column3">5:00 PM - 7:00 PM</td>
<td class="cell100 column4">Donna Wilson</td>
<td class="cell100 column5">20</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Cardio Blast</td>
<td class="cell100 column2">Gym</td>
<td class="cell100 column3">5:00 PM - 7:00 PM</td>
<td class="cell100 column4">Randy Porter</td>
<td class="cell100 column5">10</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Pilates Reformer</td>
<td class="cell100 column2">Gym</td>
<td class="cell100 column3">8:00 AM - 9:00 AM</td>
<td class="cell100 column4">Randy Porter</td>
<td class="cell100 column5">10</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Supple Spine and Shoulders</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">6:30 AM - 8:00 AM</td>
<td class="cell100 column4">Randy Porter</td>
<td class="cell100 column5">15</td>
</tr>

<tr class="row100 body">
<td class="cell100 column1">Yoga for Divas</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">9:00 AM - 11:00 AM</td>
<td class="cell100 column4">Donna Wilson</td>
<td class="cell100 column5">20</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Virtual Cycle</td>
<td class="cell100 column2">Gym</td>
<td class="cell100 column3">8:00 AM - 9:00 AM</td>
<td class="cell100 column4">Randy Porter</td>
<td class="cell100 column5">20</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Like a butterfly</td>
<td class="cell100 column2">Boxing</td>
<td class="cell100 column3">9:00 AM - 11:00 AM</td>
<td class="cell100 column4">Aaron Chapman</td>
<td class="cell100 column5">10</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Mind & Body</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">8:00 AM - 9:00 AM</td>
<td class="cell100 column4">Adam Stewart</td>
<td class="cell100 column5">15</td>
</tr>

</tr>
<tr class="row100 body">
<td class="cell100 column1">Supple Spine and Shoulders</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">6:30 AM - 8:00 AM</td>
<td class="cell100 column4">Randy Porter</td>
<td class="cell100 column5">15</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Yoga for Divas</td>
<td class="cell100 column2">Yoga</td>
<td class="cell100 column3">9:00 AM - 11:00 AM</td>
<td class="cell100 column4">Donna Wilson</td>
<td class="cell100 column5">20</td>
</tr>
<tr class="row100 body">
<td class="cell100 column1">Virtual Cycle</td>
<td class="cell100 column2">Gym</td>
<td class="cell100 column3">8:00 AM - 9:00 AM</td>
<td class="cell100 column4">Randy Porter</td>
<td class="cell100 column5">20</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- end table -->
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
                <h4>Add New Allocation</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursecode" placeholder="Course Code">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="Course Name">
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
                <h4>Edit Allocation</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="no_of_courses"placeholder="No of courses">
                  </div>
                  <div class="form-group">
                   <input type="text" class="form-control" id="coursecode" placeholder="Course Code">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="New Course Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="status" placeholder="Status: Active or Not active">
                   </div>

                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading edit form-->



  </main>
  <!-- End #main -->


</body>

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
  <style>
    
 /* style  for table */
 
  /*//////////////////////////////////////////////////////////////////
  [ RESTYLE TAG ]*/
  * {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  }
  /* body, html {
  height: 100%;
  font-family: sans-serif;
  } */
  /* ------------------------------------ */
  a {
  margin: 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  }
  a:focus {
  outline: none !important;
  }
  a:hover {
  text-decoration: none;
  }
  /* ------------------------------------ */
  /* h1,h2,h3,h4,h5,h6 {margin: 0px;}
  p {margin: 0px;}
  ul, li {
  margin: 0px;
  list-style-type: none;
  }
  /* ------------------------------------ */
  /* input {
  display: block;
  outline: none;
  border: none !important;
  }
  textarea {
  display: block;
  outline: none;
  }
  textarea:focus, input:focus {
  border-color: transparent !important;
  }
  /* ------------------------------------ */
  button {
  outline: none !important;
  border: none;
  background: transparent;
  }
  button:hover {
  cursor: pointer;
  } 
/* Table codes */
iframe {
    border: none !important;
    } 
    /*
  [ Scroll bar ]*/
  .js-pscroll {
    position: relative;
    overflow: hidden;
    }
    .table100 .ps__rail-y {
    width: 9px;
    background-color: transparent;
    opacity: 1 !important;
    right: 5px;
    }
    .table100 .ps__rail-y::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #ebebeb;
    border-radius: 5px;
    width: 100%;
    height: calc(100% - 30px);
    left: 0;
    top: 15px;
    }
    .table100 .ps__rail-y .ps__thumb-y {
    width: 100%;
    right: 0;
    background-color: transparent;
    opacity: 1 !important;
    }
    .table100 .ps__rail-y .ps__thumb-y::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #cccccc;
    border-radius: 5px;
    width: 100%;
    height: calc(100% - 30px);
    left: 0;
    top: 15px;
    }
    
    .container-table100 {
    width: 100%;
    min-height: 100vh;
    background: none;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 33px 30px;
    }
    .wrap-table100 {
    width: 960px;
    border-radius: 10px;
    overflow: hidden;
    }
    .table100 {
      background-color: #fff;
      }
      table {
      width: 100%;
      }
      th, td {
      font-weight: unset;
      padding-right: 10px;
      }
      .column1 {
      width: 33%;
      padding-left: 40px;
      }
      .column2 {
      width: 13%;
      }
      .column3 {
      width: 22%;
      }
      .column4 {
      width: 19%;
      }
      .column5 {
      width: 13%;
      }
      .table100-head th {
      padding-top: 18px;
      padding-bottom: 18px;
      }
      .table100-body td {
      padding-top: 16px;
      padding-bottom: 16px;
      }
      /*==================================================================
      [ Fix header ]*/
      .table100 {
      position: relative;
      padding-top: 60px;
      }
      .table100-head {
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
      }
      .table100-body {
      max-height: 585px;
      overflow: auto;
      }
      /*==================================================================
      [ Ver1 ]*/
      .table100.ver1 th {
      font-family: Lato-Bold;
      font-size: 18px;
      color: #fff;
      line-height: 1.4;
      background-color: #6c7ae0;
      }
      .table100.ver1 td {
      font-family: Lato-Regular;
      font-size: 15px;
      color: #808080;
      line-height: 1.4;
      }
      .table100.ver1 .table100-body tr:nth-child(even) {
      background-color: #f8f6ff;
      }
      /*---------------------------------------------*/
      .table100.ver1 {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      }
      .table100.ver1 .ps__rail-y {
      right: 5px;
      }
      .table100.ver1 .ps__rail-y::before {
      background-color: #ebebeb;
      }
      .table100.ver1 .ps__rail-y .ps__thumb-y::before {
      background-color: #cccccc;
      }
    /*=================================================================*/
  </style>
</html>