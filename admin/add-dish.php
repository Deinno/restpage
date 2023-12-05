<?php 
    require_once '../database.php';

    $categoryes = $database->select("tb_categoryes", "*");
    $message = ""; 

    if ($_POST) {
        $nm_dish = $_POST["nm_dish"];
        $description_dish = $_POST["description_dish"];
        $tb_categoryes = $_POST["id_category"];
        $price_dish = $_POST["price_dish"];

        if (isset($_FILES["image_dish"])) {
            $errors = [];
            $file_name = $_FILES["image_dish"]["name"];
            $file_size = $_FILES["image_dish"]["size"];
            $file_tmp = $_FILES["image_dish"]["tmp_name"];
            $file_type = $_FILES["image_dish"]["type"];
            $file_ext_arr = explode(".", $file_name);

            $file_ext = end($file_ext_arr);
            $img_ext = ["jpeg", "png", "jpg", "web"];

            if (!in_array($file_ext, $img_ext)) {
                $errors[] = "File type is not supported";
                $message = "File type is not supported";
            }

            if (empty($errors)) {
                $filename = strtolower($nm_dish);
                $filename = str_replace(',', '', $filename);
                $filename = str_replace('.', '', $filename);
                $filename = str_replace(' ', '-', $filename);
                $img = "image-" . $filename . "." . $file_ext;
                move_uploaded_file($file_tmp, "../imgs/" . $img);

                $database->insert("tb_dishes", [
                    "nm_dish" => $nm_dish,
                    "description_dish" => $description_dish,
                    "img_dish" => $img,
                    "price_dish" => $price_dish,
                    "id_qty" => "1",
                    "id_category" => "1"
                ]);

                $message = "Dish added successfully!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dish</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Add New Dish</h2>
        <?php
            echo $message;
        ?>
        <form method="post" action="add-dish.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="nm_dish">Dish name</label>
                <input id="nm_dish" class="textfield" name="nm_dish" type="text">
            </div>
            <div class="form-items">
                <label for="description_dish">Dish description</label>
                <textarea id="description_dish" name="description_dish" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-items">
                <label for="id_category">Dish Category</label>
                <select name="id_category" id="id_category">
                    <?php
                        foreach($categoryes as $category){
                            echo "<option value='".$category["id_category"]."'>".$category["nm_category"]."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="img_dish">Dish image</label>
                <img id="preview" src="" alt="Preview">
                <input id="img_dish"type="file" name="img_dish" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="price_dish">Dish Price</label>
                <input id="price_dish" class="textfield" name="price_dish" type="text">
            </div>
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Add New Dish">
            </div>
        </form>
    </div>
    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();
                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>