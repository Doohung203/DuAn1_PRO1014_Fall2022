<?php
session_start();
require('layout/header.php');
require('config/database.php');
?>
<article>
    <section class="banner-top">
        <div class="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path
                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
            </svg>
        </div>
        <div class="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path
                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
            </svg>
        </div>
        <a href="" class="border-">
            <img src="images/hotsale-samsung-a13-a23-1200x382.jpg" alt="">
        </a>
        <div class="quick-sales">
            <div class="item">
                <a href="">
                    <img src="images/chuyen-trang-samsung2.png" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="images/oppo-gia-soc-a55-2.jpg" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="images/san-pham-hot.png" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="images/hotsale-airpod-2pro.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="row">
                <?php
                //Lấy danh sách danh mục
                $getCategories = $conn->prepare("SELECT * FROM `categories`");
                $getCategories->execute();
                $categories = $getCategories->fetchALL(PDO::FETCH_ASSOC);
                ?>
                <?php foreach($categories as $value){ ?>
                <div class="title">
                    <a href="">
                        <h4 class="uppercase"><?=$value['cate_name'];?></h4>
                    </a>
                </div>
                <div class="product-list">
                    <?php
                    //Lấy sản phẩm danh mục
                    $getProducts = $conn->prepare("SELECT * FROM `products` WHERE `cate_id`='".$value['cate_id']."'");
                    $getProducts->execute();
                    $products = $getProducts->fetchALL(PDO::FETCH_ASSOC);
                    ?>
                    <?php foreach($products as $item){?>
                    <div class="item">
                        <div class="img"></div>
                            <a href="detail.php?id=<?=$item['product_id'];?>">
                                <img src="admin/upload/<?=$item['image'];?>" class="w-full">
                            </a>
                        </div>
                        <div class="info">
                            <a href="detail.php?id=<?=$item['product_id'];?>"><?=$item['product_name'];?></a>
                            <span class="price"><?=number_format($item['price']);?> ₫</span>
                        </div>
                        <div class="note">
                            <div class="bag">KM</div>Giảm thêm tới 500.000đ khi thanh toán
                        </div>
                        <div class="promote">
                            <a href="detail.php?id=<?=$item['product_id'];?>">
                                <ul>
                                    <li>
                                        <div class="bag">KM</div>Giảm thêm tới 500.000đ khi thanh toán
                                    </li>
                                    <li>
                                        <div class="bag">KM</div>Giảm thêm tới 500.000đ khi thanh
                                        toán
                                    </li>
                                    <li>
                                        <div class="bag">KM</div>Giảm thêm tới 500.000đ khi thanh toán
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <div class="banner-bot">
                <img src="images/hotsale-samsung-galaxy-a-series-02.jpg" alt="">
            </div>
        </div>
    </section>
</article>
<?php 
require('layout/footer.php');