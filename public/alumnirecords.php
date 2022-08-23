
<!DOCTYPE html>
<html lang="en">

<head>
  
<?php

    require_once("../includes/db.php");
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    // unset($_SESSION["studentFilledCount"]);
    

    ?>
    <?php
	$sql=$conn->query("SELECT 'Name','sex' FROM alumni" );
	foreach ($sql->fetch_array() as $key => $value) 
		$$key = $value;

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
                 <?php
                      if (($_SESSION["userData"]["role"] == 2) || ($_SESSION["userData"]["role"] == 3)) {
                        $sql = "SELECT * FROM `alumni`";
                      }
                      $result=$conn->query($sql);
                      ?>
                      <script>
                        function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("tb");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("tb")[0];
      y = rows[i + 1].getElementsByTagName("tb")[0];
      // Check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
                      </script>






       <!-- ======= Form Section ======= -->
       <section id="" class="services">
        <div class="container-fluid"> 
          <div class="section-title">
            <h2>ALUMNI MANAGEMENT</h2>
          </div>
          <script>
      $(document).ready(function () {
      $('#myTable4').DataTable();
  });
    </script>

          <div class="">

          <form>

            <div class="form-group row">
                <!-- <div class="col-sm-30 mb-1" >
                <a href="updatesession.php" class="mx-auto button"; style= "float: right; height: 25px;"><center>update</center></a>        
              </div> -->
              <!-- <div class="col-sm-30 mb-1" >
                <a href="profile.php" class="mx-auto button"; style= "float: right; height: 25px;"><center>profile</center></a>        
              </div> -->
            
           <div class="form-group row">
              <h5>ALUMNI TABLE</h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table id='myTable4' class="table table-bordered table-striped">
                <thead class="table-secondary">
                  <tr id='tb' >
                    <th scope="col">S/N</th>
                    <th scope="col">NAME</th>
                    <th scope="col">SEX</th>
                    <th scope="col">PROGRAM</th>
                    <th scope="col">YEAR</th>
                    <th scope="col">EMAIL ADRESS</th>
                    <th scope="col">OCCUPATION</th>
                    <th scope="col">FIELD</th>
                    <th scope="col">DETAILS</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $i = 1;                 
                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr style='cursor:pointer; cursor:hand;'>
                  <td><?php echo $i++; ?></td>
                   <td><?php echo $row['Name']; ?></td>
                   <td><?php echo $row['sex']; ?></td>
                   <td><?php echo $row['programme']; ?></td>
                   <td><?php echo $row['year_completed']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['occupation']; ?></td>
                   <td><?php echo $row['field']; ?></td>
                   <td>
                   <form action="alumniview.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                    
									
                  <button class="btn btn-sm btn-outline-primary" type="submitt"><i class="fa fa-eye"></i> View</button>
               
                 
                    </form> 
									</td>
                  </tr>
                  <?php }
                 }
                 ?>
                </tbody>
              </table>
            </div>
            </div>
          
          </form>
        </div>
        <!-- <div class="col-sm-30 mb-1" >
                <a href="market.php" class="mx-auto button"; style= "float: right; height: 25px;"><center>marketing</center></a>        
              </div> -->

        
        </div>
      </section><!-- End Form Section -->

      
      
  </main>

  <div class="col-sm-30 mb-1" >
                <a href="updatesession.php" class="mx-auto button";><center>update</center></a>        
              </div>
 
  <!-- End #main -->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

  <?php

  require_once("./../includes/scripts.php");
  
  ?>
  

</body>
</html>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
