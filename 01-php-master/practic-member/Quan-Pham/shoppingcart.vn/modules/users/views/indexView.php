<?php
get_header();
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <h1>Danh sách thành viên</h1>
            <a href="?mod=users&controller=index&action=add">Đăng ký thành viên</a>
            <?php
            if (!empty($list_users)) {
                ?>
                <table class="table_data">
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>ID</td>
                            <td>Fullname</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Giới tính</td>
                            <td>Thu nhập</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $temp = 0;
                        foreach ($list_users as $item) {
                            $temp++;
                            ?>
                            <tr>
                                <td><?php echo $temp ?></td>
                                <td><?php echo $item['user_id']; ?></td>
                                <td><?php echo $item['fullname']; ?></td>
                                <td><?php echo $item['username']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['gender']; ?></td>
                                <td><?php echo currency_format($item['income']); ?></td>
                                <td><a href="<?php echo $item['url_update'] ?>">Sửa</a> |<a href="<?php echo $item['url_delete'] ?>">Xóa</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <p class="num_row">Có <?php echo "{$num_user}" ?> thành viên trong hệ thống</p>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>