<?php
    require '../includes/pages-header.php';
?>

<div class="row" id="content">
	<div id="google-maps" style="height: 350px; background-color: gray" class="row text-center">
		<iframe style="width: 100%; height: 100%;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.472015033413!2d-0.15471098522633817!3d5.644633295908223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b55bd2551ef%3A0x94374a5c73f9c306!2sAluguntugui+St%2C+Accra!5e0!3m2!1sen!2sgh!4v1499614111117" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="row" style="color: #22313F; margin: 20px 0;">
		<div class="col-md-offset-2 col-md-4">
			<h4>Contact Information</h4>

			<div class="row" style="margin-top: 30px;">
				<div class="col-md-1">
					<span><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i></span>
				</div>
				<div class="col-md-11">
					<address>
					<header style="color: #FAC11C;">HEADQUARTERS</header>
					414 Aluguntugui St, <br>
					East - Legon<br>
					P.O.Box 144, 
					Ghana
				</address>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col-md-1">
					<span><i class="fa fa-2x fa-envelope" aria-hidden="true"></i></span>
				</div>
				<div class="col-md-11">
					<address>
						<span>info@searsspenser.com</span><br>
						<span>contact@searsspenser.com</span>
					</address>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col-md-1">
					<span><i class="fa fa-2x fa-tablet" aria-hidden="true"></i></span>
				</div>
				<div class="col-md-11">
					<address>	
						<span>+233 000 0000</span><br>
						<span>+233 111 1111</span>
					</address>
				</div>
			</div>
		</div>

		<div class="col-md-4" style="background-color: #FAC11C;">
			<form id="contact-form">
				<legend>Send Us a Message</legend>
				<div class="form-group">
					 <input type="" name="" class="form-control contact-form-input" placeholder="Your name">
				</div>
				<div class="form-group">
					<input type="" name="" class="form-control contact-form-input" placeholder="Your Email"> 
				</div>
				<div class="form-group">
					<textarea class="form-control contact-form-input" style="height: 180px;" placeholder="Message"></textarea>
				</div>
				<input id="contact-send" type="submit" name="submit" value="Send" class="btn btn-lg">
			</form>
		</div>
	</div>
</div>

<?php
    require '../includes/pages-footer.php';
?>