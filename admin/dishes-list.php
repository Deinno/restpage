<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Dishes</title>
</head>
<body>
    <h2>Registered Dishes</h2>
    <table>
        <?php
            foreach($items as $item){
                echo "<tr>";
                echo "<td>".$item["nm_dish"]."</td>";
                echo "<td><a href='edit-dish.php?id_dish=".$item["id_dish"].
                "'>Edit</a> <a href='delete-dish.php?id_dish=".$item["id_dish"]."'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>   
</body>
</html>