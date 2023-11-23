<?php
$title = 'pengguna';
require 'functions.php';
$sql = "DELETE FROM user WHERE id_user =" . ($_GET['id']);
$exe = mysqli_query($conn,$sql);

    if($exe){
        $success ='true';
        $title = 'berhasil';
        $message = 'menghapus data';
        $type = 'success';
        header('location:pengguna.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }  
?>