<?php 
    include 'header.php'; 
    if(isset($_POST["id"])){
        $id = $_POST["id"];
    }else{
        $id = 0;
    }
?>


<div class="container" id="container" style="background: linear-gradient(#50D5B7 , #A96F44 , #AF6480 , #ED765E)">
<h2 class="text-center mb-5">Jadwal Perkuliahan</h2>
    <div class="d-flex justify-content-between">
        <h3>Hasil pencarian : <?php headerPencarianKelas($id) ?></h3>
        <a href="../jadwal.php"><button class="btn btn-danger" type="button" style="margin-bottom: 10px;">Hapus Pencarian</button></a>
    </div>
    <table class="table table-striped table-bordered" id="tb">
        <thead class="table-light">
            <tr>
                <th rowspan = '3'> Hari </th>
                <th colspan = '2'>Slot Waktu </th>
                <th rowspan = '2' colspan = '4' > <?php namaKelas($id); ?> </th> 
            </tr>
            <tr>
                <th rowspan = '2' colspan = '2'> Pagi </th>
            </tr>
                <th colspan> Mata kuliah </th>
                <th colspan> Dosen </th>
                <th colspan> Ruang</th>
                <th colspan> JJ</th>    
            <tr>
        </thead>
        <tbody>
            <?php
                TampilTabel($id)
            ?> 
        </tbody>
     </table>
</div>
</body>
</html>


