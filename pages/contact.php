  <!-- Header -->
  <header class="bg_contact">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $title; ?></div>
      </div>
    </div>
  </header>

   <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" method="post" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['name']; ?> *" required="required" data-validation-required-message="<?php echo $trad['pages']['contact']['contents']['name']; ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['email']; ?> *" required="required" data-validation-required-message="<?php echo $trad['pages']['contact']['contents']['email']; ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['phone']; ?> *" required="required" data-validation-required-message="<?php echo $trad['pages']['contact']['contents']['phone']; ?>.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['message']; ?> *" required="required" data-validation-required-message="<?php echo $trad['pages']['contact']['contents']['message']; ?>"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit"><?php echo $trad['pages']['contact']['contents']['send']; ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Contact form JavaScript -->
  <script src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/js/contact_me.js"></script>