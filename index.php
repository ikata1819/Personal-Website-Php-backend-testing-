<?php
session_start();

// Check if logged in
$showModal = !isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME | AT_WEB</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />
  <link rel="stylesheet" href="style.css" />
  <style>
    /* ====== Modal Styling ====== */
    .modal {
      display: <?php echo $showModal ? 'flex' : 'none'; ?>;
      position: fixed;
      z-index: 9999;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      align-items: center;
      justify-content: center;
    }
    .modal-content {
      background: white;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    .modal-content h2 {
      margin-bottom: 10px;
      text-align: center;
    }
    .modal-content input, .modal-content button {
      width: 100%;
      margin: 5px 0;
      padding: 8px;
    }
    .switch-link {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: blue;
      cursor: pointer;
    }
  </style>
</head>

<body>

<?php if ($showModal): ?>
<div id="authModal" class="modal">
  <div class="modal-content">
    <!-- Login Form -->
    <div id="loginForm">
      <h2>Login</h2>
      <form method="POST" action="login.php">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
      <span class="switch-link" onclick="toggleForms()">Don't have an account? Register</span>
    </div>

    <!-- Register Form -->
    <div id="registerForm" style="display:none;">
      <h2>Register</h2>
      <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Register</button>
      </form>
      <span class="switch-link" onclick="toggleForms()">Already have an account? Login</span>
    </div>
  </div>
</div>
<?php endif; ?>

<header>
  <div class="logo">
    <span>Student</span> | <span>WebDeveloper</span> in progress
  </div>
  <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Me</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="learning.php">Learning Journey</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<main class="fade-in">
  <div class="socials">
    <a href="https://www.facebook.com/profile.php?id=100084084076025" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.linkedin.com/in/anika-tasnim-779502332/" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://github.com/ikata1819" target="_blank"><i class="fab fa-github"></i></a>
  </div>

  <div class="container">
    <div class="left-section">
      <h3>Hello, I'm</h3>
      <h1>Anika Tasnim</h1>
      <h2>Undergrad CSE Student</h2>
      <p>
        I'm a <span id="yearNumber">nd</span> Computer Science and
        Engineering student at Jahangirnagar University, passionate about
        <strong>web development</strong> and <strong>cybersecurity</strong>.
        I love building functional, user-friendly projects and exploring how
        technology connects with human behavior, society, and ideas worth
        sharing.
      </p>
      <a href="AnikaTasnimPortfolio.pdf" class="btn" download>Download my portfolio</a>
    </div>

    <div class="right-section">
      <img src="Tasnim_dp_enhanced.png" alt="Display Image" />
    </div>
  </div>
</main>

<footer>&copy;Anika Tasnim | All rights reserved 2025</footer>

<script>
  const startYear = 2023;
  const currentYear = new Date().getFullYear();
  const academicYear = currentYear - startYear + 1;
  const yearNames = ["", "1st Year", "2nd Year", "3rd Year", "4th Year"];
  document.getElementById("yearNumber").innerText = yearNames[academicYear];

  function toggleForms() {
    document.getElementById('loginForm').style.display =
      document.getElementById('loginForm').style.display === 'none' ? 'block' : 'none';
    document.getElementById('registerForm').style.display =
      document.getElementById('registerForm').style.display === 'none' ? 'block' : 'none';
  }
</script>

</body>
</html>
