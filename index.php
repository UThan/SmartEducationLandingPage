<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include('include/mata.php');
    ?>
  </head>
  <body>    
    <?php
      include('include/header.php');
    ?>
    <main>
      <!-- ////////////////// Start promotion Section ////////////////// -->
      <section class="promotion">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img srcset="img/promo1_1x.jpg 1x, img/promo1_2x.jpg 2x" class="carousel__img" src="img/promo1_2x.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
              <img srcset="img/promo2_1x.jpg 1x, img/promo2_2x.jpg 2x" class="carousel__img" src="img/promo2_2x.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
              <img srcset="img/promo3_1x.jpg 1x, img/promo3_2x.jpg 2x" class="carousel__img" src="img/promo3_2x.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
              <img srcset="img/promo4_1x.jpg 1x, img/promo4_2x.jpg 2x" class="carousel__img" src="img/promo4_2x.jpg" alt="First slide" />
            </div>
          </div>

          <div class="promotion__text">
            <h1 class="heading__h1">international migration & education advisors</h1>
            <h2 class="heading__h2 heading__h2-light">Book your FREE consulation</h2>
            <a href="#" class="btn__text">Apply Now &rarr;</a>
          </div>
        </div>
      </section>
      <!-- ////////////////// End promotion Section ////////////////// -->

      <!-- ////////////////// Start Migration Section ////////////////// -->
      <section class="migration">
        <div class="container">
          <h2 class="heading__h2 heading__h2-light migration__title">Australian visa and Immagration</h2>

          <div class="row">
            <div class="migration__profile col-md-4">
              <picture class="migration__profile-photo">
                <source srcset="img/profile/profile1_small_1x.jpg 1x, img/profile/profile1_small_2x.jpg 2x" media="(max-width: 75em)" />
                <img srcset="img/profile/profile1_large_1x.jpg 1x, img/profile/profile1_large_2x.jpg 2x" src="img/profile/profile1_large_2x.jpg" alt="profile" />
              </picture>
            </div>
            <div class="migration__about col-md-8">
              <h3 class="heading__h3 heading__h3-light mb-1">Robert Donaidson</h3>
              <p class="paragraph paragraph-light">
                Graduated from Edith Cowan University with a Bachelor of Justice Studies, and Murdoch University for Graduate Certificate on Immigration Law and Practice. He registered as a Migration Consultant in 2009 with over 10years in
                the education and migration industry.He has been helped thousands of visa applicants with their visa applications from different countries including student visas, married visas, skilled visas, business & investment visas,
                and employer sponsorship visas.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- ////////////////// End Migration Section ////////////////// -->

      <!-- ////////////////// Start Feedback Section ////////////////// -->
      <section class="feedback">
        <div class="container">
          <h2 class="feedback__title mb-3">what our client say</h2>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="usercard">
                <img src="img/profile/user1_2x.jpg" alt="user photo" class="usercard__photo" />
                <h4 class="usercard__name">Htun Naung Sint</h4>
                <p class="usercard__description">I highly recommend Smart Education. The free counseling helps me a lot. Nice Agent with Excellent service.</p>
              </div>
            </div>
            <div class="item">
              <div class="usercard">
                <img src="img/profile/user2_2x.jpg" alt="user photo" class="usercard__photo" />
                <h4 class="usercard__name">Rojan Dhakal</h4>
                <p class="usercard__description">Awesome Education agency i have ever seen . They provided me a lot of useful information regarding university and student visa . Well appreciated for their help 🙂</p>
              </div>
            </div>
            <div class="item">
              <div class="usercard">
                <img src="img/profile/user3_2x.jpg" alt="user photo" class="usercard__photo" />
                <h4 class="usercard__name">Zay Zin Min Aein</h4>
                <p class="usercard__description">
                  If you want a right track on your visa,Smart Education is the one.They were quite professional, friendly and pacient. They have all the information regarding all visa types and education.I have a grade experience
                </p>
              </div>
            </div>
            <div class="item">
              <div class="usercard">
                <img src="img/profile/user4_2x.jpg" alt="user photo" class="usercard__photo" />
                <h4 class="usercard__name">Htet Htet</h4>
                <p class="usercard__description">
                  I was able to enroll in collage in Australia and pursue my dream in this lovely and beautful country.Thanks so much for professional advice on choosing the right school and courses within my budget.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="usercard">
                <img src="img/profile/user5_2x.jpg" alt="user photo" class="usercard__photo" />
                <h4 class="usercard__name">Maynard</h4>
                <p class="usercard__description">Awesome Education agency i have ever seen . They provided me a lot of useful information regarding university and student visa . Well appreciated for their help 🙂</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ////////////////// End Migration Section ////////////////// -->

      <!-- ////////////////// Start Contact Us Section ////////////////// -->
      <section class="contactus">
        <div class="container">
          <h1 class="heading__h1">Talk to the <span>education service & visa consultants</span> now</h1>
          <a href="#" class="btn__primary">Contact Us &rarr;</a>
        </div>
      </section>
      <!-- ////////////////// End Contact Us Section ////////////////// -->

      <!-- ////////////////// Start Partner Section ////////////////// -->
      <section class="partners">
        <h2 class="heading__h2 partners__title">Our partners</h2>
        <div class="partners__logo">
          <div class="col-md">
            <img src="img/logo_unsw.jpg" alt="unsw logo" class="partners__logoimg" />
          </div>

          <div class="col-md">
            <img src="img/logo_latrobe.jpg" alt="latrobe logo" class="partners__logoimg" />
          </div>

          <div class="col-md">
            <img src="img/logo_uts.jpg" alt="uts logo" class="partners__logoimg" />
          </div>
        </div>

        <div class="partners__button">
          <a href="#" class="btn__link">browse more  &rarr;</a>
        </div>
      </section>
      <!-- ////////////////// End Partner Section ////////////////// -->
    </main>    

    <?php
      include('include/footer.php');
    ?>

    <button class="btn__top"><i class="fas fa-chevron-up"></i></button>

  </body>
</html>
