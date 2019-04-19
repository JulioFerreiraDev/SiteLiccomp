<?php
/*
	Template Name: Front Page
	Simplicity Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplicity 1.0
*/
?>

<?php get_header(); ?>
<div id="header-bottom"> </div>
<div id="container">
<h1 id="heading"><?php echo esc_textarea(simplicity_get_option('heading_text', 'Welcome to the World of Creativity!')); ?></h1>
<p class="heading-desc"><?php echo esc_textarea(simplicity_get_option('heading_des', 'You can use Simplicity Extend Theme for more options, more functions and more visual elements. Extend Version has come with simple color customization option.')); ?></p>

<div id="slide-container">
<div id="gallery">


<?php
$sin=array(1,2);
foreach ($sin as $sinumber)
  {
 
	if ( simplicity_get_option('slide-image' . $sinumber, get_template_directory_uri() . '/images/slides/' . $sinumber . '.jpg') != '' ) : ?>
		<a <?php if ($sinumber == '1'): echo ' class="show" '; endif; ?> href="#">
		<img src="<?php echo esc_url(simplicity_get_option('slide-image' . $sinumber, get_template_directory_uri() . '/images/slides/' . $sinumber . '.jpg')); ?>" alt="Simplicity Theme by D5 Creation" rel="<h3><?php echo esc_textarea(simplicity_get_option('slide-image' . $sinumber . '-title', 'This is a Test Image Title' )); ?></h3><?php echo esc_textarea(simplicity_get_option('slide-image' . $sinumber . '-caption', 'This is a Test Image for Simplicity Theme. If you feel any problem please contact with D5 Creation.')); ?>"/></a>
        
<?php  endif;  } ?>



<div class="caption" ><div class="content"></div></div></div>


</div> <!-- slide-container -->

<?php get_template_part( 'featured-box' ); ?> 

<?php if (simplicity_get_option('fpostex', '0') != '1'): get_template_part( 'fcontent' ); endif;?>

<div class="content-ver-sep"></div>
<?php if ( simplicity_get_option('bottom-quotation1', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team') != '' ) : ?>

<div class="customers-comment">
<blockquote><?php echo esc_textarea(simplicity_get_option('bottom-quotation1', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team')); ?></blockquote>
</div>
<?php endif; ?>

<?php get_footer(); ?>