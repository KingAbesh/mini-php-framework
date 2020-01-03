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

        <ul>

        <?php foreach ($names as $name) : ?>

            <li><?= $name; ?></li>

        <?php endforeach; ?>



        <?php foreach ($person as $feature => $val) : ?>

            <li><strong><?= $feature; ?></strong><?= $val ?></li>

        <?php endforeach; ?>


        <div>

            <?php foreach ($tasks as $task => $val) : ?>

                <li><strong><?= ucwords($task); ?></strong><?= $val ?></li>

            <?php endforeach; ?>

        </div>


            <li>
                <strong>Status: </strong>

                <?php if($tasks['completed']) {

                echo '<span>Done</span>';
                
                } else {

                    echo '<span>Pending</span>';
                }  

                ?>
            
            </li>

        </ul>

    </header>

</body>

</html>