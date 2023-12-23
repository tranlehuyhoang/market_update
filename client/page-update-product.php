 <?php
    include_once '../inc/header.php';
    $product_detail = $product->get_product_by_id($_GET['id']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $product->update_product($_POST, $_GET['id']);
    }

    ?>

 <?php
    if (isset($product_detail)) {
        if ($product_detail && $product_detail->num_rows > 0) {
            $i = 0;
            while ($results = $product_detail->fetch_assoc()) {
                # code...
    ?>
 <section class="content-main">
     <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
             <div class="col-12">
                 <div class="content-header">
                     <h2 class="content-title">Cập nhật sản phẩm</h2>
                     <div>
                         <input type="hidden" name="id" value="62">
                         <input type="hidden" name="old_img" value="avatar.png">
                         <button type="submit" name="updateproduct" class="btn btn-md rounded font-sm hover-up">Cập nhật
                         </button>
                     </div>
                 </div>
             </div>
             <div class="col-lg-7">
                 <div class="card mb-4">
                     <div class="card-header">
                         <h4>Thông tin sản phẩm</h4>
                     </div>
                     <div class="card-body">
                         <div class="mb-4">
                             <label class="form-label">Tên Sản Phẩm</label>
                             <input required type="text" name="name" placeholder="Type here" class="form-control"
                                 id="product_name" value="<?php echo $results['name'] ?>">
                         </div>
                         <div class="row">
                             <div class="col-lg-4">
                                 <div class="mb-4">
                                     <label class="form-label">Giá Gốc</label>
                                     <div class="row gx-2">
                                         <input required placeholder="VND" type="number" name="old_price"
                                             class="form-control form-input-number"
                                             value="<?php echo $results['old_price'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                 <div class="mb-4">
                                     <label class="form-label">Giá Đã Giảm</label>
                                     <input required placeholder="VND" type="number" name="price"
                                         class="form-control form-input-number" value="<?php echo $results['price'] ?>">
                                 </div>
                             </div>
                         </div>
                         <div class="mb-4">
                             <label class="form-label" for="description">Mô tả 1</label>
                             <textarea required name="description" id="description" cols="30" rows="10"
                                 class="form-control"><?php echo $results['description'] ?></textarea>
                             <script>
                             var Describe1 = "ácdfvd"
                             document.getElementById('describe1').value = Describe1;
                             </script>
                         </div>
                         <div class="mb-4">
                             <label class="form-label" for="description2">Mô tả 2</label>
                             <textarea required name="description2" id="description2" cols="30" rows="10"
                                 class="form-control form-control1"><?php echo $results['description2'] ?></textarea>
                             <script>
                             // Sử dụng JavaScript để set giá trị cho thẻ textarea
                             var Describe2 = "ẻtyhjn"
                             document.getElementById('describe2').value = Describe2;
                             </script>
                         </div>

                     </div>
                 </div>
                 <!-- card end// -->
                 <!-- card end// -->
             </div>
             <div class="col-lg-5">
                 <div class="card mb-4">
                     <div class="card-header">
                         <h4>Hình ảnh</h4>
                     </div>
                     <div class="card-body">
                         <div class="input-upload">
                             <img src="./upload/<?php echo $results['image'] ?>" alt="">
                             <input class="form-control" type="file" name="image">
                         </div>
                     </div>
                 </div>
                 <!-- card end// -->

                 <!-- card end// -->
             </div>
         </div>
     </form>
 </section>
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
 <?php
    include_once '../inc/footer.php';
    ?>