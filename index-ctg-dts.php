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
    // Puedes agregar código PHP aquí para realizar operaciones en el servidor antes de que se genere el HTML
    // Por ejemplo, puedes obtener datos de la base de datos y almacenarlos en variables para su uso en HTML
    ?>

    <header class="hero-container-b">
        <nav class="nav-container">
            <div class="logo">
                <img id="nav-logo" src="imgs/identificador-blanco.svg" alt="Logo">
                <!--<h2 id="logo-text">Cuisinette</h2>-->
            </div>
            <!-- mobile nav btn -->
            <input class="mobile-check" type="checkbox">
            <label class="mobile-btn">
                <span></span>
            </label>
            <!-- mobile nav btn -->
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
        <h1 class="hero-title">Desserts of all kinds for all tastes</h1>
        <p class="hero-text">Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
             sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <div class="search-container">
            <input type="text" placeholder="Search..." id="search-input">
            <button type="button" class="search-button">Search</button>
        </div>
    </header>

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
        <div class="dish-container">
           <div class="menu-image">
            <img src="./imgs/desserts/normal-dessert-canneles.jpg" alt="">
           </div>
           <div class="menu-info">

            <h2>Canneles</h2>
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
             <img src="./imgs/desserts/normal-dessert-creme-brulee.jpg" alt="">
            </div>
            <div class="menu-info">
                
                <h2>Creme Brulee</h2>
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
             <img src="./imgs/desserts/normal-dessert-crepes.jpg" alt="">
            </div>
            <div class="menu-info">

                <h2>Crepes</h2>
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
             <img src="./imgs/desserts/normal-dessert-foie-gras.jpg" alt="">
            </div>
            <div class="menu-info">

                <h2>Foie Gras</h2>
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
             <img src="./imgs/desserts/normal-dessert-galette.jpg" alt="">
            </div>
            <div class="menu-info">

             <h2>Galette</h2>
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
              <img src="./imgs/desserts/normal-dessert-macarons-box.jpg" alt="">
             </div>
             <div class="menu-info">
                 
                 <h2>Macarons Box</h2>
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
              <img src="./imgs/desserts/normal-dessert-quiche-lorraine.jpg" alt="">
             </div>
             <div class="menu-info">

                 <h2>Quiche Lorraine</h2>
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
              <img src="./imgs/desserts/normal-dessert-romanoff-strawberries.jpg" alt="">
             </div>
             <div class="menu-info">

                 <h2>Romanoff Strawberries</h2>
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
                 <button class="m-heart button"></button>
              
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
              <img src="./imgs/relleno.jpg" alt="">
             </div>
             <div class="menu-info">

                 <h2>COMING SOON</h2>
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
              <img src="./imgs/relleno.jpg" alt="">
             </div>
             <div class="menu-info">

                 <h2>COMING SOON</h2>
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