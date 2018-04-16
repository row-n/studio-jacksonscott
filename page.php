<?php get_header(); ?>

<main class="main">

  <?php if (have_posts()) : ?>

    <section class="content">

      <?php while (have_posts()) : the_post(); ?>

        <header class="container content__header">
          <h1><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="content__featured">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif;  ?>

        <div class="container content__body">
          <?php the_content(); ?>
        </div>

        <?php
        $fields = get_field_objects();

        if( $fields ) :
          uasort($fields,'compare_order_no');
          foreach( $fields as $field ): ?>

          <?php if( $field['value'] ): ?>
            <div class="col col--<?php echo $field['name']; ?>">
              <?php echo $field['value']; ?>
            </div>
          <?php endif;

          endforeach;
        endif; ?>

        <div class="container">

          <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

        </div>

      <?php endwhile; ?>

    </section>

  <?php else : ?>

    <?php get_template_part('inc/gone'); ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
