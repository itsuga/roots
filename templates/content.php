<?php 
if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php 
  get_search_form();
endif;

if( get_post_type() == 'movie') echo '<div class="row-fluid">';

while (have_posts()) : the_post();
  if( get_post_type() == 'movie') get_template_part( 'acat/movie', get_post_format() );
  else get_template_part( 'acat/format', get_post_format() );
endwhile;

if( get_post_type() == 'movie') echo '</div>';

if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php 
endif; ?>
