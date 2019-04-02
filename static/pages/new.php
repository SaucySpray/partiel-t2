<?php

    // Connect to database
    include '../../includes/database.php';

    $query = $pdo->query(
            "INSERT INTO
                expenses (date, ammount, description)
            VALUES
                ('".$_POST["date"]."','".$_POST["ammount"]."','".$_POST["description"]."')");
    $new = $query->fetch();
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
        <h2>Vertical (basic) form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="value">Ammount:</label>
                <input type="text" class="form-control" id="ammount" placeholder="30" name="ammount">
            </div>
            <div class="form-group">
                <label for="pwd">Date:</label>
                <input type="text" class="form-control" id="date" placeholder="21/12/2012" name="date">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" placeholder="Tomatoes" name="description">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <!-- FOOTER -->
    <?php include_once ('../../includes/templates/footer.php'); ?>
</body>
</html>