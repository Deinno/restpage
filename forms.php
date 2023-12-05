<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>

    <link rel="stylesheet" href="./css/main.css">
</head>

    <?php 
        include "./parts/header.php";
    ?>

<body>

    <main>
        <section>
            <div id="offer-titles" class=" dp-flx">
                <div>
                    <h2 id="offer-title">Order Online</h2>
                <h3 id="offer-subtitle">Sign in or log in to continue navigating our page!</h3>
                </div>
                
            </div>
            
           
            <div>
                <section class="login-section">
                    <h3 >Log In</h3>
                    <p>Enter your registered username and password in the designated fields.</p>

                    <form method="post" action="forms.html">
                        <div>
                            <div>
                                <label class="login-titles" for="username">Username</label>
                            </div>
                            <div>
                                <input type="text" name="username">
                            </div>
                        </div>

                        <div>
                            <div>
                                <label for="password">Password</label>
                            </div>
                            <div>
                                <input type="text" name="password">
                            </div>
                        </div>

                        <div>
                            <div>
                                <input class="button" type="submit" value="LOG IN">
                            </div>
                        </div>

                    </form>
                </section>

                <section class="signin-section">
                    <h3>Sign In</h3>
                    <p>Complete the registration process to enjoy our meals.</p>

                    <form method="post" action="forms.html">
                        <div>
                            <div>
                                <label for="fname">Full Name</label>
                            </div>
                            <div>
                                <input type="text" name="fname">
                            </div>
                        </div>
                        
                        <div>
                            <div>
                                <label for="email">Email Address</label>
                            </div>
                            <div>
                                <input type="text" name="email">
                            </div>
                        </div>
                        
                        <div>
                            <div>
                                <label for="username">Username</label>
                            </div>
                            <div>
                                <input type="text" name="username">
                            </div>
                        </div>

                        <div>
                            <div>
                                <label for="password">Password</label>
                            </div>
                            <div>
                                <input type="text" name="password">
                            </div>
                        </div>

                        <div>
                            <div>
                                <input class="button" type="submit" value="SIGN IN">
                            </div>
                        </div>

                    </form>
                </section>
            
            </div>
       
        </section>
    </main>

    <?php 
        include "./parts/footer.php";
    ?>


    <script src="./js/main.js"></script>
    
</body>
</html>