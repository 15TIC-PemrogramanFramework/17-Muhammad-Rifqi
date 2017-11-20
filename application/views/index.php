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
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url()."template1/"; ?>images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">PT Indocom <span>Nusantara</span></h2>
                                    <p class="animation animated-item-2"></p>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()."template1/"; ?>images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Ingin Info Lebih Lanjut?</h2>
                            <p>Hubungi +6281371823202</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

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