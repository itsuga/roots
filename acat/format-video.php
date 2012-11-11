<?php
// format-video.php
// the video format
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
	<div class="span12">
		<?php the_content(); ?>
		<p>
			<i class="icon-film"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

		  	<?php
		  	$video_embed = (get_post_meta($post->ID, '_format_video_embed', true)!='') ? get_post_meta($post->ID, '_format_video_embed', true) : '';
			if ($video_embed!='') echo '<br/><a href="'.$video_embed.'"><span class="muted">'.$video_embed.'</span></a>';
			?>
		</p>

		<?php 
		$posttags = get_the_tags();
		if ($posttags) : ?>
		<p>
			<?php foreach($posttags as $tag) echo '<a class="label" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> '; ?>
		</p>
		<?php endif; ?>
		<hr/>
	</div>
</article>