<?php
include_once '../inc/header.php';
$products = $product->get_all_product();
?>
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Danh sách sản phẩm</h2>
        </div>
        <div>
            <a href="./client/page-add-product.php" class="btn btn-primary btn-sm rounded">Thêm sản phẩm</a>
            <a href="./client/excel.php" class="btn btn-primary btn-sm rounded">Xuất file excel</a>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 me-auto">
                    <form action="index.php?pg=products-list" method="post">
                        <input type="text" name="kyw" placeholder="Tìm kiếm..." class="form-control">
                        <button hidden class="btn btn-light bg btn-fix" type="submit" name="search"> <i
                                class="material-icons md-search"></i></button>
                    </form>
                </div>

            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="9%">STT</th>
                            <th>Sản phẩm</th>
                            <th style="padding-left: 255px;">Giá</th>
                            <th style="padding-right: 40px;">Giá gốc</th>
                            <th style="padding-right: 280px;">Mô tả</th>
                            <th class="text-end"> Action </th>
                        </tr>

                    </thead>
                </table>
            </div>
            <?php
            if (isset($products)) {
                if ($products && $products->num_rows > 0) {
                    $i = 0;
                    while ($results = $products->fetch_assoc()) {
                        # code...
            ?>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-quantity">
                        <span><?php echo $results['id'] ?></span>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img src="./upload/<?php echo $results['image'] ?>" class="img-sm img-thumbnail"
                                    alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0"><?php echo $results['name'] ?></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-price">
                        <span><span><?php echo $results['price'] ?></span></span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-old_price">
                        <span><del><span><?php echo $results['old_price'] ?></span></del></span>
                    </div>
                    <div class="col-lg-5 col-sm-2 col-4 col-describe">
                        <p><?php echo $results['description'] ?></p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-action text-end">
                        <a href="./client/page-update-product.php?id=1" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i>Sửa</a>
                        <a href="index.php?pg=delproduct&id=62" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i>Xóa
                        </a>
                    </div>
                    <input hidden type="checkbox" name="best" class="form-control1">
                    <input hidden type="checkbox" name="new" class="form-control1">
                    <input hidden type="checkbox" name="hot" class="form-control1">
                </div>
            </article>
            <?php
                        $i++;
                    }
                } else {
                    ?>
            <?php
                }
            } else {
                ?>
            <?php
            }
            ?>
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card en    d// -->
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active">
                    <a class="page-link" href="index.php?pg=products-list&page=1">1</a>
                </li>
            </ul>
        </nav>
    </div>

</section>

<?php
include_once '../inc/footer.php';
?>