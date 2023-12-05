<?php
    require_once './database.php';
    $message = "";

    if($_POST){

        if(isset($_POST["login"])){

            $user = $database->select("tb_users","*",[
                "usr"=> $_POST["username"]
            ]);

            if(count($user) > 0){
                //validate password
                if(password_verify($_POST["password"], $user[0]["pwd"])){
                    session_start();
                    $_SESSION["isLoggedIn"] = true;
                    $_SESSION["fullname"] = $user[0]["fullname"];
                    header("location: home.php");
                }else{
                    $message = "wrong username or password";
                }
            }else{
                $message = "wrong username or password";
            }

            //validate if user already logged in
            
            //if(isset($_SESSION["isLoggedIn"])){
                //header("location: book.php?id=".$_POST["login"]);
            //}else{
                //validate login
                //echo "validate login: ".$_POST["login"];
            //}
        }

        if(isset($_POST["register"])){
            //validate if user already registered
            $validateUsername = $database->select("tb_users","*",[
                "usr"=>$_POST["username"]
            ]);

            if(count($validateUsername) > 0){
                $message = "This username is already registered";
            }else{

                $pass = password_hash($_POST["password"], PASSWORD_DEFAULT, ['cost' => 12]);

                $database->insert("tb_users",[
                    "fullname"=> $_POST["fullname"],
                    "usr"=> $_POST["username"],
                    "pwd"=> $pass,
                    "email"=> $_POST["email"]
                ]);

                //header("location: book.php?id=".$_POST["register"]);
            }
        }
    }
?>
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

                    <form method="post" action="forms.php">
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
                        <p><?php echo $message; ?></p>
                        <input type="hidden" name="login" value="1">

                    </form>
                </section>

                <section class="signin-section">
                    <h3>Sign In</h3>
                    <p>Complete the registration process to enjoy our meals.</p>

                    <form method="post" action="forms.php">
                        <div>
                            <div>
                                <label for='fullname'>Full Name</label>
                            </div>
                            <div>
                                <input id='fullname' type='text' name='fullname'>
                            </div>
                        </div>
                        
                        <div>
                            <div>
                                <label for='email'>Email Address</label>
                            </div>
                            <div>
                                <input type='text' name='email'>
                            </div>
                        </div>
                        
                        <div>
                            <div>
                                <label for="usr">Username</label>
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
                        <p><?php echo $message; ?></p>
                        <input type="hidden" name="register" value="1">

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