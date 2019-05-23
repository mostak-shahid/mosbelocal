<?php 
global $mosbelocal_options;
$sections = $mosbelocal_options['home-layout-sections']['Enabled'];
?>
<?php get_header(); ?>
<?php if($sections ) { foreach ($sections as $key => $value) { get_template_part( 'template-parts/section', $key );}}?>
<?php get_footer(); ?>