<?php 
	/*  Template Name: Home  */
	get_header();
?>

	<?php require('page-templates/home-hero.php'); ?>

	<?php require('page-templates/home-featured-work.php'); ?>

	<?php require('page-templates/home-services.php'); ?>

	<?php require('page-templates/home-about-dyami.php'); ?>

	<!-- Include Modal -->
	<?php require('page-templates/audio-video-modal.php') ?>

<?php get_footer(); ?>