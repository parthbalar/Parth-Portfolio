<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parth - personal portfolio</title>

<!-- favicon
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

<!-- css -->
  <link rel="stylesheet" href="./assets/css/style.css">

<!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&family=Saira+Stencil+One&display=swap" rel="stylesheet">

</head>

<body id="top" class="dark_theme">

<!-- Header -->

  <header class="header" data-header>
    <div class="container">

      <h1 class="h1 logo">
        <a href="#">PARTH<span>.</span></a>
      </h1>

      <div class="navbar-actions">

        <!-- <select name="language" id="lang">
          <option value="en">En</option>
          <option value="ar">Ar</option>
        </select> -->

        <!-- <button class="theme-btn" aria-label="Change Theme" title="Change Theme" data-theme-btn>
          <span class="icon"></span>
        </button> -->

      </div>

      <button class="nav-toggle-btn" aria-label="Toggle Menu" title="Toggle Menu" data-nav-toggle-btn>
        <span class="one"></span>
        <span class="two"></span>
        <span class="three"></span>
      </button>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">Home.</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About.</a>
          </li>

          <li>
            <a href="#skills" class="navbar-link">Skills.</a>
          </li>

          <!-- <li>
            <a href="#portfolio" class="navbar-link">Portfolio.</a>
          </li> -->

          <li>
            <a href="#contact" class="navbar-link">Contact.</a>
          </li>

        </ul>
      </nav>

    </div>
  </header>





  <main>
    <article class="container">

<!-- Hero -->

      <section class="hero" id="home">

        <figure class="hero-banner">

          <picture>
            <source srcset="./assets/images/hero-banner-6.png" media="(min-width: 768px)">
            <source srcset="./assets/images/hero-banner-md.png" media="(min-width: 500px)">
            <img src="./assets/images/hero-banner-sm.png" alt="A man in a blue shirt with a happy expression"
              class="w-100">
          </picture>

        </figure>

        <div class="hero-content">

          <h2 class="h2 hero-title">I'm Web Developer</h2>

          <a href="#contact" class="btn btn-primary">Get in touch</a>

        </div>

        <ul class="hero-social-list">

          <li>
            <a href="https://www.facebook.com/parth.balar.37?mibextid=LQQJ4d" class="hero-social-link">
              <ion-icon name="logo-facebook"></ion-icon>

              <div class="tooltip">Facebook</div>
            </a>
          </li>

          <li>
            <a href="#" class="hero-social-link">
              <ion-icon name="logo-twitter"></ion-icon>

              <div class="tooltip">Twitter</div>
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/in/parth-balar-b804a526b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="hero-social-link">
              <ion-icon name="logo-linkedin"></ion-icon>

              <div class="tooltip">Linkedin</div>
            </a>
          </li>

        </ul>

        <a href="#stats" class="scroll-down">Scroll</a>

      </section>




<!-- states -->

      <section class="stats" id="stats">
        <ul class="stats-list">

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="./assets/images/stats-card_icon-1.png" alt="Badge icon">
              </div>

              <h2 class="h2 card-title">
                5+ Lang.  <strong>Specialized in</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="./assets/images/stats-card_icon-2.png" alt="Checkmark icon">
              </div>

              <h2 class="h2 card-title">
                3+ <strong>Completed Projects</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>

          

        </ul>
      </section>



<!-- about me -->

      <section class="about" id="about">

        <figure class="about-banner">
          <img src="./assets/images/about-banner-1.png" alt="A man in a black shirt" 
            class="w-100">
        </figure>
        
        <div class="about-content section-content">
          
          <p class="section-subtitle">About me</p>
          
          <h2 class="h3 section-title">Need a Creative Product? I can Help You!</h2>
          
          <p class="section-text">
            Hi! I'm Balar Parth, and I'm a developer who has passion for building clean web applications with intuitive
            functionalities. I enjoy the process of turning ideas into reality using creative solutions. I'm always
            curious about
            learning new skills, tools, and concepts. In addition to working on full stack projects, I have
            worked with
            creative teams, which involves daily stand-ups and communications, source control, and project management.
          </p>
          
          <div class="btn-group">
            <button class="btn btn-primary">Download Resume</button>
          </div>
          
        </div>

      </section>


