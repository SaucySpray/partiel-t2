<?php

    // Connect to database
    include_once 'includes/database.php';

    // Select all articles from table articles, and limit them to 9 so we can only display 3 lines of 3 articles.
    // $query = $GLOBALS['pdo']->query("SELECT * FROM articles LIMIT 9");

?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once('/includes/templates/head.php') ?>

<body>
    <!-- Header -->
    <?php include_once('/includes/templates/header.php') ?>

    <!-- Main content -->
    <div id="main">
        <h2>Partiel</h2>
    </div>

    <!-- FOOTER -->
    <?php include_once('/includes/templates/footer.php') ?>

    <!-- Scripts -->
    <script src="../js/index.js"></script>
</body>
</html>