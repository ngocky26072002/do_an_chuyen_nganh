<?php
$sql_lietke_danhmuc = "SELECT * FROM  danhmuc ORDER BY thutu DESC";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);
?>

<p>Liệt kê danh mục sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
        $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['ten_danhmuc'] ?></td>
            <td>
                <a href="module/quanlidanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Xóa</a> | <a href="
                ?action=quanlidanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a>
            </td>

        </tr>
        <?php
    }
    ?>

</table>