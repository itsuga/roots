<?php
// format-link.php
// the link format

$the_link_url = (get_post_meta($post->ID, '_format_link_url', true)!='') ? get_post_meta($post->ID, '_format_link_url', true) : '#'; 
$btn_size = (is_single() ) ? 'btn-large' : '' ;
$posttags = get_the_tags();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
    <div class="span8">
        <a href="<?php echo $the_link_url; ?>" class="btn <?php echo $btn_size; ?> btn-block" style="text-align:left;padding-left:1em;">
            <?php the_title(); ?>
        </a>
        <br/>
        <?php the_content(); ?>
    </div>
    <div class="span2 offset1">
        <p class="text-right">
            <?php if ($posttags) : ?>
                <?php foreach($posttags as $tag) echo '<a class="label" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> '; ?>
            <?php endif; ?>
        </p>
    </div>
    <div class="span1 text-right">
        <a href="<?php the_permalink();?>" title="&#8734; permalink">
            <span class="badge"><i class="icon-white icon-share-alt "></i></span>
        </a>
        <?php edit_post_link('<i class="icon-pencil"></i>'); ?>
    </div>
</article>
<hr>