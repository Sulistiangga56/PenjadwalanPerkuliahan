<?php
// Tempat file disimpan
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Ukuran File
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "   <script>
                alert('File tidak boleh lebih dari 10MB');
                document.location.href = 'dashboard.php';
            </script>
            ";
  $uploadOk = 0;
}


//Format File
if($fileFileType != "xls" && $fileFileType != "xlsm" && $fileFileType != "xlsx" && $fileFileType != "xlsb"){
    echo "   <script>
                alert('File yang diupload Wajib Format .xls/xlsm/xlsx/xlsb');
                document.location.href = 'dashboard.php';
            </script>
            ";
  $uploadOk = 0;
}


// Penguploadan hasil file
if ($uploadOk == 0) {
  echo "Maaf, File gagal terupload.";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $nameF = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])) ;
    echo "   <script>
                alert('File! dokumen $nameF berhasil di upload');
                document.location.href = 'dashboard.php';
            </script>
            ";
  } else {
    echo "Maaf, Terjadi kesalahan saat upload file.";
  }
}
?>