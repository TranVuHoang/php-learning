<div id="sidebar" class="fl-left">
	<div id="main-menu-wp">
		<ul class="list-item">
			<li class="active">
				<a href="unitop.html" title="Trang chủ">Trang chủ</a>
			</li>
			<li> 						
				<a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a>
			</li>					
			<li>
				<?php if(isset($_GET['page'])){ ?>
					<a href="dien-thoai" title="">Điện thoại</a>
				<?php }else{ ?>
					<a href="dien-thoai" title="">Điện thoại</a>
				<?php } ?>
			</li>
			<li>
				<a href="macbook" title="">Macbook</a>
			</li>
			<li>
				<a href="lien-he" title="Liên hệ">Liên hệ</a>
			</li>
		</ul>
	</div>
</div>