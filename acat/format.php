<?php
// format.php
// the standard format
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('span6'); ?>>
        <header>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php roots_entry_meta(); ?>
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
          <?php } ?>

        </div>
        <footer>
          <?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
        </footer>
</article>