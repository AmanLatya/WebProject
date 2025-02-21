<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom Css -->
  <link rel="stylesheet" href="/css/style.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <title>Train Track Learning Management Portal</title>
</head>

<body>


  <div class="ContactContainer container d-flex justify-content-center align-items-center">
    <div class="container">
      <form>
        <h1>Contact Us</h1>

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="text-area" class="form-label">Message</label>
          <textarea class="form-control" id="text-area" name="text-area" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-custom">Submit</button>
      </form>
    </div>
    <div class="container bg-red d-lg-block d-none px-5 rounded py-5 mt-4" id="address">
      <h2>TrainTrack</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto doloribus enim officiis soluta
        explicabommodi natus.</p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- Popper JS -->
  <script src="/js/popper.min.js"></script>
  <!-- jQuery -->
  <script src="/js/jQuery.js"></script>
  <script src="/js/script.js"></script>
</body>

</html>