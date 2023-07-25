<?php require("helpers/db.php"); ?>
<?php
function createColor($connection)
{
    $code = mysqli_real_escape_string($connection, $_POST["code"]);
    $title = mysqli_real_escape_string($connection, $_POST["title"]);

    $sql = "INSERT INTO color (title,code) VALUES ('$title','$code')";
    return mysqli_query($connection, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("html-components/head.php") ?>
    <title>Add color | Colorfull</title>
    <link rel="stylesheet" href="./static/style.css">
</head>

<body>
    <?php
    require("html-components/header.php")
    ?>
    <section class="section">
        <div class="container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <?php $result = createColor($connection) ?>
                <?php if ($result) : ?>
                    <h3>add new color successfully</h3>
                    <p>
                        <a href="./">back</a>
                    </p>
                <?php else : ?>
                    <h3>Failed</h3>
                    <p>
                        <a href="new-color.php">Add new color</a>
                    </p>
                <?php endif; ?>
            <?php else : ?>
                <form method="post">
                    <p>
                        <label>color code</label>
                        <input type="color" name="code">
                    </p>
                    <p>
                        <label>color name</label>
                        <input type="text" name="title">
                    </p>
                    <p>
                        <button type="submit">save</button>
                    </p>

                </form>
            <?php endif; ?>

        </div>
    </section>
</body>

</html>

<?php mysqli_close($connection); ?>