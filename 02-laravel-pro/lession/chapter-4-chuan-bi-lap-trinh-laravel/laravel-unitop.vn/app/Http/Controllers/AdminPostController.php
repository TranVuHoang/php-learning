<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    function create() {
    	return view('admin.post.create');
    }
    function edit() {
    	return view("admin.post.edit", compact('id'));
    }
    // function update($id) {
    // 	return "update bài viết có id: {$id}";
    // }
    function delete($id) {
    	return "Xóa bài viết với id: $id";
    }
    function show() {
        return view('admin.post.show');
    }

}
