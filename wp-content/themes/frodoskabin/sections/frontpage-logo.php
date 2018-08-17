<?php
function get_fp_logo(){
    ob_start();?>

        <section class="fp-logo-sec row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <?php if($logoUrl = get_field('fp_logo_image')):?>

                    <img class="fp-logo" src="<?php echo $logoUrl ?>" alt="Frodos Kabin"/>

                <?php endif; ?>

                <?php frontpage_nav(); ?>

            </div>

        </section>

    <?php return ob_get_clean();

}
?>
