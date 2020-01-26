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
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%">

                        </div>
                    </div>
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb breadcrumb-col-cyan">
                        <li class="active">Informasi Personal</li>
                        <li class="active">Informasi Perusahaan</li>
                        <li class="active">Informasi Alumni</li>
                        <li class="active">Evaluasi Kerjasama Industri</li>
                        <li class="active" style="color: #013880;">Evaluasi Magang Industri</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="header">
                        <h2>EVALUASI INDUSTRI TERHADAP PROGRAM MAGANG/OJT/KERJA PRAKTIK</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="<?php echo base_url() . '6thform' ?>">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Tingkat kepentingan program magang/OJT/kerja praktik untuk meningkatkan kompetensi mahasiswa ITS</label>
                                        <div class="demo-radio-button">
                                            <input name="61a" required type="radio" id="61a1" class="radio-col-blue" value="1" />
                                            <label for="61a1">1 Tidak Penting</label>&nbsp;
                                            <input name="61a" type="radio" id="61a2" class="radio-col-blue" value="2" />
                                            <label for="61a2">2 Cukup</label>&nbsp;
                                            <input name="61a" type="radio" id="61a3" class="radio-col-blue" value="3" />
                                            <label for="61a3">3 Penting</label>&nbsp;
                                            <input name="61a" type="radio" id="61a4" class="radio-col-blue" value="4" />
                                            <label for="61a4">4 Sangat Penting</label>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Berapa lama waktu minimal magang menurut perusahaan anda?</label><br>
                                        <small>(dalam bulan)</small><br>
                                        <div class="form-line">
                                            <input type="text" class="form-control numeric" name="62a" required inputmode="numeric">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).on("input", ".ipk", function() {
                                    this.value = this.value.replace(/\D/g,',');
                                });

                                $(document).on("input", ".numeric", function() {
                                    this.value = this.value.replace(/\D/g,'')
                                });
                            </script>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label class="form-label">Apakah perusahaan Anda bersedia membuka/menerima program magang/OJT/kerja praktik bagi mahasiswa ITS?</label>
                                    <div class="demo-radio-button">
                                        <input name="63a" type="radio" id="ya" class="radio-col-blue" required value="Ya" />
                                        <label for="ya">Ya</label>
                                        <input name="63a" type="radio" id="tidak" class="radio-col-blue" value="Tidak"/>
                                        <label for="tidak">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Apakah di perusahaan Anda sebelumnya telah menerima mahasiswa ITS untuk program magang/OJT/kerja praktik?</label>
                                    <div class="demo-radio-button">
                                        <input name="64a" type="radio" id="ya1" class="radio-col-blue" required value="Ya" />
                                        <label for="ya1">Ya</label>
                                        <input name="64a" type="radio" id="tidak1" class="radio-col-blue" value="Tidak"/>
                                        <label for="tidak1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function(){
                                    $("[name=63a]").click(function(){
                                        $(".option").hide();
                                        var x = $(this).val();
                                        if (x === "Tidak") {
                                            $("#"+$(this).val()).show();
                                            $('input[name=63aket]').prop('readonly', false);
                                            $('input[name=63aket]').prop('required', true);
                                        } else {
                                            $("#Tidak").hide();
                                            $('input[name=63aket]').prop('readonly', true);
                                            $('input[name=63aket]').prop('required', false);
                                            $('input[name=63aket]').prop('value', '');
                                        }
                                    })
                                })
                            </script>
                            <div class="row clearfix col-sm-6">
                                <div id="Tidak" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label">Apabila tidak bersedia , berikan alasan Anda</label>
                                        <div class="form-line">
                                            <input type="text" name="63aket" readonly class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Posisi/Bidang di perusahaan Anda yang terbuka untuk program  magang/OJT/kerja praktik</label><br>
                                <small>Jawaban bisa lebih dari satu</small><br><br> 
                                <div class="demo-checkbox">
                                    <input name="65a[]" required type="checkbox" id="65a1" class="chk-col-blue" value="1" />
                                    <label for="65a1">Perekrutan Karyawan</label>
                                    <input name="65a[]" type="checkbox" id="65a2" class="chk-col-blue" value="2"/>
                                    <label for="65a2">Magang/OJT/Kerja Praktik</label>
                                    <input name="65a[]" type="checkbox" id="65a3" class="chk-col-blue" value="3"/>
                                    <label for="65a3">Beasiswa</label>
                                    </div>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="65a[]" class="chk-col-blue" id="65a9" value="9">
                                        <label for="65a9">Lainnya, sebutkan </label>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" name="65aket" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function(){
                                    $("[name='65a[]']").click(function(){
                                        var x = $(this).val();
                                        if (document.getElementById("65a9").checked) {
                                             $('input[name="65aket"]').prop('readonly', false);
                                             $('input[name="65aket"]').prop('required', true);
                                        } else {
                                            $('input[name="65aket"]').prop('readonly', true);
                                            $('input[name="65aket"]').prop('required', false);
                                            $('input[name="65aket"]').prop('value', '');
                                        }
                                    })
                                })
                            </script>
                            <div class="form-group">
                                <label class="form-label">Jurusan/Departemen ITS yang dapat diterima untuk program magang/OJT/kerja praktik magang/OJT/kerja praktik</label><br>
                                <small>Jawaban bisa lebih dari satu</small><br><br> 
                                <div class="demo-checkbox">
                                    <input name="66a[]" required type="checkbox" id="66a1" class="chk-col-blue" value="1" />
                                    <label for="66a1">Perekrutan Karyawan</label>
                                    <input name="66a[]" type="checkbox" id="66a2" class="chk-col-blue" value="2"/>
                                    <label for="66a2">Magang/OJT/Kerja Praktik</label>
                                    <input name="66a[]" type="checkbox" id="66a3" class="chk-col-blue" value="3"/>
                                    <label for="66a3">Beasiswa</label>
                                    </div>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="66a[]" class="chk-col-blue" id="66a9" value="9">
                                        <label for="66a9">Lainnya, sebutkan </label>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" name="66aket" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function(){
                                    $("[name='66a[]']").click(function(){
                                        var x = $(this).val();
                                        if (document.getElementById("66a9").checked) {
                                             $('input[name="66aket"]').prop('readonly', false);
                                             $('input[name="66aket"]').prop('required', true);
                                        } else {
                                            $('input[name="66aket"]').prop('readonly', true);
                                            $('input[name="66aket"]').prop('required', false);
                                            $('input[name="66aket"]').prop('value', '');
                                        }
                                    })
                                })
                            </script>
                            <div class="form-group">
                                <label class="form-label">Kompetensi (teknis, pengetahuan, manajerial, softskill)  yang dibutuhkan perusahaan  dari program magang?</label><br>
                                <small>Jawaban bisa lebih dari satu</small><br><br> 
                                <div class="demo-checkbox">
                                    <input name="67a[]" required type="checkbox" id="67a1" class="chk-col-blue" value="1" />
                                    <label for="67a1">Perekrutan Karyawan</label>
                                    <input name="67a[]" type="checkbox" id="67a2" class="chk-col-blue" value="2"/>
                                    <label for="67a2">Magang/OJT/Kerja Praktik</label>
                                    <input name="67a[]" type="checkbox" id="67a3" class="chk-col-blue" value="3"/>
                                    <label for="67a3">Beasiswa</label>
                                    </div>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="67a[]" class="chk-col-blue" id="67a9" value="9">
                                        <label for="67a9">Lainnya, sebutkan </label>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" name="67aket" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function(){
                                    $("[name='67a[]']").click(function(){
                                        var x = $(this).val();
                                        if (document.getElementById("67a9").checked) {
                                             $('input[name="67aket"]').prop('readonly', false);
                                             $('input[name="67aket"]').prop('required', true);
                                        } else {
                                            $('input[name="67aket"]').prop('readonly', true);
                                            $('input[name="67aket"]').prop('required', false);
                                            $('input[name="67aket"]').prop('value', '');
                                        }
                                    })
                                })
                            </script>
                            <div class="form-group">
                                <label class="form-label">Pada bulan apa program magang/OJT/kerja praktik dapat dilaksanakan di perusahaan Anda ?</label>
                                <div class="form-line">
                                    <input type="text" name="68a" class="form-control">
                                </div>
                            </div>                     
                            <button style="border: 0px; background-color: white;" id="nope" ></button>
                            <button class="btn btn-primary waves-effect" style="float: right;" type="submit">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>