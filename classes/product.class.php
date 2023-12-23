<?php
include_once __DIR__ . '/../lib/database.php';

?>


<?php
class product
{
    private $db;
    private $fm;
    public function __construct()
    {

        $this->db = new Database();
    }
    public function insert_product($data)
    {
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
        $old_price = mysqli_real_escape_string($this->db->link, $data['old_price']);
        $description = mysqli_real_escape_string($this->db->link, $data['description']);
        $description2 = mysqli_real_escape_string($this->db->link, $data['description2']);
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = '../upload/' . $image;

        if (empty($name)) {
            $arlet = "<div class='alert alert-danger' role='alert'>Name must not be empty</div>";
            return $arlet;
        } else {
            move_uploaded_file($image_tmp, $image_path);
            $query = "INSERT INTO products (name,image ,price, old_price, description,description2) VALUES ('$name', '$image', '$price', '$old_price', '$description', '$description2')";
            $result = $this->db->insert($query);
            if ($result) {
                $arlet = "<div class='alert alert-success' role='alert'>Insert Product Successfully</div>";
                echo "<script>window.location.href = './client/home.php';</script>";

                return $arlet;
            } else {
                $arlet = "<div class='alert alert-danger' role='alert'>Failed to insert Product</div>";
                return $arlet;
            }
        }
    }

    public function get_product_by_id($id)
    {
        // Tạo câu truy vấn SELECT
        $query = "SELECT * FROM products WHERE id='$id'";

        // Thực thi câu truy vấn
        $result = $this->db->select($query);
        return $result;
    }
    public function get_all_product()
    {
        // Tạo câu truy vấn SELECT
        $query = "SELECT * FROM products ";

        // Thực thi câu truy vấn
        $result = $this->db->select($query);
        return $result;
    }

    public function update_product($data, $id)
    {
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
        $old_price = mysqli_real_escape_string($this->db->link, $data['old_price']);
        $description = mysqli_real_escape_string($this->db->link, $data['description']);
        $description2 = mysqli_real_escape_string($this->db->link, $data['description2']);
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = '../upload/' . $image;

        // Kiểm tra xem có tệp tin ảnh mới được tải lên hay không
        if (!empty($image_tmp)) {
            // Di chuyển tệp tin ảnh mới
            move_uploaded_file($image_tmp, $image_path);
        }

        // Tạo câu truy vấn UPDATE dựa trên các giá trị cập nhật
        $query = "UPDATE products SET name='$name', price='$price', old_price='$old_price', description='$description', description2='$description2'";

        // Thêm trường image vào câu truy vấn nếu có tệp tin ảnh mới được tải lên
        if (!empty($image)) {
            $query .= ", image='$image'";
        }

        $query .= " WHERE id='$id'";

        // Thực thi câu truy vấn
        $result = $this->db->update($query);

        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Update Product Successfully</div>";
            echo "<script>window.location.href = './client/home.php';</script>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Failed to update Product</div>";
            return $arlet;
        }
    }

    public function delete_product($id)
    {
        // Tạo câu truy vấn DELETE
        $query = "DELETE FROM products WHERE id='$id'";

        // Thực thi câu truy vấn
        $result = $this->db->delete($query);

        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Product Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Failed to delete Product</div>";
            return $arlet;
        }
    }
}
?>