<?php 
    require_once './database.php';

    if($_GET){

        $item = $database->select("tb_dishes",[
            "[>]tb_amount"=>["id_amount" => "id_amount"],
            "[>]tb_categories"=>["id_category" => "id_category"]
        ],[
            "tb_dishes.id_dishes",
            "tb_dishes.dish_lname",
            "tb_dishes.dish_sname",
            "tb_dishes.dish_image",
            "tb_dishes.dish_description",
            "tb_dishes.dish_price",
            "tb_amount.id_amount",
            "tb_amount.amount_category",//si es individual, de pareja o familiar
            "tb_amount.amount_description",//explica la cantidad de porciones
            "tb_categories.id_category",
            "tb_categories.category_name",//bebida, entrada, comida o postre
            "tb_categories.category_description",
        ],[
            "id_dishes"=>$_GET["id"]
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
                            echo "<!--Agregar la funcion para que aparezca la imagen del platillo que se seleccione-->";
                            echo "<img class='dish-image' src='./imgs/".$item[0]["dish_image"]."' alt='".$item[0]["dish_lname"]"'>";
                        echo "</div>";
                        echo "<!--Agregar la funcion para que aparezca el nombre del platillo que se seleccione-->";
                        echo "<h3>".$item[0]["dish_lname"]."</h3>";
                        echo "<!--Agregar la funcion para que aparezca la descripcion, la categoria, el tipo y el precio del platillo que se seleccione-->";
                        echo "<p>".$item[0]["dish_description"]."</p>";
                        echo "<p>'Category: '</p>";
                        echo "<p>".$item[0]["category_name"]."</p>";
                        echo "<p>'Price: '</p>";
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

    <footer class="footer">

        <div class="footer-container">
            <div class="footer-logo">
                <img id="ft-logo" src="imgs/identificador-blanco.svg" alt="Logo">
                <h2 id="footer-logo-text">Cuisinette</h2>
            </div>
            <div class="footer-content">
                <div class="footer-info">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br>
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
            </div>

            <div class="footer-links">
                <div>
                    <h3>Short Link</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                    </ul>
                </div>

                <div>
                    <h3>About Us</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                    </ul>
                </div>

                <div>
                    <h3>More Info</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                        <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
            </div>

            <section class="download-app">
                <h3>Download our App</h3>
                <div class="cta-app-container">
                    <a href="#">
                        <img src="./imgs/app-store.png" alt="Our app from App Store">
                    </a>
                    <a href="#">
                        <img src="./imgs/google-play.png" alt="Our app from App Store">
                    </a>
                </div>
            </section>

            
            <p class="footer-legal">© 2023. All rights reserved.</p>
        </div>

    </footer>


    <script src="./js/main.js"></script>
    
</body>
</html>