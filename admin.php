<?php require_once '../functions/connect.php';?>
<?php session_start();?>
<?php
$login=$_POST["login"];
$passsword=$_POST["password"];

$sql = $pdo->prepare("SELECT id,login  FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login' => $login ,'password'=>$passsword));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if($array["id"]>0){
      $_SESSION['login']=$array["login"];
      header('location:/ad.php');
}
else{
      header('location:/login.php');

}