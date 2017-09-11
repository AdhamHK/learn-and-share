<?php 
	$path_header_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/pages/setup/header.html";
	include($path_header_file);
?>
<?php 
    include "koneksi.php";
    session_start();
?>
<body>
<?php
	$path_navigation_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/pages/setup/navigation.html";
	include($path_navigation_file);
?>
<div class="sub-banner my-banner2">
</div>
<?php
	$path_footer_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/pages/setup/footer.html";
	include($path_footer_file);
?>
</body>