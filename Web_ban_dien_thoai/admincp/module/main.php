<div class="clear"></div>
<div class="main_admincp">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    if ($tam == 'quanlidanhmucsanpham' && $query == 'them') {
        include('module/quanlidanhmucsp/them.php');
        include('module/quanlidanhmucsp/lietke.php');
    } elseif ($tam == 'quanlidanhmucsanpham' && $query == 'sua') {
        include('module/quanlidanhmucsp/sua.php');
    } elseif ($tam == 'quanlisanpham' && $query == 'them') {
        include('module/quanlisanpham/them.php');
        include('module/quanlisanpham/lietke.php');
    }
    elseif ($tam == 'quanlisanpham' && $query == 'sua') {
        include('module/quanlisanpham/sua.php');
    } else {
        include('module/dashboard.php');
    }
    ?>
</div>