<? /** OUTDATED **/?>

<div class="well">
	<?php
    $args_cloud = array(
    'smallest'                  => 8, 
    'largest'                   => 18,
    'unit'                      => 'pt', 
    'number'                    => 0,  
    'format'                    => 'flat',
    'orderby'                   => 'name', //'count', 
    'order'                     => 'ASC', //'DESC',
    'exclude'                   => null, 
    'include'                   => null, 
    //'topic_count_text_callback' => default_topic_count_text,
    'link'                      => 'view', 
    'taxonomy'                  => 'movie_genre', 
    'echo'                      => true ); 
    wp_tag_cloud($args_cloud); 
    ?>
</div>

<div class="well">
	<?php
    $args_cloud = array(
    'smallest'                  => 8, 
    'largest'                   => 18,
    'unit'                      => 'pt', 
    'number'                    => 0,  
    'format'                    => 'flat',
    'orderby'                   => 'name', //'count', 
    'order'                     => 'ASC', //'DESC',
    'exclude'                   => null, 
    'include'                   => null, 
    //'topic_count_text_callback' => default_topic_count_text,
    'link'                      => 'view', 
    'taxonomy'                  => 'movie_rating', 
    'echo'                      => true ); 
    //wp_tag_cloud($args_cloud);

    ?>
     <?php 
    //$ratings = get_terms( $post->ID, 'movie_rating');
    //$ratings = get_terms( 'movie_rating', array( 'orderby'    => 'count', 'hide_empty' => 0 ) );
    $args = array( 'taxonomy' => 'movie' );

    $terms = get_terms('movie_rating', $args);

    $count = count($terms); $i=0;
    if ($count > 0) {
        $term_list = '<p class="my_term-archive">';
        foreach ($terms as $term) {
            $i++;
            $term_list .= '<a href="/rating/' . $term->slug . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a>';
            if ($count != $i) $term_list .= ' &middot; '; else $term_list .= '</p>';
        }
        echo $term_list;
    }
     /*if ( $ratings && ! is_wp_error( $ratings ) ) :
        foreach ( $ratings as $rating ) :
          if ($rating->name == 'unknown') {
            $html = '<span class="muted">'.$rating->name.'</span>';
          } else {
            $ii = intval($rating->name);
            $html = '';
            for ($i=0; $i < $ii; $i++) { 
              $html .= '<i class="icon-star"></i>';
            }
            for ($j=$ii; $j < 6; $j++) { 
              $html .= '<i class="icon-star-empty icon-white"></i>';
            }
             
          }
        endforeach;
      echo $html;
    endif; */
    ?>
</div>
<div class="well">
	<?php
    $args_cloud = array(
    'smallest'                  => 8, 
    'largest'                   => 18,
    'unit'                      => 'pt', 
    'number'                    => 0,  
    'format'                    => 'flat',
    'orderby'                   => 'name', //'count', 
    'order'                     => 'ASC', //'DESC',
    'exclude'                   => null, 
    'include'                   => null, 
    //'topic_count_text_callback' => default_topic_count_text,
    'link'                      => 'view', 
    'taxonomy'                  => 'movie_year', 
    'echo'                      => true ); 
    wp_tag_cloud($args_cloud); 
    ?>
</div>