<!-- HOMEPAGE -->

<?php

get_header();

### Loop code

# if we have posts, do something:
if(have_posts()) :
	#while we have posts, do something with each post
	while(have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
	<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | 
	by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | 
	Posted in 

	<?php the_content(); ?>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif;

get_footer();
?>