<?php
	include_once('default.php');
	$page_title	= 'ホーム' ;
	$page_id	= 'home';
	$page_type	= 'index';

	include_once( $root_dir."elements/header.php");
	echo ( '<body id="'.$page_id.'" class="'.$page_type.'">')
?>

<div id="container">

		<header>
			<img src="images/logo.svg" alt="">
		</header>

		<nav class="main_nav">
			<ul class="link_list">
				<li>About</li>
				<li>Access</li>
				<li>Reservation</li>
				<li>Menu</li>
				<li>Style</li>
				<li>Blog</li>
			</ul>
		</nav>

		<div class="content <?php echo $page_id; ?>">

		<div class="section">

		</div><!--/.section-->

	</div><!--/#content-->

<?php include_once( $root_dir.'elements/footer.php'); ?>
