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
  include('./header.php')
  ?>
  <!-- End Nav Bar -->

  <!-- Start Body -->
  <section>
    <div class="bodyContainer bg-white d-flex flex-column justify-content-center align-items-center text-center">
      <!-- <img src="/images/UserImag.png" class="UserImag d-none d-md-block" alt="User Image"> -->
      <img
        src="https://img.freepik.com/premium-vector/businessman-avatar-illustration-cartoon-user-portrait-user-profile-icon_118339-5502.jpg?w=826"
        class="UserImag d-none d-md-block" alt="User Image" style="max-width: 33%;">
      <div class="lms">
        <h1>Learning Management System</h1>
        <p class="d-none d-md-block">Clean and User-Friendly Foundation for your Learning Management System (LMS)</p>
        <a href="#courses" class="fw-bold p-2 rounded text-light bg-red text-decoration-none">Get Started</a>
      </div>
    </div>
    <br>
  </section>
  <!-- End Body -->

  <!-- Start Courses categories -->
  <main>
  <h1 class="coursesHeading">Courses Categories</h1>
    <?php
    include('./dummyCourses.php');
    ?>
  </main>
  <!-- End Courses categories -->

  <!-- Start Contact page -->
  <?php
  include('./contact.php');
  ?>
  <!-- End Contact page -->

  <?php
  include('./footer.php')
  ?>

</body>
</html>