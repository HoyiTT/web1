<?php
$conn=mysqli_connect('localhost','root','qkrwnstj91','opentutorials');

$sql="SELECT * FROM topic";
$result=mysqli_query($conn, $sql);
$list='';
while($row=mysqli_fetch_array($result)){
    //Defend XSS\
    $escaped_title=htmlspecialchars($row['title']);
    //<li><a href=\"index.php?id=19\">MySQL</a></li>
    $list=$list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}
$article=array(
    'title'=>'Welcome',
    'description'=>'Hello, Web'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$list?>
    </ol>
    <form action="process_create.php" method="POST">
    <p>
    <input type="text" name="title" placeholder="title">
    </p>
    <p>
    <textarea name="description" placerholder="dscription" ></textarea>
    </p>
    <p>
    <input type="submit"></p>
    </form>
</body>
</html>