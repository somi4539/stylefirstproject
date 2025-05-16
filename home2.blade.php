<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home | Sohaib Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #0f172a;
      font-family: 'Segoe UI', sans-serif;
      color: white;
      scroll-behavior: smooth;
    }

    nav {
      display: flex;
      justify-content: space-between;
      padding: 1.5rem 3rem;
      background: transparent;  
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav ul {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
    }

    nav ul li a:hover, nav ul li a.active {
      color: #00ffff;
    }

    section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 4rem 8%;
      min-height: 100vh;
      flex-wrap: wrap;
    }

    .hero-text {
      max-width: 50%;
    }

    .hero-text h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .hero-text h2 {
      font-size: 2rem;
      color: #00ffff;
      margin-bottom: 1rem;
    }

    .hero-text p {
      max-width: 500px;
      font-size: 1rem;
      color: #cbd5e1;
      line-height: 1.6;
    }

    .socials {
      margin: 1.5rem 0;
    }

    .socials a {
      color: #00ffff;
      margin-right: 1rem;
      font-size: 1.2rem;
    }

    .download-btn {
      padding: 0.75rem 1.5rem;
      background: #00ffff;
      border: none;
      border-radius: 30px;
      color: #000;
      font-weight: bold;
      text-decoration: none;
      transition: box-shadow 0.3s ease;
    }

    .download-btn:hover {
      box-shadow: 0 0 15px #00ffff;
    }

    .hero-img {
      width: 350px;
      height: 350px;
      background: #00ffff;
      clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 40px #00ffff;
      margin-top: 2rem;
    }

    .hero-img img {
      width: 90%;
      border-radius: 10px;
    }

    ul.skill-list {
      list-style: none;
      padding-left: 0;
      color: #cbd5e1;
      font-size: 1.1rem;
    }

    @media (max-width: 768px) {
      section {
        flex-direction: column;
        text-align: center;
      }

      .hero-text {
        max-width: 100%;
      }

      .hero-img {
        margin-top: 2rem;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav>
  <div class="logo">Portfolio.</div>
  <ul>
    <li><a href="#home" class="active">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- Home Section --> 
 <section class="hero">
    <div class="hero-text">
      <b>Hello, It's Me</b>
      <h1>M_SOHAIB</h1>
      <h2>And I'm a <span id="typed-role">Full Stack Developer</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus nulla sed saepe rerum, animi expedita.</p>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <a href="#" class="download-btn">Download CV</a>
    </div>
    <div class="hero-img">
      <img src="https://images.unsplash.com/photo-1661588698602-da41ee4fc846?fm=jpg&q=60&w=500" alt="Profile">
    </div>
  </section>

  <!-- JavaScript Typing Effect -->
  <script>
    const roles = ["Frontend Developer", "Laravel Developer", "FULL Stack Developer"];
    let i = 0;
    let j = 0;
    let isDeleting = false;
    const typingElement = document.getElementById("typed-role");

    function typeEffect() {
      const role = roles[i];
      if (isDeleting) {
        typingElement.textContent = role.substring(0, j--);
        if (j < 0) {
          isDeleting = false;
          i = (i + 1) % roles.length;
        }
      } else {
        typingElement.textContent = role.substring(0, j++);
        if (j > role.length) {
          isDeleting = true;
          setTimeout(typeEffect, 1200);
          return;
        }
      }
      setTimeout(typeEffect, 100);
    }

    typeEffect();
  </script>

<!-- About Section -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About | Sohaib Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      background: #0f172a;
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    nav {
      display: flex;
      justify-content: space-between;
      padding: 1.5rem 3rem;
      background: transparent;
    }

    nav .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav ul {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
    }

    nav ul li a:hover,
    nav ul li a.active {
      color: #00ffff;
    }

    .about-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 5rem 8%;
      min-height: 100vh; /* ✅ Makes full screen */
      background-color: #1e293b;
    }

    .about-img {
      width: 40%;
      transition: box-shadow 0.4s ease;
    }

    .about-img img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 40px rgba(0, 255, 255, 0.4);
      transition: box-shadow 0.4s ease;
    }

    .glow {
      box-shadow: 0 0 50px 10px rgba(0, 255, 255, 0.7) !important;
    }

    .about-content {
      width: 55%;
    }

    .about-content h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .about-content p {
      color: #cbd5e1;
      line-height: 1.6;
      font-size: 1rem;
      margin-bottom: 1rem;
    }

    .about-info {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
      margin-top: 1rem;
    }

    .about-info div {
      background: #0f172a;
      padding: 1rem;
      border-radius: 10px;
      transition: box-shadow 0.4s ease;
    }

    .about-info div.glow {
      box-shadow: 0 0 30px 5px rgba(0, 255, 255, 0.7);
    }

    .about-info h4 {
      color: #00ffff;
      margin-bottom: 0.2rem;
    }

    .about-content p span {
      display: inline-block;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.5s ease forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .about-section {
        flex-direction: column;
        text-align: center;
      }

      .about-img,
      .about-content {
        width: 100%;
      }

      .about-info {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

 

  <!-- ✅ Full Screen About Section -->
  <section class="about-section" id="about">
    <div class="about-img" id="about-img">
      <img src="https://images.unsplash.com/photo-1661588698602-da41ee4fc846?fm=jpg&q=60&w=500" alt="About Me" />
    </div>
    <div class="about-content">
      <h2>About Me</h2>
      <p id="about-text">
        Hello! I'm Jensen, a dedicated and creative frontend developer with experience in Laravel.
      </p>
      <div class="about-info">
        <div class="info-box"><h4>Name:</h4><p>MUHAMMAD SOHAIB</p></div>
        <div class="info-box"><h4>Email:</h4><p>sohaibdeveloper7@gmail.com</p></div>
        <div class="info-box"><h4>Experience:</h4><p>1+ Years</p></div>
        <div class="info-box"><h4>Location:</h4><p>Punjab, Pakistan</p></div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const paragraph = document.getElementById("about-text");
      const words = paragraph.innerText.split(" ");
      paragraph.innerHTML = "";

      words.forEach((word, index) => {
        const span = document.createElement("span");
        span.textContent = word + " ";
        span.style.animationDelay = `${index * 50}ms`;
        paragraph.appendChild(span);
      });

      const aboutImg = document.getElementById("about-img");
      aboutImg.addEventListener("mouseenter", () => aboutImg.classList.add("glow"));
      aboutImg.addEventListener("mouseleave", () => aboutImg.classList.remove("glow"));

      const infoBoxes = document.querySelectorAll(".info-box");
      infoBoxes.forEach((box) => {
        box.addEventListener("mouseenter", () => box.classList.add("glow"));
        box.addEventListener("mouseleave", () => box.classList.remove("glow"));
      });
    });
  </script>

