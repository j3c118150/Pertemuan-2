<?php 
 
    include 'koneksi.php';
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $olahraga = implode(",",$_POST['olahraga']);
    $foto = $_POST['foto'];

    mysqli_query($kon,"UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jk', agama='$agama', olahraga_fav='$olahraga', foto='$foto' WHERE id='$id'") or die(mysqli_error(''));

    header("location:tampil_data.php");
    ?>  