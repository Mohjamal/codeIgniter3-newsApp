<!DOCTYPE html>
<html lang="en">

<head>
    <title>List of Subjects</title>
</head>

<body>
    <h1>List of Subjects</h1>

    <?php
    // print_r($subjects);
    ?>

    <ul>
        <?php
        foreach ($subjects as $subject) {
        ?>
            <li><?php echo $subject ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>