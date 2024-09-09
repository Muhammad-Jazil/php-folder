<?php
include('connection.php');
// categories
if(isset($_POST['addcategory'])){
    $catname = $_POST['categoryName'];
    $catimage = $_FILES['categoryImage']['name'];
    $catTmpname = $_FILES['categoryImage']['tmp_name'];
    $extension = pathinfo($catimage,PATHINFO_EXTENSION);
    $des = 'img/categories/'.$catimage;
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
        if(move_uploaded_file($catTmpname,$des)){
            $query - $pdo > prepare("insert into categorys (catename,cateimage) values(:pn,:pi)");
            $query >bindParam("pn",$catname);
            $query >bindParam("pi",$catimage);
            $query >execute();
            echo "<script>alert('category added')</script>";
        }
    }
}
?>