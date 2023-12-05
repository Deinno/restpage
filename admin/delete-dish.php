<?php
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : '';
    $conn = new mysqli('localhost', 'root', '', 'proyecto');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($confirm == 'Yes') {
        $sql = "DELETE FROM tb_dishes WHERE id_dish='$delete_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Platillo eliminado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Platillos</title>
</head>
<body>
    <h1>Platillos</h1>
    <ul>
        <?php
        // Fetching data from database
        $conn = new mysqli('localhost', 'root', '', 'restpage');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id_dish, nm_dish,description_dish,img_dish,price_dish FROM tb_dishes";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>
                    " . $row['id_dish'] . "<br>
                    " . $row['nm_dish'] . "<br>
                    " . $row['description_dish'] . "<br>
                    " . $row['img_dish'] . "<br>
                    " . $row['price_dish'] . "<br>
                    <form method='post' action=''>
                        <input type='hidden' name='delete_id' value='" . $row['id_dish'] . "'>
                        <input type='submit' name='confirm' value='Yes'>
                        <input type='submit' name='confirm' value='No'>
                    </form>
                </li>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>