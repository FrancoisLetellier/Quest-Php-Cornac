<?php include "inc/spectacle.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Horaires spectacles</title>

</head>

<body>

<header>
    <?php include "inc/header.php"; ?>
</header>


    <div class = "container">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Horaire</th>
                    <th>Spectacle</th>
                    <th>Artiste</th>
                    <th>Affiche</th>
                </tr>
             </thead>

            <tbody>

            <?php

            foreach ($spectacle as $key => $spectacles) {
                echo "<tr>";
                foreach ($spectacles as $content) {
                    echo "<td>" . "$content" . "</td>";
                }
                echo "<tr/>";

            }

            ?>

            </tbody>
        </table>

    </div>
    <br>

    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>

</body>


</html>