<!-- skills -->

      <section class="skills" id="skills">

        <div class="skills-content section-content">

          <p class="section-subtitle">My skills</p>

          <h2 class="h3 section-title">What My Programming Skills Included?</h2>

          <p class="section-text">
            I develop simple, intuitive and responsive user interface that helps users get things done with less effort
            and time
            with those technologies.
          </p>

          <div class="skills-toggle" data-toggle-box>
            <button class="toggle-btn active" data-toggle-btn>Skills</button>

            <button class="toggle-btn" data-toggle-btn>Tools</button>
          </div>

        </div>

        <div class="skills-box" data-skills-box>

          <ul class="skills-list">

            <li>
              <div class="skill-card">
                <div class="tooltip">HTML5</div>

                <div class="card-icon">
                  <img src="./assets/images/html5.png" alt="HTML5 logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">CSS3</div>

                <div class="card-icon">
                  <img src="./assets/images/css3.png" alt="CSS3 logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">JavaScript</div>

                <div class="card-icon">
                  <img src="./assets/images/javascript.png" alt="JavaScript logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Bootstrap</div>

                <div class="card-icon">
                  <img src="./assets/images/bootstrap.png" alt="Bootstrap logo">
                </div>
              </div>
            </li>

          </ul>

          <ul class="tools-list">

            <li>
              <div class="skill-card">
                <div class="tooltip">Git</div>

                <div class="card-icon">
                  <img src="./assets/images/git.png" alt="Git logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Npm</div>

                <div class="card-icon">
                  <img src="./assets/images/npm.png" alt="Npm logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Command Line</div>

                <div class="card-icon">
                  <img src="./assets/images/command.png" alt="Command Line logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">VS Code</div>

                <div class="card-icon">
                  <img src="./assets/images/vs-code.png" alt="VS Code logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Photoshop</div>

                <div class="card-icon">
                  <img src="./assets/images/photoshop.png" alt="Photoshop logo">
                </div>
              </div>
            </li>

          </ul>

        </div>

      </section>
     


<!-- contact -->

      <section class="contact" id="contact">

        <div class="contact-content section-content">

          <p class="section-subtitle">Contact</p>

          <h2 class="h3 section-title">Have You Any Project? Please Drop a Message</h2>

          <p class="section-text">
            Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as soon as possible.
          </p>

          <ul class="contact-list">

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Address:</h3>

                <address class="contact-info">
                  801, The Emporior Bulding, Fategung, Vadodara, Gujarat.
                </address>
              </div>

            </li>

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Phone:</h3>

                <a href="tel:01234567789" class="contact-info">+91 704-669-3414</a>
              </div>

            </li>

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Email:</h3>

                <a href="mailto:info@jack.com" class="contact-info">parthbalar74@gmail.com</a>
              </div>

            </li>

            <li>
              <ul class="contac-social-list">

                <li>
                  <a href="https://www.facebook.com/parth.balar.37?mibextid=LQQJ4d" class="contact-social-link">
                    <div class="tooltip">Facebook</div>

                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://x.com/MrBalar414" class="contact-social-link">
                    <div class="tooltip">X</div>

                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://www.linkedin.com/in/parth-balar-b804a526b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="hero-social-link" class="contact-social-link">
                    <div class="tooltip">Linkedin</div>

                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://www.instagram.com/mr_balar414/" class="contact-social-link">
                    <div class="tooltip">Instagram</div>

                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <form action="" method="post" class="contact-form">

          <div class="form-wrapper">

            <label for="name" class="form-label">Name</label>

            <div class="input-wrapper">

              <input type="text" name="name" id="name" required placeholder="e.g Abc Def" class="input-field">

              <ion-icon name="person-circle"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="email" class="form-label">Email</label>

            <div class="input-wrapper">

              <input type="email" name="email" id="email" required placeholder="E.g eg123@mail.com"
                class="input-field">

              <ion-icon name="mail"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="phone" class="form-label">Phone</label>

            <div class="input-wrapper">

              <input type="tel" name="phone" id="phone" required placeholder="Phone Number" class="input-field">

              <ion-icon name="call"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="message" class="form-label">Message</label>

            <div class="input-wrapper">

              <textarea name="message" id="message" required placeholder="Write message..."
                class="input-field"></textarea>

              <ion-icon name="chatbubbles"></ion-icon>

            </div>

          </div>

          <a href="#"><button type="submit" class="btn btn-primary">Send</button></a>

        </form>

      </section>

    </article>
  </main>


<!-- submit data to data.txt file -->

<?php
    // Handle form submission on the server side
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        // Save data to file
        $file = fopen("data.txt", "a");
        $data = "$name|$email|$phone|$message\n";
        fwrite($file, $data);
        fclose($file);
    }
    ?>


 <!-- footer-->

  <footer class="footer">
    <div class="container">

      <p class="h1 logo">
        <a href="#">
          PARTH<span>.</span>
        </a>
      </p>

      <p class="copyright">
        &copy; 2024 <a href="#">@BalarParth</a>. All rights reserved
      </p>

    </div>
  </footer>


<!-- top button -->

  <a href="#top" class="go-top" data-go-top title="Go to Top">
    <ion-icon name="arrow-up"></ion-icon>
  </a>


<!-- js -->
  <script src="./assets/js/script.js"></script>

<!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>