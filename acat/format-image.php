<?php
// format-image.php
// the image format

$img_size = (is_single() ) ? 'large' : 'medium' ;
$img_args = array(
 /* 
  'post_id' => $post->ID,
  'attachment' => true,
  'the_post_thumbnail' => true,
  
  'meta_key' => array( 'Movie Poster', 'movie-poster' ),*/
  'image_class' => 'none',
  'size' => $img_size,
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
$the_image_src = $image['src'];
$posttags = get_the_tags();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>	
	<div class="span6">
		<a href="<?php the_permalink(); ?>">
			<img class="media-object" src="<?php echo $the_image_src;?>" alt="<?php the_title(); ?>"/>
		</a>
	</div>	
	<div class="span4 offset1">
		<p class="caption text-right">
			<span class="muted"><?php the_title(); ?></span>
		<p>
        <p class="text-right">
            <?php if ($posttags) : ?>
                <?php foreach($posttags as $tag) echo '<a class="label" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> '; ?>
            <?php endif; ?>
        </p>
    </div>
	<div class="span1">
		<a href="<?php the_permalink();?>" title="&#8734; permalink">
			<span class="badge"><i class="icon-picture icon-white"></i></span>
		</a>
	</div>
</article>
<hr>