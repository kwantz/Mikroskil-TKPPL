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
    function setUser($nama) 
    {
        $query = "INSERT INTO TKPPL.users (nama, terakhir_aktif) VALUES ('" . $nama . "', '1997-01-01 00:00:00')";

        return $this->openDB()->query($query);
    }

    function findUser($nama)
    {
        $nama = "'" . strtolower($nama) . "'";
        $query = "SELECT * FROM TKPPL.users WHERE nama=" . $nama;

        return $this->openDB()->query($query)->num_rows ;
    }

    function getRecentUser()
    {
        $query = "SELECT * FROM TKPPL.users ORDER BY terakhir_aktif DESC LIMIT 4";

        $i = 0;
        $result = $this->openDB()->query($query);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $arr[] = $row['nama'];
            }
        }
        return $arr;
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
        $query = "INSERT INTO TKPPL.foto (id_user, lokasi_foto) VALUES ('" . $idUser . "', '" . $lokasi . "'); ";
        $query2 = "UPDATE TKPPL.users SET terakhir_aktif='" . date("Y-m-d h:i:s") . "' WHERE id='" . $idUser . "'";

        $conn->query($query);
        $conn->query($query2);

        $conn->close();
    }

    function getFoto() 
    {
        $query = "SELECT * FROM TKPPL.users ORDER BY terakhir_aktif DESC";

        $i = 0;
        $result = $this->openDB()->query($query);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $arr[$i]['nama'] = $row['nama'];
                $arr[$i++]['id'] = $row['id'];
            }
        }
        $k = 0;
        for($j=0 ; $j<$i; $j++) {
            $query = "SELECT * FROM TKPPL.foto WHERE id_user='" . $arr[$j]['id'] . "'";
            
            $hasil = $this->openDB()->query($query);
            if($hasil->num_rows > 0) {
                while($row = $hasil->fetch_assoc()) {
                    $foto[$k]->id = $arr[$j]['id'];
                    $foto[$k]->nama = $arr[$j]['nama'];
                    $foto[$k++]->foto = $row['lokasi_foto'];
                }
            }
        }

        return $foto;
    }
}
?>