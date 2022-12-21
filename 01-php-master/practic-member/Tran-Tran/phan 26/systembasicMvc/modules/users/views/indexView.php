<?php get_header();  ?>  
<div id="content">
    <h1>Danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>User id</td>
                <td>fullname</td>
                <td>username</td>
                <td>Email</td>
                <td>Giới tính</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($list_users)) {
                $t = $start;
                foreach ($list_users as $user) {
                    $t ++;
                    $gender = show_gender($user['gender']);
                    ?>
                    <tr>
                        <td><?php echo $t; ?></td>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['username'] ?></td>                        
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $gender ?></td>
                        <td class="manipulation">
                            <a href="<?php echo $user['url_update'] ?>" title="">Edit</a>
                            <a href="<?php echo $user['url_delete'] ?>" title="">Del</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>   
    </table>
    <br>
    <p class="total-user">Có tổng cộng: <b><?php echo $total_row ?></b> Tài khoản trong hệ thống</p>
    <!-- pagging -->
    <?php echo get_paging($num_page, $page, "?mod=users&controller=index&action=index"); ?> 
     <div class="clearfix"></div>
</div>
<?php get_footer() ?>