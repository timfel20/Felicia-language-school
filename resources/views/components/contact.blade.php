@props(['contact'])
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container aos-init" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p></p>Let us know if you're interested in some of out courses and want to learn with us
      </div>

      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-center">
          <form action="https://bootstrapmade.com/demo/templates/Arsha/forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required="">
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required=""></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->