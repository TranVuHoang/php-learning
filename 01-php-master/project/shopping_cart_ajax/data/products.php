<?php
//dữ liệu danh mục
$list_product_cat = array(
    1=>array(
        'id'=> 1,
        'cat_title'=>'Điện thoại'
    ),
    2=>array(
        'id'=> 2,
        'cat_title'=>'Macbook'
    ),
    3=>array(
        'id'=> 3,
        'cat_title'=>'Laptop'
    )
)
?>

<?php
//dữ liệu sản phẩm
$list_product =array(
    1=>array(
        'id'=> 1,
        'product_title'=>'iPhone 11 Pro Max 256GB',
        'price'=>37990000,
        'code'=>'UNI#1',
        'product_desc'=>'iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-black-600x600.jpg',//đường dẫn url
        'product_content'=>"<p>Camera là một trong những điểm nâng cấp mạnh mẽ nhất năm nay Apple mang đến cho chiếc iPhone 11 Pro Max.Đó là lần đầu tiên một chiếc iPhone sở hữu tới 3 camera ở mặt sau với 3 tiêu cự khác nhau mà người ta vẫn gọi là từ nhà tới trường đáp ứng mọi nhu cầu nhiếp ảnh của người dùng.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd22.jpg'></p>",
        'cat_id'=>'1'
    ),
    2=>array(
        'id'=> 2,
        'product_title'=>'Samsung Galaxy Note 10',
        'price'=>22990000,
        'code'=>'UNI#2',
        'product_desc'=>'Màn hình trên Galaxy Note 10 là đánh dấu sự đổi mới về thiết kế của Samsung.',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/191276/samsung-galaxy-note-10-silver-600x600.jpg',//đường dẫn url
        'product_content'=>"<p>Nếu như từ trước tới nay dòng Galaxy Note của Samsung thường ít được các bạn nữ sử dụng bởi kích thước màn hình khá lớn khiến việc cầm nắm trở nên khó khăn thì Samsung Galaxy Note 10 sẽ là chiếc smartphone nhỏ gọn, phù hợp với cả những bạn có bàn tay nhỏ</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/191276/samsung-galaxy-note-10-tgdd-1.jpg'></p>",
        'cat_id'=>'1'
    ),
    3=>array(
        'id'=> 3,
        'product_title'=>'Samsung Galaxy A70',
        'price'=>9290000,
        'code'=>'UNI#3',
        'product_desc'=>'Samsung Galaxy A70 là một phiên bản phóng to của chiếc Samsung Galaxy A50 đã ra mắt trước đó với nhiều cải tiến tới từ bên trong.',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/195012/samsung-galaxy-a70-white-600x600.jpg',//đường dẫn url
        'product_content'=>"<p>Màn hình của chiếc Galaxy A70 có kích thước khá lớn lên đến 6.7 inch độ phân giải Full HD+ trên tấm nền Super AMOLED.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/195012/samsung-galaxy-a70-tgdd-6.jpg'></p>",
        'cat_id'=>'1'
    ),
    4=>array(
        'id'=> 4,
        'product_title'=>'Macbook Pro Touch 2019 256GB',
        'price'=>37990000,
        'code'=>'UNI#4',
        'product_desc'=>'Laptop Apple Macbook Pro Touch 2019 được trang bị màn hình Retina tuyệt đẹp với công nghệ True Tone mang đến những thước phim cực sống động.',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/213870/apple-macbook-pro-touch-2019-i5-14ghz-8gb-256gb-m-applemacbookprotouch2019-600x600.jpg',//đường dẫn url
        'product_content'=>"<p>Sở hữu chiếc laptop Apple Macbook Pro Touch 2019, bạn sẽ trở thành tâm điểm chú ý bởi vẻ thời trang, tinh xảo, nâng tầm đẳng cấp cho người dùng.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/213870/apple-macbook-pro-touch-2019-i5-14ghz-8gb-256gb-m-13.jpg'></p>",
        'cat_id'=>'2'
    ),
    5=>array(
        'id'=> 5,
        'product_title'=>'MacBook Air 2017 128GB',
        'price'=>19990000,
        'code'=>'UNI#5',
        'product_desc'=>'MacBook Air 2017 i5 128GB là mẫu laptop văn phòng, có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng. Máy có hiệu năng ổn định.',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg',//đường dẫn url
        'product_content'=>"<p>Macbook Air 2017 mang những đặc trưng thiết kế của dòng MacBook Air với trọng lượng và độ dày của laptop lần lượt là 1.7 cm và 1.35 kg rất tiện lợi và dễ dàng giúp người dùng không cảm thấy bất tiện khi mang trên vai thường xuyên khi đi học hay đi làm. </p><p><img src='https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-4.jpg'></p>",
        'cat_id'=>'2'
    ),
    6=>array(
        'id'=> 6,
        'product_title'=>'MacBook Air 2019 256GB',
        'price'=>32990000,
        'code'=>'UNI#6',
        'product_desc'=>'Apple Macbook Air 2019 i5 (MVFL2SA/A) là phiên bản nâng cấp nhẹ so với MacBook Air 2018.',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/44/218493/apple-macbook-air-2019-i5-16ghz-8gb-256gb-mvfl2sa-600x600.jpg',//đường dẫn url
        'product_content'=>"<p>MacBook Air 2019 được giữ nguyên thiết kế từ phiên bản 2018. Thân máy làm bằng kim loại nguyên khối được gia công tỉ mỉ, tinh tế đến từng chi tiết.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/218493/apple-macbook-air-2019-i5-mvfl2sa-a-kg.jpg'></p>",
        'cat_id'=>'2'
    ),
)
?>