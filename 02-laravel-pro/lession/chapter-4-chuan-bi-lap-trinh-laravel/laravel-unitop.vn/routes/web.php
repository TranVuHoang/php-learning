<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// routes mặc định
Route::get('/', function () {
    return view('welcome');
});

// định tuyến cơ bản
Route::get('/post', function() {
	return "Đây là trang bài viết";
});
Route::get('admin/product', function() {
	return "Đây là trang quản lý sản phẩm";
});
Route::get('admin/product/add', function() {
	return "Thêm sản phẩm";
});


// Định tuyến có tham số: {tham số}
Route::get('posts/{id}', function($id) { 
	return $id;
});

Route::get('posts/{cat_id}/page/{page}', function($cat_id, $page) {
	return $cat_id.'-'.$page;
});

// Đặt tên định tuyến
// ->name('profile');
Route::get('users/profile', function() {
	return route('profile');
}) ->name('profile');

Route::get('/admin/product/add', function() {
	return route('product.add');
}) ->name('product.add');

/*
|----------------------------------------------------------------------
| Định tuyến có tham số tùy chọn
|----------------------------------------------------------------------
|
| domain.com/users => Hiển thị ra danh sách users
| domain.com/users/4 => Hiển thị ra thông tin của người dùng có id = 4
|
*/
Route::get("users/{id?}", function($id = 0) {
	return $id;
});

/*
|----------------------------------------------------------------------
| Định tuyến có tham số có ràng buộc biểu thức chính quy
|----------------------------------------------------------------------
|
| -> where('id', '[0-9]+'); 1 phần tử
|
*/
// Ví dụ 1
// Route::get('product/{id}', function($id) {
// 	return $id;
// }) -> where('id', '[0-9]+');

// vidu2
// Route::get('product/{slug}/{id}', function($slug, $id) {
// 	return $id."---".$slug;
// }) -> where(['slug'=>'[0-9A-Za-z-_]+']);

/*
|----------------------------------------------------------------------
| Định tuyến qua một view 
|----------------------------------------------------------------------
|
| domain.com/welcom -> view
| Route::view('/welcome','welcome');
|
*/
Route::view('/welcome','welcome');
Route::view('/posts', 'posts', ['id' => 20]);

/*
|----------------------------------------------------------------------
| Định tuyến qua controller
|----------------------------------------------------------------------
|
| domain.com/welcom -> view
| Route::view('/welcome','welcome');
|
*/
Route::get('post/{id}', 'PostController@detail');

// bài thực hành 41

Route::get('admin/add-post', function() {
	return "đây là trang thêm bài viết!";
});
Route::get('admin/list-post', function() {
	return "đây là trang danh sách bài viết";
});
Route::get('admin/update-post', function() {
	return "đây là trang cập nhật bài viết!";
});
Route::get('admin/delete-post', function() {
	return "đây là trang xóa bài viết!";
});

// chữa bài thực hành 41
// Route::get('admin/post/add', function() {
// 	return "Admin: Thêm bài viết";
// });
// Route::get('admin/post/show', function() {
// 	return "Admin: Hiển thị danh sánh bài viết";
// });
// Route::get('admin/post/update/{id}', function($id) {
// 	return "Admin: Cập nhật bài viết có id: {$id}";
// });
// Route::get('admin/post/delete/{id}', function($id) {
// 	return "Admin: Xóa bài viết có id: {$id}";
// });

/*
|-------------------------------------------------------------
| Rút ra kinh nghiệm:
|-------------------------------------------------------------
|
| admin/add-post 		-> admin/post/add để phân biệt rõ ràng
| admin/update-post/	-> admin/post/update/{id} 
|						để phân biệt cập nhật theo id bài viết nào
|
*/

/*
|-------------------------------------------------------------
| ĐỊNH TUYẾN QUA CONTROLLER
|-------------------------------------------------------------
|
| product/show/{id}", 'ProductController@show'
|
*/

Route::get("product/show/{id}", 'ProductController@show');
Route::get("product/update/{id}", 'ProductController@update');
Route::get("product/create/", 'ProductController@create');


//
Route::resource('post', 'PostController');

// Bài thực hành 51

// Route::get('admin/post/add', 'AdminPostController@create');
// Route::get('admin/post/show', 'AdminPostController@show');
// Route::get('admin/post/update/{id}', "AdminPostController@update");
// Route::get('admin/post/delete/{id}', 'AdminPostController@delete');

// Route::get('post/index', 'PostController@index');


// tạo model cho Admin
// Route::get('admin/post/show', 'AdminPostController@show');

// Route::get('child', function() {
// 	return view('child');
// });

Route::get('child', function() {
	return view('child', ['data' => 5, 'post_title' => "Khóa học laravelPro"]);
});

Route::get('demo', function() {
	$users = array(
		1 => array(
			'name' => "Phan Văn Cương"
		),
		2 => array(
			'name' => "Minh Anh"
		),
		3 => array(
			'name' => "Vũ Hoàng"
		)
	);
	return view('demo',compact('users'));
});

Route::get('admin/post/create', function() {
	return view("admin.post.create");
});
Route::get('admin/post/edit/{$id}', function() {
	return view("admin.post.edit", compact('id'));
});
Route::get('admin/post/show', function() {
	return view("admin.post.show");
});


// bài 81
// thêm dữ liệu trực tiếp bằng route(ít dùng)
Route::get('users/insert', function() {
	DB::table('users')->insert(
		['name' => "Lê Thương Huyền", 'email' => "bebubungbu@gmail.com", 'password' => bcrypt('Admin!@#'), 'gender'=>'female']
		// bcrypt('admin): hàm mã hóa password trong Laravel thay cho md5()
	);
});

// Bài 82
// thêm dữ liệu bằng controller
Route::get('posts/add', 'PostController@add');

// Bài 83 lấy danh sách bản ghi từ db
Route::get('posts/show', 'PostController@show');

// Bài 84 Lấy 1 bản ghi từ db

Route::get('posts/showFirst', 'PostController@showFirst');

// Bài 85 Lấy 1 bản ghi theo ID
Route::get('posts/showFind', 'PostController@showFind');



