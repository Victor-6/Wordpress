<?php get_header(); ?>
<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>
<div class="row">
  <div class="col-sm-12">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
      endwhile;
    endif;
    ?>
  </div> <!-- /.col -->
</div> <!-- /.row -->
<?php get_footer(); ?>