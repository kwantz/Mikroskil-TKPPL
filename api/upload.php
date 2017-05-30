<?php

include('GlobalCtrl.php');

if(isset($_POST["submit"])) 
{
    session_start();
    
    $folder = "uploads/";
    $namaFile = $folder . basename($_FILES["uploadFoto"]["name"]);

    $global = new GlobalCtrl();
    $fileType = pathinfo($namaFile, PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["uploadFoto"]["tmp_name"]);

    if($check !== false) {
        if( $global->simpanGambar($_FILES["uploadFoto"]["tmp_name"], $namaFile) ) {
            $global->setFoto($_SESSION["namaUser"], $namaFile);
            $global->redirectToRoute('#2');
            exit();
        } else {
            // Gagal Upload
            $global->redirectToRoute('#1');
            exit();
        }
    } else {
        // File Bukan gambar
        $global->redirectToRoute('#3');
        exit();
    }
}
