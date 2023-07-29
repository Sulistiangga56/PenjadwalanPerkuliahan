<?php 
    include 'header.php';

    // Menampung variabel yang diambil oleh method get
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }
?>

<div class="container" id="container" style="background: linear-gradient(#EAD6EE , #7DC387 , #A96F44 , #E3FF73)">
<br/>
<br/>
<h2 class="text-center mb-5">Jadwal Perkuliahan</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary" type="button" style="margin-bottom: 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Cari Berdasarkan</button>
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
                // Memanggil fungsi TampilTabel
                TampilTabel($id)
            ?> 
        </tbody>
     </table>
     <div class="pagination">
        <?php pagination($id); ?>   
    </div>
</div>
    <!-- Memanggil tampilan modal -->   
    <?php include 'modal.php'; ?>
</body>
</html>

 