<!DOCTYPE html>
<html lang="en">

<!-- Start head -->
<?php
include('./head.php')
?>
<!-- End head -->

<body>
  <!-- Start Nav Bar -->
  <?php
  include('./header.php');
  ?>
  <!-- End Nav Bar -->
  <!-- Image Section -->
  <div id="coursesBanner"></div>
  <!-- Image Section -->
  <main>
    <div class="CourseContainer container p-3 rounded" id="courses">
      <br><br>
      <div class="row p-0 m-0 align-items-center">
        <h1 class="coursesHeading col-11 p-0 m-0">Courses Categories</h1>
        <p class="col-1 p-0 m-0">
          <a class="btn btn-primary px-2 m-0" data-bs-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample" id="ViewAllCourses">
            View All
          </a>
        </p>
      </div>
      <?php
      include('./dummyCourses.php');
      ?>
      <div class="collapse" id="collapseExample">
        <div class="row">
          <div class="col-md-4 col-sm-6 my-2">
            <div class="card border-0 shadow p-3">
              <!-- <img src="/images/course-1.jpg" alt="Course Image"> -->
              <img
                src="https://static.vecteezy.com/system/resources/thumbnails/009/352/672/small_2x/listening-to-music-while-doing-work-from-home-vector.jpg"
                alt="Course Image">
              <div class="px-3 my-1">Guided by Rohan</div>
              <div class="px-3 my-1">3 Months</div>
              <div class="px-3 my-1">$108</div>
              <a class="enroll p-2 m-0 rounded fw-bold text-light bg-red text-decoration-none text-center" href="/WebProject/courseDetail.php">Enroll</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <div class="card border-0 shadow p-3">
              <!-- <img src="/images/course-1.jpg" alt="Course Image"> -->
              <img
                src="https://static.vecteezy.com/system/resources/thumbnails/009/352/672/small_2x/listening-to-music-while-doing-work-from-home-vector.jpg"
                alt="Course Image">
              <div class="px-3 my-1">Guided by Rohan</div>
              <div class="px-3 my-1">3 Months</div>
              <div class="px-3 my-1">$108</div>
              <a class="enroll p-2 m-0 rounded fw-bold text-light bg-red text-decoration-none text-center" href="/WebProject/courseDetail.php">Enroll</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <div class="card border-0 shadow p-3">
              <!-- <img src="/images/course-1.jpg" alt="Course Image"> -->
              <img
                src="https://static.vecteezy.com/system/resources/thumbnails/009/352/672/small_2x/listening-to-music-while-doing-work-from-home-vector.jpg"
                alt="Course Image">
              <div class="px-3 my-1">Guided by Rohan</div>
              <div class="px-3 my-1">3 Months</div>
              <div class="px-3 my-1">$108</div>
              <a class="enroll p-2 m-0 rounded fw-bold text-light bg-red text-decoration-none text-center" href="/WebProject/courseDetail.php">Enroll</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <div class="card border-0 shadow p-3">
              <!-- <img src="/images/course-1.jpg" alt="Course Image"> -->
              <img
                src="https://static.vecteezy.com/system/resources/thumbnails/009/352/672/small_2x/listening-to-music-while-doing-work-from-home-vector.jpg"
                alt="Course Image">
              <div class="px-3 my-1">Guided by Rohan</div>
              <div class="px-3 my-1">3 Months</div>
              <div class="px-3 my-1">$108</div>
              <a class="enroll p-2 m-0 rounded fw-bold text-light bg-red text-decoration-none text-center" href="/WebProject/courseDetail.php">Enroll</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <div class="card border-0 shadow p-3">
              <!-- <img src="/images/course-1.jpg" alt="Course Image"> -->
              <img
                src="https://static.vecteezy.com/system/resources/thumbnails/009/352/672/small_2x/listening-to-music-while-doing-work-from-home-vector.jpg"
                alt="Course Image">
              <div class="px-3 my-1">Guided by Rohan</div>
              <div class="px-3 my-1">3 Months</div>
              <div class="px-3 my-1">$108</div>
              <a class="enroll p-2 m-0 rounded fw-bold text-light bg-red text-decoration-none text-center" href="/WebProject/courseDetail.php">Enroll</a>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>

    <!-- End Free Courses -->
  </main>
  <!-- Start footer -->
  <?php
  include('./footer.php');
  ?>
  <!-- End footer -->
</body>

</html>