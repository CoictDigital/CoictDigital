<!DOCTYPE html>
<html>
    <head>
        
<?php
    require_once("../includes/functions.php");
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/fetchcoursecode.php");
    //get number of responses
  //   $couses = fetchCourse();
  // $courseRes = [];
  // while ($row = $couses->fetch_assoc()) {
  //   $row["totalResponses"] = getCourseResponse($row["course_code"]);
  //   array_push($courseRes, $row);
 // }
  //   if (isset($_SESSION["teachingFilled"])) {
  //     unset($_SESSION['teachingFilled']);
  //   } else {
  //   }

  //   if (!empty($_POST["course_code"])) {
  //     $id = $_POST['course_code'];
  //     $query = "select * from courses where course_code=$id";
  //     $result = mysqli_query($conn, $query);
  //     if ($result->num_rows > 0) {
  //         echo '<option value="">Select course_code</option>';
  //         while ($row = mysqli_fetch_assoc($result)) {
  //             echo '<option value="' . $row['id'] . '">' . $row['course_code'] . '</option>';
  //         }
  //     }
  // } elseif (!empty($_POST['sid'])) {
      
  //     }
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
    <section>
        <div class="">
          <div class="row justify-content-center align-items-center">
        
    
<div class="col-sm-4">
<form action="./../login.php" class="card p-4 rounded shadow details" method="POST">
<p class="text-center pt-3">Please select the corresponding details</p>

<div class="mb-3">
<select class="form-select" aria-label="Default select example" name="yearofstudy"
                                    id="studyyear" required>
                                    <option hidden disabled selected value> -- Select year of study --</option>
                                    <option>Year of study</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>
</div>

<div class="mb-3">
<select class="form-select" aria-label="Default select example" name="semester"
                                    id="semester" required>
                                    <option hidden disabled selected value> -- Select semester --</option>
                                    <!-- <option>Semester</option> -->
                                    <option>Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
</div>


<div class="mb-3">
<select class="form-select" aria-label="Default select example" name="course_code"
                                    id="course">
                                    <option hidden disabled selected value> -- Select course --</option>
                                    <option>Course</option>
                                  
                                </select>
</div>

<button type="submit" class="mx-auto button" name="teaching">Proceed</button>

<a href="index.php"><p class="text-center pt-3">Cancel</p></a>
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

<script type="text/javascript">
    $(document).ready(function() {
        var study_year;
        var semester;
        var data = {
            "study_year": null,
            "semester": null,
        };
        const selectElement = document.getElementById('semester');
        const courseYear = document.getElementById("studyyear");
        courseYear.addEventListener('change', (event) => {
            data["study_year"] = event.target.value;
        });
        selectElement.addEventListener('change', (event) => {
            data["semester"] = event.target.value;
            updateCourse();
        });

        const updateCourse = async () => {
            const courseField = document.getElementById("course");

            const url = "http://localhost/coictdigital/includes/fetchcoursecode.php";
            const options = {
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                mode: 'cors', // no-cors, *cors, same-origin
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, *same-origin, omit
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },

                body: Object.entries(data).map(([k, v]) => {
                    return k + '=' + v
                }).join('&')

            }
            //fetch courses based on semester and study year
            const response = await fetch(url, options);
            const result = await response.json();

            let courses = [];

            for (var i = 0; i < result.length; ++i) {
                courses.push(result[i].course_code);
            }

            let options_new = courses.map(course =>
                `<option value='${course}'>${course}</option>`).join('\n');
            courseField.innerHTML = options_new;

        };

    });
    </script>

    <!-- refresh page on clicking browser's back button -->
    <script>
    window.addEventListener("pageshow", function(event) {
        var historyTraversal = event.persisted || (typeof window.performance != "undefined" && window
            .performance.navigation.type === 2);
        if (historyTraversal) {
            // Handle page restore.
            //alert('refresh');
            window.location.reload();
        }
    });
    </script>
    
  </body>
</html>