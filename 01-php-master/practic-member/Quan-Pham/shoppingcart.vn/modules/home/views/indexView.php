<?php
get_header();
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_mobile['cat_url']; ?>"><?php echo $info_cat_mobile['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_mobile)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_mobile as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['product_url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumbnail']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['product_url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['product_price']); ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_computer['cat_url']; ?>"><?php echo $info_cat_computer['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_computer)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_computer as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumbnail']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['product_price']); ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_earphone['cat_url']; ?>"><?php echo $info_cat_earphone['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_earphone)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_earphone as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumbnail']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['product_price']); ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>