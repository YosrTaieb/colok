<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php

    require('head.php');

?>
<title>Home</title>
</head>
<body>
    
<?php
    require('nav.php');
?>


<?php if(isset($_GET['msg'])){

    echo '<h1>'.$_GET['msg'] .'</h1>';
} ?>

<?php 

if(isset($_SESSION['nom'])){
    echo 'bonjour '.$_SESSION['nom']; 
}



?>





</body>
</html>