<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores molestiae delectus reprehenderit,
    
    ipsa inventore culpa vel corrupti voluptatum repudiandae, earum, nihil adipisci nobis dignissimos id quod recusandae repellendus saepe fugiat.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php 
    echo strlen($str);
    ?>

    <h2>nl2br</h2>
    <?php 
    echo nl2br($str);
    ?>
</body>
</html>