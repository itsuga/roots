<article id="post-<?php the_ID(); ?>" <?php post_class('span6'); ?>>
		<?php
	// format-link.php
	// the standard format
	?>
	<?php roots_post_inside_before();?>
	<?php
	//the_post_thumbnail();
	?>
  	<?php 
  	$video_embed = (get_post_meta($post->ID, '_format_video_embed', true)!='') ? get_post_meta($post->ID, '_format_video_embed', true) : '#';
  	echo $video_embed;
  	?>

	  <div class="">
	  	<i class="icon-movie"></i> 
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
	  </div>
	  <?php roots_post_inside_after(); ?>
</article>