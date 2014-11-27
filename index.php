<?php get_header(); ?>

  <?php
    $args = array(
      'post_status' => 'publish',
      'posts_per_page' => 1
    );
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query($args);
  ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
    $sm_img = wp_get_attachment_image_src($img_id, 'medium');
    $md_img = wp_get_attachment_image_src($img_id, 'large');
    $lg_img = wp_get_attachment_image_src($img_id, 'full');

    $category = get_the_category();
    $cat = $category[0]->slug;
  ?>

    <a class="hero <?php echo $cat; ?>" href="<?php echo get_the_permalink(); ?>">
      <div class="featured">
        <?php if ( has_post_thumbnail() ) { ?>
          <img src="<?php echo $lg_img[0]; ?>" alt="<?php the_title(); ?>">
        <?php } ?>
      </div>
      <div class="caption">
        <h3 class="omega">
          <?php the_title(); ?>
        </h3>
        <?php the_excerpt(); ?>
      </div>
    </a>

  <?php endwhile; else : ?>

    <h2>No posts!</h2>

  <?php endif; ?>

  <?php wp_reset_query(); ?>
  
  <hr>

  <h2>Recent</h2>
  <section class="posts">
  <!-- Get posts 2-7 -->
  <?php
    $args = array( 'posts_per_page' => 6, 'offset' => 1 );
    $posts = get_posts( $args );
    foreach ( $posts as $post ) : setup_postdata( $post ); ?>

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

  <?php
    endforeach;
    wp_reset_postdata();
  ?>
  </section>


<?php get_footer(); ?>