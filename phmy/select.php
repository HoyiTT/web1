<?php
$conn=mysqli_connect('localhost','root','qkrwnstj91','opentutorials');
// 1 row
$sql="SELECT * FROM topic WHERE id =5";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);;
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];

//all row
$sql="SELECT * FROM topic";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    echo '<h1>'.$row['title'].'</h1>';
    echo $row['description'];
}

?>