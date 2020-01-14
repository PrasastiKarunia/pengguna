<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KUISIONER ALUMNI ITS</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 3%">
                            </div>
                        </div>
                        <!-- BREADCRUMB -->
                        <?php foreach ($flag as $fl) {?>
                        <ol class="breadcrumb breadcrumb-col-cyan">
                            <li class="active">Data diri</li>

                            <li <?php if ($fl['opsi'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/2ndform' ?>">Opsi 1</a></li>

                            <li <?php if ($fl['bekerja'] == 0) {
                                echo 'style="display: none;"';
                            }  ?> ><a href="<?php echo base_url().'review/3rdform' ?>">Bekerja</a></li>

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
                        <?php } ?>
                        <!-- END BREADCRUMB -->
                        <div class="header">
                            <h2>DATA DIRI</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" class="wizard" method="POST" action="<?php echo base_url().'2ndform'?>">
                                <?php foreach ($isi as $i):?>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Nama Lengkap</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="<?php echo $i['nama'] ?>" readonly name="1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">NRP</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="2" maxlength="14" id="nrp" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?php echo $i['nrp'] ?>" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <div class="demo-radio-button">
                                                <input name="3" type="radio" id="l" class="radio-col-blue" value="L"
                                                <?php if ($i['jeniskelamin'] == 'L') {
                                                    echo 'checked';
                                                } ?> />
                                                <label for="l">Laki-laki</label>
                                                <input name="3" type="radio" id="p" class="radio-col-blue" value="P" 
                                                <?php if ($i['jeniskelamin'] == 'P') {
                                                    echo 'checked';
                                                } ?> />
                                                <label for="p">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">IPK</label><br><small>Contoh pengisian: 3,95</small>
                                            <div class="form-line">
                                                <input type="text" inputmode="numeric" class="form-control ipk" maxlength="4" name="7" value="<?php echo $i['ipk']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">No. HP</label><br><small>Contoh pengisian: 0812xxxxxxxx</small>
                                            <div class="form-line">
                                                <input type="text" inputmode="numeric" class="form-control numeric" name="15" maxlength="13" value="<?php echo $i['nohp']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(document).on("input", ".ipk", function() {
                                            this.value = this.value.replace(/\D/g,',');
                                        });

                                        $(document).on("input", ".numeric", function() {
                                            this.value = this.value.replace(/\D/g,'');
                                        });
                                    </script>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Email</label>
                                            <div class="form-line">
                                                <input type="email" value="<?php echo $i['email']; ?>" class="form-control" name="14" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Tahun Masuk</label>
                                            <div class="form-line">
                                                <input type="text" inputmode="numeric" class="form-control numeric" name="4" maxlength="4" id="angkatan"  value="<?php echo $i['tahunmasuk']; ?>" placeholder="Contoh: 2001"required>
                                            </div>
                                        </div>
                                    </div>
				</div>
				<div class="row clearfix">
                                        <div class="col-sm-6">
                                            <label class="form-label">Bulan dan Tahun Lulus</label><br>
						<small>Bulan Lulus</small>
                                            <select class="form-control selectpicker" name="8a" id="bulan" data-live-search="true" required>
                                                    <option value="<?php echo $i['bulanlulus']; ?>"><?php echo $i['bulanlulus']; ?></option>
                                                    <option data-tokens="" value="">-- Please select --</option>
                                                    <option data-tokens="Januari" value="Januari">Januari</option>
                                                    <option data-tokens="Februari" value="Februari">Februari</option>
                                                    <option data-tokens="Maret" value="Maret">Maret</option>
                                                    <option data-tokens="April" value="April">April</option>
                                                    <option data-tokens="Mei" value="Mei">Mei</option>
                                                    <option data-tokens="Juni" value="Juni">Juni</option>
                                                    <option data-tokens="Juli" value="Juli">Juli</option>
                                                    <option data-tokens="Agustus" value="Agustus">Agustus</option>
                                                    <option data-tokens="September" value="September">September</option>
                                                    <option data-tokens="Oktober" value="Oktober">Oktober</option>
                                                    <option data-tokens="November" value="November">November</option>
                                                    <option data-tokens="Desember" value="Desember">Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" style="color: white;">.</label><br>
						<small>Tahun Lulus</small>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control numeric" inputmode="numeric" name="8b" id="tahun" placeholder="Contoh: 2001" maxlength="4" value="<?php echo $i['tahunlulus']; ?>" required> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <!-- <div class="form-group"> -->
                                            <div class="form-group form-float">
                                                <label class="form-label">Fakultas</label>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="5" value="<?php echo $i['fakultas']; ?>" required>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <div class="form-group"> -->
                                            <label class="form-label">Prodi</label>
                                            <select class="form-control selectpicker" name="6" id="jurusan" data-live-search="true" required>
                                                    <option value="<?php echo $i['idjurusan']; ?>"><?php echo $i['namajurusan']; ?></option>    
                                                    <option data-tokens="" value="">-- Please select --</option>
                                                    <?php foreach ($jurusan as $j) { ?>
                                                        <option data-tokens="<?php echo $j['namajurusan']; ?>" value="<?php echo $j['idjurusan']; ?>"><?php echo $j['namajurusan']; ?></option>
                                                    <?php } ?>
                                            </select>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat Domisili</label>
                                    <div class="form-line">
                                        <textarea rows="4" name="9" class="form-control no-resize" placeholder="Alamat dan Domisili saat ini..." required><?php echo $i['alamat_domisili']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <!-- <div class="form-group"> -->
                                            <label class="form-label">Provinsi</label>
                                            <select class="form-control" name="13" id="provinsi" data-live-search="true" >
                                                    <option selected="true" value="<?php echo $i['id_prov']; ?>"><?php echo $i['name_prov']; ?></option>
                                                    <option data-tokens="" value="">-- Please select --</option>
                                                    <?php foreach ($provinsi as $p) { ?>
                                                    <option data-tokens="<?php echo $p['name_prov']; ?>" value="<?php echo $p['id_prov']; ?>"><?php echo $p['name_prov']; ?></option>
                                                    <?php } ?>
                                            </select>
                                        <!-- </div> -->
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $("#provinsi").change(function(){ 
                                                $.ajax({
                                                    type: "POST", 
                                                    url: "<?php echo base_url() . 'form_controller/list_kota' ?>", 
                                                    data: {id_provinsi : $('#provinsi').val()},
                                                    dataType: "json",
                                                    beforeSend: function(e) {
                                                        if(e && e.overrideMimeType) {
                                                                e.overrideMimeType("application/json;charset=UTF-8");
                                                        }
                                                    },
                                                    success: function(response){ 
                                                        $("#kota").html(response.listkota);
                                                    },
                                                    error: function (xhr, ajaxOptions, thrownError) {
                                                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                    <div class="col-sm-3">
                                        <!-- <div class="form-group"> -->
                                            <label class="form-label">Kota</label>
                                            <select class="form-control" name="12" id="kota" data-live-search="true">
                                                <option selected="true" value="<?php echo $i['id_kota']; ?>"><?php echo $i['name_kota']; ?></option>
                                                <option data-tokens="" value="">-- Please select --</option>
                                            </select>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Kecamatan</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="<?php echo $i['kecamatan']; ?>" name="11" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Desa/Kelurahan</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="<?php echo $i['kelurahan']; ?>" class="form-control" name="10" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            <?php endforeach; ?>
                            <button style="border: 0px; background-color: white;" id="nope" ></button>
                            <button class="btn btn-primary waves-effect" style="float: right;" type="submit">NEXT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    