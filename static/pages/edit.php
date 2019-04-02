<?php

    // Connect to database
    include '../../includes/database.php';

    if(isset($_GET['id'])) {
        $query = $GLOBALS['pdo']->prepare("SELECT * FROM expenses WHERE id=?");
        $query->execute([$_GET['id']]);
        $expenses = $query->fetch();
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
        <p>Edit your transaction here.</p>
    </div>

    <!-- FOOTER -->
    <?php include_once ('../../includes/templates/footer.php'); ?>
</body>
</html>