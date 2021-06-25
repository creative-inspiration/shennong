<?php
require_once "connet.php";
require_once 'mysqlconfig.php';
$id=$_POST['uid'];
session_start();
$_SESSION["uid"]=$id;
$password=$_POST['password'];
$ma1=new DB();
   $link=$ma1->connect();
   $sql = "select * from tbl_ms where username='$id' and password='$password'";  
   $res = $ma1->CheckUser($link,$sql);
   if($res){
       
        echo "<script>alert('登录成功！');location='add.php';</script>";
   };
   if(!$res){
        echo "<script>alert('登录失败，账号或密码错误');location='index.php';</script>";
   };
?>