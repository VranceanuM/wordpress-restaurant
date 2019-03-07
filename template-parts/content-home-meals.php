
<div id="menu" class="content-block food-menu-block">
  <div class="food-menu-block-inner container">
    <div class="clear">
      <div class="food-menu-content">
        <h2 class="heading">Appetisers</h2>
                    <?php 
                $args = array(
                    'post_type' => 'meal',
                    'category'  => 'Appetisers',
                    'order' => 'ASC'
                );
            // the query
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
                 <ul class="food-menu-list">

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php 
                     $meal_price = get_field('meal_price');
                     $is_it_this_meal_special = get_field('is_it_this_meal_special');
                     ?>
                    <li class="food-menu-item">
                            <div class="food-menu-item-header clear">
                            <h3 class="food-menu-heading"><?php the_title(); ?></h3>
                            <span class="food-menu-price"><?php echo $meal_price; ?></span>
                            </div>
                            <div class="food-menu-summary">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </li>


                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </ul>

        
      </div>
    </div>
  </div>
</div>