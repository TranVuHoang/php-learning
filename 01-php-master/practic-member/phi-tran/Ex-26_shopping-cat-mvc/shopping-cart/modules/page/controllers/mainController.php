<?php

function construct(){

}


function detailAction(){
    
    load_model("main");
    $id=$_GET['id'];
    $page=get_page_by_id($id);
    $data['page']=$page;
    load_view("main",$data);

}