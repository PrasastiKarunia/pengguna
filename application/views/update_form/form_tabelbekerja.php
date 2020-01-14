<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KUISIONER KEPUASAN PENGGUNA ALUMNI ITS</h2>
            </div>
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                            </div>
                        </div>
                        <!-- BREADCRUMB -->
                        <!-- <?php foreach ($flag as $fl) {?>
                        <ol class="breadcrumb breadcrumb-col-cyan">
                            <li><a href="<?php echo base_url().'review/1stform' ?>">Data diri</a></li>

                            <li <?php if ($fl['opsi'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/2ndform' ?>">Opsi 1</a></li>

                            <li class="active">Bekerja</li>

                            <li <?php if ($fl['wirausaha'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/4thform' ?>">Wirausaha</a></li>

                            <li <?php if ($fl['opsi2'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/5thform' ?>">Opsi 2 </a></li>

                            <li <?php if ($fl['pekerjaansebelum'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/6thform' ?>">Pekerjaan Lama</a></li>

                            <li <?php if ($fl['kelulusan'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/7thform' ?>">Kelulusan</a></li>

                            <li <?php if ($fl['opsi3'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/8thform' ?>">Bidikmisi</a></li>

                            <li <?php if ($fl['bidikmisi1'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/9thform' ?>">PK I</a></li>

                            <li <?php if ($fl['bidikmisi2'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/10thform' ?>">PK II</a></li>

                            <li <?php if ($fl['bidikmisi3'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/11thform' ?>">PK III</a></li>

                            <li <?php if ($fl['kompetensi'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/12thform' ?>">Komp I</a></li>

                            <li <?php if ($fl['manfaat'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/13thform' ?>">Komp II</a></li>

                            <li <?php if ($fl['keaktifan'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/14thform' ?>">Keaktifan</a></li>

                            <li <?php if ($fl['kesehatan'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/15thform' ?>">Fasilitas</a></li>

                            <li <?php if ($fl['pendidikan'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/16thform' ?>">Pendidikan</a></li>
                        </ol>
                        <?php } ?> -->
                        <!-- END BREADCRUMB -->
                        <div class="header">
                             <h2>
                                PROFIL ALUMNI ITS YANG BEKERJA DI PERUSAHAAN ANDA 
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Departemen/Unit/Divisi Alumni ITS Ditempatkan</th>
                                        <th>Jabatan Tertinggi Alumni ITS di Departemen/Unit/Divisi Perusahaan</th>
                                        <th>Asal Jurusan Alumni ITS</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i = 1;
                                    foreach ($kerja as $k) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $k['divisi_alumni']; ?></td>
                                        <td><?php echo $k['jabatan_alumni'] ?></td>
                                        <td><?php echo $k['asal_alumni'] ?></td>
                                        <td style="text-align: center;" width="10%">
                                            <a href="<?php echo base_url().'edit/pekerjaan/'.$k['iddatapekerjaan'] ?>">
                                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                            </a> &nbsp;
                                            <a href="#"><button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a> &nbsp;
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                            </div>
                                <button style="border: 0px; background-color: white;" id="nope" ></button>
                                <a href="<?php echo base_url().'4thforms' ?>"><button style="float: right;" class="btn btn-primary waves-effect">NEXT</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>TAMBAH PROFIL ALUMNI ITS YANG BEKERJA DIPERUSAHAAN ANDA</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?php echo base_url().'addWork'?>">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Departemen/Unit/Divisi Alumni ITS Ditempatkan</label>
                                            <div class="form-line">
                                            <input type="text" class="form-control" name="divisi_alumni" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Jabatan Tertinggi Alumni ITS di Departemen/Unit/Divisi Perusahaan </label>
                                            <div class="form-line">
                                            <input type="text" class="form-control" name="jabatan_alumni" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                    <!-- <div class="form-group"> -->
                                    <label class="form-label">Asal Jurusan Alumni ITS</label>
                                    <select class="form-control selectpicker" name="asal_alumni" id="asal_alumni" data-live-search="true" required>
                                        <option data-tokens="" value="">-- Please select --</option>
                                        <?php foreach ($jurusan as $j) { ?>
                                            <option data-tokens="<?php echo $j['namajurusan']; ?>" value="<?php echo $j['namajurusan']; ?>"><?php echo $j['namajurusan']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- </div> -->
                                </div>
                                </div>
                                <button style="border: 0px; background-color: white;" id="nope" ></button>
                            <button class="btn btn-primary waves-effect" style="float: right;" type="submit">TAMBAH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>