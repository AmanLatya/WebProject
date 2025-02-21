<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom Css -->
  <link rel="stylesheet" href="/WebProject/css/style.css">
  <link rel="stylesheet" href="/WebProject/css/dashboard.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <title>Train Track Learning Management Portal</title>
</head>

<body>
    <nav class="navbar">
        <button class="menu-btn" onclick="toggleSidebar()">☰</button>
        <h2>TrainTrack</h2>
    </nav>

    <div class="dashboard-container">
        <nav class="sidebar" id="sidebar">
            <h2>TrainTrack</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Progress</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>

        <div class="main-content">
            <div class="user-info">
                <div>
                    <h3>Hello, Josh</h3>
                    <p>It's good to see you again!</p>
                </div>
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/boy-7215504-5873316.png?f=webp" alt="User Image">
            </div>
            
            <h3 class="mt-4">Your Courses</h3>
            <div class="course-card">
                <span>Course Name - 83% Completed</span>
                <button>Continue</button>
            </div>
            <div class="course-card">
                <span>Course Name - 60% Completed</span>
                <button>Continue</button>
            </div>
            <div class="course-card">
                <span>Course Name - 45% Completed</span>
                <button>Continue</button>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
</body>
</html>
