<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
</head>

<body>
<?php
// koneksi database
include '../database/koneksi.php';

$id = $_GET['id'];
$kelas = $_GET['kelas'];

$query = mysqli_query($koneksi,"delete from data_kelas where id='$id'");

if ($query){
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";
  echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js'></script>";

  echo"<script>
    swal({ title: 'Selamat',
       text: 'Data Berhasil Dihapus',
       showConfirmButton: false,
       timer: 500,
       type: 'success'}).then(okay => {
         if (okay) {
            window.location.href = '../dsekolah7.php';
        }
      });
    </script>";
}

?>
</body>

</html>