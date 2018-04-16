<?php
  /* Template Name: Splash */
?>

<?php get_header(); ?>

  <main class="main">

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post();

        if (has_post_thumbnail()) :
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          echo '<div class="hero" id="hero" style="background-image: url(' . esc_url($featured_img_url) . ');">';
          echo '<button class="mouse is-visible" id="mouse"><svg class="icon icon--scroll icon--md" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2q0.414 0 0.707 0.293t0.293 0.707v15.586l5.289-5.297q0.289-0.289 0.711-0.289 0.43 0 0.715 0.285t0.285 0.715q0 0.422-0.289 0.711l-7 7q-0.289 0.289-0.711 0.289t-0.711-0.289l-7-7q-0.289-0.289-0.289-0.711 0-0.43 0.285-0.715t0.715-0.285q0.422 0 0.711 0.289l5.289 5.297v-15.586q0-0.414 0.293-0.707t0.707-0.293z"></path></svg></button>';
          echo '</div>';
        else :
          echo '<div class="hero hero--dark">';
          echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1003 712" class="hero__brand">
                  <title>studiojacksonscott</title>
                  <rect x="0" y="0" width="1003" height="712" fill="#fff" stroke="0" class="background"/>
                  <rect x="0" y="0" width="150" height="396" fill="#000" stroke="0" class="box-tl"/>
                  <rect x="932" y="432" width="71" height="280" fill="#000" stroke="0" class="box-br"/>
                  <g id="Windows" class="windows">
                    <rect x="472" y="461" width="94" height="244" fill="#000" stroke="0"/>
                    <rect x="587" y="461" width="94" height="244" fill="#000" stroke="0"/>
                    <rect x="702" y="461" width="94" height="244" fill="#000" stroke="0"/>
                    <rect x="817" y="461" width="94" height="244" fill="#000" stroke="0"/>
                  </g>
                  <g id="Windowsill" class="window-sill">
                    <polygon points="472 458 477 458 477 410 566 410 566 405 472 405 472 458" stroke="0"/>
                    <polygon points="587 458 592 458 592 410 681 410 681 405 587 405 587 458" stroke="0"/>
                    <polygon points="702 458 707 458 707 410 796 410 796 405 702 405 702 458" stroke="0"/>
                    <polygon points="817 458 822 458 822 410 911 410 911 405 817 405 817 458" stroke="0"/>
                  </g>
                  <g id="Vertical_Lines" class="vertical-lines">
                    <rect x="149" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="158" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="167" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="176" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="185" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="194" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="203" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="212" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="221" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="230" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="239" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="248" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="257" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="266" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="275" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="284" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="293" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="302" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="311" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="320" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="329" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="338" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="347" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="356" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="365" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="374" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="383" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="392" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="401" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="410" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="419" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="428" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="437" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="446" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="455" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="464" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="473" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="482" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="491" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="500" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="509" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="518" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="527" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="536" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="545" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="554" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="563" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="572" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="581" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="590" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="599" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="608" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="617" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="626" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="635" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="644" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="653" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="662" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="671" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="680" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="689" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="698" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="707" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="716" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="725" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="734" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="743" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="752" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="761" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="770" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="779" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="788" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="797" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="806" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="815" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="824" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="833" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="842" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="851" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="860" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="869" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="878" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="887" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="896" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="905" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="914" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="923" y="0" width="4.5" height="396" fill="#000" stroke="0"/>
                    <rect x="932" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="941" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="950" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="959" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="968" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="977" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="986" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                    <rect x="995" y="0" width="4.5" height="433" fill="#000" stroke="0"/>
                  </g>
                </svg>';
          echo '</div>';
        endif;

        // Set up the objects needed
        $my_wp_query = new WP_Query();
        $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1', 'order' => 'DESC'));

        // Get the page as an Object
        $portfolio =  get_page_by_title('Works');

        // Filter through all pages and find Portfolio's children
        $portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );

        if ($portfolio_children) : ?>

        <section class="content splash">

          <header class="content__header">
            <h1>Works</h1>
          </header>

          <div class="thumbnail-list">

            <?php foreach( $portfolio_children as $children ) :
              $thumbnail = get_the_post_thumbnail( $children->ID, 'large' );
              if ( $thumbnail ) : ?>
                <a href="<?php echo get_page_link( $children->ID ); ?>" class="thumbnail">
                  <div class="thumbnail__image">
                    <?php echo $thumbnail ?>
                  </div>
                  <div class="thumbnail__body">
                    <h3 class="thumbnail__heading"><?php echo $children->post_title; ?></h3>
                    <?php if ( $children->post_excerpt ) : ?>
                      <h5 class="thumbnail__excerpt"><?php echo $children->post_excerpt; ?></h5>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endif;
            endforeach; ?>

          </div>

        <?php endif;
      endwhile; ?>

      </section>

    <?php else : ?>

      <?php get_template_part('inc/gone'); ?>

    <?php endif; ?>

  </main>

<?php get_footer(); ?>
