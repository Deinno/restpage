<?php 
    require_once './database.php';

    if($_POST){

        //var_dump($_POST);

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
            "id_dishes"=>$_POST["id_dishes"]
        ]);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

    <?php 
        include "./parts/header.php";
    ?>

    <main>

        <section>
            <div id="offer-titles">
                <h2 id="offer-title">Order Details</h2>
                <h3 id="offer-subtitle">All the details about your current order</h3>
            </div>

            <div class="dishes-container">
                
            <?php 
                echo "<section class='dish'>";
                echo "<div>";
                    echo "<h3>All selected dishes</h3>";
                    echo "<table style='margin-top: 2rem; width: 95%;'>";
                        echo "<tr>";
                            echo "<td>Dish</td>";
                            echo "<td>Category</td>";
                            echo "<td>Cuantity</td>";
                            echo "<td>Total</td>";
                        echo "</tr>";
                    echo "</table>";
                echo "</div>";
                    echo "<div class='dishes-container'>";
                        echo "<div> <a class='button confir-btn' href='cart.php'>Confirm yout order</a> </div>";
                        echo "<div> <a class='button confir-btn' href='index.php'>Continue exploring other dishes</a> </div>";
                    echo "</div>";
                echo "</section>";
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