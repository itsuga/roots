<? /** OUTDATED **/?>

<?php // get_header(); ?>
  <?php //roots_content_before(); ?>
    <div id="content" class="<?php // echo CONTAINER_CLASSES; ?>">
    <?php //roots_main_before(); ?>
      <div id="main" class="<?php // echo MAIN_CLASSES; ?>" role="main">
        <div class="page-header">
          <h1>
            <?php
              $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
              if ($term) {
                echo $term->name;
              } elseif (is_day()) {
                printf(__('Daily Archives: %s', 'roots'), get_the_date());
              } elseif (is_month()) {
                printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
              } elseif (is_year()) {
                printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
              } elseif (is_author()) {
                global $post;
                $author_id = $post->post_author;
                printf(__('Author Archives: %s', 'roots'), get_the_author_meta('user_nicename', $author_id));
              } elseif ( is_post_type_archive() ) {
                post_type_archive_title();
              } else {
                single_cat_title();
              }
            ?>
          </h1>
        </div>

	<?php 	
	//query_posts( 'posts_per_page=10&post_type=movie' ); 
	query_posts( $query_string . '&posts_per_page=300' );?>
	<?php // roots_loop_before(); ?>
        <?php /* Start loop */ ?>
        <ul class="thumbnails">
        <?php while (have_posts()) : the_post(); ?>
          <li <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <a class="thumbnail" rel="popover" href="<?php the_permalink(); ?>" data-content="<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>" data-original-title="<?php the_title(); ?>">
              <?php 
                $img_args = array(
                 /* 
                  'post_id' => $post->ID,
                  'attachment' => true,
                  'the_post_thumbnail' => true,
                  */
                  'meta_key' => array( 'Movie Poster', 'movie-poster' ),
                   'image_class' => false,
                  'size' => 'medium',
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
            </a>
          </li>
        <?php endwhile; /* End loop */ ?>
	</ul>



        
        <?php //get_template_part('loop', 'movie'); ?>
	
        
	<ul class="pager">
		<li class="previous"><?php next_posts_link( __( '&larr; Older', 'tweaker3') ) ?></li>
		<li class="next"><?php previous_posts_link( __( 'Newer &rarr;', 'tweaker3') ) ?></li>
	</ul>
<?php roots_loop_after(); 
	wp_reset_query();	
	?>
      </div><!-- /#main -->
    <?php // roots_main_after(); ?>
    <?php // roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php // echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php // roots_sidebar_inside_before(); ?>
        <?php get_sidebar('movie'); ?>
      <?php // roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php // roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php // roots_content_after(); ?>
<?php get_footer(); ?>
