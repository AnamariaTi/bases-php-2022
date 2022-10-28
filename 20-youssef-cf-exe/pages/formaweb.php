<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formateurs WEB</title>
    <link rel="stylesheet" href="css/myCSS.css">
</head>
<body>
    <h1>Formateurs WEB</h1>
    
    <container>
        <h2>Liste des formateurs WEB</h2>
        <?php
        foreach(FORMATEURS_WEB AS $item):
        ?>
        <ul>
            <li><?=$item[0]?></li>
            <li><?=$item[1]?></li>
            <li><?=$item[2]?></li>
        </ul>
        <?php
        endforeach;
        ?>
    </container>
</body>
</html>