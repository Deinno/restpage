<?php
    require_once './database.php';

     $link = "";
     $url_params = "";
     $lang = "";
    
    
    if($_GET){
       
        if(isset($_GET["lang"]) && $_GET["lang"] == "fr"){
        $item = $database->select("tb_dishes",[
            "[>]tb_categoryes"=>["id_category" => "id_category"],
            "[>]tb_person_qty"=>["id_qty" => "id_qty"]
        ],[
            "tb_dishes.id_dish",
            "tb_dishes.nm_dish_fr",
            "tb_dishes.img_dish",
            "tb_dishes.description_dish_fr",
            "tb_dishes.price_dish",
            "tb_categoryes.nm_category",
            "tb_person_qty.nm_person_qty",
            "tb_camping_categories.camping_category_description",
        ],[
            "id_dish"=>$_GET["id"]
        ]);
        $item[0] ["nm_dish"] = $item[0]["nm_dish_fr"];
        $item[0] ["description_dish"] = $item[0]["description_dish_fr"];

        $lang = "EN";
        $url_params = "id=".$item[0]["id_dish"];
    }else{
        $item = $database->select("tb_dishes",[
        "[>]tb_categoryes"=>["id_category" => "id_category"],
        "[>]tb_person_qty"=>["id_qty" => "id_qty"]
    ],[
        "tb_dishes.id_dish",
        "tb_dishes.nm_dish",
        "tb_dishes.img_dish",
        "tb_dishes.description_dish",
        "tb_dishes.price_dish",
        "tb_categoryes.nm_category",
        "tb_person_qty.nm_person_qty",
       
    ],[
        "id_dish"=>$_GET["id"]

    ]);
    $lang = "fr";
    $url_params = "id=".$item[0]["id_dish"]."&lang=fr";
}

        if(isset($_SESSION["isLoggedIn"])){
           $link = "order.php?id=".$item[0]["id_dish"].""; 
        }else{
            $link = "./forms.php";

        }

        

       // Reference: https://medoo.in/api/select
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<?php
include "./parts/header.php";      
?>
     <?php
           echo "<div class='main-container'>"
                ."<div class='img-container'>"
                ."<img class='main-image' src='".$item[0]["img_dish"]."' alt='".$item[0]["nm_dish"]."'>"
                ."</div>"
                
                ."<div class='popular-container'>"
                ."<div class='popular-title-zone'>"
                ."<h2 id='main-title'>Most Popular</h2>"
                ."</div>"

                ."<div class='popular-images-container'>"
                ."<div class='recom-dish-a'>"
                ." <img class='recom-img' src='./imgs/relleno.jpg' alt='Coffee'>"
                ." <p class='recom-text'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>"
                ."</div>"
                ."</div>"
                ."</div>"


                ."</div>";
             


            echo"<section class='second-container'>"

                ."<div class='dish-info-container'>"
                ."<h2 class='title-style'></h2>"

                ."<span class='desc-style'>$".$item[0]["price_dish"]."</span>"
                ."<a class='m-cart button' href='".$link."'></a>"

                ."<p class='desc-style'>.</p>"

                
                ."</div>"

                

                

                ."</section>";
    


            ?>


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
                        <section>
                            <h3>Short Link</h3>
                            <ul class="nav-bottom-list">
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                            </ul>
                        </section>
        
                        <section>
                            <h3>About Us</h3>
                            <ul class="nav-bottom-list">
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                            </ul>
                        </section>
        
                        <section>
                            <h3>More Info</h3>
                            <ul class="nav-bottom-list">
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                                <li><a class="nav-bottom-link" href="#">Lorem ipsum</a></li>
                            </ul>
                        </section>
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