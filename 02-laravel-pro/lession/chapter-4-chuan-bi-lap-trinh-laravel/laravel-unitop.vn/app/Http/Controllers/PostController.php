<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function add() {
        DB::table('posts')->insert(
            ['title' => "post 5", 'description'=>"abc", 'content' => "content 4", 'user_id' => 2]
        );
    }
    #TH1 show tất cả bản ghi của bảng posts
    // function show() {
    //     $posts = DB::table('posts')->get();
    //     // foreach($posts as $post) {
    //     //     echo $post->title;
    //     //     echo $post->content;
    //     //     echo "<br/>";
    //     // }
    //     return $posts;
    // }

    #TH2 show title và content của bảng posts
    // function show() {
    //     $posts = DB::table('posts')->select('title', 'content')->get();
    //     foreach($posts as $post) {
    //         // echo $post->title;
    //         // echo $post->content;
    //         // echo "<br/>";
    //     }
    //     return $posts;
    // }

    #TH3
    function show() {
        $posts = DB::table('posts')->get();
        foreach($posts as $post) {
            echo $post->title;
            echo $post->content;
            echo "<br/>";
        }
        // return $posts;
    }
    // bài 84 lấy dữ liệu của 1 bản ghi đầu tiên trong bảng posts
    // function showFirst() {
    //     $posts = DB:: table('posts')->first();

    //     echo "<pre>";
    //     print_r($posts);
    //     echo "</pre>";
    //     echo $posts->content;
    // }
    // bài 84 lấy dữ liệu của 1 bản ghi có id = 2 trong bảng posts
    function showFirst() {
        $posts = DB:: table('posts')->where('id', 2)->first();

        echo "<pre>";
        print_r($posts);
        echo "</pre>";
        echo $posts->content;
    }
    // bài 85 lấy dữ liệu của 1 bản ghi theo id
    function showFind() {
        $posts = DB:: table('posts')->find(2);

        echo "<pre>";
        print_r($posts);
        echo "</pre>";
        echo $posts->title."-";
        echo $posts->content; 
    }
    
}
