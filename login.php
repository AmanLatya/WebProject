<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    width: 350px;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.logo {
    width: 80px;
    margin-bottom: 10px;
}

h2 {
    color: #333;
    font-size: 22px;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

.input-box {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    transition: border 0.3s ease;
}

.input-box:focus {
    border: 1px solid #007bff;
}

.login-btn {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.login-btn:hover {
    background: #0056b3;
}

.forgot-password {
    display: block;
    margin-top: 10px;
    font-size: 14px;
    text-decoration: none;
    color: #007bff;
}

.forgot-password:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="login-container">
        <img src="schoollogo.jpg" alt="School Logo" class="logo"> <!-- Replace with actual school logo -->
        <h2>Welcome to School Portal</h2>
        <form id="loginForm">
            <div class="input-group">
                <input type="text" id="username" class="input-box" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" class="input-box" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>

    <script>
        function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    if (username === "admin" && password === "1234") {
        localStorage.setItem("loggedIn", "true");
        window.location.href = "dashboard.html";
    } else {
        document.getElementById("error-message").innerText = "Invalid credentials";
    }
}
function checkLogin() {
    if (localStorage.getItem("loggedIn") !== "true") {
        window.location.href = "login.html";
    }
}
function logout() {
    localStorage.removeItem("loggedIn");
    window.location.href = "login.html";
}
    </script>
    <script src="script.js"></script>
</body>
</html>