<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Indocom Nusantara</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."template1/"; ?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()."template1/"; ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."template1/"; ?>css/animate.css">
	<link href="<?php echo base_url()."template1/"; ?>css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url()."template1/"; ?>css/style.css" rel="stylesheet" />	
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	
	<?php $this->load->view('/headfoot/header');?> 
	
	<section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Drop Your Message</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->


    <?php $this->load->view('/headfoot/footer');?>	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url()."template1/"; ?>js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."template1/"; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()."template1/"; ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()."template1/"; ?>js/jquery.isotope.min.js"></script>  
	<script src="<?php echo base_url()."template1/"; ?>js/wow.min.js"></script>
	<script src="<?php echo base_url()."template1/"; ?>js/functions.js"></script>
	
</body>
</html>