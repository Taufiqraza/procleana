<?php include('layout/head.php')?>
<main class="page-main">
  <!-- Breadcrumbs Block -->
  <div class="block breadcrumbs">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <!-- //Breadcrumbs Block -->
  <h1 class="text-center h-decor">Contact Us</h1>
  <div class="block fullwidth no-pad">
    <div class="container">
      <div id="googleMap" class="google-map"></div>
    </div>
  </div>
  <div class="block">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>General Office</h2>
          <div class="contact-info-sm">
            <h5>Address</h5>
            <i class="icon icon-map-marker"></i>3261 Anmoore Road
            <br>Brooklyn, NY 11230
          </div>
          <div class="contact-info-sm">
            <h5>Phone 24/7</h5>
            <i class="icon icon-technology"></i>800-123-4567, Fax: 718-724-3312
          </div>
          <div class="contact-info-sm">
            <h5>Operating Hours</h5>
            <i class="icon icon-clock"></i>Mon-Fri: 9:00 am – 5:00 pm
            <br>Sat-Sun: 11:00 am – 16:00 pm
          </div>
          <div class="divider"></div>
          <h5>Look for us on</h5>
          <ul class="social-list">
            <li><a href="#"><i class="icon-google-plus-logo"></i></a></li>
            <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
            <li><a href="#"><i class="icon-twitter-logo"></i></a></li>
            <li><a href="#"><i class="icon-instagram-logo"></i></a></li>
          </ul>
        </div>
        <div class="divider visible-sm visible-xs"></div>
        <div class="col-md-8">
          <h2 class="text-center h-lg h-decor">Get in Touch</h2>
          <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
            <div class="successform text-center">
              <p>Your message was sent successfully!</p>
            </div>
            <div class="errorform text-center">
              <p>Something went wrong, try refreshing and submitting the form again.</p>
            </div>
            <div class="input-wrapper">
              <input type="text" class="input-custom input-full" name="name" placeholder="Your name*">
            </div>
            <div class="input-wrapper">
              <input type="text" class="input-custom input-full" name="email" placeholder="Email*">
            </div>
            <div class="input-wrapper">
              <textarea class="textarea-custom input-full" name="message" placeholder="Message"></textarea>
            </div>
            <div class="g-recaptcha text-center" data-sitekey="6LdSq54UAAAAAGiHqS8jrc-8sxVM0HfA3wyqDa3Y"
              style="display: inline-block;"></div>
            <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
            <br><br>
            <button type="submit" class="btn">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="block">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h6>Contact us to book your freequote.</h6>
          <ul class="marker-list">
            <li>No contracts and no obligation</li>
            <li>Competitive Rates</li>
            <li>Top quality work</li>
            <li>A service schedule designed to meet your needs</li>
            <li>Proud members of the Better Business Bureau</li>
            <li>We provide all our own supplies.</li>
          </ul>
        </div>
        <div class="clearfix visible-sm visible-xs"></div>
        <div class="col-sm-6 col-md-4">
          <div class="address-box">
            <h3>Affiliate Office #1</h3>
            <div class="contact-info-sm">
              <i class="icon icon-map-marker"></i><b>New York</b>
              <br> Phone: 718-724-3311
              <br> Fax: 718-724-3312
              <br> Email: <a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
              <br> 3261 Anmoore Road
              <br> Brooklyn, NY 11230
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="address-box">
            <h3>Affiliate Office #2</h3>
            <div class="contact-info-sm">
              <i class="icon icon-map-marker"></i><b>New York</b>
              <br> Phone: 917-859-4619
              <br> Fax: 917-859-4619
              <br> Email: <a href="mailto:officeone@youremail.com">officetwo@youremail.com</a>
              <br> 330 Hoffman Avenue
              <br> Brooklyn, NY 10007
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include('inc/header.php')?>