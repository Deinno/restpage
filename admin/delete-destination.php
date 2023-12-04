<?php
require_once '../../database.php';

$message = "";

if (isset($_GET) && isset($_GET["id_destination"])) {
    $item = $database->select("tb_destinations", [
        "[>]tb_us_states" => ["id_us_state" => "id_us_state"],
        "[>]tb_camping_categories" => ["id_camping_category" => "id_camping_category"]
    ], [
        "tb_destinations.id_destination",
        "tb_destinations.destination_lname",
        "tb_destinations.destination_sname",
        "tb_destinations.destination_description",
        "tb_destinations.destination_image",
        "tb_destinations.destination_price",
        "tb_us_states.us_state_name",
        "tb_us_states.id_us_state",
        "tb_us_states.us_state_code",
        "tb_camping_categories.camping_category_name",
        "tb_camping_categories.id_camping_category",
        "tb_camping_categories.camping_category_description",
    ], [
        "id_destination" => $_GET["id_destination"]
    ]);
}

if ($_POST && isset($_POST["id"]) && isset($_POST["confirmed"])) {
    if ($_POST["confirmed"] === "true") {
        $id = $_POST["id"];
        $database->delete("tb_destinations", ["id_destination" => $id]);
        header("location: destination-list.php");
      
    } else {
        header("location: destination-list.php");
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Destination</title>
    <?php 
        echo $message;
    ?>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Delete Destination</h2>
        <form method="post" action="delete-destination.php">
            <div class="form-items">
                <label for="destination_lname">Destination Name</label>
                <input id="destination_lname" class="textfield" name="destination_lname" type="text" value= "<?php echo $item[0]["destination_lname"] ?>" readonly>
            </div>
            <div class="form-items">
                <label for="destination_sname">Destination Short Name</label>
                <input id="destination_sname" class="textfield" name="destination_sname" type="text" value= "<?php echo $item[0]["destination_lname"] ?>" readonly>
            </div>
            <div class="form-items">
                <label for="destination_state">State</label>
                <input id="destination_state" class="textfield" name="destination_state" type="text" value= "<?php echo $item[0]["us_state_name"] ?>" readonly>
            </div>
            <div class="form-items">
                <label for="camping_category">Camping Category</label>
                <input id="camping_category" class="textfield" name="camping_category" type="text" value= "<?php echo $item[0]["camping_category_name"] ?>" readonly>
            </div>
            <div class="form-items">
                <label for="destination_description">Destination Description</label>
                <textarea id="destination_description" name="destination_description" id="" cols="30" rows="10" readonly><?php echo $item[0]["destination_description"]; ?></textarea>
            </div>
            <div class="form-items">
                <label for="destination_image">Destination Image</label>
                <img id="preview" src="../imgs/<?php echo $item[0]["destination_image"]; ?>" alt="Preview">
            </div>
            <div class="form-items">
                <label for="destination_price">Destination Price</label>
                <input id="destination_price" class="textfield" name="destination_price" type="text" value= "<?php echo $item[0]["destination_price"] ?>" readonly>
            </div>
            <input type="hidden" name="id" value="<?php echo $item[0]["id_destination"] ?>">
            <input type="hidden" name="confirmed" id="confirmed" value="false">
            <div class="form-items">
                <button type="button" class="submit-btn" onclick="confirmDelete()">Delete Destination</button>
            </div>
        </form>
    </div>

    <script>
        function confirmDelete() {
            let confirmed = confirm("Are you sure you want to delete this destination?");
            if (confirmed) {
                document.getElementById("confirmed").value = "true";
                document.forms[0].submit();
            } else {
                document.getElementById("confirmed").value = "false";
                document.forms[0].submit();
            }
        }
    </script>
</body>
</html>