<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="View our gallery of completed mudjacking projects in the Quad Cities area."
    />
    <link rel="stylesheet" href="ResponsiveTopNavDropdown.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo @filemtime(__DIR__ . '/style.css'); ?>" />
    <script src="picturefill.min.js" async></script>
  </head>
  <body>
    <?php include ('include/header.html'); ?>

    <main>
      <div class="page-banner">
        <h1>Projects Gallery</h1>
      </div>

      <section class="gallery-section">
        <h2 class="section-heading">Mudjacking</h2>
        <p class="gallery-intro">
          Check out some of our completed mudjacking projects across the Quad
          Cities area. From driveways and sidewalks to patios and garage floors,
          we've raised them all!
        </p>
        <div class="gallery-grid">
          <div class="gallery-item">
            <img
              src="images/first_before_after.png?v=<?php echo @filemtime(__DIR__ . '/images/first_before_after.png'); ?>"
              alt="Before and After - Stairs Repair"
            />
            <p>Stairs Repair</p>
          </div>
          <div class="gallery-item">
            <img
              src="images/second_before_after.png"
              alt="Before and After - Driveway Leveling"
            />
            <p>Driveway Leveling</p>
          </div>
          <div class="gallery-item">
            <img
              src="images/third_before_after.png"
              alt="Before and After - Floor Leveling"
            />
            <p>Floor Leveling</p>
          </div>
          <div class="gallery-item">
            <img
              src="images/fourth_before_after.png"
              alt="Before and After - Patio Leveling"
            />
            <p>Patio Leveling</p>
          </div>
        </div>
      </section>

      <section class="gallery-section gallery-section-alt">
        <h2 class="section-heading">Crack Sealing / Caulking</h2>
        <p class="gallery-intro">
          Sealing joints and cracks in your concrete prolongs its life and
          prevents costly repairs. Here are some of our crack sealing and
          caulking projects.
        </p>
        <div class="gallery-grid">
          <div class="gallery-item">
            <img
              src="images/caulking_before_after1.png"
              alt="Before and After - Crack Sealing Project 1"
            />
            <p>Crack Sealing</p>
          </div>
          <div class="gallery-item">
            <img
              src="images/caulking_before_after2.png"
              alt="Before and After - Crack Sealing Project 2"
            />
            <p>Joint Caulking</p>
          </div>
          <div class="gallery-item">
            <img
              src="images/caulking_before_after3.png"
              alt="Before and After - Crack Sealing Project 3"
            />
            <p>Concrete Leveling</p>
          </div>
          <div class="gallery-item">
            <img
              src="images/caulking_before_after4.png?v=<?php echo @filemtime(__DIR__ . '/images/caulking_before_after4.png'); ?>"
              alt="Before and After - Crack Sealing Project 4"
            />
            <p>Concrete Caulking</p>
          </div>
        </div>
      </section>

      <section id="free_estimate">
        <div class="image-container">
          <img loading="lazy" src="images/free-estimate.png" alt="Free Estimate" />
          <a class="btn" href="contact.html">Get A Free Estimate</a>
        </div>
      </section>

      <section class="stay_connected">
        <h2>Stay Connected</h2>
        <div class="stay_connected_content">
          <div class="stay_connected_left">
            <div class="phone_email">
              <a href="tel:(309) 948-3736">
                <img loading="lazy" src="images/phone-logo.png" alt="Phone Icon" />
                (309) 948-3736
              </a>
              <a href="mailto: topnotchmudjacking@gmail.com">
                <img loading="lazy" src="images/email-logo.png" alt="Email Icon" />
                topnotchmudjacking@gmail.com
              </a>
            </div>
            <div class="social_media">
              <a href="https://www.facebook.com/TopNotchMudjacking" target="_blank"
                ><img loading="lazy" src="images/facebook-logo.png" alt="Facebook Icon"
              /></a>
              <a
                href="https://www.youtube.com/channel/UC8D9UMv59Q1csXvoEr-OwWw"
                target="_blank"
                ><img loading="lazy" src="images/youtube-logo.png" alt="YouTube Icon"
              /></a>
              <a
                href="https://www.google.com/maps/place/Top+Notch+Mudjacking/@41.467512,-90.557455,10z/data=!4m8!3m7!1s0x87e3cfd7f4648971:0xef203219debac9fb!8m2!3d41.4388658!4d-90.7192623!9m1!1b1!16s%2Fg%2F11b6gj0h8x"
                target="_blank"
                ><img loading="lazy" src="images/google-icon.png" alt="Google Icon"
              /></a>
              <a
                href="https://www.bbb.org/us/il/andalusia/profile/mud-jacking-contractors/top-notch-mudjacking-llc-0664-32099853/#sealclick"
                target="_blank"
                rel="nofollow"
                ><img
                  src="https://seal-iowa.bbb.org/seals/blue-seal-293-61-bbb-32099853.png"
                  style="border: 0;"
                  alt="Top Notch Mudjacking LLC BBB Business Review"
              /></a>
            </div>
          </div>
          <div class="stay_connected_right">
            <h3>Hours of Operation</h3>
            <div class="hours_list">
              <div class="hours_row"><span>MONDAY</span><span>8:00 - 4:00</span></div>
              <div class="hours_row"><span>TUESDAY</span><span>8:00 - 4:00</span></div>
              <div class="hours_row"><span>WEDNESDAY</span><span>8:00 - 4:00</span></div>
              <div class="hours_row"><span>THURSDAY</span><span>8:00 - 4:00</span></div>
              <div class="hours_row"><span>FRIDAY</span><span>8:00 - 4:00</span></div>
            </div>
            <p class="hours_closed">CLOSED SATURDAY &amp; SUNDAY</p>
          </div>
        </div>
      </section>
    </main>

    <?php include ('include/footer.html'); ?>
  </body>
</html>
