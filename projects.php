 <!DOCTYPE html>
<html>
  <head>
    <title>Projects | Keanu Lee</title>
    <?php include 'partials/head.php'; ?>
  </head>
  <body>

    <div class="splash">
      <?php
      $page = "projects";
      include 'partials/nav.php';
      ?>
    </div>

    <div class="container">

      <h1>Projects</h1>

      <div class="row projects">

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/bus-times.jpg" alt="Bus Times Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://github.com/keanulee/bus-times-server">
                  Bus Times for Pebble
                </a>
              </h3>
              <p>
                <a href="http://bus-times-server.keanulee.com/">
                  bus-times-server.keanulee.com
                </a>
              </p>
              <p>
                Get departure times of nearby bus stops on your <a href="http://getpebble.com">Pebble Watch</a>. The app was built on the Pebble SDK 1.12 and uses <a href="https://github.com/Katharine/httpebble-watch">httpebble</a> to access network and location information on the smartphone. The back end web server calculates the closest stops and departure times using imported <a href="https://developers.google.com/transit/gtfs/">GTFS data</a>. It also provides a mobile web application that caches static files to reduce load times.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/pinpointcv.jpg" alt="pinpointCV Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://github.com/keanulee/cv-hackathon">
                  pinpointCV
                </a>
              </h3>
              <p>
                <a href="http://www.pinpointcv.com/">
                  pinpointcv.com
                </a>
              </p>
              <p>
                Created for <a href="http://angelhack.com">Anglehack</a> 2013, pinpointCV lets you manage multiple resumes effortlessly. It imports user details using the <a href="https://developer.linkedin.com/apis">LinkedIn API</a> and can generate a PDF resume based on how user customizations on that data. pinpoint CV was built using Ruby on Rails.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/talerts.jpg" alt="Travel Alerts Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://github.com/keanulee/talerts">
                  Travel Alerts
                </a>
              </h3>
              <p>
                <a href="http://keanulee.com/talerts/">
                  keanulee.com/talerts
                </a>
                <br />
                <a href="http://appworld.blackberry.com/webstore/content/87564/">
                  Blackberry World Listing
                </a>
              </p>
              <p>
                Travel Alerts was originally a <a href="http://developer.blackberry.com/html5/">BlackBerry HTML5 WebWorks</a> app (developed with the sole purpose of getting a <a href="https://devblog.blackberry.com/2011/01/free-blackberry-playbook-tablet-offer/">free BlackBerry Playbook</a>). It was also designed to work as a PHP website. Travel Alerts uses data provided by the <a href="http://travel.state.gov">U.S. Department of State</a>.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/water.jpg" alt="Water Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://github.com/keanulee/water">
                  Water
                </a>
              </h3>
              <p>
                <a href="http://keanulee.com/water-demo/">
                  keanulee.com/water-demo
                </a>
              </p>
              <p>
                Water is an irrigation controller web application for the <a href="http://www.quicksmart.com/qs_etherrain.html">EtherRain device</a>. It runs on PHP and cron jobs, and utilizes the <a href="http://www.worldweatheronline.com/free-weather-feed.aspx">World Weather Online API</a> to determine if watering is necessary. The EtherRain device is itself a web server and is triggered through web GET requests.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/sona-notifier.jpg" alt="Sona Notifier" />
            <div class="caption">
              <h3>
                <a href="https://github.com/keanulee/sona-notifier">
                  Sona Notifier
                </a>
              </h3>
              <p>
                Sona Notifier is a PHP script that periodically checks an authenticated website for the availability of new research studies on the <a href="http://www.sona-systems.com">Sona web-based human subject pool management software</a>. It would send an email with the list of studies when a new available study was posted.<br /><br /><br />
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/ClassScheduleToICS.jpg" alt="ClassScheduleToICS Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://github.com/keanulee/ClassScheduleToICS">
                  ClassScheduleToICS
                </a>
              </h3>
              <p>
                <a href="https://chrome.google.com/webstore/detail/uw-class-schedule-exporte/fdblgakcbbgcghehdiainelnhojenfpe">
                  Chrome Web Store Listing (UW Class Schedule Exporter)
                </a>
              </p>
              <p>
                ClassScheduleToICS is a Chrome extension that allows you to download an iCalendar file with your class information, including date/time, location, and instructor.  It creates recurring appointments based on the <a href="http://en.wikipedia.org/wiki/ICalendar">ICS format</a>, and this file can be imported to many popular calendar applications such as Outlook and Google Calendar.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="..." />
            <div class="caption">
              <h3>
                Coming Soon...
              </h3>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

      </div> <!-- .row .projects -->

    </div> <!-- .container -->

    <?php include 'partials/footer.php'; ?>

  </body>
</html>
