
<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
	<div class="span12">
		<p class="">
			<a class="" href="<?php the_permalink(); ?>">
				<?php 
				$img_args = array(
				 /* 
				  'post_id' => $post->ID,
				  'attachment' => true,
				  'the_post_thumbnail' => true,
				  
				  'meta_key' => array( 'Movie Poster', 'movie-poster' ),*/
				  'image_class' => 'none',
				  'size' => 'medium',
				  'link_to_post' => false,
				  'format' => 'array',
				  /*
				  'default_image' => false,
				  'order_of_image' => 1,
				 
				  'image_scan' => false,
				  'width' => false,
				  'height' => false,
				  ,
				  'meta_key_save' => false,
				  'callback' => null,
				  'cache' => true,
				  'echo' => true*/
				  );
				  $image = get_the_image( $img_args ); 
				  ?>
				  <img  class="media-object" src="<?php echo $image['src'];?>" alt="<?php the_title(); ?>"/>
			</a>
		</p>
		<p class="caption">
			<i class="icon-picture"></i> <span class="muted"><?php the_title(); ?></span>
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