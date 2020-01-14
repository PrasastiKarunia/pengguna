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
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                            </div>
                        </div>
                        <!-- BREADCRUMB -->
                        <?php foreach ($flag as $fl) {?>
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
                        <?php } ?>
                        <!-- END BREADCRUMB -->
                        <div class="header">
                            <h2>UPDATE DATA BEKERJA</h2>
                        </div>
                        <div class="body">
                                <?php foreach ($kerja as $k) {?>
                            <form id="form_validation" method="POST" action="<?php echo base_url().'update/pekerjaan/'.$k['iddatapekerjaan']?>">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Nama Perusahaan</label>
                                            <div class="form-line">
                                            <input type="text" class="form-control" required name="16b6" value="<?php echo $k['16b6']; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                        <label class="form-label">Kategori Instansi / Perusahaan</label>
                                        <div class="demo-radio-button">
                                            <input name="16b7" type="radio" id="cat1" required class="radio-col-blue" value="Lokal" 
                                            <?php if ($k['16b7'] == "Lokal") {
                                                    echo 'checked';
                                                } ?> />
                                            <label for="cat1">Lokal</label>
                                            <input name="16b7" type="radio" id="cat2" class="radio-col-blue" value="Nasional"
                                            <?php if ($k['16b7'] == "Nasional") {
                                                    echo 'checked';
                                                } ?> />
                                            <label for="cat2">Nasional</label>
                                            <input name="16b7" type="radio" id="cat3" class="radio-col-blue" value="Multinasional" 
                                            <?php if ($k['16b7'] == "Multinasional") {
                                                    echo 'checked';
                                                } ?> />
                                            <label for="cat3">Multinasional</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Bidang Usaha</label>
                                        <select class="form-control" name="16b8BU" id="BUwirausaha" data-live-search="true" required>
                                            <option selected="true" value="<?php echo $k['16b8BU']; ?>"><?php echo $k['namabidang']; ?></option>
                                            <option data-tokens="" value="">-- Please select --</option>
                                            <?php foreach ($bidang as $bu) { ?>
                                            <option data-tokens="<?php echo $bu['namabidang']; ?>" value="<?php echo $bu['idbidang']; ?>"><?php echo $bu['namabidang']; ?></option>
                                    <?php } ?>
                                        </select>
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $("#BUwirausaha").change(function(){ 
                                                $.ajax({
                                                    type: "POST", 
                                                    url: "<?php echo base_url().'form_controller/list_SBU' ?>", 
                                                    data: {bu : $('#BUwirausaha').val()},
                                                    dataType: "json",
                                                    beforeSend: function(e) {
                                                        if(e && e.overrideMimeType) {
                                                                e.overrideMimeType("application/json;charset=UTF-8");
                                                        }
                                                    },
                                                    success: function(response){ 
                                                        $("#SBUwirausaha").html(response.listSBU);
                                                    },
                                                    error: function (xhr, ajaxOptions, thrownError) {
                                                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                                                    }
                                                });
                                            });
                                        });
                                    </script> 
                                    <div class="col-sm-6">
                                        <label class="form-label">Subbidang Usaha</label>
                                        <select class="form-control" name="16b8SBU" id="SBUwirausaha" data-live-search="true" required>
                                            <option selected="true" value="<?php echo $k['16b8SBU']; ?>"><?php echo $k['nama_subbidang']; ?></option>
                                            <option data-tokens="" value="">-- Please select --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label class="form-label">Jenis Pekerjaan</label>
                                            <select class="form-control selectpicker" name="16b10a" id="jenis" data-live-search="true" required>
                                            <option value="<?php echo $k['16b10a']; ?>"><?php echo $k['namajenis']; ?></option>
                                            <option data-tokens="" value="">-- Please select --</option>
                                            <?php foreach ($jenis as $j) { ?>
                                            <option data-tokens="<?php echo $j['namajenis']; ?>" value="<?php echo $j['idjenispekerjaan']; ?>"><?php echo $j['namajenis']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6" id="ketjenis" style="display: none;">
                                        <div class="form-group form-float">
                                            <label class="form-label">Jika lainnya, sebutkan</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="16b10aket" value="<?php echo $k['16b10aket'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                    $(function(){
                                        if ($('[name=16b10a]').val() ===  "16") {
                                            $('#ketjenis').show();
                                        }
                                        $("[name=16b10a]").change(function(){
                                            var x = $(this).val();
                                            if (x === "16") {
                                                $('#ketjenis').show();
                                                $('[name=16b10aket]').prop('required', true);
                                            } else {
                                                $('#ketjenis').hide();
                                                $('[name=16b10aket]').prop('required', false);
                                                $('[name=16b10aket]').prop('value', '');
                                            }
                                        })
                                    })
                                </script>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Posisi / Jabatan</label>
                                        <br><small>(bagi dosen, guru, dan sejenisnya silahkan diisi dengan Staf)</small>
                                        <div class="form-line">
                                        <input type="text" class="form-control" name="16b9" value="<?php echo $k['16b9']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Apa jenis perusahaan / instansi tempat Anda bekerja sekarang?</label>
                                    <select required class="form-control selectpicker" name="35" id="soal35" data-live-search="false">
                                        <option selected="true" value="<?php echo $k['35'] ?>"><?php echo $k['35'] ?></option>
                                        <option data-tokens="" value="">-- Please select --</option>
                                        <option data-tokens="" value="Instansi pemerintah">Instansi pemerintah (termasuk BUMN)</option>
                                        <option data-tokens="" value="Organisasi non-profit/lembaga swadaya masyarakat">Organisasi non-profit/lembaga swadaya masyarakat</option>
                                        <option data-tokens="" value="Perusahaan swasta">Perusahaan swasta</option>
                                        <option data-tokens="" value="Wiraswasta/perusahaan sendiri">Wiraswasta/perusahaan sendiri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jelaskan tugas-tugas utama dalam pekerjaan Anda sekarang</label>
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" name="16b10b" placeholder="Rincian tugas" required><?php echo $k['16b10b']; ?></textarea>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).on("input", ".numeric", function() {
                                    this.value = this.value.replace(/\D/g,'');
                                });
                            </script>
                            <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label class="form-label">Sejak tahun</label>
                                            <div class="form-line">
                                            <input type="text" class="form-control numeric" name="16b11" maxlength="4" inputmode="numeric" value="<?php echo $k['16b11']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Penghasilan per bulan saat ini (diluar bonus)</label>
					                    <br><small>Contoh pengisian: 1000000 </small>
                                        <div class="form-line">
                                            <input type="text" id="rupiah" class="form-control tidakdiisi" required name="16b12" inputmode="numeric" value="<?php echo $k['16b12']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Rata-rata penghasilan dari lembur / bonus perbulan </label>
                                        <br><small>Contoh pengisian: 1000000 </small>
                                        <div class="form-line">
                                            <input type="text" id="rupiah2" class="form-control tidakdiisi" required name="16b13a" inputmode="numeric" value="<?php echo $k['16b13a']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Berapa rata-rata penghasilan pekerjaan lainnya</label>
                                        <br><small>Contoh pengisian: 1000000 </small>
                                        <div class="form-line">
                                            <input type="text" id="rupiah3" class="form-control tidakdiisi" required name="16b13b" inputmode="numeric" value="<?php echo $k['16b13b']; ?>">
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-sm-6">
                                        <label class="form-label">Apakah pekerjaan Anda saat ini sesuai dengan bidang kuliah Anda?</label>
                                        <div class="demo-radio-button">
                                            <input name="16b14" type="radio" id="Ya" class="radio-col-blue" value="Ya" required 
                                            <?php if ($k['16b14'] == "Ya") {
                                                        echo "checked";
                                                    } ?> />
                                            <label for="Ya">Ya</label>
                                            <input name="16b14" type="radio" id="Tidak" class="radio-col-blue" value="Tidak"
                                            <?php if ($k['16b14'] == "Tidak") {
                                                        echo "checked";
                                                    } ?> />
                                            <label for="Tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                <button style="border: 0px; background-color: white;" id="nope" ></button>
                            <button class="btn btn-primary waves-effect" style="float: right;" type="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        var rupiah2 = document.getElementById('rupiah2');
        var rupiah3 = document.getElementById('rupiah3');
        rupiah.addEventListener('keyup', function(e)
        {
            rupiah.value = formatRupiah(this.value);
        });
        rupiah2.addEventListener('keyup', function(e)
        {
            rupiah2.value = formatRupiah(this.value);
        });
        rupiah3.addEventListener('keyup', function(e)
        {
            rupiah3.value = formatRupiah(this.value);
        });

        function formatRupiah(angka, prefix)
        {
            var number_string   = angka.replace(/[^,-\d]/g, '').toString(),
                split           = number_string.split(','),
                sisa            = split[0].length % 3,
                rupiah          = split[0].substr(0, sisa),
                ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
                
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>