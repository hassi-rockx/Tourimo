<?php include 'include/head.php' ?>
<?php include 'include/navbar.php' ?>

<div class="contact-head"></div>
<!------ Full Contact US Form  ---------->

<!-- Contact Us Section -->
<section class="mt-5">
  <div class="container">
    <div class="row">
      <!-- Section Title -->
      <div class="col-md-12">
        <h1 class="section-title text-center">We Will Love to Hear From You</h1>
      </div>
    </div>
    <div class="row mt-5">
      <!-- Section Title -->
      <div class="col-md-6 mt-3 contact-widget-section">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

        <div>
          Company: <a href="index.php">Tourimo Trip Advisors</a>
        </div>
        <div>
          Address: <a href="#">58000 UCMS Khanewal</a>
        </div>
        <div>
          Phone: <a href="#">+ 123-456-789</a>
        </div>

        <div>
          Website: <a href="https://ucms.edu.pk">www.ucms.edu.pk</a>
        </div>
        <div class="find-widget">
          Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
        </div>
      </div>
      <!-- contact form -->
      <div class="col-md-6">
        <form role="form" method="POST" id="contactForm" name="contact-form" data-toggle="validator">
          <!-- Name -->
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="gstname" type="text" name="gstname" required data-error="Please enter your name">
            <div class="help-block"></div>
          </div>
          <!-- email -->
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="gstemail" type="email" name="gstemail" required data-error="Please enter your Email">
            <div class="help-block"></div>
          </div>
          <!-- Subject -->
          <div class="form-group">
            <label>Subject</label>
            <input class="form-control" id="gstsubject" type="text" name="subject" required data-error="Please enter your message subject">
            <div class="help-block"></div>
          </div>
          <!-- Message -->
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="3" id="gstmsg" name="gstmsg" required data-error="Write your message"></textarea>
          </div>
          <!-- Form Submit -->
          <div class="form-submit mt-5">
            <button class="btn btn-outline-dark" type="submit" onclick="contact()"  id="msginsert">Send Message</button>
          </div>
          <span id="error_message"></span>
          <span id="success_message"></span>
        </form>
      </div>
    </div>
    <div class="awin">
      Please Leave US Some Reviews
    </div>
</section>
<?php include 'include/footer.php' ?>