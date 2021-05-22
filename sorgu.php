<?php
if(isset($_POST['kullaniciadi'])&&isset($_POST['parola']))
{
    $username=$_POST['kullaniciadi'];
    $password=$_POST['parola'];
    if(empty($username)||empty($password))
    {
        echo 'Lütfen boş bırakmayın!';
        header("index.php");
    }
    else
    {
        echo 'Hoşgeldiniz '.$username;
        include("anasayfa.html");
    }
}
else
{
    echo 'Lütfen formu kullanın!';
}
?>