<html>

<head>
    <title>All Articles</title>
</head>

<body>
    <h1>All Articles</h1>

    <?php
    if (count($articles) > 0) {
    ?>

        <ul>
            <?php foreach ($articles as $article) {

                echo "<li>" . $article["title"] . "</li>";
            }
            ?>

        </ul>

    <?php
    } else {
        echo "No Records Found";
    }
    ?>
</body>

</html>