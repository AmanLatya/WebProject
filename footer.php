<!DOCTYPE html>
<html lang="en">

<!-- Start head -->
<?php
 include('./head.php')
 ?>
<!-- End head -->
<body>

<!-- Start footer -->
<footer class="bg-red text-center text-light fw-bold fs-5 py-1">
    <div class="row p-0 m-0">
      <span>@copyright || <a href="" class="text-dark" data-bs-toggle="modal"
          data-bs-target="#AdminstaticBackdrop">Admin Login</a></span>
    </div>
  </footer>
  <!-- End footer -->
  <!-- Start Admin Modal -->
  <section>
    <div class="modal fade" id="AdminstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="AdminstaticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="AdminstaticBackdropLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="p-0">
              <label for="AdminEmailInput1" class="form-label">Admin Email address</label>
              <input type="email" class="form-control" id="AdminEmailInput1" placeholder="name@example.com">
            </div>
            <label for="AdmininputPassword5" class="form-label">Password</label>
            <input type="password" id="AdmininputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary"><a href="/dashboard.html"
                class="text-light text-decoration-none">Login</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Admin Modal -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- Popper JS -->
  <script src="/WebProject/js/popper.min.js"></script>
  <!-- jQuery -->
  <script src="/WebProject/js/jQuery.js"></script>
  <script src="/WebProject/js/script.js"></script>