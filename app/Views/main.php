<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        Hi there this is clockwork
        <?php
             echo("<br>");
            foreach($results as $result){
                echo( $result->id);
                echo("<br>");
            }

        ?>
</body>
</html>