</body>
</html>


  <!-- Full JavaScript -->
  <script>
    // Animate each word
    document.addEventListener("DOMContentLoaded", () => {
      const paragraph = document.getElementById("about-text");
      const words = paragraph.innerText.split(" ");
      paragraph.innerHTML = "";

      words.forEach((word, index) => {
        const span = document.createElement("span");
        span.textContent = word + " ";
        span.style.animationDelay = `${index * 50}ms`;
        paragraph.appendChild(span);
      });

      // Glow effect on hover for image
      const aboutImg = document.getElementById("about-img");
      aboutImg.addEventListener("mouseenter", () => {
        aboutImg.classList.add("glow");
      });
      aboutImg.addEventListener("mouseleave", () => {
        aboutImg.classList.remove("glow");
      });

      // Glow effect on hover for each info card
      const infoBoxes = document.querySelectorAll(".info-box");
      infoBoxes.forEach(box => {
        box.addEventListener("mouseenter", () => box.classList.add("glow"));
        box.addEventListener("mouseleave", () => box.classList.remove("glow"));
      });
    });
  </script>

</body>
</html>

</section>

<!-- Skills Section -->
<section id="skills">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #0f172a;
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    nav {
      display: flex;
      justify-content: space-between;
      padding: 1.5rem 3rem;
    }

    nav .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav ul {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
    }

    nav ul li a:hover,
    nav ul li a.active {
      color: #00ffff;
    }

    .skills-section {
      padding: 4rem 8%;
      text-align: center;
    }

    .skills-section h1 {
      font-size: 2.5rem;
      color: #00ffff;
      margin-bottom: 2rem;
    }

    .skills-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
    }

    .skill-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 2rem;
      position: relative;
      overflow: hidden;
      color: white;
      font-weight: 500;
      font-size: 1.2rem;
      transition: transform 0.3s ease;
    }

    .skill-card:hover {
      transform: translateY(-10px);
    }

    .skill-card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, #00ffff, transparent);
      animation: shine 2s linear infinite;
      z-index: 0;
    }

    .skill-card span {
      position: relative;
      z-index: 1;
    }

    @keyframes shine {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @media (max-width: 768px) {
      .skills-section h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

 
  <!-- Skills Section -->
<section class="skills-section">
  <h1>My Skills</h1>
  <div class="skills-container">
    <div class="skill-card"><span>HTML</span></div>
    <div class="skill-card"><span>CSS</span></div>
    <div class="skill-card"><span>Bootstrap</span></div>
    <div class="skill-card"><span>JavaScript</span></div>
    <div class="skill-card"><span>php</span></div>
    <div class="skill-card"><span>Laravel</span></div>
    <div class="skill-card"><span>MySQL</span></div>
    <div class="skill-card"><span>Git & GitHub</span></div>
  </div>
</section>

<!-- CSS -->
   <style>
  .skills-section {
    min-height: 100vh;
    background: #0f172a;
    color: #fff;
    text-align: center;
    padding: 4rem 8%;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .skills-section h1 {
    font-size: 2.5rem;
    margin-bottom: 2.5rem;
    color: #00ffff;
  }

  .skills-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
  }

  .skill-card {
    background: #1e293b;
    padding: 2rem 3rem; /* Increased padding */
    border-radius: 12px;
    box-shadow: 0 0 25px rgba(0, 255, 255, 0.25);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    font-size: 1.2rem; /* Increased font size */
    min-width: 180px;
    text-align: center;
  }

  .skill-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 35px rgba(0, 255, 255, 0.5);
  }

  .skill-card span {
    color: #00ffff;
    font-weight: 600;
  }

  @media (max-width: 768px) {
    .skill-card {
      width: 100%;
      text-align: center;
    }
  }
</style>


<!-- Contact Section -->
<!-- ===== Contact Section Start ===== -->
<section class="contact-section" id="contact">
  <div class="contact-container">
    <h2 class="section-title">Contact Me</h2>
    <form class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</section>

<!-- ===== Contact Section Styles ===== -->
<style>
  .contact-section {
    width: 100%;
    min-height: 100vh;
    background: #0d1117;
    padding: 60px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .contact-container {
    width: 100%;
    max-width: 800px;
    margin: auto;
  }

  .section-title {
    text-align: center;
    font-size: 2.5em;
    margin-bottom: 40px;
    color: #00ffff;
    text-shadow: 0 0 10px #00ffff;
  }

  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .contact-form input,
  .contact-form textarea {
    padding: 15px;
    background: #161b22;
    border: 2px solid #00ffff;
    border-radius: 8px;
    color: #fff;
    font-size: 1em;
    transition: box-shadow 0.3s ease;
  }

  .contact-form input:focus,
  .contact-form textarea:focus {
    outline: none;
    box-shadow: 0 0 10px #00ffff;
  }

  .contact-form button {
    padding: 15px;
    background: #00ffff;
    color: #000;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease, box-shadow 0.3s ease;
  }

  .contact-form button:hover {
    background: #0ff;
    box-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff;
  }

  @media (max-width: 768px) {
    .contact-form input,
    .contact-form textarea {
      font-size: 0.95em;
    }
  }
</style>
<!-- ===== Contact Section End ===== -->


</body>
</html>
