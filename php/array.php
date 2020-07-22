<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>

    <?php 
    $coworkers = array('js','pp','jj','rr');
    echo $coworkers[1].'<br>';
    echo $coworkers[2].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers,'faker');
    var_dump($coworkers);
    
    ?>
</body>
</html>