
<?php

get_header();

while(have_posts() ){
the_post();?>
<h1>this is a page not a post</h1>
<h2> <?php the_title() ?> </h2>
<p> <?php the_content() ?> </p>
<?php

}

get_footer();