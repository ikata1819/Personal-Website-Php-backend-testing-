<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact | AT_WEB</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="script.js"> -->
</head>

<body>
  <header>
    <div class="logo"><span>Student</span> | <span>WebDeveloper</span> in progress</div>
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
<main>
    <div id="contact" class="fade-in">
  <h2 class="para_head">Contact Me</h2>
  <form class="contact_form" action="https://getform.io/f/ajjjogna" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your Email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>

    <button type="submit">Send Message</button>
  </form>
</div>

<div id="address" class="fade-in delay-1">
  <div class="address_container">
    <p>
      <i class="fas fa-map-marker-alt"></i>
      &nbsp; Jahangirnagar University, Savar, Dhaka-1342
    </p>
  </div>
</div>

</main>
  
<footer>&copy;Anika Tasnim | All rights reserved 2025 </footer>

</body>
</html>
