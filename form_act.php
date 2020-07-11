<?php 
include 'config.php';


  $email=$_POST['email'];
  $regno=$_POST['noreg'];
  $nama=$_POST['nama'];
  $tmpt=$_POST['tmpt'];
  $tgl=$_POST['tgl'];
  $hobby=$_POST['hobby'];
  $asal=$_POST['asal'];
  $phonenumber=$_POST['nohp'];
  $idline=$_POST['id_line'];



  // Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query1 = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";
      $sql = mysqli_query($connect, $query); 

     		 $query = mysqli_query($link,"insert into maba2020 values('','".$email."','".$regno."','".$nama."','".$tmpt."','".$tgl."','".$hobby."','".$asal."','".$phonenumber."','".$idline."','".$nama_file."', '".$ukuran_file."', '".$tipe_file."')");
 				// if($query){
				//  header("location:index.php");
				//  }

      // Eksekusi/ Jalankan query dari variabel $query
      
      if($query){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: index.php?pesan=sukses"); // Redirectke halaman index.php
      }else{  
        // Jika Gagal, Lakukan :
        header("location: index.php?pesan=gagalinput");
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      

      header("location: index.php?pesan=gagalupload");
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
  
    header("location: index.php?pesan=ukuran");
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  header("location: index.php?pesan=type");
}

 
 ?>
 
 
 