<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($id) {
    	// return "Thông tin sản phẩm id:".$id;
    	// TH1 gọi view trực tiếp 
    	 // return view('product');
    	#Th2 gọi view thông qua folder con bên trong
    	// product.show: product tên folder, show tên thư mục trong folder product
    	$price = 400000;
    	$color = ['red', 'blue'];
    	// return view('product.show', array('id' => $id, 'price' => $price));
    	
    	// hàm thay thế array ở trên
    	return view('product.show', compact('id', 'price', 'color'));

    }

    function create() {
    	return view('product.create');
    }

    function update($id) {
    	return view('posts');
    }
}
