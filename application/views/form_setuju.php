<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>KUISIONER KEPUASAN PENGGUNA LULUSAN ITS</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">

                        </div>
                    </div>
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb breadcrumb-col-cyan">
                        <li class="active">Informasi Personal</li>
                        <li class="active">Informasi Perusahaan</li>
                        <li class="active">Informasi Alumni</li>
                        <li class="active">Evaluasi Kerjasama Industri</li>
                        <li class="active">Evaluasi Magang Industri</li>
                        <li class="active">Evaluasi Lulusan</li>
                        <li class="active" style="color: #013880;">Review</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="header">
                        <h2>Review Isian Kuesioner</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="<?php echo base_url() . 'submit' ?>">
                            <div class="form-group">
                                <p style="font-size: 16px; font-weight: bold; color: #3F51B5;">INFORMASI PERSONAL</p>
                                <hr>
                                <?php foreach ($personal as $p) {?>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama Lengkap</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" value="<?php echo $p['nama']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Posisi/Jabatan</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="posisi" value="<?php echo $p['posisi']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Nomor Telepon</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control numeric" name="no_telp" inputmode="numeric" value="<?php echo $p['no_telp']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Alamat Email</label>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" value="<?php echo $p['email']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <hr>
                            <p style="font-size: 16px; font-weight: bold; color: #3F51B5;">INFORMASI PERUSAHAAN</p>
                            <hr>
                            <?php foreach ($perusahaan as $u) {?>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Perusahaan</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $u['nama_perusahaan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Alamat Email</label>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email_perusahaan" value="<?php echo $u['email_perusahaan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Nomor Telepon</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control numeric" name="notelp_perusahaan" inputmode="numeric" value="<?php echo $u['notelp_perusahaan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Alamat Perusahaan</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat_perusahaan" value="<?php echo $u['alamat_perusahaan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="setuju" id="setuju" class="chk-col-blue" value="Ya" onclick="checking()" required />
                                    <label for="setuju">Dengan ini saya menyatakan bahwa semua data yang saya isi adakah BENAR dan SAH serta dapat saya pertanggungjawabkan kedepannya.</label>
                                </div>    
                            <div class="js-sweetalert" id="alertform" style="display: none;">
                                    <button style="border: 0px; background-color: white;" id="nope" ></button>
                                    <button class="btn btn-primary waves-effect" style="float: right;" data-type="success" type="submit">FINISH</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
        function checking() {
            if (document.getElementById("setuju").checked) {
                $("#alertform").show();
            } else {
                $("#alertform").hide();
            } 
        }
</script>