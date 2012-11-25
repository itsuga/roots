<?php
// format-aside.php
// the aside format

//$the_link_url = (get_post_meta($post->ID, '_format_link_url', true)!='') ? get_post_meta($post->ID, '_format_link_url', true) : '#'; 
$text_size = (is_single() ) ? 'large' : '' ;
$posttags = get_the_tags();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
    <div class="span7 font-smaller">
        <?php the_content(); ?>
    </div>
    <div class="span4   ">
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
            <span class="badge"><i class="icon-white icon-asterisk"></i></span>
        </a>
    </div>
</article>
<hr>