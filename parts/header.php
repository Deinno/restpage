
<header>
<nav>
    <div class='logo'>
        <img id='nav-logo' src='imgs/identificador-blanco.svg' alt='Logo'>
        <!--<h2 id='logo-text'>Cuisinette</h2>-->
    </div>
    <ul class='menu'>
        <li><a href='index.php'>Home</a></li>
        <li><a href='#'>About</a></li>
        <li><a href='#'>Sales</a></li>
        <li><a href='index-ctg-dts.php'>Categories</a></li>
        <li><a href='#'>Download</a></li>
        <?php 
        session_start();
        if(isset($_SESSION["isLoggedIn"])){
            echo "<li><a class='nav-list-link' href='./forms.php'>".$_SESSION["username"]."</a></li>";
            echo "<li><a class='nav-list-link' href='./log-out.php'>Log out</a></li>";
       
        }else{
            echo "<li><a class='nav-list-link' href='./forms.php'>Login</a></li>";
        }
        ?>
    </ul>
    <div class='icons'>
        <img id='shopping-cart' src='imgs/icons/anadir-a-la-cesta.svg' alt='Shopping Cart'>
      </div>
</nav>
</header>