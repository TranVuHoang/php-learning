<?php
//xóa sản phẩm nào? quy định trên id

$id=(int) $_GET['id'];
delete_cart($id);
redirect("?mod=cart&act=show");
