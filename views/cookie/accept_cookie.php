<?php 
var_dump('prout');die();
setcookie('accept_cookie','user',time()+365*24*3600,'/',null,null,true);
if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    header('location: ' . $_SERVER['HTTP_REFERER']);
}else{
    header('location: /projetZero');
}