<?php
include_once '../inc/header.php';
?>
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Danh sách sản phẩm</h2>
        </div>
        <div>
            <a href="./client/page-add-product.php" class="btn btn-primary btn-sm rounded">Thêm sản phẩm</a>
            <a href="index.php?pg=products-excel" class="btn btn-primary btn-sm rounded">Xuất file excel</a>
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
                            <th style="padding-left: 165px;">Giá</th>
                            <th style="padding-right: 40px;">Giá gốc</th>
                            <th style="padding-right: 280px;">Mô tả</th>
                            <th class="text-end"> Action </th>
                        </tr>

                    </thead>
                </table>
            </div>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-quantity">
                        <span>62</span>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img src="uploads/avatar.png" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">áo dai</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-price">
                        <span><span>345</span></span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-old_price">
                        <span><del><span>87.654</span></del></span>
                    </div>
                    <div class="col-lg-5 col-sm-2 col-4 col-describe">
                        <p>ácdfvd</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-action text-end">
                        <a href="./client/page-update-product.php" class="btn btn-sm font-sm rounded btn-brand">
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
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-quantity">
                        <span>63</span>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img src="uploads/pd1.jpg" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">[N1] CLONE TIKTOK - Hàng Ngâm Tháng 5/2022 Không Hỗ Trợ Đặt Đơn
                                    - API 6</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-price">
                        <span><span>123</span></span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-old_price">
                        <span><del><span>123</span></del></span>
                    </div>
                    <div class="col-lg-5 col-sm-2 col-4 col-describe">
                        <p>123</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-action text-end">
                        <a href="./client/page-update-product.php" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i>Sửa</a>
                        <a href="index.php?pg=delproduct&id=63" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i>Xóa
                        </a>
                    </div>
                    <input hidden type="checkbox" name="best" class="form-control1">
                    <input hidden type="checkbox" name="new" class="form-control1">
                    <input hidden type="checkbox" name="hot" class="form-control1">
                </div>
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-quantity">
                        <span>64</span>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img src="uploads/book.jpg" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">quần size xl</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-price">
                        <span><span>10.000</span></span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-old_price">
                        <span><del><span>20.000</span></del></span>
                    </div>
                    <div class="col-lg-5 col-sm-2 col-4 col-describe">
                        <p>qưertygv</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-action text-end">
                        <a href="./client/page-update-product.php" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i>Sửa</a>
                        <a href="index.php?pg=delproduct&id=64" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i>Xóa
                        </a>
                    </div>
                    <input hidden type="checkbox" name="best" class="form-control1">
                    <input hidden type="checkbox" name="new" class="form-control1">
                    <input hidden type="checkbox" name="hot" class="form-control1">
                </div>
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-quantity">
                        <span>65</span>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img src="uploads/188485.jpg" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">quan ao</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-price">
                        <span><span>100.000</span></span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-old_price">
                        <span><del><span>200.000</span></del></span>
                    </div>
                    <div class="col-lg-5 col-sm-2 col-4 col-describe">
                        <p>em quang </p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-action text-end">
                        <a href="./client/page-update-product.php" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i>Sửa</a>
                        <a href="index.php?pg=delproduct&id=65" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i>Xóa
                        </a>
                    </div>
                    <input hidden type="checkbox" name="best" class="form-control1">
                    <input hidden type="checkbox" name="new" class="form-control1">
                    <input hidden type="checkbox" name="hot" class="form-control1">
                </div>
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-quantity">
                        <span>66</span>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img src="uploads/big-product2.jpg" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">quan zin</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-price">
                        <span><span>12.000</span></span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-old_price">
                        <span><del><span>200.000</span></del></span>
                    </div>
                    <div class="col-lg-5 col-sm-2 col-4 col-describe">
                        <p>ẻtyukjhgfds</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-action text-end">
                        <a href="./client/page-update-product.php" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i>Sửa</a>
                        <a href="index.php?pg=delproduct&id=66" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i>Xóa
                        </a>
                    </div>
                    <input hidden type="checkbox" name="best" class="form-control1">
                    <input hidden type="checkbox" name="new" class="form-control1">
                    <input hidden type="checkbox" name="hot" class="form-control1">
                </div>
            </article>
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