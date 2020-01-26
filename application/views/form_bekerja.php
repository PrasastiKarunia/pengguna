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
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                            </div>
                        </div>
                        <!-- BREADCRUMB -->
                        <ol class="breadcrumb breadcrumb-col-cyan">
                            <li class="active">Informasi Personal</li>
                            <li class="active">Informasi Perusahaan</li>
                            <li class="active" style="color: #013880;" >Informasi Alumni</li>
                        </ol>
                        <!-- END BREADCRUMB -->
                        <div class="header">
                            <h2>
                                PROFIL ALUMNI ITS YANG BEKERJA DI PERUSAHAAN ANDA 
                            </h2>
                        </div>
                        <div class="body table-responsive">
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
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align: center;" width="20%">
                                           <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float" disabled>
                                                <i class="material-icons">edit</i>
                                            &nbsp;
                                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float" disabled>
                                                <i class="material-icons">delete</i>
                                            &nbsp;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                            <h2>PROFIL ALUMNI ITS YANG BEKERJA DIPERUSAHAAN ANDA</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?php echo base_url().'3rdforms'?>">
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
                                            <option data-tokens="<?php echo $j['namajurusan']; ?>" value="<?php echo $j['idjurusan']; ?>"><?php echo $j['namajurusan']; ?></option>
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