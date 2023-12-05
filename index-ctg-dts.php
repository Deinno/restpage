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
    <title>Desserts Page</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
    
    include "./parts/header.php";
   ?>

   

    <section class="menu-section">
        
        <div class="menu-titles">
            <h2>Category</h2>
            <h3>All desserts available!</h3>
        </div>
        <div class="menu-buttons">
        <button class="button">Individual</button>
        <button class=" button">Couple</button>
        <button class="button">Familiar</button>
        </div>
    </section>

    <div class="menu-container">
       
   <?php  foreach($items as $item){
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
        }?>
          
         </div>

         
    





         <?php
          include "./parts/footer.php";
         ?>

    <script src="./js/main.js"></script>

</body>
</html>