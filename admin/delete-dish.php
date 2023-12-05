<?php
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : '';
    $conn = new mysqli('localhost', 'root', '', 'restpage');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($confirm == 'Yes') {
        $sql = "DELETE FROM tb_dishes WHERE id_dishes='$delete_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Dish deleted correctly.";
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
    <title>Dishes</title>
</head>
<body>
    <h1>Dishes</h1>
    <ul>
        <?php
        // Fetching data from database
        $conn = new mysqli('localhost', 'root', '', 'restpage');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id_dishes, dish_lname,dish_description,dish_image, dish_price FROM tb_dishes";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>
                    " . $row['id_dishes'] . "<br>
                    " . $row['dish_lname'] . "<br>
                    " . $row['dish_description'] . "<br>
                    " . $row['dish_image'] . "<br>
                    " . $row['dish_price'] . "<br>
                    <form method='post' action=''>
                        <input type='hidden' name='delete_id' value='" . $row['id__dishes'] . "'>
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