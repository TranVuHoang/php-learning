<?php get_header() ?>
<div id="main-content-wp" class="home-page">
	<div class="wp-inner clearfix">
		<?php get_sidebar() ?>
		<div id="content" class="fl-right">
			<div class="section list-cat">
				<?php foreach ($list_cat as $cat) : ?>
					<div class="section-head">
						<a href="<?php echo $cat['url'] ?>" class="section-title"><?php echo $cat['cat_name'] ?></a>
					</div>	
					<div class="section-detail">
						<ul class="list-item clearfix">						
							<?php foreach ($list_product as $product): ?>
								<?php if($product['cat_id'] == $cat['cat_id']){ ?>
									<li>
										<a href="<?php echo $product['url'] ?>" title="" class="thumb">
											<img src="<?php echo $product['product_thumb'];?>" alt="">
										</a>
										<a href="<?php echo $product['url'] ?>" title="" class="title"><?php echo $product['product_title'] ?></a>
										<p class="price"><?php echo currency_format($product['prices']) ?></p>
									</li>						
								<?php } ?>
							<?php endforeach ?>							
							<!-- End list_product -->
						</ul>
					</div>
				<?php endforeach ?>							
				<!-- end list_cat -->
			</div>

		</div>
	</div>

	<?php get_footer() ?>