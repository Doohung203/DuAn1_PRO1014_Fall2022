<?php
session_start();
require('config/database.php');
require('layout/header.php');
$id_product = $_GET['id'];
    $checkProduct = $conn->prepare("SELECT * FROM `products` WHERE `product_id`='$id_product'");
    $checkProduct->execute();
    $product = $checkProduct->fetch(PDO::FETCH_ASSOC);
    if(!$product){
        $message = "Sản phẩm có mã $id_product không tồn tại";
        header("location: showProduct.php?msg=$message");
    }else{
?>
<article>
    <div class="container">
        <div class="name">
            <h1><?=$product['product_name'];?>
            </h1>
        </div>
        <div class="info">
            <div class="image-product">
                <img src="admin/upload/<?=$product['image'];?>" alt="" class="w-full">
            </div>
            <div class="detail">
                <h2 class="price"><?=number_format($product['price']);?> ₫</h2>
                <div class="shipping uppercase">
                    MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC
                </div>
                <div class="select-color">
                    <div class="color">
                        <button>
                            Đen
                        </button>
                    </div>
                </div>
                <div class="promote">
                    <h2 class="uppercase">Khuyến mãi</h2>
                    <div class="item">
                        <div class="bag">KM1</div>
                        Giảm thêm tới 500.000đ khi thanh toán qua VNPAY - (Xem chi tiết)
                    </div>
                    <div class="item">
                        <div class="bag">KM2</div>
                        Giảm thêm tới 500.000đ khi thanh toán qua VNPAY - (Xem chi tiết)
                    </div>
                    <div class="item">
                        <div class="bag">KM3</div>
                        Giảm thêm tới 500.000đ khi thanh toán qua VNPAY - (Xem chi tiết)
                    </div>
                    <div class="item">
                        <div class="bag">KM4</div>
                        Giảm thêm tới 500.000đ khi thanh toán qua VNPAY - (Xem chi tiết)
                    </div>
                </div>
                <div class="payments">
                    <a href="" class="buynow">Mua ngay</a>
                    <a href="" class="installment">Trả góp</a>
                </div>
            </div>
            <div class="baohanh">
                <div class="thongtin">
                    <h2 class="uppercase">Thông tin bảo hành</h2>
                    <span>Bảo hành 12 tháng chính hãng</span>
                    <span>Bao xài lỗi 1 đổi 1 trong 30 ngày với lỗi phần cứng do nhà sản xuất.</span>
                </div>
            </div>
        </div>
        <div class="description">
            <h2><?=$product['product_name'];?></h2>
            <p><?=$product['description'];?></p>
            <img src="admin/upload/<?=$product['image'];?>" alt="" class="w-full">
        </div>
    </div>
</article>
<?php
require('layout/footer.php');
}