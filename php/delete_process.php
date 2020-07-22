<?php 
unlink('data/'.$_POST['id']);
header('Location: /php/index.php');
?>