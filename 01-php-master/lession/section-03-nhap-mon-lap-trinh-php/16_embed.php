<?php
$post_title = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nam.";
$post_content = "Lorem ipsum dolor sit amet consectetur adipisicing, elit. Tenetur corrupti eum iusto quaerat itaque atque perspiciatis illo iste perferendis laboriosam.";
?>
<html>

<head>
	<title>Cú pháp viết PHP</title>
	<style>
		h1 {
			color: red;
		}
	</style>
</head>

</html>

<body>
	<!-- đổ dữ liệu PHP lên HTML -->
	<div class="content">
		<h1> <?php echo "$post_title"; ?></h1>
		<div class="post-content">
			<?php echo "$post_content"; ?>
		</div>
	</div>
</body>