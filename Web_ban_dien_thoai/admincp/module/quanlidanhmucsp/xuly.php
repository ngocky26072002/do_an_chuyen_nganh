<?php
include("../../config/config.php");

$tenloaisp=$_POST['tendanhmuc'];
$thutu=$_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    //them
    $sql_them= "INSERT INTO danhmuc(ten_danhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
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