<?php

    if(isset($_GET['id'])) {
        $query = $GLOBALS['pdo']->prepare("SELECT * FROM articles WHERE id=?");
        $query->execute([$_GET['id']]);
        $article = $query->fetch();
    } else {
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include '../../includes/templates/head.php'; ?>

<body>
    <!-- Header -->
    <?php include_once ('../../includes/templates/header.php'); ?>

    <!-- Main content -->
    <div class="container">
        <h2>Transaction n°<?= $_expense->id; ?></h2>
        <p>The .table-hover class enables a hover state on table rows:</p>
    </div>

    <!-- FOOTER -->
    <?php include_once ('../../includes/templates/footer.php'); ?>
</body>
</html>