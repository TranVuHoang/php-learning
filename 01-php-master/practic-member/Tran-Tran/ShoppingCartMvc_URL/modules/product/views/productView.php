<?php get_header(); ?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_cat['cat_name'] ?></h3>
                    <p class="section-desc">Có <b><?php echo $num_row ?></b> sản phẩm trong mục này</p>
                </div>
                <?php if(!empty($list_product)) {?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php foreach ($list_product as $item){ ?>
                               <li>
                                <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                    <img src="<?php echo $item['product_thumb'] ?>" alt="thumb">
                                </a>
                                <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                <p class="price"><?php echo currency_format($item['prices']) ?></p>
                            </li>
                        <?php } ?>                           
                    </ul>
                </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">                                    
                    <?php $cat_title = make_url($info_cat['cat_name']); ?>                    
                    <?php echo get_paging($num_page, $page, $cat_title) ?>                                    
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>

<?php get_footer() ?>