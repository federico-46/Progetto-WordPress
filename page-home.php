<?php

/**
 * Template Name: Home
 */

get_header();
?>
<!-- Inizio: Slider -->
<?php
$slider = get_field("slider");
if ($slider) :
?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php
            $cslide = 0;
            foreach ($slider as $slide) :
                $cslide++;
            ?>
                <div class="carousel-item <?php if ($cslide == 1) echo 'active'; ?>" style="min-height:100vh;background:url('<?php echo $slide['bg_image']; ?>');background-size:cover;background-position:center;background-repeat:no-repeat;">
                    <div class="velina"></div>
                    <div class="carousel-caption d-md-block">
                        <h1><?php echo $slide['title']; ?></h1>
                        <p><?php echo $slide['description']; ?></p>
                        <p><a class="btn btn-lg btn-slider" href="<?php echo $slide['link']; ?>"><span><?php echo $slide['btn_text']; ?></span></a></p>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>

        <div class="carousel-indicators">
            <?php for ($i = 0; $i < $cslide; $i++) : ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" <?php if ($i == 0) echo 'class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
            <?php endfor; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php endif; ?>
<!-- Fine: Slider -->

<!-- Inizio: Prodotti -->
<?php
$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 6
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    echo '<div class="row pt-5 pb-5 bg-products">';
    echo '<h1 class="title-products pb-4"> i gusti più popolari </h1>';
    while ($the_query->have_posts()) {
        $the_query->the_post();
        echo '<div  class="col-lg-4 col-md-12 card text-white m-2" >';
        echo '<div> ' . the_post_thumbnail() . '</div>';
        echo '<div class="card-img-overlay">';
        echo '<a style="font-size:2rem" class="card-title" href="' . esc_url(get_permalink()) . '" >' . get_the_title() . '</a>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
}
wp_reset_postdata();
?>
<!-- Fine: Prodotti -->

<!-- Inizio: More info -->
<?php
$info = get_field("more_info");
if ($info) :
?>
    <div class="row">

        <h1 class='title-more-info pt-5 pb-5'>More info</h1>

        <?php
        foreach ($info as $page) :
        ?>

            <?php
            foreach ($page as $item) :
            ?>

                <div class="col-lg-6 col-md-12 more-info">
                    <a class="text-dark" href="<?php echo $item->guid ?>">
                        <?php echo $item->post_title ?>
                    </a>
                </div>

            <?php
            endforeach;
            ?>
        <?php
        endforeach;
        ?>
    </div>
<?php endif; ?>

<!-- Fine: More info -->







<?php
get_footer();
?>