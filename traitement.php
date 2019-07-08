<?php
    $to='fontaine.ken.pro@gmail.com';
    $subjet='Nouveau message du Portfolio';
    $message="Nom :". $_POST['nom']. " numero : ". $_POST['num'] . "email : ".$_POST['email']."                                                  Message : ".$_POST['message'];

mail($to, $subjet, $message, $header);


header("location : home.php");
?>
