<?php get_header(); 
$wl_theme_options = weblizar_get_options(); 
if($wl_theme_options['breadcrumb']!='') { ?>
<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<?php /* translators: %s: search item. */ ?>
			<h1><?php printf( esc_html__( 'Search Results for: %s', 'enigma' ), '<span>' . get_search_query() . '</span>'  ); ?>
			</h1>
			</div>
		<?php endif; ?>
		<?php rewind_posts(); ?>
		</div>
	</div>	
</div>
<?php } ?>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php 
	if ( have_posts()): 
	while ( have_posts() ): the_post();
	get_template_part('post','content'); ?>	
	<?php endwhile;
	weblizar_navigation();
	else :
	get_template_part('nocontent');
	endif; ?>	 
	</div>	
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>