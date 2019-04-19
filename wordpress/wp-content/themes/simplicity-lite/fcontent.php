<?php 
/* 	Simplicity Theme's part for showing blog or page in the front page
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplicity 1.0
*/

?>
<div class="lsep"></div>
<div id="content">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <?php if (!is_page()): ?><p class="postmetadataw"><?php echo __('Posted by:', 'simplicity-lite'); ?> <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p><?php endif; ?>		
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php simplicity_content(); ?>
 <div class="clear"> </div>
  <?php if (!is_page()): ?><div class="up-bottom-border">
  <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __('Pages:','simplicity-lite') . '</span>', 'after' => '</div><br/>' ) ); ?>
 <p class="postmetadata"><?php _e('Posted in', 'simplicity-lite'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit', 'simplicity-lite'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'simplicity-lite'), __('1 Comment &#187;', 'simplicity-lite'), __('% Comments &#187;'.'simplicity-lite')); ?> <?php the_tags(__('<br />Tags: ','simplicity-lite'), ', ', '<br />'); ?></p>
 </div><?php endif; ?>	
 </div></div>
 
 <?php endwhile; if (!is_page()): ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Entries','simplicity-lite')) ?></div>
<div class="alignright"><?php next_posts_link(__('Next Entries &raquo;','simplicity-lite'),'') ?></div>
</div>
 
<?php endif; endif; ?>
 
</div>
<?php get_sidebar(); ?>
<div class="clear"></div>