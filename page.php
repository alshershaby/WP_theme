
<?php

get_header();

while(have_posts() ){
the_post();?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ?></h1>
        <div class="page-banner__intro">
          <p>Don't forget to replace me later</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
    <?php 
      $parentId = wp_get_post_parent_id(get_the_id());
        if ($parentId > 0 ){
          ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($parentId) ?> "><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentId) ?></a> 
          <span class="metabox__main"><?php the_title(); ?></span>
        </p>
       </div>

          <?php
          
        }
    ?>
   
   <?php 
   $test_array = get_pages(array(
    'child_of' => get_the_ID()
   ));

   if ($parentId || $test_array){
    ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($parentId) ?> "><?php echo get_the_title($parentId) ?></a></h2>
        <ul class="min-list">
          <?php 
          if($parentId ){
            $findChildren = $parentId;
          }else{
            $findChildren = get_the_ID();
          }
          wp_list_pages(array(
            'title_li'=>null,
            'child_of'=> $findChildren
          ));
          ?>
        </ul>
      </div>


    <?php
   }
   
   ?>


      <div class="generic-content">
      <?php the_content() ?>
      </div>
    </div>
<?php

}

get_footer();