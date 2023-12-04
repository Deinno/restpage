<?php 
    /***
     * 0. include database connection file
     * 1. receive form values from post and insert them into the table (match table field with values from name atributte)
     * 2. for the destination_image insert the value "destination-placeholder.webp"
     * 3. redirect to destinations-list. php after complete the insert into
     */
    require_once '../../database.php';
    // Reference: https://medoo.in/api/select
    $categories = $database->select("tb_camping_categories","*");

    // Reference: https://medoo.in/api/select
    $states = $database->select("tb_us_states","*");

    $message = "";

    if (isset($_GET)){
        $item = $database->select("tb_destinations",[
            "[>]tb_us_states"=>["id_us_state" => "id_us_state"],
            "[>]tb_camping_categories"=>["id_camping_category" => "id_camping_category"]
        ],[
            "tb_destinations.id_destination",
            "tb_destinations.destination_lname",
            "tb_destinations.destination_sname",
            "tb_destinations.destination_description",
            "tb_destinations.destination_lname_tr",
            "tb_destinations.destination_sname_tr",
            "tb_destinations.destination_description_tr",
            "tb_destinations.destination_image",
            "tb_destinations.destination_price",
            "tb_us_states.us_state_name",
            "tb_us_states.id_us_state",
            "tb_us_states.us_state_code",
            "tb_camping_categories.camping_category_name",
            "tb_camping_categories.id_camping_category",
            "tb_camping_categories.camping_category_description"
        ],[
            "id_destination"=>$_GET["id_destination"]
        ]);
        var_dump($item);
    }

    if($_POST){
        $data = $database->select("tb_destinations","*", ["id_destination"=>$_POST["id"]
    ]);
        if(isset($_FILES["destination_image"])&& $_FILES["destination_image"]["name"] !=""){
            var_dump($_FILES);
            $errors = [];
            $file_name = $_FILES["destination_image"]["name"];
            $file_size = $_FILES["destination_image"]["size"];
            $file_tmp = $_FILES["destination_image"]["tmp_name"];
            $file_type = $_FILES["destination_image"]["type"];
            $file_ext_arr = explode(".", $_FILES["destination_image"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = ["jpeg", "png", "jpg", "webp"];

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type not supported";
                $message = "File type not supported";
            }

            
             if(empty($errors)){
                 $filename = strtolower($_POST["destination_lname"]);
                 $filename = str_replace(',', '', $filename);
                 $filename = str_replace('.', '', $filename);
                 $filename = str_replace(' ', '-', $filename);
                 $img = "location-".$filename.".".$file_ext;
                 echo $img;
                 move_uploaded_file($file_tmp, "../imgs/".$img);
             }
        }else{
            $img = $data[0]["destination_image"];
        }
        $database->update("tb_destinations",[
            "id_us_state"=>$_POST["state"],
            "id_camping_category"=>$_POST["camping_category"],
            "destination_lname"=>$_POST["destination_lname"],
            "destination_sname"=>$_POST["destination_sname"],
            "destination_description"=>$_POST["destination_description"],
            "destination_lname_tr"=>$_POST["destination_lname_tr"],
            "destination_sname_tr"=>$_POST["destination_sname_tr"],
            "destination_description_tr"=>$_POST["destination_description_tr"],
            "destination_image"=>"$img",
            "destination_price"=>$_POST["destination_price"]
        ],[
            "id_destination"=>$_POST["id"]
        ]);
        header("location: destination-list.php");
        // Reference: https://medoo.in/api/insert  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Destination</title>
    <?php 
        echo $message;
    ?>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Add New Destination</h2>
        <form method="post" action="edit-destination.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="destination_lname">Destination Name</label>
                <input id="destination_lname" class="textfield" name="destination_lname" type="text" value= "<?php echo $item[0]["destination_lname"]?>">
            </div>
            <div class="form-items">
                <label for="destination_lname_tr">Destination Name Turkish</label>
                <input id="destination_lname_tr" class="textfield" name="destination_lname_tr" type="text" value= "<?php echo $item[0]["destination_lname_tr"]?>">
            </div>
            <div class="form-items">
                <label for="destination_sname">Destination Short Name</label>
                <input id="destination_sname" class="textfield" name="destination_sname" type="text" value= "<?php echo $item[0]["destination_sname"]?>">
            </div>
            <div class="form-items">
                <label for="destination_sname_tr">Destination Short Name Turkish</label>
                <input id="destination_sname_tr" class="textfield" name="destination_sname_tr" type="text" value= "<?php echo $item[0]["destination_sname_tr"]?>">
            </div>
            <div class="form-items">
                <label for="destination_state">State</label>
                <select name="state" id="destination_state">
                <?php 
                    foreach($states as $state){
                        if($item[0]["id_us_state"]==$state["id_us_state"]){
                            echo"<option value='".$state["id_us_state"]."' selected>".$state["us_state_name"]."</option>";
                        }else{
                            echo"<option value='".$state["id_us_state"]."'>".$state["us_state_name"]."</option>";
                        }
                        
                    }
                ?>
                </select>
            </div>
            <div class="form-items">
                <label for="camping_category">Camping Category</label>
                <select name="camping_category" id="camping_category">
                    <?php 
                        foreach($categories as $category){
                            if($item[0]["id_camping_category"]==$category["id_camping_category"]){
                                echo"<option value='".$category["id_camping_category"]."' selected>".$category["camping_category_name"]."</option>";
                            }else{
                                echo"<option value='".$category["id_camping_category"]."'>".$category["camping_category_name"]."</option>";
                            }
                            
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="destination_description">Destination Description</label>
                <textarea id="destination_description" name="destination_description" id="" cols="30" rows="10"><?php echo $item[0]["destination_description"];?></textarea>
            </div>
            <div class="form-items">
                <label for="destination_description_tr">Destination Description Turkish</label>
                <textarea id="destination_description_tr" name="destination_description_tr" id="" cols="30" rows="10"><?php echo $item[0]["destination_description_tr"];?></textarea>
            </div>
            <div class="form-items">
                <label for="destination_image">Destination Image</label>
                <img id="preview" src="../imgs/<?php echo $item[0]["destination_image"];?>" alt="Preview">
                <input id="destination_image" type="file" name="destination_image" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="destination_price">Destination Price</label>
                <input id="destination_price" class="textfield" name="destination_price" type="text" value= "<?php echo $item[0]["destination_price"]?>">
            </div>
            <input type="hidden" name="id" value = "<?php echo $item[0]["id_destination"] ?>">
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Add New Destination">
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