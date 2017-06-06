<?php

include('parameter.php');

class GlobalCtrl 
{
/// Semua Method Global
    function getDomainUrl()
    {
        return $_SERVER['SERVER_NAME'];
    }

    function redirectToRoute($page, $namaRoute = "homepage") 
    {
        if($namaRoute == "homepage")
            return header("Location: http://" . $this->getDomainUrl() . $page);
        else
            return header("Location: http://" . $this->getDomainUrl() . $namaRoute . $page );
    }

    function simpanGambar($tmpName, $namaFile)
    {
        return move_uploaded_file($tmpName, $namaFile);
    }

/// Method Koneksi Database
    function openDB() 
    {
        $parameter = new parameter();
        return new mysqli($parameter->servername, $parameter->username, $parameter->password);
    }

    function closeDB() 
    {
        $this->connection->close();
    }

/// Method Untuk Table Users
    function setUser($nama, $tgl) 
    {
        $query = "INSERT INTO TKPPL.users (nama, terakhir_aktif) VALUES ('" . $nama . "', '" . $tgl . "')";

        return $this->openDB()->query($query);
    }

    function findUser($nama)
    {
        $nama = "'" . strtolower($nama) . "'";
        $query = "SELECT * FROM TKPPL.users WHERE nama=" . $nama;

        return $this->openDB()->query($query)->num_rows ;
    }

/// Method Untuk Table Foto
    function setFoto($nama, $lokasi)
    {
        $idUser = null;
        $nama = strtolower($nama);

        $conn = $this->openDB();
        $query = "SELECT (id) FROM TKPPL.users WHERE nama='" . $nama . "'";

        $result = $conn->query($query);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $idUser = $row['id'];
            }
        }
        $query = "INSERT INTO TKPPL.foto (id_user, lokasi_foto) VALUES ('" . $idUser . "', '" . $lokasi . "')";
        
        $conn->query($query);

        $conn->close();
    }

}
?>