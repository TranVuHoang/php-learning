<?php
get_header();
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <h1>BẢNG CHỈNH SỬA THÔNG TIN USER</h1>
            <form action="" method="post">
                <label for="fullname">Họ và tên</label>
                <input type="text" name="fullname" id="fullname" value="<?php echo $fullname;  ?>"><br>
                <?php echo form_error('fullname'); ?>
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" value="<?php echo $username;  ?>"><br>
                <?php echo form_error('username'); ?>
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password"><br>
                <?php echo form_error('password'); ?>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $email;  ?>"><br>
                <?php echo form_error('email'); ?>
                <label for="income">Thu nhập</label>
                <input type="number" name="income" id="income" value="<?php echo $income;  ?>"><br>
                <?php echo form_error('income'); ?>
                <select name="gender" id="gender">
                    <option value="">-- Chọn giới tính --</option>
                    <option value="male">Nam</option>
                    <option value="female">Nữ</option>
                </select><br>
                <?php echo form_error('gender'); ?>
                <input type="submit" name="btn_reg" value="Xác nhận sửa">
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>

