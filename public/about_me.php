<?php
  require_once('../private/initialize.php');
  $page_title = "About Diarmuid";
  $css_sheet = url_for("stylesheets/about_me.css");
  $font_sheet1 = "https://fonts.googleapis.com/css?family=Comfortaa:400,500|Muli|Spartan:400,500&display=swap";
  $font_sheet2 = "https://fonts.googleapis.com/css?family=Comfortaa:400,500|Muli|Spartan:400,500&display=swap";
  include(SHARED_PATH . '/header.php');
  ?>

      <section class="welcome_photo content-wrap">
        <div>
          <img id="home_photo" src="images/diarmuid_umbrella.jpeg" alt="Diarmuid with Umbrella">
        </div>
      </section>
      <section class="welcome_bio content-wrap">
        <div class="info_on_me">
          <p>Born and raised in Quincy, Massachusetts, I grew up in an Irish Catholic household.
             I attended Boston College High School, an all boys Jesuit school in Dorchester.
             After graduation, I took a gap year to gain more skills and have a certain career path.
             I worked as a business analyst at a local Boston Startup, InTegrum Resources.
             I primarily organized the company database while also creating high-value targets for our sales team.
             After spending a year there, I advanced onto Trinity College Dublin in Ireland.
             Here, I have been teaching myself web development in order to freelance.</p>
          <p>Although I am often considered a Reniassance Man since I have many interests and passions,
             my primary interests are fashion and music. I adore haberdashery, and invest a lot of time and effort into this.
             I almost always have headphones in, listening to either music, podcasts, or audiobooks.
             Further, I adore learning and often teach myself skills. I am currently teaching myself web
             development, but have also taught myself French, Java, and Irish history in the past.
             However, I also enjoy cooking, working out, meeting new people, and traveling.</p>
          <p>Driven web developer searching for experience in his field, software development.
            Intending to be an entrepreneur, he plans to become an excellent back end developer,
            but is teaching himself web development along the way. He is on a journey,
            and nothing is going to stop him from acheving his goals.
            After becoming satisfactory in web development, Diarmuid intends to begin freelance web designing.
            <!-- He will provide packages as his value proposition. First and foremost, he will create a beautiful webpage.
            Next, he will take professional photos. Finally, he will create a NFC connected business card that
            links directly to the website. -->
          </p>
        </div>
      </section>



<?php include(SHARED_PATH . '/footer.php'); ?>
