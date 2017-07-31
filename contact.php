<?php 
//Template Name:Contact Us
 get_header();
 get_template_part('title','strip'); ?>
<!-- Page heading Section -->
<div class="clearfix"></div>
<section class="contact-section">
 <section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp" data-wow-duration="1s">
				<div class="row">
					<div class="col-md-4 input-box">
						<input type="text" class="form-control" name="name-id"  placeholder="First Name">
					</div>
					<div class="col-md-4 input-box">
						<input type="text" class="form-control" name="surname-id"  placeholder="Last Name">
					</div>
					<div class="col-md-4 input-box">
						<input type="email" class="form-control" name="email-id"  placeholder="Email Address">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message-id" id="message-id" placeholder="Message"></textarea>
						<button id="submit-contact" type="button" class="btn">Send Message</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-info">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-ms-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
				<div class="contact-item">
					<i class="fa fa-map-marker"></i>
					<span>2729 White Pine Lane<br>Richmond, VA 23219</span>
				</div>
			</div>
			<div class="col-md-4 col-ms-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
				<div class="contact-item">
					<i class="fa fa-phone"></i>
					<span>00386 / 49 - 511 - 868<br>00386 / 618 - 836 - 8075</span>
				</div>
			</div>
			<div class="col-md-4 col-ms-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
				<div class="contact-item">
					<i class="fa fa-envelope"></i>
					<span>website.info@gmail.com<br>websiteinfo@gmail.com</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!----Map---------->
<section>
  <div class="container wow fadeInUp" data-wow-duration="1s">
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="360" frameborder="0" style="border:0"></iframe></div>
 </div>
</section>

</section>   

<?php include 'footer.php' ?>	