<?php
// format-quote.php
// the quote format

$the_quote_url = (get_post_meta($post->ID, '_format_quote_url', true)!='') ? get_post_meta($post->ID, '_format_quote_url', true) : ''; 
$the_quote_source_name = (get_post_meta($post->ID, '_format_quote_source_name', true)!='') ? get_post_meta($post->ID, '_format_quote_source_name', true) : ''; 

$text_size = (is_single() ) ? 'large' : '' ;
$posttags = get_the_tags();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row-fluid'); ?>>
    <div class="span7">
        <blockquote>
            <?php the_content(); ?>
            <small><?php echo $the_quote_url;?><cite title="Source Title"><?php echo $the_quote_title;?></cite></small>
        </blockquote>
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
            <span class="badge"><i class="icon-white icon-comment"></i></span>
        </a>
    </div>
</article>
<hr>