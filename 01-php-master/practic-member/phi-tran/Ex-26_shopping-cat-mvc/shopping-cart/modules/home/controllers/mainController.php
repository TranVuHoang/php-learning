<?php

function construct(){

}

function mainAction(){

     load_model('main');
     load('lib','product');
     load("helper","format");
     $list_cat=get_list_cat();

     $data['list_cat']=$list_cat;
     load_view('main',$data);
}