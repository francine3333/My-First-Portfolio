<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>Web Design Mastery | Responsive Portfolio</title>
</head>
<body>
<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
?>
  <nav>
    <div class="nav__content">
      <div class="logo">
        <a href="#">
          <span style="color: rgb(238, 130, 233);">Ris</span><span style="color: gray">cha</span>
          <span> </span>
          <span style="color: violet;">Fran</span><span style="color: gray;">cine</span>
          <span> </span>
          <span style="color: violet;">C.</span>
          <span> </span>
          <span style="color: violet;">Lasti</span><span style="color: gray;">mosa</span>
        </a>
      </div>
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check" />
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact details</a></li>
        <p class ="subscribe">Subscribe</p>
      </ul>
    </div>
  </nav>

  <section class="section">
    <div class="section__container">
      <div class="image">
        <img src="profile/francine.jpg" alt="profile" />
      </div>
      <div class="content">
        <p class="subtitle">HELLO</p>
        <h1 class="title">
          I'm Francine<br />a Web Developer
        </h1>
        <p class="description">
          Welcome to my portfolio! I'm Francine, a second-year college student at De La Salle University, taking up
          Bachelor of Science in Information Technology, planning to minor in Application Development. Currently, I'm
          learning Integrative Programming, focusing on PHP for backend development with minimal emphasis on CSS. Apologies
          for the simple design—I'm still a beginner in web development.
        </p>
        <div class="action__btns">
          <button class="hire__me">Hire Me</button>
          <button class="portfolio">Portfolio</button>
        </div>
      </div>
    </div>
  </section>

  <div id="about">
    <h2 class="abt">About me</h2>
    <img src="profile/rischa.jpg" alt="profile" class="image_aboutme" />
    <p class="abtme_acads">
      At De La Salle University, I'm immersing myself in a diverse range<br />
      of IT subjects, honing my skills in different programming languages <br />
      and technologies. My coursework covers everything from low-level <br />
      programming with the C language to mastering PHP and Java development.<br />
      I'm committed to expanding my knowledge by staying updated on the<br />
      latest advancements in the tech world.
    </p>
    <p class="abtme_future">
      Looking towards the future, I'm driven to carve out a rewarding career<br />
      in the ever-evolving field of Information Technology. I aspire to become<br />
      a skilled software engineer or data scientist, leveraging my passion for<br />
      technology to solve complex problems and drive innovation in the field of<br />
      data science.<br /><br />

      I'm drawn to the challenges and opportunities presented by the digital<br />
      landscape, and I'm excited about the prospect of leveraging my skills to<br />
      make a tangible impact. Whether it's developing innovative software<br />
      solutions, harnessing data to derive insights, or contributing to<br />
      groundbreaking projects, I'm committed to continuous growth and advancement<br />
      in pursuit of my professional goals.
    </p>
  </div>

  <div id="skills">
    <div class="skills_section">
      <div class="skills_head">
        <h2 class="skills_move">My <span>Skills</span></h2><br /><br />
        <p class="move">Here are my skills to represent my expertise in Software development and Interpersonal abilities</p>
      </div>

      <div class="skills_main">
        <div class="skill_bar">
          <div class="info">
            <p>HTML and CSS</p>
            <P>30%</P>
          </div>
          <div class="bar">
            <span class="html"></span>
          </div>
        </div>
        <div class="skill_bar">
          <div class="info">
            <p>MYSQL</p>
            <P>100%</P>
          </div>
          <div class="bar">
            <span class="css"></span>
          </div>
        </div>
        <div class="skill_bar">
          <div class="info">
            <p>C Language</p>
            <P>70%</P>
          </div>
          <div class="bar">
            <span class="sass"></span>
          </div>
        </div>
        <div class="skill_bar">
          <div class="info">
            <p>Java</p>
            <P>80%</P>
          </div>
          <div class="bar">
            <span class="js"></span>
          </div>
        </div>
        <div class="skill_bar">
          <div class="info">
            <p>PHP</p>
            <P>30%</P>
          </div>
          <div class="bar">
            <span class="react"></span>
          </div>
        </div>
        <div class="skill_bar">
          <div class="info">
            <p>Communication Skills</p>
            <P>90%</P>
          </div>
          <div class="bar">
            <span class="communication"></span>
          </div>
        </div>
        <div class="skill_bar">
          <div class="info">
            <p>Teamwork</p>
            <P>100%</P>
          </div>
          <div class="bar">
            <span class="teamwork"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact">
   
    <div class="container">
      <div class="contact-box">
        <div class="left"></div>
        <div class="right">
          <h2>Contact Me</h2>
          
          <input type="text" class="field" placeholder="Your Name">
          <input type="text" class="field" placeholder="Your Email">
          <input type="text" class="field" placeholder="Phone">
          <textarea placeholder="Message" class="field"></textarea>
          <button class="btn">Send</button>
        </div>
      </div>
    </div>
    
  </div>

</body>
</html>
