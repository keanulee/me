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
            <img src="images/projects/finance-plus.jpg" alt="Finance Plus Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://chrome.google.com/webstore/detail/finance-plus/fcbbcjibkbckeghnjogklkiojnihjddp">
                  Finance Plus
                </a>
              </h3>
              <p>
                Finance Plus is a Chrome extension that enhances the functionality of Google Finance. It adds SVG charts to the portfolio page that includes the amount invested and a <a href="http://en.wikipedia.org/wiki/True_Time-Weighted_Rate_of_Return">true time-weighted</a> portfolio that ignores external cash flows of your investment portfolio. These tools can be used to evaluate the investment strategy, independent of the changes to the amount invested. The SVG charts are powered by <a href="http://www.highcharts.com/products/highstock">Highstock</a>.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/pebblecards.jpg" alt="Pebble Cards Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://keanulee.com/pebblecards/">
                  Pebble Cards
                </a>
              </h3>
              <p>
                Pebble Cards is a Pebble app that acts as a watchface and displays customizable "cards" which contain short but useful tidbits of information. Cards can contain information from an RSS feed, local weather, stocks, and simple notes; more cards will be created in the future. Pebble Cards is built using the <a href="https://developer.getpebble.com/2/">Pebble SDK 2.0</a> and the <a href="https://developer.getpebble.com/2/guides/javascript-guide.html">PebbleKit JavaScript Framework</a>.
              </p>
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/bus-times.jpg" alt="Bus Times for Pebble Screenshot" />
            <div class="caption">
              <h3>
                <a href="http://bus-times-server.keanulee.com/">
                  Bus Times for Pebble
                </a>
              </h3>
              <p>
                <a href="https://github.com/keanulee/bus-times-server">
                  Source Code
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
                <a href="http://www.pinpointcv.com/">
                  pinpointCV
                </a>
              </h3>
              <p>
                <a href="https://github.com/keanulee/cv-hackathon">
                  Source Code
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
                <a href="https://keanulee.com/talerts/">
                  Travel Alerts
                </a>
              </h3>
              <p>
                <a href="https://github.com/keanulee/talerts">
                  Source Code
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
                <a href="https://keanulee.com/water-demo/">
                  Water
                </a>
              </h3>
              <p>
                <a href="https://github.com/keanulee/water">
                  Source Code
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
                Sona Notifier
              </h3>
              <p>
                <a href="https://github.com/keanulee/sona-notifier">
                  Source Code
                </a>
              </p>
              <p>
                Sona Notifier is a PHP script that periodically checks an authenticated website for the availability of new research studies on the <a href="http://www.sona-systems.com">Sona web-based human subject pool management software</a>. It would send an email with the list of studies when a new available study was posted.<br /><br /><br />
            </div> <!-- .caption -->
          </div> <!-- .thumbnail -->
        </div> <!-- .col* -->

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="images/projects/uw-class-schedule-exporter.jpg" alt="UW Class Schedule Exporter Screenshot" />
            <div class="caption">
              <h3>
                <a href="https://chrome.google.com/webstore/detail/uw-class-schedule-exporte/fdblgakcbbgcghehdiainelnhojenfpe">
                  UW Class Schedule Exporter
                </a>
              </h3>
              <p>
                <a href="https://github.com/keanulee/ClassScheduleToICS">
                  Source Code
                </a>
              </p>
              <p>
                UW Class Schedule Exporter is a Chrome extension that allows you to download an iCalendar file with your class information, including date/time, location, and instructor.  It creates recurring appointments based on the <a href="http://en.wikipedia.org/wiki/ICalendar">ICS format</a>, and this file can be imported to many popular calendar applications such as Outlook and Google Calendar.
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

      <hr />

    </div> <!-- .container -->

    <?php include 'partials/footer.php'; ?>

  </body>
</html>
