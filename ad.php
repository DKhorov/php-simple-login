
<?php  session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>


</head>

<body >

<?php if(!empty($_SESSION["login"])):?>
<?php echo "  Welcome to admin panel-  Username:  ".$_SESSION['login'];?>
<a  class="text-light" style="width: 150px;" href="/off.php"><i style="font-size: 13px;">Выйти с системы</i></a>


</body>

</html>

<?php else:
echo "<h1>What?</h1>";
?>
<?php endif ?>