<?php
$title = 'pelanggan';
require 'functions.php';
$sql = "DELETE FROM member WHERE id_member =" . ($_GET['id']);
$exe = mysqli_query($conn,$sql);

    if($exe){
        $success ='true';
        $title = 'berhasil';
        $message = 'menghapus data';
        $type = 'success';
        header('location:pelanggan.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }  
?>