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
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">

                        </div>
                    </div>
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb breadcrumb-col-cyan">
                        <li class="active">Informasi Personal</li>
                        <li class="active">Informasi Perusahaan</li>
                        <li class="active">Informasi Alumni</li>
                        <li class="active" style="color: #013880;">Evaluasi Kerjasama Industri</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="header">
                        <h2>EVALUASI KERJASAMA DAN PENILAIAN INDUSTRI (DUDI) DAN ITS</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="<?php echo base_url() . '5thform' ?>">
                            <div class="form-group">
                                <label class="form-label">Tipe Kerjasama Antara Industri dengan ITS</label><br>
                                <small>Jawaban bisa lebih dari satu</small><br><br> 
                                <div class="demo-checkbox">
                                    <input name="4a[]" required type="checkbox" id="4a1" class="chk-col-blue" value="1" />
                                    <label for="4a1">Perekrutan Karyawan</label>
                                    <input name="4a[]" type="checkbox" id="4a2" class="chk-col-blue" value="2"/>
                                    <label for="4a2">Magang/OJT/Kerja Praktik</label>
                                    <input name="4a[]" type="checkbox" id="4a3" class="chk-col-blue" value="3"/>
                                    <label for="4a3">Beasiswa</label>
                                    <input name="4a[]" type="checkbox" id="4a4" class="chk-col-blue" value="4"/>
                                    <label for="4a4">Kuliah Tamu</label>
                                    <input name="4a[]" required type="checkbox" id="4a5" class="chk-col-blue" value="5" />
                                    <label for="4a5">Workshop/pelatihan/seminar</label>
                                    <input name="4a[]" required type="checkbox" id="4a6" class="chk-col-blue" value="6" />
                                    <label for="4a6">Penelitian</label>
                                    <input name="4a[]" required type="checkbox" id="4a7" class="chk-col-blue" value="7" />
                                    <label for="4a7">Sponsorship</label>
                                    <input name="4a[]" required type="checkbox" id="4a8" class="chk-col-blue" value="8" />
                                    <label for="4a8">Narasumber Kurikulum</label>      
                                </div>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="4a[]" class="chk-col-blue" id="4a9" value="9">
                                        <label for="4a9">Lainnya, sebutkan </label>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" name="4aket" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Menurut Anda, seberapa penting lama masa studi Lulusan ITS terhadap kompetensi di dunia industri (DUDI) ?</label>
                                        <div class="demo-radio-button">
                                            <input name="51a" required type="radio" id="51a1" class="radio-col-blue" value="1" />
                                            <label for="51a1">Tidak Penting</label>&nbsp;
                                            <input name="51a" type="radio" id="51a2" class="radio-col-blue" value="2" />
                                            <label for="51a2">Cukup</label>&nbsp;
                                            <input name="51a" type="radio" id="51a3" class="radio-col-blue" value="3" />
                                            <label for="51a3">Penting</label>&nbsp;
                                            <input name="51a" type="radio" id="51a4" class="radio-col-blue" value="4" />
                                            <label for="51a4">Sangat Penting</label>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Menurut Anda, apakah IPK alumni ITS telah sesuai dengan kompetensi yang dimilikinya ?</label>
                                        <div class="demo-radio-button">
                                            <input name="52a" required type="radio" id="52a1" class="radio-col-blue" value="1" />
                                            <label for="52a1">Tidak Penting</label>&nbsp;
                                            <input name="52a" type="radio" id="52a2" class="radio-col-blue" value="2" />
                                            <label for="52a2">Cukup</label>&nbsp;
                                            <input name="52a" type="radio" id="52a3" class="radio-col-blue" value="3" />
                                            <label for="52a3">Penting</label>&nbsp;
                                            <input name="52a" type="radio" id="52a4" class="radio-col-blue" value="4" />
                                            <label for="52a4">Sangat Penting</label>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Tingkat Kepuasan Industri terhadap kompetensi lulusan ITS (hard skill dan soft skill) ?</label>
                                        <div class="demo-radio-button">
                                            <input name="53a" required type="radio" id="53a1" class="radio-col-blue" value="1" />
                                            <label for="53a1">Tidak Penting</label>&nbsp;
                                            <input name="53a" type="radio" id="53a2" class="radio-col-blue" value="2" />
                                            <label for="53a2">Cukup</label>&nbsp;
                                            <input name="53a" type="radio" id="53a3" class="radio-col-blue" value="3" />
                                            <label for="53a3">Penting</label>&nbsp;
                                            <input name="53a" type="radio" id="53a4" class="radio-col-blue" value="4" />
                                            <label for="53a4">Sangat Penting</label>
                                        </div>
                                    </div>
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
<script>
    $(function(){
        $("[name='4a[]']").click(function(){
            var x = $(this).val();
            if (document.getElementById("4a9").checked) {
                 $('input[name="4aket"]').prop('readonly', false);
                 $('input[name="4aket"]').prop('required', true);
            } else {
                $('input[name="4aket"]').prop('readonly', true);
                $('input[name="4aket"]').prop('required', false);
                $('input[name="4aket"]').prop('value', '');
            }
        })
    })
</script>