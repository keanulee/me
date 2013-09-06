<!DOCTYPE html>
<html>
  <head>
    <title>Keanu Lee</title>
    <?php include 'partials/head.php'; ?>
  </head>
  <body>

    <div class="splash">
      <?php
      $page = 'index';
      include 'partials/nav.php';
      ?>

      <div class="jumbotron">
        <h1>Keanu Lee</h1>
        <p class="lead">
          Fourth Year Business Administration and Computer Science Student
        </p>
        <a href="contact.php" class="btn btn-lg btn-default btn-splash">Contact Me</a>
      </div> <!-- .jumbotron -->

    </div> <!-- .splash -->

    <div class="container">

      <div class="feature">
        <a href="projects.php" class="feature-image">
          <img src="images/projects.jpg" alt="Projects" />
        </a>
        <h2>
          <a href="projects.php">
            Projects &raquo;
          </a>
        </h2>
        <p>
          Take a look at some of the things I have worked on.
        </p>
      </div>

      <div class="feature">
        <a href="map.php" class="feature-image">
          <img src="images/map.jpg" alt="Where I've Been" />
        </a>
        <h2>
          <a href="map.php">
            Where I've Been &raquo;
          </a>
        </h2>
        <p>
          An interactive map of the places I've been.
        </p>
      </div>

      <div class="feature">
        <a href="resume.php" class="feature-image">
          <img src="images/resume.jpg" alt="R&eacute;sum&eacute;" />
        </a>
        <h2>
          <a href="resume.php">
            R&eacute;sum&eacute; &raquo;
          </a>
        </h2>
        <p>
          A list of skills, education, and past work experience.
        </p>
      </div>

    </div> <!-- .container -->

    <?php include 'partials/footer.php'; ?>

  </body>
</html>
