<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<nav>
    <ul>
        <li><a href="/about">About Us</a></li>

        <li><a href="/contact">Contact Us</a></li>
    </ul>
</nav>

    <header>

        <ul>

        <?php foreach ($tasks as $task): ?>


                <?php if ($task->completed): ?>

                    <strike><li><?=$task->description;?></li></strike>

                <?php else: ?>

            <li><?=$task->description;?></li>

                <?php endif;?>

        <?php endforeach;?>



        <!-- <?php foreach ($person as $feature => $val): ?>

            <li><strong><?=$feature;?></strong>:&nbsp<?=$val?></li>

        <?php endforeach;?>


        <div>

            <?php foreach ($tasks as $task => $val): ?>

                <li><strong><?=ucwords($task);?></strong>:&nbsp<?=$val?></li>

            <?php endforeach;?>

        </div>


            <li>
                <strong>Status: </strong>

                <?php if ($tasks['completed']) {

    echo '<span>Done</span>';

} else {

    echo '<span>Pending</span>';
}

?>

            </li>

        </ul>

        <div>
        <?php
if (ageChecker(17)) {

    echo '<span>You are old enough</span>';

} else {

    echo '<span>commot for here</span>';
}
?>
        </div> -->

    </header>

</body>

</html>