<?php 
    include 'header.php';
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }
?>

<div class="container" id="container" style="background-color:#A96F44">
<div class="card text-center">
  <div class="card-header" style="background-color:red; color:white">
    <b>PENGELOLAAN JADWAL PERKULIAHAN</b>
  </div>
  <div class="card-body" style="background-color:#50D5B7">
    <h5 class="card-title"><b>UPLOAD FILE JADWAL PERKULIAHAN</b></h5>
    <p class="card-text"><i>FORMAT FILE WAJIB (.xls)</i></p>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">

                <form action="hasilUpload.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="fileToUpload"  id="fileToUpload">
                        <input class="btn btn-primary" type="submit" value="Upload File" name="submit"> 
                    </div>
                </form>
                
            </div>
        </div>
    </div>
  </div>
  <div class="card-footer text-muted" style="background-color:#A96F44">
  </div>
</div>
</div>
</body>
</html>

 
