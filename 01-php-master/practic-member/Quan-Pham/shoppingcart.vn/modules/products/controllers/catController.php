<?php

function construct() {
    load_model('index');
}

function indexAction() {
    # Xử lý data phần danh mục
    $data['list_cat'] = get_list_cat();
    $data['num_rows_cat'] = get_num_rows('tbl_product_cat');

    # Xử lý data phần sản phẩm
    $data['list_product'] = get_list_product();
    $data['num_rows_product'] = get_num_rows('tbl_product');

    load_view('cat', $data);
}

function addCatAction() {
    load_view('addCat');
    if (isset($_POST['btn_reg_cat'])) {
        // Đặt cờ
        $error = array();
        //Chuẩn hóa form
        if (empty($_POST['cat_title'])) {
            $error['cat_title'] = "Không được để trống tên danh mục";
        } else {
            $cat_title = $_POST['cat_title'];
        }

        if (empty($error)) {
            $data = array(
                'cat_title' => "$cat_title",
            );
            db_insert('tbl_product_cat', $data);
        } else {
            echo "Đăng ký danh mục không thành công";
        }
    }
}

function deleteCatAction() {
    $cat_id = (int) $_GET['id'];
    delete_cat($cat_id);
    load_view('cat');
}

function addProductAction() {
    load_view('addProduct');
    if (isset($_POST['btn_reg_product'])) {
        $error = array();
        if (empty($_POST['product_title'])) {
            $error['product_title'] = "Không được để trống tên sản phẩm";
        } else {
            $product_title = $_POST['product_title'];
        }

        if (empty($_POST['product_content'])) {
            $error['product_content'] = "Không được để trống nội dung sản phẩm";
        } else {
            $product_content = $_POST['product_content'];
        }

        if (empty($_POST['product_description'])) {
            $error['product_description'] = "Không được để trống mô tả sản phẩm";
        } else {
            $product_description = $_POST['product_description'];
        }

        if (empty($_POST['product_price'])) {
            $error['product_price'] = "Không được để trống giá sản phẩm";
        } else {
            $product_price = $_POST['product_price'];
        }

        if (empty($_POST['product_code'])) {
            $error['product_code'] = "Không được để trống giá sản phẩm";
        } else {
            $product_code = $_POST['product_code'];
        }

        if (empty($_POST['product_thumbnail'])) {
            $error['product_thumbnail'] = "Không được để trống link ảnh sản phẩm";
        } else {
            $product_thumbnail = $_POST['product_thumbnail'];
        }

        if (empty($_POST['product_cat_id'])) {
            $error['product_cat_id'] = "Không được để trống id danh mục sản phẩm";
        } else {
            $product_cat_id = $_POST['product_cat_id'];
        }

        if (empty($error)) {
            $data = array(
                'product_title' => "$product_title",
                'product_content' => "$product_content",
                'product_description' => "$product_description",
                'product_price' => $product_price,
                'product_code' => "$product_code",
                'product_thumbnail' => "$product_thumbnail",
                'product_cat_id' => "$product_cat_id",
            );
            db_insert("tbl_product", $data);
        } else {
            echo "Đăng ký sản phẩm không thành công";
        }
    }
}

function deleteProductAction() {
    $product_id = $_GET['id'];
    delete_product($product_id);
    load_view('cat');
}
