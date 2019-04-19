<?php

/* 	Simplicity Theme's Single Page to display Single Page or Post
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplicity 1.0
*/


get_header(); ?>
<div id="container">
<div id="content">
          
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="postmetadataw"><?php _e('Posted by:', 'simplicity-lite'); ?> <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p>
                        
            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('thumbnail'); ?><div class="clear"></div>
			<?php the_content(); ?>
            </div>
            <div class="clear"> </div>
            <div class="up-bottom-border">
             <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __('Pages:','simplicity-lite') . '</span>', 'after' => '</div><br/>' ) ); ?>
 <p class="postmetadata"><?php _e('Posted in', 'simplicity-lite'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit', 'simplicity-lite'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'simplicity-lite'), __('1 Comment &#187;', 'simplicity-lite'), __('% Comments &#187;'.'simplicity-lite')); ?> <?php the_tags(__('<br />Tags: ','simplicity-lite'), ', ', '<br />'); ?></p><br />
            <div class="floatleft"><?php previous_post_link('&laquo; %link'); ?></div>
			<div class="floatright"><?php next_post_link('%link &raquo;'); ?></div><br /><br />
            <?php if ( is_attachment() ): ?>
            <div class="floatleft"><?php previous_image_link( false, __('&laquo; Previous Image','simplicity-lite') ); ?></div>
			<div class="floatright"><?php next_image_link( false, __('Next Image &raquo;','simplicity-lite') ); ?></div> 
            <?php endif; ?>
          	</div>
			
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
			<?php comments_template(); ?>
            
</div>			
<?php get_sidebar(); ?>
<?php get_footer(); ?>