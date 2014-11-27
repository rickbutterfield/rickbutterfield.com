<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
    $sm_img = wp_get_attachment_image_src($img_id, 'medium');
    $md_img = wp_get_attachment_image_src($img_id, 'large');
    $lg_img = wp_get_attachment_image_src($img_id, 'full');

    $category = get_the_category();
    $cat = $category[0]->slug;
  ?>

  <div class="<?php echo $cat; ?>">
    <div class="featured margin-bottom-large">
      <?php if ( has_post_thumbnail() ) { ?>
        <img src="<?php echo $lg_img[0]; ?>" alt="<?php the_title(); ?>">
      <?php } ?>
    </div>
  </div>

  <article>
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
  </article>

  <hr/>

  <?php comments_template(); ?>

  <?php endwhile; else : ?>

  <h1>404</h1>

  <?php endif; ?>

<?php get_footer(); ?>