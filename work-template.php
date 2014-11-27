<?php
/*
  Template Name: Work
*/
get_header(); ?>

  <?php
    $args = array(
      'category_name' => 'work',
      'post_status' => 'publish',
      'posts_per_page' => 12
    );
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query($args);
  ?>

  <section class="posts cf">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php
      $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
      $sm_img = wp_get_attachment_image_src($img_id, 'medium');
      $md_img = wp_get_attachment_image_src($img_id, 'large');
      $lg_img = wp_get_attachment_image_src($img_id, 'full');

      $category = get_the_category();
      $cat = $category[0]->slug;
    ?>

    <a class="post <?php echo $cat; ?> third" href="<?php echo get_the_permalink(); ?>">
      <div class="featured margin-bottom">
        <?php if ( has_post_thumbnail() ) { ?>
          <img src="<?php echo $lg_img[0]; ?>" alt="<?php the_title(); ?>">
        <?php } ?>
      </div>
      <h3 class="omega">
        <?php the_title(); ?>
      </h3>
      <p><?php the_excerpt();?></p>
    </a>

  <?php endwhile; else : ?>

    <div class="post">
      <h2>No posts!</h2>
    </div>

  <?php endif; ?>

  </section>

  <?php wp_reset_query(); ?>

<?php get_footer(); ?>