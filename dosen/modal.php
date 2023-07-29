<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Berdasarkan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kelas</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dosen</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Hari</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">Ruangan</button>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    <!-- Form Filter Kelas -->
                    <form action="filter/kelas.php" method="post">
                        <div class="container">
                            <div class="row" id="row">
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="0" value="0" checked>
                                        <label class="form-check-label" for="0">
                                            TI 1A
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="1" value="1">
                                        <label class="form-check-label" for="1">
                                            TI 1B
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="2" value="2" checked>
                                        <label class="form-check-label" for="2">
                                            TI 3A
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="3" value="3">
                                        <label class="form-check-label" for="3">
                                            TI 3B
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="4" value="4" checked>
                                        <label class="form-check-label" for="4">
                                            TI 5A
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right;">Cari Jadwal</button>  
                        </div>           
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    <!-- Form Filter Dosen -->
                    <form action="filter/dosen.php" method="post">
                        <div class="container">
                            <div class="row" id="row">
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="ella" value="Ella" checked>
                                        <label class="form-check-label" for="ella">
                                            Ella
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="adi" value="Adi">
                                        <label class="form-check-label" for="adi">
                                            Adi
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="ayres" value="Ayres" checked>
                                        <label class="form-check-label" for="ayres">
                                            Ayres
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="dewi k" value="Dewi K">
                                        <label class="form-check-label" for="dewi k">
                                            Dewi K
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="mera" value="Mera" checked>
                                        <label class="form-check-label" for="mera">
                                            Mera
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="agus" value="Agus">
                                        <label class="form-check-label" for="agus">
                                            Agus
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="dewiyanti" value="dewiyanti">
                                        <label class="form-check-label" for="dewiyanti">
                                            dewiyanti
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="chandra" value="chandra" checked>
                                        <label class="form-check-label" for="chandra">
                                            chandra
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="weldy" value="Weldy">
                                        <label class="form-check-label" for="weldy">
                                            Weldy
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="anggi" value="anggi" checked>
                                        <label class="form-check-label" for="anggi">
                                            anggi
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="rasyid" value="rasyid">
                                        <label class="form-check-label" for="rasyid">
                                            rasyid
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="herlino" value="herlino" checked>
                                        <label class="form-check-label" for="herlino">
                                            herlino
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="taufik" value="Taufik">
                                        <label class="form-check-label" for="taufik">
                                            Taufik
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="risna" value="Risna">
                                        <label class="form-check-label" for="risna">
                                            Risna
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="syamsi" value="syamsi" checked>
                                        <label class="form-check-label" for="syamsi">
                                            syamsi
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="euis" value="euis">
                                        <label class="form-check-label" for="euis">
                                            euis
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="shinta" value="shinta" checked>
                                        <label class="form-check-label" for="shinta">
                                            shinta
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="asep" value="Asep">
                                        <label class="form-check-label" for="asep">
                                            Asep
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="iklima" value="Iklima" checked>
                                        <label class="form-check-label" for="iklima">
                                            Iklima
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="refriman" value="Refirman">
                                        <label class="form-check-label" for="refriman">
                                            Refirman
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="hata" value="Hata">
                                        <label class="form-check-label" for="hata">
                                            Hata
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right;">Cari Jadwal</button>  
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                    <!-- Form Filter Hari -->
                    <form action="filter/hari.php" method="post">
                        <div class="container">
                            <div class="row" id="row">
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="Senin" value="0" checked>
                                        <label class="form-check-label" for="Senin">
                                            Senin
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="Selasa" value="1">
                                        <label class="form-check-label" for="Selasa">
                                            Selasa
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="Rabu" value="2" checked>
                                        <label class="form-check-label" for="Rabu">
                                            Rabu
                                        </label>
                                        </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="Kamis" value="3">
                                        <label class="form-check-label" for="Kamis">
                                            Kamis
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="Jumat" value="4" checked>
                                        <label class="form-check-label" for="Jumat">
                                            Jumat
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right;">Cari Jadwal</button>  
                        </div>
                    </form>    
                </div>
                <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact1-tab">

                    <!-- Form Filter Ruang -->
                    <form action="filter/ruang.php" method="post">
                        <div class="container">
                            <div class="row" id="row">
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa003" value="AA003" checked>
                                        <label class="form-check-label" for="aa003">
                                            AA003
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa205" value="AA205">
                                        <label class="form-check-label" for="aa205">
                                            AA205
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa301" value="AA301" checked>
                                        <label class="form-check-label" for="aa301">
                                            AA301
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa302" value="AA302">
                                        <label class="form-check-label" for="aa302">
                                            AA302
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa303" value="AA303" checked>
                                        <label class="form-check-label" for="aa303">
                                            AA303
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa304" value="AA304">
                                        <label class="form-check-label" for="aa304">
                                            AA304
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="aa305" value="AA305">
                                        <label class="form-check-label" for="aa305">
                                            AA305
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg10" value="GSG10" checked>
                                        <label class="form-check-label" for="gsg10">
                                            GSG10
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg202" value="GSG202">
                                        <label class="form-check-label" for="gsg202">
                                            GSG202
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg203" value="GSG203" checked>
                                        <label class="form-check-label" for="gsg203">
                                            GSG203
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg204" value="GSG204">
                                        <label class="form-check-label" for="gsg204">
                                            GSG204
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg206" value="GSG206" checked>
                                        <label class="form-check-label" for="gsg206">
                                            GSG206
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg207" value="GSG207">
                                        <label class="form-check-label" for="gsg207">
                                            GSG207
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg208" value="GSG208">
                                        <label class="form-check-label" for="gsg208">
                                            GSG208
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg211" value="GSG211" checked>
                                        <label class="form-check-label" for="gsg211">
                                            GSG211
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="gsg210" value="GSG210">
                                        <label class="form-check-label" for="gsg210">
                                            GSG210
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="labgsg5" value="LABGSG5" checked>
                                        <label class="form-check-label" for="labgsg5">
                                            LABGSG5
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="labgsg4" value="LABGSG4">
                                        <label class="form-check-label" for="labgsg4">
                                            LABGSG4
                                        </label>
                                    </div>
                                    <div class="form-check" id="row">
                                        <input class="form-check-input" type="radio" name="id" id="labgsg3" value="LABGSG3" checked>
                                        <label class="form-check-label" for="labgsg3">
                                            LABGSG3
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right;">Cari Jadwal</button>  
                        </div>
                    </form>    
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>