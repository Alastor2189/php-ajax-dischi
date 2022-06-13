<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require __DIR__ . "/database.php"; ?>

    <header>

    </header>
    <main>
        <div class="container">
            <?php foreach ($database as $item) {
            ?>
                <div class="cd-card">
                    <img src="<?php echo $item["poster"] ?>" alt="<?php echo $item["title"] ?>">
                    <div class="information-cd">
                        <h3> <?php echo $item["title"] ?></h3>
                        <p> <?php echo $item["author"] ?></p>
                        <small> <?php echo $item["year"] ?></small>
                    </div>
                </div>
            <?php   } ?>
        </div>
    </main>
</body>

</html>