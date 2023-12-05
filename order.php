<?php 
    require_once './database.php';

    if($_GET){

        $item = $database->select("tb_dishes",[
            "[>]tb_person_qty"=>["id_qty" => "id_qty"],
            "[>]tb_categoryes"=>["id_category" => "id_category"]
        ],[
            "tb_dishes.id_dish",
            "tb_dishes.nm_dish",
            "tb_dishes.img_dish",
            "tb_dishes.description_dish",
            "tb_dishes.price_dish",
            "tb_person_qty.id_qty",
            "tb_person_qty.nm_person_qty",
           "tb_categoryes.id_category",
            "tb_categoryes.nm_category",
        ],[
            "id_dish"=>$_GET["id"]
        ]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

    <?php 
        include "./parts/header.php";
    ?>

    <main>
        <section >
            <div id="offer-titles">
                <h2 id="offer-title">Order Online</h2>
                <h3 id="offer-subtitle">Order all the meals you desire</h3>
            </div>
            
            <div class="dishes-container">
                
                <?php 
                    echo "<section class='dish'>";
                        echo "<div class='dish-thumb'>";
                            echo "<img class='dish-image' src='".$item[0]["img_dish"]."' alt='".$item[0]["nm_dish"]."'>";
                        echo "</div>";
                        echo "<h3>".$item[0]["nm_dish"]."</h3>";
                       echo "<p>".$item[0]["dish_description"]."</p>";
                        echo "<h2>'Category: '</h2>";
                        echo "<p>".$item[0]["category_name"]."</p>";
                        echo "<h2>'Price:$ '</h2>";
                        echo "<p>".$item[0]["dish_price"]."</p>";
                    echo "</section>";
                
                    echo "<div>";
                        echo "<form action='confirmation.php' method='post'>";
                        
                            echo "<div class='dish'>";
                                echo "<h3>Cuantity</h3>";
                                    echo "<div class='form-items'>";
                                        echo "<div>";
                                            echo "<label for=''>'DISH INFO'</label>";
                                        echo "</div>";
                                        echo "<div>";
                                            echo "<input class='form-input' type='number' oninput='updateSubtotal(this)' step='1' value='0' min='0' max='50'>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "<input type='submit' class='button order-button' value='Order Now'>";
                                echo "<h3>Total: $<span></span></h3>";
                            echo "</div>";
                        
                        echo "</form>";
                    
                    echo "</div>";

                ?>
                
            </div>

        </section>
    </main>

    <?php 
        include "./parts/footer.php";
    ?>


    <script src="./js/main.js"></script>
    
</body>
</html>