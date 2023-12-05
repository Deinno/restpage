<?php
require_once '../database.php';

$categories = $database->select("tb_categoryes", "*");

$message = "";

if (isset($_GET)) {
    $item = $database->select("tb_dishes", [
        "[>]tb_categoryes" => ["id_category" => "id_category"]
    ], [
        "tb_dishes.id_dish",
        "tb_dishes.nm_dish",
        "tb_dishes.description_dish",
        "tb_dishes.img_dish",
        "tb_dishes.price_dish",
        "tb_categoryes.id_category",
        "tb_categoryes.nm_category",
    ], [
        "id_dish"=>$_GET["id_dish"]
    ]);
}

if ($_POST) {
    $data = $database->select("tb_dishes", "*", [
        "id_dish" => $_POST["id"]
    ]);

    if (isset($_FILES["img_dish"]) && $_FILES["img_dish"]["name"] != "") {
        $errors = [];
        $file_name = $_FILES["img_dish"]["name"];
        $file_size = $_FILES["img_dish"]["size"];
        $file_tmp = $_FILES["img_dish"]["tmp_name"];
        $file_type = $_FILES["img_dish"]["type"];
        $file_ext_arr = explode(".", $_FILES["img_dish"]["name"]);
        $file_ext = end($file_ext_arr);
        $img_ext = ["jpeg", "png", "jpg", "web"];

        if (!in_array($file_ext, $img_ext)) {
            $errors[] = "File type is not supported";
            $message = "File type is not supported";
        }

        if (empty($errors)) {
            $filename = strtolower($_POST["nm_dish"]);
            $filename = str_replace(',', '', $filename);
            $filename = str_replace('.', '', $filename);
            $filename = str_replace(' ', '-', $filename);
            $img = "image-" . $filename . "." .$file_ext;
            move_uploaded_file($file_tmp, "../imgs/".$img);
        }
    } else {
        $img = $data[0]["img_dish"];
    }

    $database->update("tb_dishes", [
        "id_category" => $_POST["tb_categoryes"],
        "nm_dish" => $_POST["nm_dish"],
        "description_dish" => $_POST["description_dish"],
        "img_dish" => $img,
        "price_dish" => $_POST["price_dish"]
    ], [
        "id_dish" => $_POST["id"]
    ]);

    header("location: dishes-list.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dish</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Edit Dishn</h2>
        <?php echo $message; ?>
        <form method="post" action="edit-dish.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="nm_dish">Dish Name</label>
                <input id="nm_dish" class="textfield" name="nm_dish" type="text"
                value="<?php echo $item[0]["nm_dish"]?>">
            </div>
            <div class="form-items">
                <label for="id_category">Dish Category</label>
                <select name="tb_categoryes" id="tb_categoryes">
                    <?php
                    foreach ($categories as $category) {
                        if ($item[0]["id_category"] == $category["id_category"]) {
                            echo "<option value='" . $category["id_category"] . "' selected>" .
                                $category["nm_category"] . "</option>";
                        } else {
                            echo "<option value='" . $category["id_category"] . "'>" . $category
                                ["nm_category"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="description_dish">Dish Description</label>
                <textarea id="description_dish" name="description_dish" id="" cols="30"
                rows="10"><?php echo $item[0]["description_dish"]?></textarea>
            </div>
            <div class="form-items">
                <label for="img_dish">Dish Image</label>
                <img id="preview" src="../imgs/<?php echo $item[0]["img_dish"];?>" alt="Preview">
                <input id="img_dish" type="file" name="img_dish" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="price_dish">dish Price</label>
                <input id="price_dish" class="textfield" name="price_dish" type="text"
                value="<?php echo $item[0]["price_dish"]?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $item[0]["id_dish"]; ?>">
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Update Dish">
            </div>
        </form>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>