<?php
// format-video.php
// the video format

$the_video_embed = (get_post_meta($post->ID, '_format_video_embed', true)!='') ? get_post_meta($post->ID, '_format_video_embed', true) : '';
$btn_size = (is_single() ) ? 'btn-large' : '' ;
$posttags = get_the_tags();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
    <div class="span9">
        <?php if ($the_video_embed!='') echo $the_video_embed; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
        <?php the_content(); ?>
    </div>
    <div class="span2">
        <p class="text-right">
            <?php if ($posttags) : ?>
                <?php foreach($posttags as $tag) echo '<a class="label" href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a> '; ?>
            <?php endif; ?>
        </p>
    </div>
    <div class="span1 text-right">
        <a href="<?php the_permalink();?>" title="&#8734; permalink">
            <span class="badge"><i class="icon-white icon-film "></i></span>
        </a>
        <?php edit_post_link('<i class="icon-pencil"></i>'); ?>
    </div>
</article>
<hr>