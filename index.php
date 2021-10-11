<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, width=device-width">
    <title>Imagmager</title>
</head>
<body>
    <h1>Imagmager</h1>
    <?php
        $scan = scandir('./uploads');
        foreach ($scan as $file) {
            if(!is_dir($file)){
                echo '<h3>'.$tfile.'</h3>';
                echo '<img src="uploads/'.$file.'" style="width: 400px;"/><br/>';
            }
        }
        ?>
</body>
</html>