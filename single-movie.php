<? /** OUTDATED **/?>

<?php // get_header(); ?>
  <?php // roots_content_before(); ?>
    <div id="content" class="<?php // echo CONTAINER_CLASSES; ?>">
    <?php // roots_main_before(); ?>
      <div id="main" class="<?php // echo MAIN_CLASSES; ?>" role="main">
        <?php // roots_loop_before(); ?>
        
        <?php 

                $img_args = array(
                 /* 
                  'post_id' => $post->ID,
                  'attachment' => true,
                  'the_post_thumbnail' => true,
                  */
                  'meta_key' => array( 'Movie Poster', 'movie-poster' ),
                  'image_class' => false,
                  'size' => 'large',
                  'link_to_post' => false,
                  /*
                  'default_image' => false,
                  'order_of_image' => 1,
                 
                  'image_scan' => false,
                  'width' => false,
                  'height' => false,
                  'format' => 'img',
                  'meta_key_save' => false,
                  'callback' => null,
                  'cache' => true,
                  'echo' => true*/
                );
                get_the_image( $img_args ); ?>






        <?php // roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php // roots_main_after(); ?>
    <?php // roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php // echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php // roots_sidebar_inside_before(); ?>
       	<div class="page-header">
		<h2>
			<?php echo get_the_title(); ?>  
			<?php echo the_terms( $post->ID, 'movie_year', '<small>', '', '</small> ' ); ?> 
		</h2>
	</div>
  <div class="alert alert-info">
    <?php 
    $ratings = get_the_terms( $post->ID, 'movie_rating');
      if ( $ratings && ! is_wp_error( $ratings ) ) :
        foreach ( $ratings as $rating ) :
          if ($rating->name == 'unknown') {
            $html = '<span class="muted">'.$rating->name.'</span>';
          } else {
            $ii = intval($rating->name);
            $html = '';
            for ($i=0; $i < $ii; $i++) { 
              $html .= '<i class="icon-star"></i>';
            }
            for ($j=$ii; $j < 6; $j++) { 
              $html .= '<i class="icon-star-empty icon-white"></i>';
            }
             
          }
        endforeach;
      echo $html;
    endif; 
    ?>
  </div>
	<style>.label a {color:white;}</style>
	<p><?php echo the_terms( $post->ID, 'movie_genre', '<span class="label">', '</span> <span class="label">', '</span> ' ); ?></p>
	<div class="btn-group">
		<?php if(get_post_meta($post->ID, 'hash', true)!='') : ?>
		<a href="http://anonym.to/?http://torcache.net/torrent/<?php echo get_post_meta($post->ID, 'hash', true) ?>.torrent" class="btn btn-mini" target="_blank" rel="nofollow">T</a>
		<?php endif; ?>
		<?php if(get_post_meta($post->ID, 'imdb_id', true)!='') : ?>
		<a href="http://anonym.to/?http://www.imdb.com/title/<?php echo get_post_meta($post->ID, 'imdb_id', true) ?>" class="btn btn-mini" target="_blank" rel="nofollow">IMDB</a>
		<?php endif; ?>		
		<?php if(get_post_meta($post->ID, 'video_link', true)!='') : ?>
		<a href="http://anonym.to/?<?php echo get_post_meta($post->ID, 'video_link', true) ?>" class="btn btn-mini" target="_blank" rel="nofollow"><i class="icon-film"></i> Watch it Now!</a>
		<?php endif; ?>
	</div>
  
<?php/*
$terms = get_the_terms( $post->ID, 'on-draught' );
            
if ( $terms && ! is_wp_error( $terms ) ) : 

  $draught_links = array();

  foreach ( $terms as $term ) {
    $draught_links[] = $term->name;
  }
            
  $on_draught = join( ", ", $draught_links );
?>

<p class="beers draught">
  On draught: <span><?php echo $on_draught; ?></span>
</p>

<?php endif; */?>

        <?php the_content(); ?>
      <?php // roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php // roots_sidebar_after(); ?>
    </div><!-- /#content -->
    <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
  <?php // roots_content_after(); ?>
<?php get_footer(); ?>
