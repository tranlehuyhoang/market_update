 <?php
    session_start();

    include_once __DIR__ .  '/../classes/product.class.php';
    $product = new product();
    $products = $product->get_all_product();



    ?>

 <head>

     <style>
     .container {
         max-width: 800px;
         height: auto;
         margin: auto;
         margin-top: 40px;
     }

     .action {
         float: right;
     }

     span {
         margin-right: 20px;
     }

     button {
         padding: 6px 20px;
     }

     table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         position: relative;
         top: 10px;
     }

     td,
     th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
     }

     tr:nth-child(even) {
         background-color: #dddddd;
     }
     </style>
 </head>

 <body>
     <div class="container">
         <div class="action">
             <span>Export table to:</span>
             <button>Xls</button>
         </div>
         <table id="table">
             <tr>
                 <th>STT</th>
                 <th>Sản phẩm</th>
                 <th>Giá</th>
                 <th>Giá gốc</th>
                 <th>Mô tả</th>
             </tr>

             <?php
                if (isset($products)) {
                    if ($products && $products->num_rows > 0) {
                        $i = 0;
                        while ($results = $products->fetch_assoc()) {
                            # code...
                ?>
             <tr>
                 <td><?php echo $i ?></td>
                 <td><?php echo $results['name'] ?></td>
                 <td><?php echo $results['price'] ?></td>
                 <td><?php echo $results['old_price'] ?></td>
                 <td><?php echo $results['description'] ?></td>
             </tr>
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
         </table>
     </div>
     <script src="../assets/js/sheet.js"></script>
     <script src="../assets/js/script.js"></script>
 </body>

 </html>