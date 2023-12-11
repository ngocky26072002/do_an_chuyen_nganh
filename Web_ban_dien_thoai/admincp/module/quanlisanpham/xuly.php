<?php
include("../../config/config.php");

$tensanpham=$_POST['tensanpham'];
$masp=$_POST['masp'];
$giasp=$_POST['giasp'];
$soluong=$_POST['soluong'];
$tomtat=$_POST['tomtat'];
$noidung=$_POST['noidung'];
$tinhtrang=$_POST['tinhtrang'];

$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];


if(isset($_POST['themsanpham'])){
    //them
    $sql_them= "INSERT INTO sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang) VALUE('".$tensanpham."',
    '".$masp."','".$giasp."''".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    //header('Location:../../index.php?action=quanlisanpham&query=them');
}elseif(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update= "UPDATE danhmuc SET ten_danhmuc='".$tenloaisp."', thutu='".$thutu."' WHERE id='$_GET[iddanhmuc]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM danhmuc WHERE id='".$id."' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
}
?>