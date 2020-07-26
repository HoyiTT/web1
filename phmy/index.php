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
$update_link='';
$delete_link='';
if (isset($_GET['id'])){
    $filtered_id=mysqli_real_escape_string($conn,$_GET['id']);
    $sql="SELECT * FROM topic WHERE id ={$filtered_id}";
    $result =mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $article['title']=htmlspecialchars($row['title']);
    $article['description']=htmlspecialchars($row['description']);

    $update_link='<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link='
    <form action="process_delete.php" method="post">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
    </form>
    ';
}
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
    <a href="create.php">create</a>
    <?=$update_link?>
    <?=$delete_link?>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
</body>
</html>