<?php
// format-link.php
// the link format
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
  <div class="span12">
    <?php $the_link_url = (get_post_meta($post->ID, '_format_link_url', true)!='') ? get_post_meta($post->ID, '_format_link_url', true) : '#'; ?>
    <p><a href="<?php echo $the_link_url; ?>" class="btn btn-large btn-block pagination-left"><i class="icon-share-alt"></i> <?php the_title(); ?></a></p>
    <p>
        <a href="<?php the_permalink();?>">&#8734;</a>
        <?php 
        $posttags = get_the_tags();
        if ($posttags) :
            foreach($posttags as $tag) echo '<a class="label" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> ';
        endif; 
        ?>
    </p>
    <hr/>
  </div>
</article> 
