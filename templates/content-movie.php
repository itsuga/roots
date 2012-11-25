<h1>movie</h1>
<?php 
while (have_posts()) : the_post();
 get_template_part( 'acat/format', get_post_format() );
?>
  <footer>
    <nav id="post-nav" class="pager">
      <div class="previous"><?php next_post_link('%link'); ?></div>
      <div class="next"><?php previous_post_link('%link'); ?></div>
    </nav>
  </footer>
  <?php
  comments_template('/templates/comments.php');
endwhile; ?>
