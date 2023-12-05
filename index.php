<?php 
    require_once 'database.php';
     // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*");
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

<?php
include "./parts/header.php";      
?>


    
    <main>


        <div id="offer-titles" class=" dp-flx">
            <div>
                <h2 id="offer-title">Weekly Offerts</h2>
                <h3 id="offer-subtitle">Up to 50% discount on Fridays!</h3>
            </div>

            <div>
                <button id="left-of-button"><</button>
                <button id="right-of-button">></button>
            </div>

        </div>

        <section class="promotions">
            <div class="promotion">
                <div class="promotion-image">
                    <img src="./imgs/appetizer/small-appetizer-onion-soup.jpg" alt="Promoción 1">
                </div>

                <div class="promotion-info">
                    <h2>Onion Soup</h2>
                    <p>Descripción corta del platillo 1.</p>
                    <div class="promo-icons">
                        <div class="promo-icon">
                            <img class="icon-cart" src="./imgs/icons/carrito-de-compras.svg" alt="">
                        </div>
                        <div class="promo-icon">
                            <img class="icon-img" src="./imgs/icons/corazon-blanco.svg" alt="">
                        </div>
                        <div class="promo-icon">
                            <img class="eye" src="./imgs/icons/visible.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="discount">
                    <h2>25%</h2>
                </div>
            </div>

            <div class="promotion">
                <div class="promotion-image">
                    <img src="./imgs/meals/small-meal-duck-magret.jpg" alt="Promoción 1">
                </div>
                <div class="promotion-info">
                    <h2>Duck Magret</h2>
                    <p>Descripción corta del platillo 2.</p>
                    <div class="promo-icons">
                        <div class="promo-icon">
                            <img class="icon-cart" src="./imgs/icons/carrito-de-compras.svg" alt="">
                        </div>
                        <div class="promo-icon">
                            <img class="icon-img" src="./imgs/icons/corazon-blanco.svg" alt="">
                        </div>
                        <div class="promo-icon">
                            <img class="eye" src="./imgs/icons/visible.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="discount">
                    <h2>10%</h2>
                </div>
            </div>

            <div class="promotion">
                <div class="promotion-image">
                    <img src="./imgs/desserts/small-dessert-romanoff-strawberries.jpg" alt="Promoción 1">
                </div>
                <div class="promotion-info">
                    <h2>Romanoff Strawberries</h2>
                    <p>Descripción corta del platillo 3.</p>
                    <div class="promo-icons">
                        <div class="promo-icon">
                            <img class="icon-cart" src="./imgs/icons/carrito-de-compras.svg" alt="">
                        </div>
                        <div class="promo-icon">
                            <img class="icon-img" src="./imgs/icons/corazon-blanco.svg" alt="">
                        </div>
                        <div class="promo-icon">
                            <img class="eye" src="./imgs/icons/visible.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="discount">
                    <h2>40%</h2>
                </div>
            </div>
        </section>

        <section class="menu-section">
        
            <div class="menu-titles">
                <h2>Food Menu</h2>
                <h3>Most Popular Right Now</h3>
            </div>
            <div class="menu-buttons">
            <button class="button">See All</button>
            <button class="button">Drinks</button>
            <button class=" button">Appetizers</button>
            <button class="button">Meals</button>
            <button class="button">Desserts</button>
            </div>
        </section>
            <div class="menu-container">
           

           <?php
           foreach($items as $item){
            echo"<div class='dish-container'>"

            ."<div class='menu-image'>"
                ."<img class='menu-image'src='".$item["img_dish"]."' alt='".$item["nm_dish"]."'>"
               ."</div>"
               ."<div class='menu-info'>"

                ."<h2>".$item["nm_dish"]."</h2>"
                ."<div class='rating-container'>"
                    ."<img src='./imgs/icons/estrella-llena.svg' alt=''>"
                    ."<img src='./imgs/icons/estrella-llena.svg' alt=''>"
                    ."<img src='./imgs/icons/estrella-llena.svg' alt=''>"
                    ."<img src='./imgs/icons/estrella-llena.svg' alt=''>"
                    ."<img src='./imgs/icons/estrella.svg' alt=''>"
                ."</div>"
                ."<span class='price'>$".$item["price_dish"]."</span>"

                ."<a class='m-see-more button' href=details-dts-crepes.php?id=".$item["id_dish"]."'>See more</a>"
                ."<button class='m-cart button'></button>"
                ."<button class='m-heart button' ></button>"
                
               ."</div>"
            ."</div>";
        }
            
            ?>

            

            
        </div>

        <div class="catalog-titles">
            <h2>Our Catalog</h2>
            <h3>Check Out All We Have In Table!</h3>
        </div>

       
    <?php
    
    //CATALOGO PHP
    echo "<div class='catalog-container'>"
        ."<div class='catalog-item'>"
            ."<img class='catalog-image' src='./imgs/french-76.jpg' alt='Drinks Img'>"
            ."<button class='catalog-button button typ'>Drinks</button>"
        ."</div>"
        ."<div class='catalog-item'>"
            ."<img class='catalog-image' src='./imgs/duck.jpg' alt='Appetizers Img'>"
            ."<button class='catalog-button button typ'>Appetizers</button>"
        ."</div>"
        ."<div class='catalog-item'>"
            ."<img class='catalog-image' src='./imgs/lenguado-meuniere.jpg' alt='Meals Img'>"
            ."<button class='catalog-button button typ'>Meals</button>"
        ."</div>"
        ."<div class='catalog-item'>"
            ."<img class='catalog-image' src='./imgs/creme-brulee.jpg' alt='Desserts Img'>"
            ."<button class='catalog-button button typ'>Desserts</button>"
        ."</div>"
    ."</div>";
    ?>



    </main>

    <?php 
        include "./parts/footer.php";
   ?>

    <script src="./js/main.js"></script>

</body>


</html>