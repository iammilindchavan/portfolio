<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="home" class="hero">
    <div class="hero-content">
      <h1>Hi, I'm John Doe</h1>
      <p>Web Developer & Designer</p>
      <a href="#projects" class="btn">View My Work</a>
    </div>
  </section>

  <section id="about" class="about">
    <h2>About Me</h2>
    <div class="about-content">
      <img src="assets/images/profile.jpg" alt="Profile Picture">
      <p>I'm a passionate web developer with experience in HTML, CSS, JavaScript, and PHP. I love building responsive and user-friendly websites.</p>
    </div>
  </section>

  <section id="projects" class="projects">
    <h2>My Projects</h2>
    <div class="project-grid">
      <div class="project-card">
        <h3>Project 1</h3>
        <p>A responsive website built with HTML, CSS, and JavaScript.</p>
      </div>
      <div class="project-card">
        <h3>Project 2</h3>
        <p>An e-commerce site using PHP and MySQL.</p>
      </div>
      <div class="project-card">
        <h3>Project 3</h3>
        <p>A React-based web application.</p>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Me</h2>
    <form action="contact.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2023 John Doe. All rights reserved.</p>
    <div class="social-links">
      <a href="https://github.com" target="_blank">
        <img src="assets/icons/github.svg" alt="GitHub">
      </a>
    </div>
  </footer>

  <script src="js\script.js"></script>
</body>
</html>