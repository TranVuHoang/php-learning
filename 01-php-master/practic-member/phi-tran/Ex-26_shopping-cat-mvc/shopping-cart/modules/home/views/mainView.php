<?php
get_header();

?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar()  ?>
        <div id="content" class="fl-right">

            <?php
            foreach ($list_cat as $each_cat) {
            ?>

                <div class="section list-cat">
                    <div class="section-head">
                        <a href="?mod=product&controller=main&act=main&cat_id=<?php echo $each_cat['cat_id']; ?>">
                            <h3 class="section-title"><?php echo $each_cat['cat_title']; ?></h3>
                        </a>
                    </div>
                    <div class="section-detail">
                        <?php
                        $list_product = get_list_product_by_catid($each_cat['cat_id']);
                        if (!empty($list_product)) {
                        ?>
                            <ul class="list-item clearfix">
                                <?php
                                $list_product=add_url_to($list_product);
                                foreach ($list_product as $item) {
                                    
                                ?>
                                    <li>
                                        <a href="<?php echo $item['url_detail']; ?>" title="" class="thumb">
                                            <img src="<?php echo $item['product_thumb']; ?>" alt="">
                                        </a>
                                        <a href="<?php echo $item['url_detail']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                        <p class="price"><?php echo currency_format($item['price']); ?></p>
                                    </li>
                                <?php
                                }
                                ?>


                            </ul>
                        <?php
                        } else {
                        ?>
                            <h5 style="padding:15px" ;>Không có sản phẩm trong danh mục này</h5>
                        <?php
                        }
                        ?>



                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</div>



<?php
get_footer();
?>