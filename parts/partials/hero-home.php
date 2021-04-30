<?php

  // variables


 


?>


<section class="container hero" >
  <div class="row row--full-width hero__row">
  <?php if( have_rows('left_content') ): ?>
    <?php while( have_rows('left_content') ): the_row(); 

        // Get sub field values.
        $bg_img_id = git_sub_field('background_image');
        $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
        $header = git_sub_field('header');
        $subheader = git_sub_field('subheader');
        $link = git_sub_field('cta_button');
        $link_icon = git_sub_field('cta_icon');

        ?>
       <div class="col-6 sm-col-11 sm-col-centered hero__column hero__left-content" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">>
       <h1><?php echo $header; ?></h1>
       <p><?php echo $subheader; ?></p>
       <div >
        <a class="button button--offwhite hero-button" href="<?php echo $link['url']; ?>">
         <?php if($link_icon) : the_sub_field('cta_icon'); endif; ?><?php echo $link['title']; ?>
        </a>
      </div>
       </div>
    <?php endwhile; ?>
 <?php endif; ?>

 <?php if( have_rows('right_content') ): ?>
    <?php while( have_rows('right_content') ): the_row(); 

        // Get sub field values.
        $bg_img_id = git_sub_field('background_image');
        $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
        $header = git_sub_field('header');
        $subheader = git_sub_field('subheader');
        $link = git_sub_field('cta_button');
        $link_icon = git_sub_field('cta_icon');

        ?>
       <div class="col-6 sm-col-11 sm-col-centered hero__column hero__right-content" style="background:url('<?php echo $bg_img[0]; ?>') center center/cover no-repeat;">>
       <h1><?php echo $header; ?></h1>
       <p><?php echo $subheader; ?></p>
       <div >
        <a class="button button--offwhite hero-button" href="<?php echo $link['url']; ?>">
         <?php if($link_icon) : the_sub_field('cta_icon'); endif; ?><?php echo $link['title']; ?>
        </a>
      </div>
       </div>
    <?php endwhile; ?>
 <?php endif; ?>
  </div>
</section>
