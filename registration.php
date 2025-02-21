<!DOCTYPE html>
<html lang="en">

<!-- Start head -->
<?php
include('./head.php')
?>
<!-- End head -->
  <!-- <style>
    @media (max-width: 768px) {
      .container {
        width: 90% !important;
      }
    }
  </style> -->

<body>
  <?php
  include('./header.php');
  ?>
  <div id="registration"
    class="container rounded bg-light text-dark mt-5 p-4 border border-2 shadow-lg w-50 w-md-75 w-sm-100">
    <h1 class="text-center mb-4">Registration Page</h1>
    <form>
      <div class="row mt-3">
        <div class="col-md-6 col-sm-12">
          <label for="firstName" class="form-label fs-5">First Name</label>
          <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" />
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="lastName" class="form-label fs-5">Last Name</label>
          <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" />
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6 col-sm-12">
          <label for="DOB" class="form-label fs-5">DOB</label>
          <input type="date" class="form-control" id="DOB" />
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="gender" class="form-label fs-5">Gender</label>
          <select name="gender" class="form-control" id="gender">
            <option value="female">Female</option>
            <option value="male" selected>Male</option>
            <option value="transgender">Transgender</option>
          </select>
        </div>
      </div>
      <div class="mt-3">
        <label for="email" class="form-label fs-5">Email ID</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email ID" />
      </div>
      <div class="mt-3">
        <label for="password" class="form-label fs-5">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" />
      </div>
      <div class="mt-3">
        <label for="Confirmpassword" class="form-label fs-5">Confirm Password</label>
        <input type="password" class="form-control" id="Confirmpassword" placeholder="Re-Enter Password" />
      </div>
      <div class="mt-3">
        <label for="phone" class="form-label fs-5">Phone Number</label>
        <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" />
      </div>
      <div class="row mt-4">
        <button type="submit" class="col-md-5 col-sm-12 btn btn-primary mx-auto">Submit</button>
        <button type="reset" class="col-md-5 col-sm-12 btn btn-secondary mx-auto">Reset</button>
        <a href="/WebProject/login.php">Already have an account</a>
      </div>
    </form>
  </div>

  <?php
  include('./footer.php')
  ?>
</body>

</html>