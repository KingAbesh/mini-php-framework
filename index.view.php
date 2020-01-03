<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>
            <?php
            foreach ($names as $name) {
               echo "<li>$name</li>";
};
            
            ?>
            <?php foreach ($names as $name) : ?>

            <li><?= $name; ?></li>

            <?php endforeach; ?>
        </h1>
    </header>
</body>

</html>