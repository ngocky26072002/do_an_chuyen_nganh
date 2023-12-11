<div id="main">
    <?php
        include("sidebar/sidebar.php");
    ?>


    <div class="main_content">
        <?php
        if(isset($_GET['quanli'])){
            $tam=$_GET['quanli'];
        }else{
            $tam='';
        }
        if($tam=='danhmucsanpham'){
            include('main/danhmuc.php');
        }elseif($tam== 'giohang'){
            include('main/giohang.php');
        }elseif($tam== 'tintuc'){
            include('main/tintuc.php');
        }elseif($tam== 'lienhe'){
            include('main/lienhe.php');
        }else{
            include('main/index.php');
        }
        ?>
    </div>

    <div class="clear">

    </div>
</div>