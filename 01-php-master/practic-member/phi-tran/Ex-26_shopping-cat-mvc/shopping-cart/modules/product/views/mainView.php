<?php
get_header();

?>

<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">

        <?php get_sidebar();    ?>

        <div id="content" class="fl-right">
            <?php
            if (!empty($list_product)) {
            ?>
                <div class="section list-cat">
                    <div class="section-head">
                        <h3 class="section-title"><?php echo $cat_title; ?></h3>
                        <p class="section-desc">Có <?php echo $total_product; ?> sản phẩm trong mục này</p>
                    </div>
                    <div class="section-detail">
                        <ul class="list-item clearfix">

                        <?php
                            foreach($list_product as $item){
                                
                        ?>
                        <li>
                                <a href="<?php echo $item['url_detail']; ?>" title="" class="thumb">
                                    <img src="<?php echo $item['product_thumb']; ?>" alt="">
                                </a>
                                <a href="<?php echo $item['url_detail']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                <p class="price"><?php echo currency_format($item['price'],"đ"); ?></p>
                            </li>
                        <?php
                            }
                        ?>
                            

                        </ul>
                    </div>
                </div>
                <div class="section" id="pagenavi-wp">
                    <div class="section-detail">
                        <ul id="list-pagenavi">
                            <li class="active">
                                <a href="" title="">1</a>
                            </li>
                            <li>
                                <a href="" title="">2</a>
                            </li>
                            <li>
                                <a href="" title="">3</a>
                            </li>
                        </ul>
                        <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

            <?php
            }else{
                echo "Không có sản phẩm nào.";
            }
            ?>

        </div>
    </div>
</div>

<?php
get_footer();
?>