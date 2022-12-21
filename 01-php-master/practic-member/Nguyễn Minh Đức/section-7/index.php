<?php
//======================================
//Bài Tập Phần 7
//======================================

//Bài 1 Tạo mảng lưu các số lẻ từ 3 đến 150

#1 Tạo mảng 1 chiều
$list_odd = array();

#2 Tạo vòng lập for chạy từ 3 đến 150
for ($i = 3; $i <= 150; $i+=2) {
    $list_odd[] = $i;
}


//Bài 2: Tạo mảng đa chiều quản lý các bài viết trong website tin tức

$list_post_cat = array(
    1 => array(
        'cat_id' => 1,
        'cat-title' => 'Xã Hội'
    ),
    2 => array(
        'cat_id' => 2,
        'cat-title' => 'Nhịp Sống Trẻ'
    ),
);

$list_post = array(
    1 => array(
        'id' => 1,
        'post_thumb' => 'asset/image/covid-19.jpg',
        'post_title' => 'Việt Nam được xếp hạng là nước chống dịch Covid-19 tốt nhất thế giới',
        'post_content' => 'Chi tiết bài viết số 1',
        'post_desc' => '(Dân trí) - Báo Politico (Mỹ) nhận định Việt Nam là nước ứng phó tốt nhất với đại dịch Covid-19 dựa trên các tiêu chí đánh giá cùng với các quốc gia khác trên thế giới.',
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_thumb' => 'asset/image/boy-sad.jpg',
        'post_title' => 'Rớt nước mắt cảnh cậu bé bán thóc lấy tiền đưa mẹ đi bệnh viện',
        'post_content' => 'Chi tiết bài viết số 2',
        'post_desc' => '(Dân trí) - Bố mất sớm, cậu bé 13 tuổi trở thành người đàn ông trong gia đình làm chỗ dựa cho mẹ. Đôi bàn tay em chai sạn xúc đống thóc vào bao tải, em bảo, phải mang đi bán lấy tiền đưa mẹ đi bệnh viện...',
        'cat_id' => 1
    ),
    3 => array(
        'id' => 2,
        'post_thumb' => 'asset/image/girl.jpg',
        'post_title' => 'Hoa khôi ĐH Tôn Đức Thắng xinh đẹp, sở hữu cái tên đặc biệt',
        'post_content' => 'Chi tiết bài viết số 3',
        'post_desc' => '(Dân trí) - Trịnh Thị Ái Phi chia sẻ rằng, tên của cô không mang quá nhiều ý nghĩa xa vời, đơn giản chỉ là gia đình mong muốn Ái Phi lớn lên bằng tất cả sự bao bọc và yêu thương đong đầy mà thôi.',
        'cat_id' => 2
    )
);

//Bài 3: Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
$list_product_cat = array(
    1 => array (
        'cat_id' => 1,
        'cat-title' => 'Máy Tính - Điện Tử'
    ),
    2 => array (
        'cat_id' => 2,
        'cat-title' => 'Thời Trang - Nhịp Trẻ'
    ),
);

$list_product = array(
    1 => array(
        'id' => 1,
        'product_thumb' => 'asset/image/laptop.jpg',
        'product_name' => 'Laptop Asus Vivobook A512DA-EJ406T AMD R5-3500U/Win10 (15.6 FHD) - Hàng Chính Hãng',
        'product_content' => 'Chi tiết sản phẩm',
        'product_desc' => "Mô tả ngắn sản phẩm",
        'price' => '13.389.000đ',
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'product_thumb' => 'asset/image/mouse.jpg',
        'product_name' => 'Chuột Có Dây Logitech B100 - Hàng Chính Hãng',
        'product_content' => 'Chi tiết sản phẩm',
        'product_desc' => "Mô tả ngắn sản phẩm",
        'price' => '57.500đ',
        'cat_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product_thumb' => 'asset/image/usb.jpg',
        'product_name' => 'TP - Link TL- WN725N - USB Wifi Nano Chuẩn N Tốc Độ 150Mbps - Hàng Chính Hãng',
        'product_content' => 'Chi tiết sản phẩm',
        'product_desc' => "Mô tả ngắn sản phẩm",
        'price' => '111.000đ',
        'cat_id' => 1
    ),
    4 => array(
        'id' => 4,
        'product_thumb' => 'asset/image/ssd.jpg',
        'product_name' => 'Ổ Cứng SSD Kingston A400 (120GB) - Hàng Chính Hãng',
        'product_content' => 'Chi tiết sản phẩm',
        'product_desc' => "Mô tả ngắn sản phẩm",
        'price' => '594.000đ',
        'cat_id' => 1
    ),
    5 => array(
        'id' => 5,
        'product_thumb' => 'asset/image/product-1.jpg',
        'product_name' => 'Áo Thun Nam 5S Cổ Tròn Cao Cấp Trẻ trung, thoáng mát, thấm hút mồ hôi N2',
        'product_content' => 'Chi tiết sản phẩm',
        'product_desc' => "Mô tả ngắn sản phẩm",
        'price' => '79.000đ',
        'cat_id' => 2
    ),
);

