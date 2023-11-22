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
    // Puedes agregar código PHP aquí para realizar operaciones en el servidor antes de que se genere el HTML
    // Por ejemplo, puedes obtener datos de la base de datos y almacenarlos en variables para su uso en HTML
    $pageTitle = "Main Page";
    $logoSrc = "imgs/identificador-blanco.svg";
    ?>


    <header class="hero-container-a">
        <nav class="nav-container">
            <div class="logo">
                <img id="nav-logo" src="<?php echo $logoSrc; ?>" alt="Logo">
                <!--<h2 id="logo-text">Cuisinette</h2>-->
            </div>
                <input class="mobile-check" type="checkbox">
                <label class="mobile-btn">
                    <span></span>
                </label>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Sales</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Download</a></li>
            </ul>
            <div class="icons">
                <img id="shopping-cart" src="imgs/icons/anadir-a-la-cesta.svg" alt="Shopping Cart">
                <img id="user-menu" src="imgs/icons/usuario.svg" alt="User Menu">
            </div>
        </nav>
        <h1 class="hero-title">Delicious food with a french fragrance</h1>
        <p class="hero-text">We invite you to embark on an unforgettable culinary journey to the heart of France.
            Our passion for authentic French cuisine is reflected in every dish we create.</p>
        <div class="search-container">
            <input type="text" placeholder="Search..." id="search-input">
            <button type="button" class="search-button">Search</button>
        </div>
    </header>

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
            <div class="dish-container">
               <div class="menu-image">
                <img src="./imgs/drinks/normal-drink-coffee.jpg" alt="">
               </div>
               <div class="menu-info">

                <h2>Coffee</h2>
                <div class="rating-container">
                    <img src="./imgs/icons/estrella-llena.svg" alt="">
                    <img src="./imgs/icons/estrella-llena.svg" alt="">
                    <img src="./imgs/icons/estrella-llena.svg" alt="">
                    <img src="./imgs/icons/estrella-llena.svg" alt="">
                    <img src="./imgs/icons/estrella.svg" alt="">
                </div>
                <h3 class="price">$00.00</h3>

                <button class="m-see-more button">See more</button>
                <button class="m-cart button"></button>
                <button class="m-heart button" ></button>
                
               </div>
            </div>

            <div class="dish-container">
                <div class="menu-image">
                 <img src="./imgs/drinks/normal-drink-french-connection.jpg" alt="">
                </div>
                <div class="menu-info">
                    
                    <h2>French Connection</h2>
                    <div class="rating-container">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella.svg" alt="">
                    </div>
                    <h3 class="price">$00.00</h3>
    
                    <button class="m-see-more button">See more</button>
                    <button class="m-cart button"></button>
                    <button class="m-heart button" ></button>
                 
                </div>
             </div>

             <div class="dish-container">
                <div class="menu-image">
                 <img src="./imgs/appetizer/normal-appetizer-bullabesa-soup.jpg" alt="">
                </div>
                <div class="menu-info">

                    <h2>Bullabesa Soup</h2>
                    <div class="rating-container">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella.svg" alt="">
                    </div>
                    <h3 class="price">$00.00</h3>
    
                    <button class="m-see-more button">See more</button>
                    <button class="m-cart button"></button>
                    <button class="m-heart button" ></button>
                 
                </div>
             </div>

             <div class="dish-container">
                <div class="menu-image">
                 <img src="./imgs/appetizer/normal-appetizer-dubarry-cream.jpg" alt="">
                </div>
                <div class="menu-info">

                    <h2>Dubarry Cream</h2>
                    <div class="rating-container">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella-llena.svg" alt="">
                        <img src="./imgs/icons/estrella.svg" alt="">
                    </div>
                    <h3 class="price">$00.00</h3>
    
                    <button class="m-see-more button">See more</button>
                    <button class="m-cart button"></button>
                    <button class="m-heart button" ></button>
                 
                </div>
             </div>


             <div class="dish-container">
                <div class="menu-image">
                 <img src="./imgs/meals/normal-meal-steak-frites.jpg" alt="">
                </div>
                <div class="menu-info">
 
                 <h2>Steak Frites</h2>
                 <div class="rating-container">
                     <img src="./imgs/icons/estrella-llena.svg" alt="">
                     <img src="./imgs/icons/estrella-llena.svg" alt="">
                     <img src="./imgs/icons/estrella-llena.svg" alt="">
                     <img src="./imgs/icons/estrella-llena.svg" alt="">
                     <img src="./imgs/icons/estrella.svg" alt="">
                 </div>
                 <h3 class="price">$00.00</h3>
 
                 <button class="m-see-more button">See more</button>
                 <button class="m-cart button"></button>
                 <button class="m-heart button" ></button>
                 
                </div>
             </div>
 
             <div class="dish-container">
                 <div class="menu-image">
                  <img src="./imgs/meals/normal-meal-merluza.jpg" alt="">
                 </div>
                 <div class="menu-info">
                     
                     <h2>Merluza</h2>
                     <div class="rating-container">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella.svg" alt="">
                     </div>
                     <h3 class="price">$00.00</h3>
     
                     <button class="m-see-more button">See more</button>
                     <button class="m-cart button"></button>
                     <button class="m-heart button" ></button>
                  
                 </div>
              </div>
 
              <div class="dish-container">
                 <div class="menu-image">
                  <img src="./imgs/desserts/normal-dessert-tarta-raspberry.jpg" alt="">
                 </div>
                 <div class="menu-info">
 
                     <h2>Tarta Raspberry</h2>
                     <div class="rating-container">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella.svg" alt="">
                     </div>
                     <h3 class="price">$00.00</h3>
     
                     <button class="m-see-more button">See more</button>
                     <button class="m-cart button"></button>
                     <button class="m-heart button" ></button>
                  
                 </div>
              </div>
 
              <div class="dish-container">
                 <div class="menu-image">
                  <img src="./imgs/desserts/normal-dessert-souffle.jpg" alt="">
                 </div>
                 <div class="menu-info">
 
                     <h2>Souffle</h2>
                     <div class="rating-container">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella-llena.svg" alt="">
                         <img src="./imgs/icons/estrella.svg" alt="">
                     </div>
                     <h3 class="price">$00.00</h3>
     
                     <button class="m-see-more button">See more</button>
                     <button class="m-cart button"></button>
                     <button class="m-heart button" ></button>
                  
                 </div>
              </div>
        </div>

        <div class="catalog-titles">
            <h2>Our Catalog</h2>
            <h3>Check Out All We Have In Table!</h3>
        </div>

        <!--<div class="catalog-buttons-container">

            
            <div>
            <img id="background-img-drinks" src="./imgs/french-76.jpg" alt="Drinks Img">
            <img id="background-img-appetizers" src="./imgs/duck.jpg" alt="Appetizers Img">
            <img id="background-img-meals" src="./imgs/lenguado-meuniere.jpg" alt="Meals Img">
            <img id="background-img-desserts" src="./imgs/creme-brulee.jpg" alt="Desserts Img">
            </div>

            <div class="ctg-button-drinks button">
                <h2>Drinks</h2>
            </div>
            <div class="ctg-button-appetizers button">
                <h2>Appetizers</h2>
            </div>
            <div class="ctg-button-meals button">
                <h2>Meals</h2>
            </div>
            <div class="ctg-button-desserts button">
                <h2>Desserts</h2>
            </div>
            
        </div>
    -->

    <div class="catalog-container">
        <div class="catalog-item">
            <img class="catalog-image" src="./imgs/french-76.jpg" alt="Drinks Img">
            <button class="catalog-button button typ ">Drinks</button>
        </div>
        <div class="catalog-item">
            <img class="catalog-image" src="./imgs/duck.jpg" alt="Appetizers Img">
            <button class="catalog-button button typ ">Appetizers</button>
        </div>
        <div class="catalog-item">
            <img class="catalog-image" src="./imgs/lenguado-meuniere.jpg" alt="Meals Img">
            <button class="catalog-button button typ">Meals</button>
        </div>
        <div class="catalog-item">
            <img class="catalog-image" src="./imgs/creme-brulee.jpg" alt="Desserts Img">
            <button class="catalog-button button typ ">Desserts</button>
        </div>
    </div>



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