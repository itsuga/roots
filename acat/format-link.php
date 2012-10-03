<?php
// format-link.php
// the link format
?>
<div class="row-fluid">
    <article id="post-<?php the_ID(); ?>" <?php post_class('span12x'); ?>>
          <header>
            <?php $the_link_url = (get_post_meta($post->ID, '_format_link_url', true)!='') ? get_post_meta($post->ID, '_format_link_url', true) : '#'; ?>
            <a href="<?php echo $the_link_url; ?>" class="btn btn-large btn-block"><i class="icon-share-alt"></i> <?php the_title(); ?></a>
            <div>&nbsp;&nbsp;
                <a href="<?php the_permalink();?>">&#8734;</a>
                <?php 
                $posttags = get_the_tags();
                if ($posttags) :
                    foreach($posttags as $tag) echo '<a class="badge" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> ';
                endif; 
                ?>
            </div>
          </header>
        <hr/>
    </article> 
</div>