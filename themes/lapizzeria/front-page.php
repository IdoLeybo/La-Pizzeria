<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);" >
        <div class="hero-content">
            <div class="hero-text">
                <h2><?php echo esc_html(get_option('blogdescription')); ?></h2>
                <?php the_content(); ?>
                <?php $url = get_page_by_title('About Us'); ?>
                <a href="<?php echo get_permalink($url->ID); ?>" class="button secondary">more info</a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
    <div class="main-content container">
        <main class="container-grid clear">
            <h2 class="text-center primary-text">Our Specialties</h2>
            <?php
                $args = array(
                    'post_type' => 'specialties',
                    'posts_per_page' => 3,
                    'category_name' => 'pizzas',
                    'orderby' => 'rand'
                );
                $specialties = new WP_Query($args);
                while ($specialties->have_posts()): $specialties->the_post(); ?>
                    <div class="specialty columns1-3">
                        <div class="specialty-content">
                            <?php the_post_thumbnail('specialty-portrait'); ?>
                            <div class="information">
                                <?php the_title('<h3>', '</h3>'); ?>
                                <?php the_content(); ?>
                                <p class="price">$ <?php the_field('price') ?></p>
                                <a href="<?php the_permalink(); ?>" class="button primary">read more</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata() ?>
        </main>
    </div>

<section class="ingredients">
    <div class="container">
        <div class="container-grid">
            <?php while (have_posts()): the_post(); ?>
                <div class="columns2-4">
                    <h3><?php the_field('ingredients_title'); ?></h3>
                    <?php the_field('ingredients_text'); ?>
                    <?php $url = get_page_by_title('About Us'); ?>
                    <a href="<?php echo get_permalink($url->ID); ?>" class="button primary">read more</a>
                </div>
                <div class="columns2-4 image">
                    <img src="<?php the_field('image'); ?>" alt="Fresh Ingredients" />
                </div>


            <?php endwhile; ?>

        </div>
    </div>
</section>

<section class="container clear">
    <h2 class="primary-text text-center">Gallery</h2>
    <?php
        $url = get_page_by_title('Gallery');
        echo get_post_gallery($url->ID);
    ?>
</section>

<section class="location-reservation clear container">
    <div class="container-grid">
        <div class="columns2-4">
            <div id="map">
<!--                --><?php //the_field('leaflet_map'); ?>
            </div>
        </div>
        <div class="columns2-4">
            <?php get_template_part('templates/reservation', 'form'); ?>
        </div>
    </div>
</section>

<!--.GOOGLE MAPS-->

<!--<style>-->
<!--    #map {-->
<!--        height: 400px;-->
<!--    }-->
<!--</style>-->

<!--<script>-->
<!--    let map;-->
<!--    function initMap() {-->
<!--        map = new google.maps.Map(document.getElementById('map'), {-->
<!--            center: {-->
<!--                lat: -34.397,-->
<!--                lng: 150.644-->
<!--            }-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!--<script src="http://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>-->



<?php get_footer(); ?>>