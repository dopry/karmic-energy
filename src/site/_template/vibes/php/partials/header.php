<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="assets/css/pace.css" />
	<script src="assets/vendors/pacejs/pace.min.js"></script>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png" />

	<title><?= get_page_heading($title, 'Premium HTML Template by Unifato') ?></title>

	<!-- CSS -->
	<?php print_styles() ?>
</head>
<body<?php body_class() ?> data-header-skin="<?php echo $GLOBALS['header_skin']; ?>">

	<div id="wrapper" class="wrapper">
    <?php get_template_part($GLOBALS['nav_file']) ?>
