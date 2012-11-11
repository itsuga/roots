<?php
// format.php
// the standard format
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
  <div class="span12">
        <header>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </header>
        <div class="entry-content">
          <?php 
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }

  if (is_archive() || is_search()) { ?>
            <?php the_excerpt(); ?>
          <?php } else { ?>
            <?php the_content(); ?>
            <?php get_template_part('templates/entry-meta'); ?>
          <?php } ?>

        </div>
        
          <?php 
          $posttags = get_the_tags();
          if ($posttags) : ?>
          <footer>
            <?php foreach($posttags as $tag) echo '<a class="label" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> '; ?>
          </footer>
          <?php endif; ?>
        <hr/>
  </div>
</article>