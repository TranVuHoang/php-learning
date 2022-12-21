<?php
$post_title_1 = "Tiêu đề bài post";
$post_content_1 = "Nội dung bài post";
$mangA = array("a", "b", "c");
//echo "<pre>";
//print_r($mangA);
//echo '<pre>';
//<p></p>
?>


<html>

<head>
    <title>Cú pháp viến php</title>
    <style>
        h1 {
            color: blue;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1 class="post-title">
            <?php echo $post_title_1 ?>
        </h1>
        <div class="post-content">
            <!--Nội dung-->
            <?php echo $post_content_1 ?>
        </div>
    </div>

</body>

</html>