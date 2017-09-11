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
<div class="about">
	<div class="container"> 
		<h3>About Us</h3>
		<div class="about-info">
			<div class="col-md-12 about-grids">
				<h4>Koleksi Terbaru</h4>
				<p>Pilih koleksi terbaru kami dan padu padankan dengan selera fashion kalian, Enjoy Shopping.</p>		
					<div class="about-w3ls-row">
						<script type="text/javascript">
								 $(window).load(function() {
									$("#flexiselDemo3").flexisel({
										visibleItems:2,
										animationSpeed: 1000,
										autoPlay: false,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems:2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems:2
											},
											tablet: { 
												changePoint:768,
												visibleItems:2
											}
										}
									});
									
								});
						</script>
						<script type="text/javascript" src="../lesson_web_mobile/static/src/js/jquery.flexisel.js"></script> 
						<ul id="flexiselDemo3">
							<li>
								<img src="../lesson_web_mobile/static/src/images/a1.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="../lesson_web_mobile/static/src/images/a2.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="../lesson_web_mobile/static/src/images/a3.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="../lesson_web_mobile/static/src/images/a4.jpg" class="img-responsive" alt="" />
							</li>
						</ul> 
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<?php
	$path_footer_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/footer.html";
	include($path_footer_file);
?>
</body>