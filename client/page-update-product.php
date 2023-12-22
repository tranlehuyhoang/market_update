 <?php
    include_once '../inc/header.php';
    ?>
 <section class="content-main">
     <form action="index.php?pg=updateproduct" method="post" enctype="multipart/form-data">
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
                             <input type="text" name="name" placeholder="Type here" class="form-control"
                                 id="product_name" value="áo dai">
                         </div>
                         <div class="row">
                             <div class="col-lg-4">
                                 <div class="mb-4">
                                     <label class="form-label">Giá Gốc</label>
                                     <div class="row gx-2">
                                         <input placeholder="VND" type="number" name="old_price"
                                             class="form-control form-input-number" value="87654">
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                 <div class="mb-4">
                                     <label class="form-label">Giá Đã Giảm</label>
                                     <input placeholder="VND" type="number" name="price"
                                         class="form-control form-input-number" value="345">
                                 </div>
                             </div>
                         </div>
                         <div class="mb-4">
                             <label class="form-label" for="describe1">Mô tả 1</label>
                             <textarea name="describe1" id="describe1" cols="30" rows="10"
                                 class="form-control"></textarea>
                             <script>
                             var Describe1 = "ácdfvd"
                             document.getElementById('describe1').value = Describe1;
                             </script>
                         </div>
                         <div class="mb-4">
                             <label class="form-label" for="describe2">Mô tả 2</label>
                             <textarea name="describe2" id="describe2" cols="30" rows="10"
                                 class="form-control form-control1"></textarea>
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
                             <img src="uploads/avatar.png" alt="">
                             <input class="form-control" type="file" name="img">
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
    include_once '../inc/footer.php';
    ?>