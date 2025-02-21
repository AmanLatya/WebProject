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
  <!-- Image Section -->
  <div id="coursesBanner"></div>
  <!-- Image Section -->

  <!-- Start Course -->
  <div class="container">
    <div class="container p-0 m-0 d-flex justify-content-center align-items-center">
      <img src="/WebProject/images/course-1.jpg" class="w-25" alt="">
      <div class="container">
        <h3 class="row m-0 p-0">Course Name</h3>
        <p>Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, laudantium?</p>
        <p>Duration : 3 Months</p>
        <p class="fw-bold">Price 108$</p>
        <a class="btn bg-red text-decoration-none" href="/WebProject/payment.php">Buy Now</a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.No.</th>
          <th scope="col">Chapter Name</th>
          <th scope="col">Video Link</th>
          <th scope="col">Assignments</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- End Course -->

  <!-- Start footer -->
  <?php
  include('./footer.php');
  ?>
  <!-- End footer -->
</body>

</html>