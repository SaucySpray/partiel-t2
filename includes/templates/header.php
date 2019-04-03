<?php
    include_once 'user.php';
    if(isset($_GET['logout']) && $_GET['logout'] == true) {
        $exit = logout();
    }
?>
<header class="container">
    <h1 class="header-logo" onclick="window.location='/Partiel/'">€</h1>
    
    <nav class="header-nav">
        <form action="../includes/search.php" method="get" class="search">
            <input type="text" name="search" class="search-input">
            <input type="submit" class="search-btn" value="">
        </form>
    </nav>

</header>