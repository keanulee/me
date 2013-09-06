<nav class="navbar" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <div class="container collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
      <?php echo $page == 'index' ? '<li class="active">' : '<li>' ?>
        <a href=".">Home</a>
      </li>
      <?php echo $page == 'projects' ? '<li class="active">' : '<li>' ?>
        <a href="projects.php">Projects</a>
      </li>
      <?php echo $page == 'map' ? '<li class="active">' : '<li>' ?>
        <a href="map.php">Where I've Been</a>
      </li>
      <?php echo $page == 'resume' ? '<li class="active">' : '<li>' ?>
        <a href="resume.php">R&eacute;sum&eacute;</a>
      </li>
      <?php echo $page == 'contact' ? '<li class="active">' : '<li>' ?>
        <a href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
