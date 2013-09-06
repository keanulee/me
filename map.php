<!DOCTYPE html>
<html>
  <head>
    <title>Where I've Been | Keanu Lee</title>
    <?php include 'partials/head.php'; ?>
  </head>
  <body>

    <div class="splash">
      <?php
      $page = "map";
      include 'partials/nav.php';
      ?>
    </div>

    <div class="map" id="map-canvas"></div>

    <?php include 'partials/footer.php'; ?>

    <script src="js/map.js"></script>
  </body>
</html>
