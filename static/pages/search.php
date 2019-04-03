<?php

    include_once '../includes/database.php';

    function search($_searchq) {
        $_searchq = preg_replace("#[^0-9a-z]#i","",$_searchq);

        $query = $GLOBALS['pdo']->query("SELECT * FROM expenses WHERE description LIKE '%$_searchq%'");

        $result = $query->fetchAll();

        if(!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }

    if(isset($_GET['search'])) {
        $result = search($_GET['search']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

    <!-- Header -->
    <?php include_once('../includes/header.php') ?>

    <!-- MAIN -->
    <div class="container" style="min-height: 100vh;">
        <?php if(!empty($result)) {
            foreach($result as $_expense): ?>
                <div class="col-md-4">
                    <a href="article.php?id=<?= $_expense->id; ?>" class="container article article-1">
                        <div class="row-fluid article-vignette">
                            <h2><?= $_expense->ammount; ?></h2>
                            <p><?= $_expense->date; ?></p>
                        </div>
                        <div class="row-fluid">
                            <p class="article-text"><?= substr($_expense->description, 0, 120).'...'; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach;
        } else { ?>
            <h3>Sorry your request didn't match any of my articles :'( </h3>
        <?php } ?>
    </div>

    <!-- FOOTER -->
    <?php include_once('../includes/footer.php') ?>

    <!-- Script -->
    <script src="./js/index.js"></script>
</html>