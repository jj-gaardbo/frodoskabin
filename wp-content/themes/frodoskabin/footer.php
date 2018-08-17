<?php if(!is_page_template("template-frontpage.php")):?>

        <footer class="row footer">

            <div class="container">

                <?php $colFirst = get_field('1_col_opt', 'options');
                if(!empty($colFirst)):?>
                <div class="col-sm-12 col-lg-4">
                    <?php echo preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', '<a href="mailto:$1">$1</a>', $colFirst); ?>
                </div>
                <?php endif; ?>

                <?php $colSecond = get_field('2_col_opt','options');
                if(!empty($colSecond)):?>
                    <div class="col-sm-12 col-lg-4">
                        <?php echo preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', '<a href="mailto:$1">$1</a>', $colSecond); ?>
                    </div>
                <?php endif; ?>

                <?php $colThird = get_field('3_col_opt','options');
                if(!empty($colThird)):?>
                    <div class="col-sm-12 col-lg-4">
                        <?php echo preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', '<a href="mailto:$1">$1</a>', $colThird); ?>
                    </div>
                <?php endif; ?>

            </div>

        </footer>

        <section class="row social-links">

            <div class="container">

                <div class="col-lg-12">

                    <ul>

                    <?php $facebook = get_field('facebook','options');
                    if(!empty($facebook)):?>
                        <li>
                            <a href="<?php echo $facebook;?>" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php $instagram = get_field('instagram','options');
                    if(!empty($instagram)):?>
                        <li>
                            <a href="<?php echo $instagram;?>" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php $linkedIn = get_field('linkedin','options');
                    if(!empty($linkedIn)):?>
                        <li>
                            <a href="<?php echo $linkedIn;?>" target="_blank">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    </ul>

                </div>

            </div>

        </section>

<?php endif; ?>

<?php wp_footer(); ?>

        </div><!-- End Container Fluid-->

	</body>
</html>
