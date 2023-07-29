<?php
    function jadwal($kelas){

        // Data dengan array static
        $ti1A = array(
                0 => array("Nama" => "Pengantar Multimedia", "Dosen" => "Ella", "Ruang" => "AA302", "JJ" => 6, "Hari" => "Senin", "smulai" => 1,
                           "Nama1" => "Pendidikan agama dalam tik", "Dosen1" => "Adi", "Ruang1" => "AA302", "JJ1" => 3, "Hari1" => "Senin", "smulai1" => 7),
            
                1 => array("Nama" => "Pendidikan Kewarganegaraan", "Dosen" => "Ayres", "Ruang" => "GSG202", "JJ" => 3, "Hari" => "Selasa", "smulai" => 1,
                           "Nama1" => "Bahasa Inggris TIK 1", "Dosen1" => "Dewi K", "Ruang1" => "GSG202", "JJ1" => 4, "Hari1" => "Selasa", "smulai1" => 4),

                2 => array("Nama" => "pengantar teknologi informasi dan komunikasi", "Dosen" => "Mera", "Ruang" => "GSG207", "JJ" => 4, "Hari" => "Rabu", "smulai" => 1,
                           "Nama1" => "matematika diskrit", "Dosen1" => "Agus", "Ruang1" => "GSG207", "JJ1" => 4, "Hari1" => "Rabu", "smulai1" => 5),

                3 => array("Nama" => "Algoritma & Pemrograman", "Dosen" => "dewiyanti", "Ruang" => "AA301", "JJ" => 6, "Hari" => "Kamis", "smulai" => 1,
                           "Nama1" => "sistem operasi ", "Dosen1" => "chandra", "Ruang1" => "GSG2011", "JJ1" => 5, "Hari1" => "Kamis", "smulai1" => 7),
                
                4 => array("smulai" => 0, "JJ" => 1, "smulai1" => 0, "JJ1" => 1)
        );
        $ti1B = array(
                0 =>    array("Nama" => "Pendidikan agama dalam tik", "Dosen" => "Weldy", "Ruang" => "GSG10", "JJ" => 3, "Hari" => "Senin", "smulai" => 4, "smulai1" => 0, "JJ1" => 1),

                1 =>    array("Nama" => "Pengantar Multimedia", "Dosen" => "Ella", "Ruang" => "AA003", "JJ" => 6, "Hari" => "Selasa", "smulai" => 1,
                              "Nama1" => "Pendidikan Kewarganegaraan", "Dosen1" => "Ayres", "Ruang1" => "AA205", "JJ1" => 3, "Hari1" => "Selasa", "smulai1" => 7),

                2 =>    array("Nama" => "matematika diskrit", "Dosen" => "Agus", "Ruang" => "GSG206", "JJ" => 4, "Hari" => "Rabu", "smulai" => 1,
                              "Nama1" => "pengantar teknologi informasi dan komunikasi", "Dosen1" => "Mera", "Ruang1" => "GSG206", "JJ1" => 4, "Hari1" => "Rabu", "smulai1" => 5),

                3 =>    array("Nama" => "Algoritma & Pemrograman", "Dosen" => "anggi", "Ruang" => "AA302", "JJ" => 6, "Hari" => "Kamis","smulai" => 1,
                              "Nama1" => "sistem operasi ", "Dosen1" => "rasyid", "Ruang1" => "GSG206", "JJ1" => 5, "Hari1" => "Kamis", "smulai1" => 7),
                    
                4 =>    array("Nama" => "Bahasa Inggris TIK 1", "Dosen" => "Dewi K", "Ruang" => "AA304", "JJ" => 4, "Hari" => "Jumat", "smulai" => 1, "smulai1" => 0, "JJ1" => 1)
        );
        $ti3A = array(
            0 =>    array("Nama" => "Keamanan komputer dan pemulihan bencana ", "Dosen" => "herlino", "Ruang" => "LABGSG5", "JJ" => 6, "Hari" => "Senin", "smulai" => 1,
                          "Nama1" => "Kepemimpinan Dan Pengembangan Karakter dalam TIK", "Dosen1" => "Taufik", "Ruang1" => "LABGSG5", "JJ1" => 3, "Hari1" => "Senin", "smulai1" => 7),

            1 =>    array("Nama" => "Pemrograman Berorientasi Objek 1", "Dosen" => "anggi", "Ruang" => "AA302", "JJ" => 6, "Hari" => "Selasa", "smulai" => 1,
                          "Nama1" => "Basis Data 2 ", "Dosen1" => "Risna", "Ruang1" => "GSG210", "JJ1" => 6, "Hari1" => "Selasa", "smulai1" => 7),

            2 =>    array("smulai" => 0, "JJ" => 1, "smulai1" => 0, "JJ1" => 1),

            3 =>    array("Nama" => "Pemrograman visual", "Dosen" => "syamsi", "Ruang" => "AA303", "JJ" => 6, "Hari" => "Kamis", "smulai" => 1,
                          "Nama1" => "Bahasa Inggris Untuk TIK 3 ", "Dosen1" => "Dewi K", "Ruang1" => "AA302", "JJ1" => 3, "Hari1" => "Kamis", "smulai1" => 7),

            4 =>    array("Nama" => "Metode Numerik", "Dosen" => "euis", "Ruang" => "GSG207", "JJ" => 4, "Hari" => "Jumat", "smulai" => 1,
                          "Nama1" => "Perancangan dan analisa berorientasi objek", "Dosen1" => "shinta", "Ruang1" => "GSG207", "JJ1" => 4, "Hari1" => "Jumat", "smulai1" => 5)

                  
        );
        $ti3B = array(
            0 => array("Nama" => "Metode Numerik", "Dosen" => "Euis", "Ruang" => "LABGSG3", "JJ" => 4, "Hari" => "Senin", "smulai" => 3,
                        "Nama1" => "Keamanan komputer dan pemulihan bencana", "Dosen1" => "Herlino", "Ruang1" => "LABGSG3", "JJ1" => 6, "Hari1" => "Senin", "smulai1" => 7),

            1 => array("Nama" => "Pemrograman Berorientasi Objek 1", "Dosen" => "Asep", "Ruang" => "AA301", "JJ" => 6, "Hari" => "Selasa", "smulai" => 1,
                        "Nama1" => "Bahasa Inggris untuk TIK 3", "Dosen1" => "Dewi K ", "Ruang1" => "GSG207", "JJ1" => 3, "Hari1" => "Selasa", "smulai1" => 8),

            2 => array("smulai" => 0, "JJ" => 1, "smulai1" => 0, "JJ1" => 1),

            3 => array("Nama" => "Basis Data 2", "Dosen" => "Iklima", "Ruang" => "AA304", "JJ" => 6, "Hari" => "Kamis", "smulai" => 2,
                        "Nama1" => "Perancangan dan Analisa Berorientasi Objek", "Dosen1" => "Shinta", "Ruang1" => "GSG204", "JJ1" => 4, "Hari1" => "Kamis", "smulai1" => 7),

            4 => array("Nama" => "Pemrograman Visual ", "Dosen" => "Syamsi", "Ruang" => "GSG203", "JJ" => 6, "Hari" => "Jumat", "smulai" => 1,
                        "Nama1" => "Kepemimpinan dan Pengembangan Karakter", "Dosen1" => "Taufik", "Ruang1" => "GSG203", "JJ1" => 3, "Hari1" => "Jumat", "smulai1" => 7)
        );
        $ti5A = array(
            0 => array("Nama" => "Penjaminan Kualitas Perangkat Lunak (SQA)", "Dosen" => "Shinta", "Ruang" => "GSG208", "JJ" => 4, "Hari" => "Senin", "smulai" => 1,
                        "Nama1" => "Manajemen Proyek TIK ", "Dosen1" => "Refirman", "Ruang1" => "GSG206", "JJ1" => 4, "Hari1" => "Senin", "smulai1" => 5),

            1 => array("Nama" => "Probabilitas dan Statistik", "Dosen" => "Mera", "Ruang" => "AA305", "JJ" => 4, "Hari" => "Selasa", "smulai" => 1, "smulai1" => 0, "JJ1" => 1),

            2 => array("Nama" => "E-Business", "Dosen" => "Weldy", "Ruang" => "AA302", "JJ" => 4, "Hari" => "Rabu", "smulai" => 1,
                         "Nama1" => "Perencanaan Strategis Sistem Informasi ", "Dosen1" => "Hata", "Ruang1" => "AA304", "JJ1" => 3, "Hari1" => "Rabu", "smulai1" => 6),

            3 => array("Nama" => "Pemrograman web 2 ", "Dosen" => "Asep", "Ruang" => "LABGSG4", "JJ" => 6, "Hari" => "Kamis", "smulai" => 1,
                         "Nama1" => "Pembelajaran Mesin", "Dosen1" => "Dewiyanti", "Ruang1" => "GSG207", "JJ1" => 4, "Hari1" => "Kamis", "smulai1" => 7),

            4 => array("Nama" => "Sistem pendukung keputusan", "Dosen" => "Iklima", "Ruang" => "GSG204", "JJ" => 4, "Hari" => "Jumat", "smulai" => 1,
                        "Nama1" => "Bahasa Inggris Komunikasi 2 ", "Dosen1" => "Dewi K", "Ruang1" => "GSG204", "JJ1" => 3, "Hari1" => "Jumat", "smulai1" => 5)
        );

        
        // Menentukan data berdasarkan id
        if($kelas == 0){
            return $ti1A;
        }else if($kelas == 1){
            return $ti1B;
        }else if($kelas == 2){
            return $ti3A;
        }else if($kelas == 3){
            return $ti3B;
        }else if($kelas == 4){
            return $ti5A;
        }

    }

    //Menampilkan baris waktu pada tabel jadwal
    function slotWaktu(){
        $waktu = array(
                    array("waktu" => "07.30 - 08.20", "nomor" => 1),
                    array("waktu" => "08.20 - 09.10", "nomor" => 2),
                    array("waktu" => "09.10 - 10.00", "nomor" => 3),
                    array("waktu" => "10.15 - 11.05", "nomor" => 4),
                    array("waktu" => "11.05 - 11.55", "nomor" => 5),
                    array("waktu" => "12.45 - 13.35", "nomor" => 6),
                    array("waktu" => "13.35 - 14.25", "nomor" => 7),
                    array("waktu" => "14.25 - 15.15", "nomor" => 8),
                    array("waktu" => "15.45 - 16.35", "nomor" => 9),
                    array("waktu" => "16.35 - 17.25", "nomor" => 10),
                    array("waktu" => "17.25 - 18.15", "nomor" => 11),
                    array("waktu" => "18.45 - 19.35", "nomor" => 12)
        );
        return $waktu;
    }

    // Menampilkan baris tabel paling kiri dengan melakukan perulangan
    function TampilTabel($kelas){

        //Perulangan baris tabel
        for($row=0; $row<5; $row++){
            echo "<tr class='table-primary'>";
            echo "<th rowspan = '24'>";
            if($row == 0){
                echo "Senin";
            }else if($row == 1){
                echo "selasa";
            }else if($row == 2){
                echo "Rabu";
            }else if($row == 3){
                echo "Kamis";
            }else if($row == 4){
                echo "Jumat";
            }
            echo "</th>";
            echo "</tr>";

            //Memanggil fungsi untuk menampilkan jadwal
            tampilJadwal($kelas, $row);
        }
    };
    function TampilTabelDosen($kelas, $dosen){
        //Perulangan baris tabel
        for($row=0; $row<5; $row++){
            echo "<tr class='table-primary'>";
            echo "<th rowspan = '24'>";
            if($row == 0){
                echo "Senin";
            }else if($row == 1){
                echo "selasa";
            }else if($row == 2){
                echo "Rabu";
            }else if($row == 3){
                echo "Kamis";
            }else if($row == 4){
                echo "Jumat";
            }
            echo "</th>";
            echo "</tr>";

            //Memanggil fungsi untuk menampilkan jadwal dengan filter
            tampilJadwalDosen($kelas, $row, $dosen);
        }
    };
    function TampilTabelRuang($kelas, $ruang){
        for($row=0; $row<5; $row++){
            //Perulangan baris tabel
            echo "<tr class='table-primary'>";
            echo "<th rowspan = '24'>";
            if($row == 0){
                echo "Senin";
            }else if($row == 1){
                echo "selasa";
            }else if($row == 2){
                echo "Rabu";
            }else if($row == 3){
                echo "Kamis";
            }else if($row == 4){
                echo "Jumat";
            }
            echo "</th>";
            echo "</tr>";

            //Memanggil fungsi untuk menampilkan jadwal dengan filter
            tampilJadwalRuang($kelas, $row, $ruang);
        }
    };
    function TampilTabelHari($hari){
        //Perulangan baris tabel
        for($row=0; $row<5; $row++){
            echo "<tr class='table-primary'>";
            echo "<th rowspan = '24'>";
            if($row == 0){
                echo "TI 1A";
            }else if($row == 1){
                echo "TI 1B";
            }else if($row == 2){
                echo "TI 2A";
            }else if($row == 3){
                echo "TI 2B";
            }else if($row == 4){
                echo "TI 5A";
            }
            echo "</th>";
            echo "</tr>";

            tampilJadwal($row, $hari);
        }
    };

    // Menampilkan jadwal. Baik jadwal keseluruhan atau jadwal yang di filter dengan pengkondisian
    function tampilJadwalDosen($kelas, $hari, $dosen){
        // variabel yang menampung data kelas
        $jadwal = jadwal($kelas);

            //perulangan baris disetiap kelompok baris (contoh: senin)
            for($row = 0; $row<12; $row++){

                for($rows=0; $rows<$jadwal[$hari]["JJ"]; $rows++){
                    $slot[$rows] = $jadwal[$hari]["smulai"] + $rows; 
                };
                for($rows=0; $rows<$jadwal[$hari]["JJ1"]; $rows++){
                    $slot1[$rows] = $jadwal[$hari]["smulai1"] + $rows ; 
                };
                echo "<tr>";
                echo "<td>".slotWaktu()[$row]["nomor"]."</td>";
                echo "<td>".slotWaktu()[$row]["waktu"]."</td>";

                // Melakukan pengkodisian berdasarkan filter yang dicari
                if(in_array($row+1, $slot) && $jadwal[$hari]["Dosen"] == $dosen){
                    echo "<td>".$jadwal[$hari]["Nama"]."</td>";
                    echo "<td>".$jadwal[$hari]["Dosen"]."</td>";
                    echo "<td>".$jadwal[$hari]["Ruang"]."</td>";
                    echo "<td>".$jadwal[$hari]["JJ"]."</td>";
                    echo "<tr>";   
                }else if(in_array($row+1, $slot1) && $jadwal[$hari]["Dosen1"] == $dosen ){
                    echo "<td>".$jadwal[$hari]["Nama1"]."</td>";
                    echo "<td>".$jadwal[$hari]["Dosen1"]."</td>";
                    echo "<td>".$jadwal[$hari]["Ruang1"]."</td>";
                    echo "<td>".$jadwal[$hari]["JJ1"]."</td>";
                    echo "<tr>";
                }else{
                    echo "<td> </td>";
                    echo "<td> </td>";
                    echo "<td> </td>";
                    echo "<td> </td>";
                    echo "<tr>";
                }    
            } 
    }
    function tampilJadwalRuang($kelas, $hari, $ruang){
        // variabel yang menampung data kelas
        $jadwal = jadwal($kelas);

            //perulangan baris disetiap kelompok baris (contoh: senin)
            for($row = 0; $row<12; $row++){

                for($rows=0; $rows<$jadwal[$hari]["JJ"]; $rows++){
                    $slot[$rows] = $jadwal[$hari]["smulai"] + $rows; 
                };
                for($rows=0; $rows<$jadwal[$hari]["JJ1"]; $rows++){
                    $slot1[$rows] = $jadwal[$hari]["smulai1"] + $rows ; 
                };
                echo "<tr>";
                echo "<td>".slotWaktu()[$row]["nomor"]."</td>";
                echo "<td>".slotWaktu()[$row]["waktu"]."</td>";

                // Melakukan pengkodisian berdasarkan filter yang dicari
                if(in_array($row+1, $slot) && $jadwal[$hari]["Ruang"] == $ruang){
                    echo "<td>".$jadwal[$hari]["Nama"]."</td>";
                    echo "<td>".$jadwal[$hari]["Dosen"]."</td>";
                    echo "<td>".$jadwal[$hari]["Ruang"]."</td>";
                    echo "<td>".$jadwal[$hari]["JJ"]."</td>";
                    echo "<tr>";   
                }else if(in_array($row+1, $slot1) && $jadwal[$hari]["Ruang1"] == $ruang ){
                    echo "<td>".$jadwal[$hari]["Nama1"]."</td>";
                    echo "<td>".$jadwal[$hari]["Dosen1"]."</td>";
                    echo "<td>".$jadwal[$hari]["Ruang1"]."</td>";
                    echo "<td>".$jadwal[$hari]["JJ1"]."</td>";
                    echo "<tr>";
                }else{
                    echo "<td> </td>";
                    echo "<td> </td>";
                    echo "<td> </td>";
                    echo "<td> </td>";
                    echo "<tr>";
                }    
            } 
    }
    function tampilJadwal($kelas, $hari){
        // variabel yang menampung data kelas
        $jadwal = jadwal($kelas);

        //perulangan baris disetiap kelompok baris (contoh: senin)
        for($row = 0; $row<12; $row++){

            for($rows=0; $rows<$jadwal[$hari]["JJ"]; $rows++){
                $slot[$rows] = $jadwal[$hari]["smulai"] + $rows; 
            };
            for($rows=0; $rows<$jadwal[$hari]["JJ1"]; $rows++){
                $slot1[$rows] = $jadwal[$hari]["smulai1"] + $rows ; 
            };
            echo "<tr>";
            echo "<td>".slotWaktu()[$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$row]["waktu"]."</td>";
            if(in_array($row+1, $slot)){
                echo "<td>".$jadwal[$hari]["Nama"]."</td>";
                echo "<td>".$jadwal[$hari]["Dosen"]."</td>";
                echo "<td>".$jadwal[$hari]["Ruang"]."</td>";
                echo "<td>".$jadwal[$hari]["JJ"]."</td>";
                echo "<tr>";   
            }else if(in_array($row+1, $slot1)){
                echo "<td>".$jadwal[$hari]["Nama1"]."</td>";
                echo "<td>".$jadwal[$hari]["Dosen1"]."</td>";
                echo "<td>".$jadwal[$hari]["Ruang1"]."</td>";
                echo "<td>".$jadwal[$hari]["JJ1"]."</td>";
                echo "<tr>";
            }else{
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<tr>";
            }    
        }
    }

    // Fungsi untuk melakukan pagination
    function pagination($id){
        if($id == 0){
            echo "<a href='#'>&laquo;</a>";
            echo "<a class='active' href=''>1</a>";
            echo "<a href='jadwal.php?id=1'>2</a>";
            echo "<a href='jadwal.php?id=2'>3</a>";
            echo "<a href='jadwal.php?id=3'>4</a>";
            echo "<a href='jadwal.php?id=4'>5</a>";
            echo "<a href='jadwal.php?id=1'>&raquo;</a>";
        }else if($id == 1){
            echo "<a href='jadwal.php?id=0'>&laquo;</a>";
            echo "<a href='jadwal.php?id=0'>1</a>";
            echo "<a class='active' href='#'>2</a>";
            echo "<a href='jadwal.php?id=2'>3</a>";
            echo "<a href='jadwal.php?id=3'>4</a>";
            echo "<a href='jadwal.php?id=4'>5</a>";
            echo "<a href='jadwal.php?id=2'>&raquo;</a>";
        }else if($id == 2){
            echo "<a href='jadwal.php?id=1'>&laquo;</a>";
            echo "<a href='jadwal.php?id=0'>1</a>";
            echo "<a href='jadwal.php?id=1'>2</a>";
            echo "<a class='active' href='#'>3</a>";
            echo "<a href='jadwal.php?id=3'>4</a>";
            echo "<a href='jadwal.php?id=4'>5</a>";
            echo "<a href='jadwal.php?id=3'>&raquo;</a>";
        }else if($id == 3){
            echo "<a href='jadwal.php?id=2'>&laquo;</a>";
            echo "<a href='jadwal.php?id=0'>1</a>";
            echo "<a href='jadwal.php?id=1'>2</a>";
            echo "<a href='jadwal.php?id=2'>3</a>";
            echo "<a class='active' href='#'>4</a>";
            echo "<a href='jadwal.php?id=4'>5</a>";
            echo "<a href='jadwal.php?id=4'>&raquo;</a>";
        }else if($id == 4){
            echo "<a href='jadwal.php?id=3'>&laquo;</a>";
            echo "<a href='jadwal.php?id=0'>1</a>";
            echo "<a href='jadwal.php?id=1'>2</a>";
            echo "<a href='jadwal.php?id=2'>3</a>";
            echo "<a href='jadwal.php?id=3'>4</a>";
            echo "<a class='active' href='#'>5</a>";
            echo "<a href='#'>&raquo;</a>";
        }
    }

    function paginationDosen($id, $dosen){
        if($id == 0){
            echo "<a href='#'>&laquo;</a>";
            echo "<a class='active' href=''>1</a>";
            echo "<a href='dosen.php?id=1&iddosen=$dosen'>2</a>";
            echo "<a href='dosen.php?id=2&iddosen=$dosen'>3</a>";
            echo "<a href='dosen.php?id=3&iddosen=$dosen'>4</a>";
            echo "<a href='dosen.php?id=4&iddosen=$dosen'>5</a>";
            echo "<a href='dosen.php?id=1&iddosen=$dosen'>&raquo;</a>";
        }else if($id == 1){
            echo "<a href='dosen.php?id=0&iddosen=$dosen'>&laquo;</a>";
            echo "<a href='dosen.php?id=0&iddosen=$dosen'>1</a>";
            echo "<a class='active' href='#'>2</a>";
            echo "<a href='dosen.php?id=2&iddosen=$dosen'>3</a>";
            echo "<a href='dosen.php?id=3&iddosen=$dosen'>4</a>";
            echo "<a href='dosen.php?id=4&iddosen=$dosen'>5</a>";
            echo "<a href='dosen.php?id=2&iddosen=$dosen'>&raquo;</a>";
        }else if($id == 2){
            echo "<a href='dosen.php?id=1&iddosen=$dosen'>&laquo;</a>";
            echo "<a href='dosen.php?id=0&iddosen=$dosen'>1</a>";
            echo "<a href='dosen.php?id=1&iddosen=$dosen'>2</a>";
            echo "<a class='active' href='#'>3</a>";
            echo "<a href='dosen.php?id=3&iddosen=$dosen'>4</a>";
            echo "<a href='dosen.php?id=4&iddosen=$dosen'>5</a>";
            echo "<a href='dosen.php?id=3&iddosen=$dosen'>&raquo;</a>";
        }else if($id == 3){
            echo "<a href='dosen.php?id=2&iddosen=$dosen'>&laquo;</a>";
            echo "<a href='dosen.php?id=0&iddosen=$dosen'>1</a>";
            echo "<a href='dosen.php?id=1&iddosen=$dosen'>2</a>";
            echo "<a href='dosen.php?id=2&iddosen=$dosen'>3</a>";
            echo "<a class='active' href='#'>4</a>";
            echo "<a href='dosen.php?id=4&iddosen=$dosen'>5</a>";
            echo "<a href='dosen.php?id=4&iddosen=$dosen'>&raquo;</a>";
        }else if($id == 4){
            echo "<a href='dosen.php?id=3&iddosen=$dosen'>&laquo;</a>";
            echo "<a href='dosen.php?id=0&iddosen=$dosen'>1</a>";
            echo "<a href='dosen.php?id=1&iddosen=$dosen'>2</a>";
            echo "<a href='dosen.php?id=2&iddosen=$dosen'>3</a>";
            echo "<a href='dosen.php?id=3&iddosen=$dosen'>4</a>";
            echo "<a class='active' href='#'>5</a>";
            echo "<a href='#'>&raquo;</a>";
        }
    }

    function paginationRuang($id, $ruang){

        if($id == 0){
            echo "<a href='#'>&laquo;</a>";
            echo "<a class='active' href=''>1</a>";
            echo "<a href='ruang.php?id=1&idruang=$ruang'>2</a>";
            echo "<a href='ruang.php?id=2&idruang=$ruang'>3</a>";
            echo "<a href='ruang.php?id=3&idruang=$ruang'>4</a>";
            echo "<a href='ruang.php?id=4&idruang=$ruang'>5</a>";
            echo "<a href='ruang.php?id=1&idruang=$ruang'>&raquo;</a>";
        }else if($id == 1){
            echo "<a href='ruang.php?id=0&idruang=$ruang'>&laquo;</a>";
            echo "<a href='ruang.php?id=0&idruang=$ruang'>1</a>";
            echo "<a class='active' href='#'>2</a>";
            echo "<a href='ruang.php?id=2&idruang=$ruang'>3</a>";
            echo "<a href='ruang.php?id=3&idruang=$ruang'>4</a>";
            echo "<a href='ruang.php?id=4&idruang=$ruang'>5</a>";
            echo "<a href='ruang.php?id=2&idruang=$ruang'>&raquo;</a>";
        }else if($id == 2){
            echo "<a href='ruang.php?id=1&idruang=$ruang'>&laquo;</a>";
            echo "<a href='ruang.php?id=0&idruang=$ruang'>1</a>";
            echo "<a href='ruang.php?id=1&idruang=$ruang'>2</a>";
            echo "<a class='active' href='#'>3</a>";
            echo "<a href='ruang.php?id=3&idruang=$ruang'>4</a>";
            echo "<a href='ruang.php?id=4&idruang=$ruang'>5</a>";
            echo "<a href='ruang.php?id=3&idruang=$ruang'>&raquo;</a>";
        }else if($id == 3){
            echo "<a href='ruang.php?id=2&idruang=$ruang'>&laquo;</a>";
            echo "<a href='ruang.php?id=0&idruang=$ruang'>1</a>";
            echo "<a href='ruang.php?id=1&idruang=$ruang'>2</a>";
            echo "<a href='ruang.php?id=2&idruang=$ruang'>3</a>";
            echo "<a class='active' href='#'>4</a>";
            echo "<a href='ruang.php?id=4&idruang=$ruang'>5</a>";
            echo "<a href='ruang.php?id=4&idruang=$ruang'>&raquo;</a>";
        }else if($id == 4){
            echo "<a href='ruang.php?id=3&idruang=$ruang'>&laquo;</a>";
            echo "<a href='ruang.php?id=0&idruang=$ruang'>1</a>";
            echo "<a href='ruang.php?id=1&idruang=$ruang'>2</a>";
            echo "<a href='ruang.php?id=2&idruang=$ruang'>3</a>";
            echo "<a href='ruang.php?id=3&idruang=$ruang'>4</a>";
            echo "<a class='active' href='#'>5</a>";
            echo "<a href='#'>&raquo;</a>";
        }
    }

    // Fungsi untuk membuat tampilan pada judul dan header tabel
    function namaKelas($id){
        if($id == 0){
            echo "TI 1A";
        }else if($id == 1){
            echo "TI 1B";
        }else if($id == 2){
            echo "TI 3A";
        }else if($id == 3){
            echo "TI 3B";
        }else if($id == 4){
            echo "TI 5A";
        }
    }
    function namaHari($id){
        if($id == 0){
            echo "Senin";
        }else if($id == 1){
            echo "Selasa";
        }else if($id == 2){
            echo "Rabu";
        }else if($id == 3){
            echo "Kamis";
        }else if($id == 4){
            echo "Jumat";
        }
    }
    function headerPencarianKelas($id){
        if($id == 0){
            echo "Kelas TI 1A";
        }else if($id == 1){
            echo "Kelas TI 1B";
        }else if($id == 2){
            echo "Kelas TI 3A";
        }else if($id == 3){
            echo "Kelas TI 3B";
        }else if($id == 4){
            echo "Kelas TI 5A";
        }
    }


    function ulangJadwal($var, $nama, $slotMulai){
        $jadwal = jadwal($var);
        $slotMulai = $slotMulai - 1;
        for($row = 0; $row<$jadwal[$nama]["JJ"]; $row++){
            echo "<tr>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["waktu"]."</td>";
            echo "<td>".$jadwal[$nama]["Nama"]."</td>";
            echo "<td>".$jadwal[$nama]["Dosen"]."</td>";
            echo "<td>".$jadwal[$nama]["Ruang"]."</td>";
            echo "<td>".$jadwal[$nama]["JJ"]."</td>";
            echo "<tr>";
        };
    }
    function pembulatanHari($slotMulai, $jumlah){
        $slotMulai = $slotMulai - 1;
        for($row = 0; $row<$jumlah; $row++){
            echo "<tr>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["waktu"]."</td>";
            echo "<td> </td>";
            echo "<td> </td>";
            echo "<td> </td>";
            echo "<td> </td>";
            echo "<tr>";
        };
    };
?>