<?php

include('GlobalCtrl.php');

if(isset($_POST["submit"])) 
{
    session_start();
    
    $folder = "uploads/";
    $namaFile = $folder . basename($_FILES["fileToUpload"]["name"]);

    $global = new GlobalCtrl();
    $fileType = pathinfo($namaFile, PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        if( $global->simpanGambar($_FILES["fileToUpload"]["tmp_name"], $namaFile) ) {
            $global->setFoto($_SESSION["namaUser"], $namaFile);
            $global->redirectToRoute('#2', "/story.html");
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
