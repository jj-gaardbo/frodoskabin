<?php
function get_fp_slider(){
    ob_start();

    $height = get_field('sliderheight');

    // check if the repeater field has rows of data
    if( have_rows('fp_slider') ):?>

        <section class="fp-slider-sec row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <ul id="fp_slider" style="height:<?php echo $height."px";?>;">

                    <?php // loop through the rows of data

                    while ( have_rows('fp_slider') ) : the_row();
                        $imageArray = get_sub_field('fp_slider_img');?>

                        <li class="item">
                            <div class="image-container" data-stellar-horizontal-offset="0" data-stellar-vertical-offset="-100" data-stellar-background-ratio="0.6" style="height:<?php echo $height."px";?>; background-image:url(<?php echo $imageArray['url']; ?>);"></div>

                            <div class="wrapper">
                                <?php if(!empty($imageArray['caption'])):?>
                                    <div class="carousel-caption">
                                        <?php echo $imageArray['caption']; ?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </li>

                        <?php ++$count; endwhile; ?>

                </ul>

            </div>

        </section>

    <?php else :
        // no rows found
    endif;

    return ob_get_clean();

}
?>