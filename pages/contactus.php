<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include('../include/mata.php');
    ?> 
  </head>
  <body>   

    <?php
      include('../include/header.php');
    ?>   
    
    <main>
      <!-- ////////////////// Start Contact Section ////////////////// -->
      <section class="contactus">
        <div class="container">
          <h1 class="heading__h1">Student service</h1>
          <h2 class="heading__h2 heading__h2-light">Don't hestitate to contact us. We are here to help 24/7</h2>
        </div>
      </section>
      <!-- ////////////////// End Contact Section ////////////////// -->

      <!-- ////////////////// Start Address Section ////////////////// -->
      <section class="contact">
        <div class="container">
          <h2 class="heading__h2 heading__h2--title">Contact Us</h2>
          <div class="contact__body">
            <div class="contact__address-box">
              <h3 class="contact__title">Location</h3>
              <div class="contact__address">
                <span>7/128 Mitchell Street, Larrakeyah NT Australia 0820</span>
              </div>
              <div class="contact__phone">
                <span><i class="fas fa-phone-alt"></i> (+61) 4 05 123 456</span>
              </div>
              <div class="contact__email">
                <span><i class="fas fa-envelope"></i></i> smarteducation@gmail.com.mm</span>
              </div>

              <div class="contact__pin">
                <i class="fas fa-map-marker-alt"></i>
              </div>
            </div>

            <div class="contact__form">              
                  <h1 class="mb-1">Get In Touch</h1>
                  <p class="mb-1">Got a question? We would love to hear from you and we’ll respond as soon as possible.</p>
                  <form id="myForm">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Name" />
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <input type="text" class="form-control" id="phone" placeholder="Phone Number" />
                          </div>
                          <div class="col-6">
                            <input type="text" class="form-control" id="address" placeholder="City" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="body" rows="3"></textarea>
                    </div>
                    <a href="#" onclick="sendEmail()" class="btn btn-danger">Send a Message</a>
                  </form>                
            </div>

            <div class="contact__location">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3895.9108458069004!2d130.8308249283299!3d-12.455657993951762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cc0919f35fa407b%3A0x9b08fff8c7c67fe!2s7%2F128%20Mitchell%20St%2C%20Larrakeyah%20NT%200820!5e0!3m2!1sen!2sau!4v1626588796187!5m2!1sen!2sau"
                style="display: block"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- ////////////////// End Address Section ////////////////// -->
    </main>

    <?php
      include('include/footer.php');
    ?>

    <button class="btn__top"><i class="fas fa-chevron-up"></i></button>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/index.js"></script>
  </body>
</html>