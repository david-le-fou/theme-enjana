<h1>page</h1>
<?php 
if ( have_posts() ) : 
    while( have_posts()  ): 
        the_post();
        echo "</br>";
        echo "titre ";
        the_title();
        echo "</br>";
        echo "lien ";
        the_permalink();
        echo "</br>";
        echo "image ";
        the_post_thumbnail( 'full' );
        echo "</br>";
        echo "contenue1 ";
        the_excerpt();
        echo "</br>";
        echo "contenue2 ";
        the_content();
    endwhile; 
endif;