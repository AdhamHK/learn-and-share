<?php 
	$path_header_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/header.html";
	include($path_header_file);
?>
<body>
<?php
	$path_navigation_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/navigation.html";
	include($path_navigation_file);
?>
<div class="sub-banner">
</div>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>Pandana Merdeka H 7,</h5>
				<h5>Semarang. Indonesia.</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>024 (862561232)</h5>
				<h5>024 (786465252)</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
				<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="#" method="post">
				<input type="text" name="your name" placeholder="Your name" required=" ">
				<input type="text" name="your email" placeholder="Your email" required=" ">
				<input type="text" name="your subject" placeholder="Your subject" required=" ">
				<input type="text" name="your phone number" placeholder="Phone number" required=" ">
				<textarea  name="your message" placeholder="Your message" required=" "></textarea>
				<input type="submit" value="Send message">
			</form>
		</div>
	</div>
</div>
<div class="map-w3ls">
<iframe src="http://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63363.10028190121!2d110.37428494451737!3d-6.9864420131670135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708a996324ec27%3A0xf043a73e88a5520a!2sPandana+Merdeka!5e0!3m2!1sen!2sin!4v1491988362602" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<?php
	$path_footer_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/footer.html";
	include($path_footer_file);
?>
</body>