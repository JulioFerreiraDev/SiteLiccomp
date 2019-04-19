<?php 
/* 	Simplicity Theme's Index Page to hsow Blog Posts
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplicity 1.0
*/

get_header(); ?>
<div id="container">
<div id="content">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <p class="postmetadataw"><?php _e('Posted by:', 'simplicity-lite'); ?> <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p>
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php simplicity_content(); ?>
 <div class="clear"> </div>
 <div class="up-bottom-border">
 <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __('Pages:','simplicity-lite') . '</span>', 'after' => '</div><br/>' ) ); ?>
 <p class="postmetadata"><?php _e('Posted in', 'simplicity-lite'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit', 'simplicity-lite'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'simplicity-lite'), __('1 Comment &#187;', 'simplicity-lite'), __('% Comments &#187;'.'simplicity-lite')); ?> <?php the_tags(__('<br />Tags: ','simplicity-lite'), ', ', '<br />'); ?></p>
 </div>
 </div></div>
 
 <?php endwhile; ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Entries','simplicity-lite')) ?></div>
<div class="alignright"><?php next_posts_link(__('Next Entries &raquo;','simplicity-lite'),'') ?></div>
</div>
  
 
 <?php else: ?>
 
<h1 class="page-title"><?php _e('Not Found', 'simplicity-lite'); ?></h1>
<h3 class="arc-src"><span><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help', 'simplicity-lite'); ?></span></h3>

<?php get_search_form(); ?>
<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; <?php _e('Or Return to the Home Page', 'simplicity-lite'); ?></a></p><br /><br />

<h2 class="post-title-color"><?php _e('You can also Visit the Following. These are the Featured Contents', 'simplicity-lite'); ?></h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>
 
<?php endif; ?>
 

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>