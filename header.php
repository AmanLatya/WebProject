  <!-- Start Nav Bar -->
  <header>
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top shadow">
      <div class="container-fluid">
        <a class="navbar-brand fs-5" href="#">TrainTrack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item fs-5 px-1">
              <a class="nav-link active" aria-current="page" href="/WebProject/">Home</a>
            </li>
            <li class="nav-item fs-5 px-1">
              <a class="nav-link " aria-current="page" href="/WebProject/courses.php">Courses</a>
            </li>
            <li class="nav-item fs-5 px-1">
              <a class="nav-link " href="/WebProject/registration.php">SignUp</a>
            </li>
            <li class="nav-item fs-5 px-1">
              <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#StudentstaticBackdrop">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Nav Bar -->

    <!-- Start Login Modal -->
    <section>
    <div class="modal fade" id="StudentstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="StudentstaticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="StudentstaticBackdropLabel">Student Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="p-0">
              <label for="StudentEmailInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="StudentEmailInput1" placeholder="name@example.com">
            </div>
            <label for="StudentinputPassword5" class="form-label">Password</label>
            <input type="password" id="StudentinputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary"><a href="/WebProject/dashboard.php"
                class="text-light text-decoration-none">Login</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Login Modal -->

