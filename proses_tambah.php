<?php
    include("koneksi.php"); //memanggil php pada koneksi.php sehingga tidak perlu menulis ulang
    
    $npm = $_POST["npm"]; //mengumpulkan nilai
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $fakultas = $_POST["fakultas"];
    $agama = $_POST["agama"];
    $no_tlp = $_POST["no_tlp"];

    $query = mysqli_query($conn,"INSERT INTO mhs VALUES('$npm','$nama','$email','$alamat','$jurusan', '$fakultas','$agama','$no_tlp')");//mengirimkan perintah insert kedalam tabel
    echo "<script>
            alert('data berhasil ditambah!');
            document.location.href = 'index.php';
          </script>";
?>