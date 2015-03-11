<?php 	//デバッグ
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="viewport" content="<?php echo $viewport; ?>" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo $lib_url; ?>html5shiv/dist/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo $lib_url; ?>magnific-popup/dist/magnific-popup.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $root_url; ?>css/common.css" />
<title><?php echo $site_title; ?> - <?php echo $page_title; ?></title>
</head>