//Bài 4: Hiển thị danh sách bài viết lên giao diện 

//Bài 5: Hiển thị danh sách sản phẩm lên giao diện 

// Checklist 
/*
1.Tạo mảng đa chiều (Bài 2 , 3)
2.Lên cấu trúc html 
3.Xuất dữ liệuD
*/
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <title>Bài Tập Phần 7</title>
</head>

<body>
    <div id="wrapper">
        <div id="header" class="bg-dark py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase text-center m-0 text-light">Header</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="wp-content" class="my-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase my-3">Danh Sách Bài Viết</h2>
                        <ul class="row p-0 list-unstyled">
                            <?php
                            if (!empty($list_post)) {
                                foreach ($list_post as $post) {

                            ?>
                                    <li class="col-md-6">
                                        <div class="post clearfix mb-4">
                                            <div class="post-thumb float-left">
                                                <a href="#">
                                                    <img src="<?php echo $post['post_thumb'] ?>" alt="" class="img-fluid" width="250" height="200">
                                                </a>
                                            </div>
                                            <div class="content-post ml-3 float-left w-50 mt-md-0 mt-2">
                                                <a href="#" class="text-decoration-none">
                                                    <h5 class="title-post"><?php echo $post['post_title'] ?></h5>
                                                </a>
                                                <p class="content-main"><?php echo $post['post_desc'] ?></p>
                                            </div>
                                        </div>
                                </li>
                                    <!-- end-post  -->
                            <?php
                                }
                            } else {
                                echo "Chưa có dữ liệu bài viết";
                            }
                            ?>
                        </ul>
                        <!-- end row post  -->

                        <h2 class="text-uppercase mb-3">Danh Sách Sản phẩm</h2>
                        <ul class="row no-gutters p-0 list-unstyled">
                            <?php
                            if (!empty($list_product)) {
                                foreach ($list_product as $product) {

                            ?>
                                    <li class="col-md-3">
                                        <div class="product  p-3 mb-4" data-toggle='tooltip' title="<?php echo $product['product_name'] ?>">
                                            <div class="product-thumb">
                                                <a href="#" class="text-center d-block">
                                                    <img src="<?php echo $product['product_thumb'] ?>" alt="" class="img-fluid" >
                                                </a>
                                            </div>
                                            <div class="content-product mt-2">
                                                <a href="#" class="name-product text-decoration-none text-dark"><?php echo $product['product_name'] ?></a>

                                                <span class="content-main d-block mt-1"><?php echo "<strong>{$product['price']}</strong>" ?></span>
                                            </div>
                                        </div>
                                </li>
                                    <!-- end-product  -->
                            <?php
                                }
                            } else {
                                echo "Chưa có dữ liệu sản phẩm";
                            }
                            ?>
                        </ul>
                        <!-- end row product  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end wp-content  -->
        <!-- end header  -->
        <div id="footer" class="bg-dark py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase text-center m-0 text-light">Footer</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer  -->
    </div>
    <!-- end wrapper  -->
    <script src="asset/js/jquery-3.4.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>