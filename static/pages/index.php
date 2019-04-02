<?php

    // Connect to database
    include '../../includes/database.php';

    // Select all articles from table articles, and limit them to 9 so we can only display 3 lines of 3 articles.
    $query = $GLOBALS['pdo']->query("SELECT * FROM expenses");
    $expenses = $query->fetchAll();

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
        <h2>Your transactions</h2>
        <p>See all your transactions here, edit or delete them, you can even create new ones!</p>            
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Ammount</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($expenses as $_expense): ?>
                <tr>
                    <td><?= $_expense->date; ?></td>
                    <td><?= $_expense->ammount; ?>€</td>
                    <td><?= $_expense->description; ?></td>
                    <td><a href="edit.php?id=<?= $_expense->id; ?>" class="edit btn-warning">edit</a></td>
                    <td><a href="delete.php?id=<?= $_expense->id; ?>" class="delete btn-danger">delete</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- FOOTER -->
    <?php include_once ('../../includes/templates/footer.php'); ?>
</body>
</html>